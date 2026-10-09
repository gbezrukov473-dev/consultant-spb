<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$modalTitle    = $arParams['MODAL_TITLE'] ?? '';
$modalSubtitle = $arParams['MODAL_SUBTITLE'] ?? '';
$submitText    = $arParams['SUBMIT_TEXT'] ?: 'Отправить';
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
?>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.6.3.js"></script>
<style>
    .contform {
        background: var(--color-gray-bg);
        border-radius: 20px;
        padding: 0;
        overflow: hidden;
    }
    .contform .rowone {
        display: flex;
        flex-wrap: wrap;
    }
    .contform .mycol {
        flex: 1;
        min-width: 0;
        padding: 32px 28px;
        display: flex;
        flex-direction: column;
        gap: 0;
    }
    .contform .mycol > .row {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 0;
    }
    .contform .mycol > .row + .row {
        margin-top: 16px;
    }
    .contform .mycol > .row > [class*="col-"] {
        flex: 1 1 100%;
        min-width: 0;
    }
    .contact_title {
        color: var(--color-text);
        font-family: var(--font-family);
        font-size: 26px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 20px;
        width: 100%;
    }
    .contform .form-control {
        font-family: var(--font-family);
        color: var(--color-text);
        background: var(--color-white);
        border: 1.5px solid var(--color-gray);
        border-radius: 14px;
        width: 100%;
        padding: 18px 22px;
        font-size: 16px;
        font-weight: 400;
        outline: none;
        transition: border-color var(--transition-base);
        box-sizing: border-box;
    }
    .contform .form-control::placeholder {
        color: var(--color-gray-placeholder);
    }
    .contform .form-control:focus {
        border-color: var(--color-secondary);
    }
    .contform textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }
    .contform select.form-control {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='7' fill='none'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 20px center;
        padding-right: 44px;
        cursor: pointer;
    }
    .contform .has-error .form-control {
        border-color: var(--color-error);
        color: var(--color-error);
    }
    .contform .error-fld {
        color: var(--color-error);
        font-size: 13px;
        margin-bottom: 4px;
    }
    .contform .d_agree {
        color: var(--color-text-muted);
        cursor: pointer;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-top: 4px;
        font-size: 14px;
        line-height: 1.45;
    }
    .contform .d_agree input[type=checkbox] {
        width: 20px;
        height: 20px;
        accent-color: var(--color-secondary);
        cursor: pointer;
        flex-shrink: 0;
        margin-top: 2px;
    }
    .contform .policy {
        color: var(--color-text-muted);
        font-size: 13px;
        line-height: 1.4;
        margin-top: 4px;
    }
    .contform .policy a {
        color: var(--color-secondary);
        text-decoration: underline;
        transition: color var(--transition-base);
    }
    .contform .policy a:hover {
        color: var(--color-secondary-hover);
    }
    .contform .text-right {
        display: flex;
        flex-direction: column;
        gap: 16px;
        width: 100%;
    }
    .contform .garant {
        padding: 0;
        width: 100%;
    }
    #usersubmit {
        font-family: var(--font-family);
        color: var(--color-white);
        background-color: var(--color-primary);
        border: none;
        border-radius: 16px;
        width: 100%;
        padding: 20px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        transition: background-color var(--transition-base), transform var(--transition-fast);
        margin-top: 8px;
        height: auto;
        line-height: 1;
    }
    #usersubmit:hover:not(:disabled) {
        background-color: var(--color-primary-hover);
    }
    #usersubmit:active:not(:disabled) {
        transform: scale(.98);
    }
    #usersubmit.disabled,
    #usersubmit:disabled {
        background-color: var(--color-gray);
        color: var(--color-white);
        cursor: not-allowed;
    }
    .contform .backimg {
        display: none;
    }
    .contform .mobno {
        display: none;
    }
    .contform .form-description {
        color: var(--color-text-muted);
        font-size: 12px;
        line-height: 1.4;
        margin-top: 8px;
    }
    .contform .chdk-yandexcaptcha {
        margin-top: 8px;
    }

    #agree-popup {
        border-radius: var(--radius-modal) !important;
        box-shadow: 0 8px 40px rgba(0,0,0,.2) !important;
        max-width: 680px !important;
        width: 90% !important;
        padding: 0 !important;
        overflow: hidden;
    }
    #agree-popup .popup-window-titlebar {
        display: none;
    }
    #agree-popup .popup-window-close-icon {
        width: 36px;
        height: 36px;
        top: 16px !important;
        right: 20px !important;
        opacity: .5;
        transition: opacity .2s;
    }
    #agree-popup .popup-window-close-icon:hover {
        opacity: 1;
    }
    .custom-popup-container {
        font-family: var(--font-family);
        font-size: 14px;
        line-height: 1.6;
        color: var(--color-text);
        max-height: 60vh;
        overflow-y: auto;
        padding: 40px 36px 24px;
    }
    .custom-popup-container h1,
    .custom-popup-container h2,
    .custom-popup-container h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--color-black);
    }
    .custom-popup-container p {
        margin-bottom: 10px;
    }
    .custom-popup-container a {
        color: var(--color-secondary);
        text-decoration: underline;
    }
    #agree-popup .popup-window-buttons {
        display: flex;
        gap: 12px;
        padding: 0 36px 32px;
        flex-shrink: 0;
    }
    .popup-window-button-accept {
        flex: 1;
        background-color: var(--color-secondary) !important;
        color: var(--color-white) !important;
        border: none !important;
        border-radius: var(--radius-btn) !important;
        padding: 16px 24px !important;
        font-family: var(--font-family) !important;
        font-weight: 600 !important;
        font-size: 16px !important;
        cursor: pointer;
        transition: background-color .2s;
        text-align: center;
    }
    .popup-window-button-accept:hover {
        background-color: var(--color-secondary-hover) !important;
    }
    .popup-window-button-decline {
        flex: 1;
        background-color: var(--color-white) !important;
        color: var(--color-text) !important;
        border: 2px solid var(--color-gray) !important;
        border-radius: var(--radius-btn) !important;
        padding: 16px 24px !important;
        font-family: var(--font-family) !important;
        font-weight: 600 !important;
        font-size: 16px !important;
        cursor: pointer;
        transition: background-color .2s, border-color .2s;
        text-align: center;
    }
    .popup-window-button-decline:hover {
        background-color: var(--color-gray-light) !important;
        border-color: var(--color-gray-muted) !important;
    }
    .popup-window-overlay {
        background-color: rgba(0,0,0,.5) !important;
    }

    @media (max-width: 768px) {
        #agree-popup {
            border-radius: 24px !important;
            width: 94% !important;
        }
        .custom-popup-container {
            padding: 32px 20px 16px;
            font-size: 13px;
            max-height: 65vh;
        }
        #agree-popup .popup-window-buttons {
            flex-direction: column;
            gap: 8px;
            padding: 0 20px 24px;
        }
        .popup-window-button-accept,
        .popup-window-button-decline {
            padding: 14px 20px !important;
            font-size: 15px !important;
        }
    }

    @media (max-width: 768px) {
        .contform .mycol {
            padding: 24px 20px;
        }
        .contact_title {
            font-size: 22px;
        }
        .contform .form-control {
            padding: 16px 18px;
        }
        #usersubmit {
            padding: 18px;
            font-size: 16px;
        }
    }
</style>
<? if($arResult["isFormErrors"] == "Y"): ?>
  <div class="form-error-box"><?=$arResult["FORM_ERRORS_TEXT"];?></div>
<? endif; ?>
<?=$arResult["FORM_NOTE"]?>
<? if($arResult["isFormNote"] != "Y"){
  $form_name = $arResult['arForm']['SID'];
?>

<? if ($modalTitle): ?>
  <h2 class="modal__title"><?= $modalTitle ?></h2>
<? endif; ?>
<? if ($modalSubtitle): ?>
  <p class="modal__subtitle"><?= $modalSubtitle ?></p>
<? endif; ?>

<?=$arResult["FORM_HEADER"]?>
<?
  if($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") {
    ?>
    <?
    /***********************************************************************************
     * form header
     ***********************************************************************************/
    if($arResult["isFormTitle"]) {} //endif ;
    if($arResult["isFormImage"] == "Y") {
      ?>

        <a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>">
            <img src="<?=$arResult[" FORM_IMAGE"]["URL"]?>" <? if($arResult["FORM_IMAGE"]["WIDTH"] > 300): ?>width="300" <? elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200): ?>height="200" <? else: ?><?=$arResult["FORM_IMAGE"]["ATTR"]?><? endif;?> hspace="3" vscape="3" border="0"/>
        </a>
      <? //=$arResult["FORM_IMAGE"]["HTML_CODE"]
      ?>
      <?
    } //endif
    ?>
    
    <?
  } // endif
  /***********************************************************************************
   * form questions
   ***********************************************************************************/
?>
<div class="contform">
    <div class="row rowone">
        <!--Добавлено-->
        <div class="col-md-6 mycol">
            <!--Добавлено-->
            <div class="row">
                <div class="contact_title"><?= $modalTitle ?: 'Напишите нам:' ?></div>
              <?
                foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)  {
              ?>
              <?
                if($FIELD_SID === 'lead_comment') {
                    $fid = $arQuestion['STRUCTURE'][0]['ID'];
                    echo '<input type="hidden" name="form_text_' . $fid . '" value="' . htmlspecialchars($leadComment) . '" />';
                    continue;
                }
                /*echo "<pre>"; print_r($arQuestion);
              echo "</pre>";*/
                if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] != 'hidden') {
              ?>
              <? if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'textarea' || $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'dropdown' || $FIELD_SID == 'PROFES'): ?>
            </div>
            <div class="row">
                <div class="col-sm-12 f<?=$FIELD_SID?>">
                  <? else : ?>
                    <div class="col-sm-12 f<?=$FIELD_SID?>">
                      <? endif ?>
                      <? if(is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])): ?>
                          <div class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></div>
                      <? endif; ?>
                      <? //$arQuestion["CAPTION"]?>
                      <? if($arQuestion["REQUIRED"] == "Y"): ?>
                        <? //$arResult["REQUIRED_SIGN"];?>
                      <? endif; ?>
                      <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />" . $arQuestion["IMAGE"]["HTML_CODE"] : ""?>
                      
                      <? if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'checkbox') { ?>
                          <div class="d_agree">
                              <input class="agree" type="checkbox" id="<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                     name="form_checkbox_agree[]"
                                     value="<?=$arQuestion['STRUCTURE'][0]['ID']?>"> <?=$arQuestion["CAPTION"]?>
                          </div>
                      <? } else
                        echo $arQuestion["HTML_CODE"]; ?>
                    </div>
                  <?
                    } else { ?>
                      <span style="display:none">
                        <?=$arQuestion["HTML_CODE"]?>
                    </span>
                  <? } ?>
                  <? } //endwhile
                  ?>

                </div>
                <div class="row">

                    <div class="col-xs-12 text-right">
                        
                        <div class="col-sm-6 garant mygarant">
                            <div class="row">
                                <div class="col-md-12 policy"><span>&#10003;</span> Нажимая кнопку «Отправить», вы
                                    соглашаетесь на <a target="_blank" href="/polzovatelskoe_soglashenie.php">обработку
                                        персональных данных</a></div>
                            </div>
                        </div>

                        <input disabled class="btn btn-lg btn-warning disabled"
                               id="usersubmit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit"
                               name="web_form_submit" 
                               value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>"
                        />

                    </div>
                </div>
                <div class="row">

                    
                  <? if($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y") { ?>
                      <div id="captcha-container-<?=$form_name?>" class="chdk-yandexcaptcha"></div>
                      <input name="USE_CAPTCHA" value="Y" type="hidden" id="USE_CAPTCHA">
                      <input type="hidden" name="smart-captcha-token" id="smart-captcha-token">


                      <div class="form-description">
                        <? include \Bitrix\Main\Application::getDocumentRoot() . '/include/smartcaptcha_policy.php'; ?>
                      </div>
                  <? } // isUseCaptcha
                  ?>
                  
                  <?=$arResult["FORM_FOOTER"]?>
                  <?
                    } //endif (isFormNote)
                  ?>
                </div>
            </div>
            <div class="col-md-6 mobno">
                <!--Добавлено-->
            </div>
            <!--Добавлено-->
        </div>
        <!--Добавлено-->

    </div>
</div>
<script type="text/javascript">

    var url_string = window.location.href;
    var url = new URL(url_string);
    var paramValue = url.searchParams.get("theme");
    if (paramValue && paramValue == 'price') {
        var element = document.getElementById('form_dropdown_THEME');
        element.value = 881;

    }

    var elementsArray = document.querySelectorAll('input');
    var message = document.querySelector('#usermess');

    const typeHandler = function (e) {
        var usermail = document.getElementById('usermail').value;
        var usermess = document.getElementById('usermess').value;
        var username = document.getElementById('username').value;
        var userphone = document.getElementById('userphone').value;

        //if (usermail == "" || usermail.length <= 0 || usermess == "" || usermess.length <= 0) {
        //document.getElementById("usersubmit").disabled = true;
        //$('#usersubmit').addClass('disabled');

        if (username == "" || username.length <= 0 || userphone == "" || userphone.length <= 0) {
            document.getElementById("usersubmit").disabled = true;
            $('#usersubmit').addClass('disabled');

            //if (usermail == "" || usermail.length <= 0)  $('.fEMAIL').addClass('has-error'); else $('.fEMAIL').removeClass('has-error');

            //if (usermess == "" || usermess.length <= 0) $('.fMESSAGE').addClass('has-error'); else $('.fMESSAGE').removeClass('has-error');

            if (username == "" || username.length <= 0) $('.fNAME').addClass('has-error');
            else $('.fNAME').removeClass('has-error');
            if (userphone == "" || userphone.length <= 0) $('.fPHONE').addClass('has-error');
            else $('.fPHONE').removeClass('has-error');


        } else {
            document.getElementById("usersubmit").disabled = false;
            $('#usersubmit').removeClass('disabled');
            //$('.fEMAIL').removeClass('has-error');
            //$('.fMESSAGE').removeClass('has-error');
            $('.fNAME').removeClass('has-error');
            $('.fPHONE').removeClass('has-error');
        }
    }
    elementsArray.forEach(function (elem) {
        elem.addEventListener('input', typeHandler) // register for oninput
        elem.addEventListener('propertychange', typeHandler) // for IE8
    });

    message.addEventListener('input', typeHandler)
    message.addEventListener('propertychange', typeHandler)
</script>

<? CJSCore::Init(['popup']);
  ob_start();
  $APPLICATION->IncludeComponent("bitrix:news.detail", "", [
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_ELEMENT_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "BROWSER_TITLE" => "-",
    "CACHE_GROUPS" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_CODE" => "",
    "ELEMENT_ID" => "237732",
    "FIELD_CODE" => [],
    "IBLOCK_ID" => "217",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_URL" => "",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "-",
    "META_KEYWORDS" => "-",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Страница",
    "PROPERTY_CODE" => [],
    "SET_BROWSER_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "STRICT_SECTION_CHECK" => "N",
    "USE_PERMISSIONS" => "N",
    "USE_SHARE" => "N",
  ],
    false
  );
  $consentHtml = ob_get_clean();
  if(empty($consentHtml)) {
    $consentHtml = '<p>Текст согласия не найден.</p>';
  }
?>
<script>
    var consentHtml = <?=CUtil::PhpToJSObject($consentHtml, false, true, true)?>;
    if (document.getElementById("agree-popup")) document.getElementById("agree-popup").remove();

    document.addEventListener('DOMContentLoaded', function () {
        var containers = document.querySelectorAll('.d_agree');

        containers.forEach(function (container) {
            container.addEventListener('click', function (event) {
                var checkbox = container.querySelector('input[type="checkbox"]');
                var link = container.querySelector('a');

                if (event.target === link || (link && link.contains(event.target))) {
                    return;
                }

                event.preventDefault();

                var popup = new BX.PopupWindow('agree-popup', null, {
                    content: consentHtml,
                    closeIcon: {right: "20px", top: "20px"},
                    zIndex: 99999,
                    closeByEsc: true,
                    overlay: {backgroundColor: 'black', opacity: 50},
                    buttons: [
                        new BX.PopupWindowButton({
                            text: 'Принимаю',
                            className: 'popup-window-button-accept',
                            events: {
                                click: function () {
                                    checkbox.checked = true;
                                    this.popupWindow.destroy();
                                    document.body.classList.remove('no-scroll');
                                }
                            }
                        }),
                        new BX.PopupWindowButton({
                            text: 'Не принимаю',
                            className: 'popup-window-button-decline',
                            events: {
                                click: function () {
                                    checkbox.checked = false;
                                    this.popupWindow.destroy();
                                    document.body.classList.remove('no-scroll');
                                }
                            }
                        })
                    ]
                });
                document.body.classList.add('no-scroll');
                popup.contentContainer.classList.add('custom-popup-container');
                popup.show();

                popup.setBindElement(document.body);
                BX.addCustomEvent(popup, 'onPopupClose', function () {
                    popup.destroy();
                    document.body.classList.remove('no-scroll');
                });

            });
        });
    });
</script>
<? if($arParams["USE_YANDEX_SMART_CAPTCHA"] == "Y") { ?>
    <? include \Bitrix\Main\Application::getDocumentRoot() . '/include/smartcaptcha.php'; ?>
<? } // isUseCaptcha ?>
