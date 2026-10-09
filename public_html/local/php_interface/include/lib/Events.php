<? namespace Chdk;
use \Bitrix\Main\Web\HttpClient;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Result;
use \Bitrix\Main\Error;
use \Bitrix\Main\SystemException;
use Bitrix\Main\Web\Json;

Loc::loadMessages(__FILE__);

/**
 * Отвечает за проверку Yandex SmartCAPTCHA
 */
class YandexCaptchaChecker {
  /**
   * Проверяет токен Yandex
   * @param string $token Токен капчи из формы
   * @return Result
   * @throws SystemException
   */
  public static function verifyCaptcha(string $token): Result {
    $result = new Result();
    try {
      if(!defined('SMARTCAPTCHA_SERVER_KEY')) {
        throw new SystemException(Loc::getMessage('YANDEX_CAPTCHA_NO_SERVER_KEY'));
      }
      
      $params = [
        'secret' => SMARTCAPTCHA_SERVER_KEY,
        'token' => $token,
        'ip' => $_SERVER['REMOTE_ADDR'] ?? '',
      ];
      
      $httpClient = new HttpClient([
        'socketTimeout' => 5,
        'streamTimeout' => 10,
      ]);
      $url = 'https://smartcaptcha.yandexcloud.net/validate?' . http_build_query($params);
      $response = $httpClient->get($url);
      
      if($httpClient->getStatus() !== 200 || $response === false) {
        throw new SystemException(Loc::getMessage('YANDEX_CAPTCHA_REQUEST_FAILED'));
      }
      
      $responseData = json_decode($response, true);
      if(json_last_error() !== JSON_ERROR_NONE  || !isset($responseData['status'])) {
        throw new SystemException(Loc::getMessage('YANDEX_CAPTCHA_INVALID_RESPONSE'));
      }
      
      if($responseData['status'] === 'ok') {
        return $result->setData(['verified' => true]);
      }
      
      throw new SystemException(Loc::getMessage('YANDEX_CAPTCHA_VERIFICATION_FAILED'));
      
    } catch(SystemException $e) {
      $result->addError(new Error($e->getMessage()));
    } catch(\Throwable $e) {
      $result->addError(new Error(Loc::getMessage('YANDEX_CAPTCHA_ERROR', ['#ERROR#' => $e->getMessage()])));
    }
    return $result;
  }
  
  /**
   * Проверяет CAPTCHA перед добавлением результата формы
   * @param int $formId ID формы
   * @param array $arFields Поля формы
   * @param array $arValues Значения формы
   * @return bool
   * @throws SystemException
   */
  public static function checkFormCaptcha($formId, &$arFields, &$arValues): bool {
    
    $useCaptcha = $arValues['USE_CAPTCHA'] ?? false;
    if(!$useCaptcha || trim($useCaptcha) !== 'Y') {
      return true; // Пропускаем
    }
    
    $captchaToken = $arValues['smart-token'] ?? '';
    if(empty(trim($captchaToken))) {
      global $APPLICATION;
      $APPLICATION->ThrowException(Loc::getMessage('YANDEX_CAPTCHA_NO_TOKEN'));
      // throw new SystemException(Loc::getMessage('YANDEX_CAPTCHA_NO_TOKEN'));
      return false;
    }
    
    $captchaResult = self::verifyCaptcha($captchaToken);
    if(!$captchaResult->isSuccess()) {
      $errors = $captchaResult->getErrorMessages();
      global $APPLICATION;
      $APPLICATION->ThrowException(Loc::getMessage('YANDEX_CAPTCHA_NO_TOKEN'));
      // throw new SystemException(implode('; ', $errors));
      return false;
    }
    return true;
  }
}

class FormActions {
  public static function sendToPortal($WEB_FORM_ID, $RESULT_ID) {
    if($WEB_FORM_ID == 68 && defined('WEBHOOKURL') && defined('B24_ADMIN') && defined('TOKEN')) {
      if(!\Bitrix\Main\Loader::includeModule('form')) {
        return;
      }
      
      $webhookUrl = WEBHOOKURL . '/' . B24_ADMIN . '/' . TOKEN . '/' . 'crm.item.add';
      
      $arAnswers = [];
      $fieldTitles = [];
      
      $dbResultAnswers = \CFormResult::GetDataByID($RESULT_ID, [], $arResult, $arAnswer2);
      if(is_array($dbResultAnswers)) {
        foreach($dbResultAnswers as $fieldSid => $fieldAnswers) {
          $answer = reset($fieldAnswers);
          $val = '';
          if(!empty($answer['USER_TEXT'])) {
            $val = $answer['USER_TEXT'];
          } elseif(!empty($answer['ANSWER_TEXT'])) {
            $val = $answer['ANSWER_TEXT'];
          }
          $arAnswers[$fieldSid] = $val;
          $fieldTitles[$fieldSid] = $answer['TITLE'] ?? $fieldSid;
        }
      }
      
      $leadTitle = !empty($arAnswers['lead_comment']) ? $arAnswers['lead_comment'] : 'Лид с веб-формы №' . $WEB_FORM_ID;
      $name = $arAnswers['NAME'] ?? '';
      $phone = $arAnswers['PHONE'] ?? '';
      $email = $arAnswers['EMAIL'] ?? '';
      $sourceId = 'spbcons.ru';
      // $assignedById = !empty($arAnswers['ASSIGNED_BY_ID']) ? (int)$arAnswers['ASSIGNED_BY_ID'] : 1;
      $inn = $arAnswers['inn'] ?? '';
      
      $commentsText = "ПОЛЯ ФОРМЫ:\n";
      $commentsText .= "=============================\n";
      $commentsText .= "Контекст: {$leadTitle}\n";
      $commentsText .= "Имя контакта: {$name}\n";
      $commentsText .= "Телефон: {$phone}\n";
      $commentsText .= "E-mail: {$email}\n";
      $commentsText .= "Источник лида: {$sourceId}\n";
      // $commentsText .= "ID Ответственного: {$assignedById}\n";
      $commentsText .= "ИНН: {$inn}\n";
      $commentsText .= "=============================\n";
      
      $excludedSids = ['NAME', 'PHONE', 'EMAIL', 'lead_comment', 'inn', /*'ASSIGNED_BY_ID', */'SOURCE_ID'];
      foreach($arAnswers as $sid => $value) {
        if(!in_array($sid, $excludedSids) && !empty(trim($value))) {
          $title = $fieldTitles[$sid] ?? $sid;
          $commentsText .= "{$title}: {$value}\n";
        }
      }
      

      $commentsText .= "=============================\n";
      $commentsText .= "ID результата на сайте: " . $RESULT_ID;
      
      $leadData = [
        'entityTypeId' => 1, //  идентификатор сущности "Лид"
        'fields' => [
          'title' => $leadTitle,
          'name' => $name,
          'fm' => [
            [
              'typeId' => 'PHONE',
              'valueType' => 'WORK',
              'value' => $phone
            ],
            [
              'typeId' => 'EMAIL',
              'valueType' => 'WORK',
              'value' => $email
            ]
          ],
          'comments' => $commentsText,
          'sourceId' => 'EMAIL', //$sourceId источник spbcons.ru
          'assignedById' => 540, //$assignedById,
          'ufCrmInnL' => $inn, // ИНН уходит в поле ufCrmInnL
          // Остальные кастомные поля
          /* 'ufCrmProfes' => $arAnswers['PROFES'] ?? '',
           'ufCrmBlock'  => $arAnswers['block'] ?? '',
           'ufCrmPos'    => $arAnswers['pos'] ?? '',
           'ufCrmDevice' => $arAnswers['device'] ?? '',
           'ufCrmType'   => $arAnswers['type'] ?? '',
           'ufCrmAdded'  => $arAnswers['added'] ?? '',*/
          //  UTM-метки в системные поля CRM
          'utmSource' => $arAnswers['utm_source'] ?? '',
          'utmMedium' => $arAnswers['utm_medium'] ?? '',
          'utmCampaign' => $arAnswers['utm_campaign'] ?? '',
          'utmContent' => $arAnswers['utm_content'] ?? '',
          'utmTerm' => $arAnswers['utm_term'] ?? '',
          'utmReferrer' => $arAnswers['utm_referrer'] ?? '',
        ]
      ];
      
      $httpClient = new HttpClient([
        'socketTimeout' => 5,
        'streamTimeout' => 5,
      ]);
      $httpClient->setHeader('Content-Type', 'application/json', true);
      $httpClient->post($webhookUrl, Json::encode($leadData));
    }
  }
}