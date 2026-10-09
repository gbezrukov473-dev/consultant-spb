<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- ====== СКВОЗНАЯ ФОРМА ПЕРЕД ФУТЕРОМ — Bitrix форма 68 ====== -->
<section class="lead-pre-footer reveal">
  <div class="lead-pre-footer__inner">
    <div class="lead-pre-footer__card">
      <?$APPLICATION->IncludeComponent(
        "bitrix:form.result.new",
        "modal_contact",
        Array(
          "WEB_FORM_ID"        => "68",
          "LIST_URL"           => "",
          "EDIT_URL"           => "",
          "USE_EXTENDED_ERRORS"=> "N",
          "SUCCESS_URL"        => "/thanks/",
          "CACHE_TYPE"         => "A",
          "CACHE_TIME"         => "3600",
          "SEF_MODE"           => "N",
          "AJAX_MODE"          => "N",
          "USE_YANDEX_SMART_CAPTCHA" => "Y",
          "IGNORE_CUSTOM_TEMPLATE"   => "N",
          "MODAL_TITLE"        => "Остались вопросы?",
          "MODAL_SUBTITLE"     => "Оставьте заявку — менеджер свяжется с&nbsp;вами в&nbsp;течение 15&nbsp;минут, подберёт оптимальный комплект и&nbsp;рассчитает индивидуальное предложение.",
          "SHOW_MESSAGE"       => "N",
          "SUBMIT_TEXT"        => "Оставить заявку",
          "SUBMIT_CLASS"       => "modal__submit--yellow",
          "LEAD_COMMENT"       => "Сквозная форма перед футером",
        )
      );?>
    </div>
  </div>
</section>
