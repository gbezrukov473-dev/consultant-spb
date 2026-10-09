<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  use Bitrix\Main\Application;
  use Bitrix\Main\Text\HtmlFilter;
?>
<?php if (!defined('PHONE_DISPLAY')) include(\Bitrix\Main\Application::getDocumentRoot()."/include/contacts.php"); ?>
</main>

<footer class="footer">
    <div class="footer__bg">
        <div class="footer__inner">
            <div class="footer__top">
                <div class="footer__logos">
                    <a href="/" class="footer__logo-link">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-consultant.svg" alt="КонсультантПлюс" class="footer__logo footer__logo--consultant" />
                    </a>
                    <a href="/" class="footer__logo-link">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-chdk.svg" alt="ЧДК Право" class="footer__logo footer__logo--chdk" />
                    </a>
                </div>
                <a href="#" class="btn btn--yellow footer__price-btn js-open-modal-price">Скачать прайс-лист</a>
            </div>

            <div class="footer__bottom">
                <div class="footer__contacts">
                    <div class="footer__phone-row">
                        <div class="footer__phone-block">
                            <span class="footer__phone-icon"></span>
                            <a href="<?=PHONE_LINK?>" class="footer__phone-number"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/phone.php", "EDIT_TEMPLATE" => ""));?></a>
                        </div>
                    </div>
                    <span class="footer__phone-hours"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/work_hours.php", "EDIT_TEMPLATE" => ""));?></span>
                </div>

                <a href="#" class="btn btn--yellow footer__price-btn footer__price-btn--mobile js-open-modal-price">Купить КонсультантПлюс</a>
              
              <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_main", Array(
                "ROOT_MENU_TYPE" => "bottom_2026",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
              ));?>
              
              <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_policy", Array(
                "ROOT_MENU_TYPE" => "policy",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
              ));?>
            </div>
        </div>
    </div>
</footer>

<!-- ====== МОДАЛЬНЫЕ ОКНА ====== -->
<div class="modal-overlay" id="modalOverlay"></div>

<!-- Попап 1: Узнать цену — Bitrix форма 68 -->
<div class="modal" id="modalPrice">
    <button class="modal__close" aria-label="Закрыть">&times;</button>
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
      "MODAL_TITLE"        => "Узнать цену",
      "MODAL_SUBTITLE"     => "Оставьте заявку, чтобы получить актуальный прайс-лист на КонсультантПлюс для юрлиц и ИП в Санкт-Петербурге и Ленобласти",
      "SHOW_MESSAGE"       => "N",
      "SUBMIT_TEXT"        => "Получить прайс-лист",
      "SUBMIT_CLASS"       => "modal__submit--yellow",
      "LEAD_COMMENT"       => "Запрос прайс-листа",
    )
  );?>
</div>

<!-- Попап 2: Пробный доступ — Bitrix форма 68 -->
<div class="modal" id="modalTrial">
    <button class="modal__close" aria-label="Закрыть">&times;</button>
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
      "MODAL_TITLE"        => "Бесплатный доступ",
      "MODAL_SUBTITLE"     => "Попробуйте КонсультантПлюс бесплатно в течение 2 дней. Мы работаем с юрлицами и ИП Санкт-Петербурга и Ленобласти",
      "SHOW_MESSAGE"       => "N",
      "SUBMIT_TEXT"        => "Получить бесплатный доступ",
      "SUBMIT_CLASS"       => "modal__submit--yellow",
      "LEAD_COMMENT"       => "Запрос бесплатного доступа на 2 дня",
    )
  );?>
</div>

<!-- Попап ЛК: Личный кабинет -->
<div class="modal" id="modalLk">
    <button class="modal__close" aria-label="Закрыть">&times;</button>
    <h2 class="modal__title">Вы уже являетесь нашим клиентом?</h2>
    <div class="modal__choice">
        <a href="https://online.gk4dk.ru/" target="_blank" rel="noopener" class="modal__choice-btn modal__choice-btn--purple">Да</a>
        <button type="button" class="modal__choice-btn modal__choice-btn--yellow" data-switch-modal="modalTrial">Еще нет</button>
    </div>
</div>

<!-- Попап 3: Сервис ЧДК — Bitrix форма 68 -->
<div class="modal" id="modalService">
    <button class="modal__close" aria-label="Закрыть">&times;</button>
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
      "MODAL_TITLE"        => "Заполните форму",
      "MODAL_SUBTITLE"     => "Наш специалист свяжется с Вами в ближайшее время. Мы работаем с юрлицами и ИП Санкт-Петербурга и Ленобласти",
      "SHOW_MESSAGE"       => "N",
      "SUBMIT_TEXT"        => "Отправить",
      "LEAD_COMMENT"       => "Обратная связь — Сервис ЧДК",
    )
  );?>
</div>

<!-- Попап 4: Остались вопросы — Bitrix форма 68 с полем «Ваш вопрос» -->
<div class="modal" id="modalQuestion">
    <button class="modal__close" aria-label="Закрыть">&times;</button>
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
      "MODAL_TITLE"        => "Заполните форму",
      "MODAL_SUBTITLE"     => "Наш специалист свяжется с Вами в ближайшее время. Мы работаем с юрлицами и ИП Санкт-Петербурга и Ленобласти",
      "SHOW_MESSAGE"       => "Y",
      "SUBMIT_TEXT"        => "Отправить",
      "LEAD_COMMENT"       => "Обратная связь — Остались вопросы",
    )
  );?>
</div>

<!-- ====== SEO: микроразметка Schema.org (JSON-LD) ====== -->
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "ЧДК-Право",
      "alternateName": "СПБ Консультант",
      "url": "https://spbcons.ru/",
      "logo": "https://spbcons.ru<?=SITE_TEMPLATE_PATH?>/images/logo-chdk.svg",
  "telephone": "+7-812-334-44-81",
  "email": "info@spbcons.ru",
  "taxID": "7842527584",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Воронежская, д. 5 литера А, помещ. 21НС",
    "addressLocality": "Санкт-Петербург",
    "postalCode": "191119",
    "addressCountry": "RU"
  },
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+7-812-334-44-81",
    "contactType": "sales",
    "areaServed": "RU",
    "availableLanguage": ["ru"],
    "hoursAvailable": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "09:00",
      "closes": "19:00"
    }
  }]
}
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Главное меню сайта",
        "itemListElement": [
            { "@type": "SiteNavigationElement", "position": 1, "name": "Бухгалтеру",            "url": "https://spbcons.ru/systems/bukhgalteru/" },
            { "@type": "SiteNavigationElement", "position": 2, "name": "Юристу",                "url": "https://spbcons.ru/systems/yuristu/" },
            { "@type": "SiteNavigationElement", "position": 3, "name": "Руководителю",          "url": "https://spbcons.ru/systems/rukovoditelyu/" },
            { "@type": "SiteNavigationElement", "position": 4, "name": "Бюджету",               "url": "https://spbcons.ru/systems/byudzhetnoy-organizatsii/" },
            { "@type": "SiteNavigationElement", "position": 5, "name": "Линия консультаций",    "url": "https://spbcons.ru/consult/" },
            { "@type": "SiteNavigationElement", "position": 6, "name": "О нас",                 "url": "https://spbcons.ru/about/" },
            { "@type": "SiteNavigationElement", "position": 7, "name": "Контакты",             "url": "https://spbcons.ru/contacts/" },
            { "@type": "SiteNavigationElement", "position": 8, "name": "Вопрос-ответ",          "url": "https://spbcons.ru/faq/" },
            { "@type": "SiteNavigationElement", "position": 9, "name": "Новости",              "url": "https://spbcons.ru/news/" }
        ]
    }
</script>

<?php
  // --- Глобальный попап согласия на обработку персональных данных ---
  ob_start();
  $APPLICATION->IncludeComponent("bitrix:news.detail", "", [
    "ELEMENT_ID"  => "237732",
    "IBLOCK_ID"   => "217",
    "IBLOCK_TYPE" => "content",
    "CACHE_TYPE"  => "A",
    "CACHE_TIME"  => "36000000",
    "SET_TITLE"   => "N",
    "SET_BROWSER_TITLE"    => "N",
    "SET_META_KEYWORDS"    => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_STATUS_404"       => "N",
    "DISPLAY_NAME"         => "N",
    "DISPLAY_DATE"         => "N",
    "DISPLAY_PICTURE"      => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "ADD_ELEMENT_CHAIN"    => "N",
    "ADD_SECTIONS_CHAIN"   => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
  ], false);
  $consentHtml = ob_get_clean();
  if (empty(trim($consentHtml))) {
    $consentHtml = '<p>Текст согласия не найден.</p>';
  }
?>
<div class="consent-popup" id="consentPopup">
    <div class="consent-popup__overlay"></div>
    <div class="consent-popup__dialog">
        <button class="consent-popup__close" type="button" aria-label="Закрыть">&times;</button>
        <div class="consent-popup__body"><?= $consentHtml ?></div>
        <div class="consent-popup__buttons">
            <button type="button" class="btn consent-popup__accept">Принимаю</button>
            <button type="button" class="btn consent-popup__decline">Не принимаю</button>
        </div>
    </div>
</div>
<script>
    (function(){
        var popup = document.getElementById('consentPopup');
        if (!popup) return;
        var overlay = popup.querySelector('.consent-popup__overlay');
        var btnAccept = popup.querySelector('.consent-popup__accept');
        var btnDecline = popup.querySelector('.consent-popup__decline');
        var btnClose = popup.querySelector('.consent-popup__close');
        var activeCheckbox = null;

        function show() {
            popup.style.display = '';
            requestAnimationFrame(function(){ popup.classList.add('is-active'); });
            document.body.style.overflow = 'hidden';
        }
        function hide() {
            popup.classList.remove('is-active');
            document.body.style.overflow = '';
            setTimeout(function(){ if (!popup.classList.contains('is-active')) popup.style.display = 'none'; }, 300);
        }

        document.addEventListener('click', function(e) {
            var trigger = e.target.closest('.modal__checkbox--consent');
            if (!trigger) return;
            if (e.target.tagName === 'A' || e.target.closest('a')) return;
            e.preventDefault();
            e.stopPropagation();
            activeCheckbox = trigger.querySelector('input[type="checkbox"]');
            if (activeCheckbox) show();
        }, true);

        btnAccept.addEventListener('click', function() {
            if (activeCheckbox) activeCheckbox.checked = true;
            hide();
        });
        btnDecline.addEventListener('click', function() {
            if (activeCheckbox) activeCheckbox.checked = false;
            hide();
        });
        btnClose.addEventListener('click', hide);
        overlay.addEventListener('click', hide);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && popup.classList.contains('is-active')) hide();
        });
    })();
</script>

<!-- ====== COOKIE BANNER ====== -->
<?php if (empty($_COOKIE['cookie_consent_accepted'])): ?>
    <div class="cookie-banner" id="cookieBanner">
        <div class="cookie-banner__inner">
            <div class="cookie-banner__text">
                <strong><a href="/polzovatelskoye_soglasheniye.php" target="_blank">Используем&nbsp;cookie</a></strong>, чтобы собирать аналитику и&nbsp;делать сайт лучше.
                Пользуясь сайтом, вы&nbsp;<a href="/consent_to_processing_of_personal_data.pdf" target="_blank">соглашаетесь</a> с&nbsp;этим.
            </div>
            <button type="button" class="btn btn--yellow cookie-banner__btn" id="cookieAccept">Принимаю</button>
        </div>
    </div>
    <script>
        (function(){
            var banner = document.getElementById('cookieBanner');
            var btn    = document.getElementById('cookieAccept');
            if (!banner || !btn) return;
            btn.addEventListener('click', function(){
                var d = new Date();
                d.setFullYear(d.getFullYear() + 1);
                document.cookie = 'cookie_consent_accepted=1; path=/; expires=' + d.toUTCString() + '; SameSite=Lax';
                banner.classList.add('is-hidden');
                if (typeof BX !== 'undefined' && BX.ajax && BX.ajax.runAction) {
                    try {
                        BX.ajax.runAction('main.userconsent.consent.save', {
                            data: { id: 4, originator: 'cookie_banner', originId: location.pathname }
                        });
                    } catch(e){}
                }
            });
        })();
    </script>
<?php endif; ?>

<script src="<?=SITE_TEMPLATE_PATH?>/js/main.bundle.js?v=4"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/components/bitrix/form.result.new/modal_contact/ajax.js"></script>
<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://p.spb4dk.ru/upload/crm/site_button/loader_6_u2sc83.js');
</script>
<? /*
<!-- ====== Защита веб-форм Битрикса от повторной отправки (анти-дубль заявок) ====== -->
<script>
    (function () {
        'use strict';
        // Блокируем повторные клики/Enter по кнопке отправки, пока форма уходит на сервер.
        document.addEventListener('submit', function (e) {
            var form = e.target;
            if (!form || !form.querySelector) return;
            var btn = form.querySelector('[name="web_form_submit"]');
            if (!btn) return; // не форма Битрикса — не трогаем

            // Программные пересабмиты (например, от Яндекс SmartCaptcha) пропускаем всегда.
            if (e.isTrusted === false) return;

            if (form.getAttribute('data-submitting') === '1') {
                e.preventDefault();      // повторная отправка — гасим
                e.stopPropagation();
                return false;
            }
            form.setAttribute('data-submitting', '1');

            // Визуальная блокировка + надпись «Отправляем...». disabled НЕ ставим намеренно:
            // иначе при асинхронной отправке капчей поле web_form_submit может не уйти в POST.
            // Замена value безопасна — Битрикс проверяет только непустоту web_form_submit.
            btn.style.pointerEvents = 'none';
            btn.style.opacity = '0.6';
            if (!btn.dataset.origText) {
                btn.dataset.origText = btn.tagName === 'INPUT' ? btn.value : btn.textContent;
            }
            if (btn.tagName === 'INPUT') btn.value = 'Отправляем...';
            else btn.textContent = 'Отправляем...';
        }, true); // capture: срабатываем раньше обработчика капчи

        // Сброс при возврате «Назад» (bfcache), иначе кнопка останется «погашенной».
        window.addEventListener('pageshow', function () {
            var forms = document.querySelectorAll('form[data-submitting="1"]');
            Array.prototype.forEach.call(forms, function (form) {
                form.removeAttribute('data-submitting');
                var btn = form.querySelector('[name="web_form_submit"]');
                if (!btn) return;
                btn.style.pointerEvents = '';
                btn.style.opacity = '';
                if (btn.dataset.origText) {
                    if (btn.tagName === 'INPUT') btn.value = btn.dataset.origText;
                    else btn.textContent = btn.dataset.origText;
                    delete btn.dataset.origText;
                }
            });
        });
    })();
</script>
*/?>
<?
  $session = Application::getInstance()->getSession();
  $request = Application::getInstance()->getContext()->getRequest();
  
  $utmTags = ['utm_term', 'utm_campaign', 'utm_source', 'utm_medium', 'utm_referrer', 'utm_content', 'type', 'added', 'block', 'pos', 'device'];
  
  foreach ($utmTags as $tag) {
    $getQueryVal = (string)$request->getQuery($tag);
    if ($getQueryVal !== '') {
      $session->set('ya_direct_'.$tag, HtmlFilter::encode($getQueryVal));
    }
  }
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js', 'ym');
    ym(24530390, 'init', {webvisor:true, clickmap:true, referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/24530390" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php include \Bitrix\Main\Application::getDocumentRoot() . '/include/smartcaptcha.php'; ?>
</body>
</html>