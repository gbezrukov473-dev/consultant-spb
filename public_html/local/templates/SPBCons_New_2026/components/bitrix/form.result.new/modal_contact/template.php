<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  use Bitrix\Main\Application;
  use Bitrix\Main\Text\HtmlFilter;
  
  $request = Application::getInstance()->getContext()->getRequest();
  $session = Application::getInstance()->getSession();
  
  $utmFields = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'utm_referrer',  'type', 'added', 'block', 'pos', 'device'];
  
  $modalTitle    = $arParams['MODAL_TITLE'] ?? '';
  $modalSubtitle = $arParams['MODAL_SUBTITLE'] ?? '';
  $showMessage   = ($arParams['SHOW_MESSAGE'] ?? 'N') === 'Y';
  $submitText    = $arParams['SUBMIT_TEXT'] ?: 'Отправить';
  $submitClass   = $arParams['SUBMIT_CLASS'] ?: 'modal__submit--yellow';
  $leadComment   = $arParams['LEAD_COMMENT'] ?? '';
  $pageTitle     = $APPLICATION->GetTitle() ?: '';
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
  // $form_name     = $arResult['arForm']['SID'] ?? ('form' . ($arParams['WEB_FORM_ID'] ?? ''));
  $rand = rand(0, 15);
  $form_name = $arResult['arForm']['SID'] .'_' . $rand;
  $form_header = str_replace('<form ', '<form id="' . $form_name . '" class="modal-form" ', $arResult["FORM_HEADER"]);
  $form_header = str_replace('name="' . $arResult['arForm']['SID'], 'name="' . $form_name, $form_header);
?>

<? if ($arResult["isFormNote"] != "Y"): ?>
  <? if ($modalTitle): ?>
        <h2 class="modal__title f-title-<?=$form_name?>"><?= $modalTitle ?></h2>
  <? endif; ?>
  <? if ($modalSubtitle): ?>
        <p class="modal__subtitle f-subtitle-<?=$form_name?>"><?= $modalSubtitle ?></p>
  <? endif; ?>
<? endif; ?>

    <div class="bx-form-card f-<?=$form_name?>">
      <? if (!$modalTitle && !$modalSubtitle): ?>
          <div class="form-loc-info">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/loc_info.php"
              )
            );?>
          </div>
      <? endif; ?>
      
      <?// if ($arResult["isFormErrors"] == "Y"): ?>
        <div class="form-error-box error-msg-<?=$form_name?>" style="display: none"></div>
      <?// endif; ?>
      
      <?// if ($arResult["isFormNote"] == "Y"):?>
        <div style="display: none;" class="modal__success modal__success--green response-msg-<?=$form_name?>">
            <h2 class="modal__title">Спасибо!</h2>
            <p class="modal__subtitle">Ваша заявка отправлена.<br>Наш специалист свяжется с&nbsp;вами в&nbsp;ближайшее время.</p>
        </div>
      <?// endif;?>
      
      <? if(!empty($arResult['FORM_NOTE']) && mb_stripos($arResult['FORM_NOTE'], 'заявка') === false)
        echo $arResult["FORM_NOTE"]; ?>
      
      <? // форма ?>
      <? echo $form_header; ?>
      
      <? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):
        
        if ($FIELD_SID === 'lead_comment'):
          $fid = $arQuestion['STRUCTURE'][0]['ID'];
          echo '<input type="hidden" name="form_text_' . $fid . '" value="' . htmlspecialchars($leadComment) . '" />';
          continue;
        endif;
        
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'):
          // --- НЧАЛО БЛОКА UTM-МЕТОК---
          if (in_array($FIELD_SID, $utmFields)):
            $utmValue = (string)$session->get('ya_direct_' . $FIELD_SID);
            
            if ($utmValue === '') {
              $utmValue = (string)$request->getQuery($FIELD_SID);
            }
            
            echo str_replace('value=""', 'value="' . HtmlFilter::encode($utmValue) . '"', $arQuestion["HTML_CODE"]);
          // --- КОНЕЦ БЛОКА UTM-МЕТОК ---
          else:
            echo $arQuestion["HTML_CODE"];
          endif;
          
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
              <?= str_replace(['Да', '<input '], ['', '<input required '], $arQuestion["HTML_CODE"]) ?>
                <span class="modal__checkbox-text"><?= $arQuestion["CAPTION"] ?></span>
            </div>
          <? continue;
        endif;
        
        $ftype = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
        $fid   = $arQuestion['STRUCTURE'][0]['ID'];
        $fval  = htmlspecialchars($arQuestion['STRUCTURE'][0]['VALUE'] ?? '');
        
        if ($ftype === 'textarea'): ?>
            <textarea name="form_textarea_<?= $fid ?>"
                      class="modal__input modal__textarea"
                      placeholder="Ваш вопрос"><?= $fval ?></textarea>
        <? else:
          $cls   = 'modal__input';
          $itype = 'text';
          $ph    = $arQuestion['CAPTION'];
          
          if ($FIELD_SID === 'NAME')  { $ph = 'Ваше Имя *'; }
          if ($FIELD_SID === 'PHONE') { $ph = '+7 (9__) ___-__-__'; $cls .= ' mask-phone'; $itype = 'tel'; }
          if ($FIELD_SID === 'EMAIL') { $ph = 'Электронная почта *'; $itype = 'email'; }
          ?>
            <input type="<?= $itype ?>"
                   name="form_<?= $ftype ?>_<?= $fid ?>"
                   class="<?= $cls ?>"
                   placeholder="<?= $ph ?>"
                   value="<?= $fval ?>"
                   required />
        <? endif;
      
      endforeach; ?>
      
      <? if ($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y"): ?>
          <div id="captcha-container-<?= $form_name ?>" class="chdk-yandexcaptcha"></div>
          <input name="USE_CAPTCHA" value="Y" type="hidden" id="USE_CAPTCHA_<?=$rand?>">
          <input type="hidden" name="smart-captcha-token" id="smart-captcha-token" data-bajax="no-disabled">
      <? endif; ?>

        <button type="submit"
                name="web_form_submit"
                class="modal__submit <?= $submitClass ?>">
          <?= htmlspecialchars($submitText) ?>
        </button>


        <?= $arResult["FORM_FOOTER"] ?>
      
      <? if ($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y"): ?>
          <div class="form-description f-<?=$form_name?>">
            <? include Application::getDocumentRoot() . '/include/smartcaptcha_policy.php'; ?>
          </div>
      <? endif; ?>
    </div>

<? if ($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y"): ?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const formSid = '<?= $arResult['arForm']['SID'] ?>';
            const allForms = document.querySelectorAll(`form[id^="${formSid}_"]`);

            allForms.forEach((formEl) => {
                formEl.querySelectorAll('[data-source-url]').forEach(field => {
                    field.value = window.location.href;
                });
                formEl.querySelectorAll('[name="sessid"]').forEach(field => {
                    field.value = BX.bitrix_sessid();
                });

                // Loader при клике
                formEl.addEventListener('submit', function () {
                    const submitBtn = formEl.querySelector('.modal__submit');
                    if (submitBtn && !submitBtn.disabled) {
                        submitBtn.dataset.originalValue = submitBtn.innerHTML;
                        submitBtn.innerHTML = 'Отправка...';
                        submitBtn.classList.add('modal__submit--loading');
                        submitBtn.disabled = true;
                    }
                });

                new BAjax(formEl, '<?= $templateFolder ?>/ajax.php');
            });

            // ===== bajax:before =====
            document.addEventListener('bajax:before', (e) => {
                const formEl = e.detail.form;
                if (!formEl || !formEl.id || !formEl.id.startsWith(formSid + '_')) return;

                const submitBtn = formEl.querySelector('.modal__submit');
                if (submitBtn) {
                    submitBtn.innerHTML = 'Отправка...';
                    submitBtn.classList.add('modal__submit--loading');
                    submitBtn.disabled = true;
                }

                const parentCard = document.querySelector('.bx-form-card.f-' + formEl.id);
                const errorMsg = parentCard ? parentCard.querySelector('.error-msg-' + formEl.id) : null;
                if (errorMsg) {
                    errorMsg.style.display = 'none';
                    errorMsg.innerHTML = '';
                }
            });

            // ===== bajax:success =====
            document.addEventListener('bajax:success', (e) => {
                const formEl = e.detail.form;
                if (!formEl || !formEl.id || !formEl.id.startsWith(formSid + '_')) return;

                const parentCard = document.querySelector('.bx-form-card.f-' + formEl.id);
                if (!parentCard) return;

                const responseMsg = parentCard.querySelector('.response-msg-' + formEl.id);
                if (!responseMsg) return;

                responseMsg.style.display = 'block';
                formEl.style.display = 'none';

                const titleEl = document.querySelector('.f-title-' + formEl.id);
                if (titleEl) titleEl.style.display = 'none';

                const subtitleEl = document.querySelector('.f-subtitle-' + formEl.id);
                if (subtitleEl) subtitleEl.style.display = 'none';

                const descEl = document.querySelector('.form-description.f-' + formEl.id);
                if (descEl) descEl.style.display = 'none';

                parentCard.querySelectorAll('.form-loc-info').forEach(el => {
                    el.style.display = 'none';
                });
            });

            // ===== bajax:error =====
            document.addEventListener('bajax:error', (e) => {
                const formEl = e.detail.form;
                const errors = e.detail.errors;
                if (!formEl || !formEl.id || !formEl.id.startsWith(formSid + '_')) return;

                const submitBtn = formEl.querySelector('.modal__submit');
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = submitBtn.dataset.originalValue || '<?= htmlspecialchars($submitText) ?>';
                    submitBtn.classList.remove('modal__submit--loading');
                }

                const parentCard = document.querySelector('.bx-form-card.f-' + formEl.id);
                const errorMsg = parentCard ? parentCard.querySelector('.error-msg-' + formEl.id) : null;

                if (errorMsg && errors) {
                    let html = '';
                    if (typeof errors === 'object') {
                        const activeErrors = Object.values(errors).filter(val => String(val).trim() !== '');
                        html = activeErrors.join('<br>');
                    } else {
                        html = String(errors).trim();
                    }

                    if (html) {
                        errorMsg.innerHTML = html;
                        errorMsg.style.display = 'block';
                    } else {
                        errorMsg.style.display = 'none';
                        errorMsg.innerHTML = '';
                    }
                }
            });
        });
    </script>
<? endif; ?>