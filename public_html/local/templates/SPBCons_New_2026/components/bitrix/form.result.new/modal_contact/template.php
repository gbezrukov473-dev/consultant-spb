<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$modalTitle    = $arParams['MODAL_TITLE'] ?? '';
$modalSubtitle = $arParams['MODAL_SUBTITLE'] ?? '';
$showMessage   = ($arParams['SHOW_MESSAGE'] ?? 'N') === 'Y';
$submitText    = $arParams['SUBMIT_TEXT'] ?: 'Отправить';
$submitClass   = $arParams['SUBMIT_CLASS'] ?: 'modal__submit--yellow';
$leadComment   = $arParams['LEAD_COMMENT'] ?? '';
$pageTitle     = $APPLICATION->GetTitle() ?: '';
$request       = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$pageUri       = $request->getRequestUri() ?: '/';

if ($leadComment && $pageTitle) {
    $leadComment = $leadComment . ' | Страница "' . $pageTitle . '"';
} elseif ($leadComment) {
    $leadComment = $leadComment . ' | ' . $pageUri;
} elseif ($pageTitle) {
    $leadComment = 'Запрос со страницы "' . $pageTitle . '"';
} else {
    $leadComment = 'Запрос со страницы ' . $pageUri;
}

$visibleFields = ['NAME', 'PHONE', 'EMAIL', 'MESSAGE', 'agree'];
$form_name     = $arResult['arForm']['SID'] ?? ('form' . ($arParams['WEB_FORM_ID'] ?? ''));
?>

<?php if ($arResult["isFormErrors"] == "Y"): ?>
  <div class="form-error-box"><?= $arResult["FORM_ERRORS_TEXT"] ?></div>
<?php endif; ?>

<?= $arResult["FORM_NOTE"] ?? '' ?>

<?php if ($arResult["isFormNote"] == "Y"): ?>
  <div class="modal__success">
    <h2 class="modal__title">Спасибо!</h2>
    <p class="modal__subtitle">Ваша заявка отправлена.<br>Наш специалист свяжется с&nbsp;вами в&nbsp;ближайшее время.</p>
  </div>
<?php else: ?>

  <?php if ($modalTitle): ?>
    <h2 class="modal__title"><?= $modalTitle ?></h2>
  <?php endif; ?>
  <?php if ($modalSubtitle): ?>
    <p class="modal__subtitle"><?= $modalSubtitle ?></p>
  <?php endif; ?>

  <div class="bx-form-card">
    <?= $arResult["FORM_HEADER"] ?>

    <?php foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):

        if ($FIELD_SID === 'lead_comment'):
            $fid = $arQuestion['STRUCTURE'][0]['ID'];
            echo '<input type="hidden" name="form_text_' . $fid . '" value="' . htmlspecialchars($leadComment) . '" />';
            continue;
        endif;

        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'):
            echo $arQuestion["HTML_CODE"];
            continue;
        endif;

        if (!in_array($FIELD_SID, $visibleFields)):
            echo '<span style="display:none">' . $arQuestion["HTML_CODE"] . '</span>';
            continue;
        endif;

        if ($FIELD_SID === 'MESSAGE' && !$showMessage):
            echo '<span style="display:none">' . $arQuestion["HTML_CODE"] . '</span>';
            continue;
        endif;

        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'checkbox'): ?>
            <div class="modal__checkbox modal__checkbox--consent">
              <?= $arQuestion["HTML_CODE"] ?>
              <span class="modal__checkbox-text"><?= $arQuestion["CAPTION"] ?></span>
            </div>
        <?php continue;
        endif;

        $ftype = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
        $fid   = $arQuestion['STRUCTURE'][0]['ID'];
        $fval  = htmlspecialchars($arQuestion['STRUCTURE'][0]['VALUE'] ?? '');

        if ($ftype === 'textarea'): ?>
            <textarea name="form_textarea_<?= $fid ?>"
                      class="modal__input modal__textarea"
                      placeholder="Ваш вопрос"><?= $fval ?></textarea>
        <?php else:
            $cls   = 'modal__input';
            $itype = 'text';
            $ph    = $arQuestion['CAPTION'];

            if ($FIELD_SID === 'NAME')  { $ph = 'Ваше Имя'; }
            if ($FIELD_SID === 'PHONE') { $ph = '+7 (9__) ___-__-__'; $cls .= ' mask-phone'; $itype = 'tel'; }
            if ($FIELD_SID === 'EMAIL') { $ph = 'Электронная почта'; $itype = 'email'; }
        ?>
            <input type="<?= $itype ?>"
                   name="form_<?= $ftype ?>_<?= $fid ?>"
                   class="<?= $cls ?>"
                   placeholder="<?= $ph ?>"
                   value="<?= $fval ?>" />
        <?php endif;

    endforeach; ?>

    <?php if ($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y"): ?>
      <div id="captcha-container-<?= $form_name ?>" class="chdk-yandexcaptcha"></div>
      <input name="USE_CAPTCHA" value="Y" type="hidden" id="USE_CAPTCHA">
      <input type="hidden" name="smart-captcha-token" id="smart-captcha-token">
      <div class="form-description">
        <?php @include \Bitrix\Main\Application::getDocumentRoot() . '/include/smartcaptcha_policy.php'; ?>
      </div>
    <?php endif; ?>

    <input type="submit"
           name="web_form_submit"
           class="modal__submit <?= $submitClass ?>"
           value="<?= htmlspecialchars($submitText) ?>" />

    <?= $arResult["FORM_FOOTER"] ?>
  </div>

  <?php if ($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y"): ?>
    <?php @include \Bitrix\Main\Application::getDocumentRoot() . '/include/smartcaptcha.php'; ?>
  <?php endif; ?>

<?php endif; ?>
