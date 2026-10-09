<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Персональный менеджер — КонсультантПлюс СПБ");
$APPLICATION->SetPageProperty("description", "Персональный менеджер КонсультантПлюс — индивидуальное сопровождение клиентов ЧДК в Санкт-Петербурге.");
$APPLICATION->SetTitle("Персональный менеджер");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Персональный менеджер</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="pm-hero reveal">
  <div class="pm-hero__inner">
    <div class="pm-hero__content">
      <h1 class="pm-hero__title"><span class="pm-hero__title-accent">Персональный</span> менеджер</h1>
      <p class="pm-hero__text">Ваш&nbsp;личный гид&nbsp;в&nbsp;мире КонсультантПлюс.</p>
      <p class="pm-hero__subtext">Поможет разобраться в&nbsp;сложных вопросах, научит быстро находить ответы и&nbsp;сделает взаимодействие с&nbsp;системой по&#8209;настоящему комфортным.</p>
      <a href="#" class="btn btn--purple pm-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Персональному менеджеру">Обратиться</a>
    </div>
    <div class="pm-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/PM-hero.png" alt="Персональный менеджер КонсультантПлюс" class="pm-hero__img" loading="lazy" />
      <div class="pm-hero__shadow" aria-hidden="true"></div>
    </div>
  </div>
</section>


<!-- ====== ЧТО МОЖЕТ ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР ====== -->
<section class="pm-features reveal">
  <div class="pm-features__inner">
    <h2 class="pm-features__title">Что&nbsp;может ваш&nbsp;Персональный менеджер</h2>
    <p class="pm-features__subtitle">Индивидуальное сопровождение для&nbsp;пользователей КонсультантПлюс&nbsp;— клиентов ЧДК</p>

    <div class="pm-features__grid">
      <div class="pm-features__card reveal reveal--delay-1">
        <svg class="icon pm-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PM-komplekt"></use></svg>
        <div class="pm-features__body">
          <h3 class="pm-features__name">Подберёт комплект</h3>
          <p class="pm-features__desc">Подберёт комплект КонсультантПлюс под&nbsp;ваши задачи и&nbsp;предложит лучшие финансовые условия</p>
        </div>
      </div>
      <div class="pm-features__card reveal reveal--delay-2">
        <svg class="icon pm-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PM-rabota"></use></svg>
        <div class="pm-features__body">
          <h3 class="pm-features__name">Научит работе</h3>
          <p class="pm-features__desc">Проведёт индивидуальное обучение&nbsp;— в&nbsp;вашем офисе или&nbsp;онлайн, в&nbsp;удобное для&nbsp;вас&nbsp;время</p>
        </div>
      </div>
      <div class="pm-features__card reveal reveal--delay-3">
        <svg class="icon pm-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PM-biznes"></use></svg>
        <div class="pm-features__body">
          <h3 class="pm-features__name">Знает ваш&nbsp;бизнес</h3>
          <p class="pm-features__desc">Знает особенности вашего бизнеса, поэтому быстро находит решения и&nbsp;отвечает на&nbsp;любые вопросы</p>
        </div>
      </div>
      <div class="pm-features__card reveal reveal--delay-4">
        <svg class="icon pm-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PM-kurs"></use></svg>
        <div class="pm-features__body">
          <h3 class="pm-features__name">Держит в&nbsp;курсе</h3>
          <p class="pm-features__desc">Расскажет об&nbsp;изменениях в&nbsp;законодательстве, новшествах КонсультантПлюс и&nbsp;полезных сервисах</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="pm-form">
  <div class="trial__inner">
    <div class="trial__card">
      <div class="trial__left">
        <h2 class="trial__title">
          Получите бесплатный <span class="trial__title--orange">пробный доступ</span> и&nbsp;откройте все возможности системы <span class="trial__title--orange">КонсультантПлюс</span>
        </h2>

        <div class="trial__features">
          <a href="/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/" class="trial__feature trial__feature--orange">
            <div class="trial__feature-icon">
              <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-consultant-crop.svg" alt="" />
            </div>
            <div class="trial__feature-info">
              <span class="trial__feature-name">Система КонсультантПлюс</span>
              <span class="trial__feature-desc">Полный доступ на 2 дня</span>
            </div>
          </a>

          <a href="/services/chto-delat-onlayn/" class="trial__feature trial__feature--purple">
            <div class="trial__feature-icon">
              <img src="<?=SITE_TEMPLATE_PATH?>/images/lk-icon-big.svg" alt="" />
            </div>
            <div class="trial__feature-info">
              <span class="trial__feature-name">Личный кабинет ЧДК-Онлайн</span>
              <span class="trial__feature-desc">Эксклюзивный сервис для клиентов</span>
            </div>
          </a>
        </div>
      </div>

      <div class="trial__right">
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
            "MODAL_TITLE"        => "",
            "MODAL_SUBTITLE"     => "",
            "SHOW_MESSAGE"       => "N",
            "SUBMIT_TEXT"        => "Получить бесплатный доступ",
            "SUBMIT_CLASS"       => "modal__submit--yellow",
            "LEAD_COMMENT"       => "Запрос бесплатного доступа на 2 дня",
          )
        );?>
      </div>
    </div>
  </div>
</section>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
