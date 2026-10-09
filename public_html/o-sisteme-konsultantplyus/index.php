<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "спс консультант плюс описание, что входит в консультант плюс, возможности консультант плюс, для чего нужна система консультант плюс");
$APPLICATION->SetPageProperty("title", "Что такое КонсультантПлюс — преимущества системы");
$APPLICATION->SetPageProperty("description", "Справочно-правовая система КонсультантПлюс: 360 млн документов, ежедневное обновление, 9 профессиональных профилей. Узнайте, как система помогает юристам и бухгалтерам. Официальный представитель в СПб.");
$APPLICATION->SetTitle("О СПС КонсультантПлюс");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">О СПС КонсультантПлюс</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="sps-hero reveal">
  <div class="sps-hero__inner">
    <div class="sps-hero__content">
      <h1 class="sps-hero__title">О&nbsp;СПС <span class="sps-hero__title-accent">КонсультантПлюс</span></h1>
      <p class="sps-hero__text">Более 360&nbsp;миллионов документов, 9&nbsp;профессиональных профилей. Готовые решения, путеводители и&nbsp;аналитические материалы. Быстрый поиск, интеллектуальные сервисы и&nbsp;ежедневное обновление информации.</p>
      <p class="sps-hero__subtext">КонсультантПлюс&nbsp;&mdash; это больше, чем справочно-правовая система. Это ваш надёжный партнёр в&nbsp;мире законодательства.</p>
      <div class="sps-hero__buttons">
        <a href="#" class="btn btn--purple sps-hero__btn" data-open-modal="modalPrice">Узнать цену</a>
        <a href="#" data-open-modal="modalTrial" class="btn sps-hero__btn sps-hero__btn--outline">Получить демо-доступ</a>
      </div>
    </div>
    <div class="sps-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/o-sps-kp-hero.png" alt="О СПС КонсультантПлюс" class="sps-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ЧТО ПРЕДЛАГАЕТ КОНСУЛЬТАНТПЛЮС ====== -->
<section class="sps-features reveal">
  <div class="sps-features__inner">
    <div class="sps-features__grid">

      <a href="/o-sisteme-konsultantplyus/buy/" class="sps-features__card reveal reveal--delay-1">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-kup-kp"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">Купить КонсультантПлюс</h3>
          <p class="sps-features__desc">Подберём для&nbsp;вас комплект и&nbsp;подготовим спецпредложение</p>
        </div>
      </a>

      <a href="/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/" class="sps-features__card reveal reveal--delay-2">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-prob-dost"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">Пробный доступ</h3>
          <p class="sps-features__desc">Протестируйте систему и&nbsp;наш сервис в&nbsp;течение 2&nbsp;дней бесплатно</p>
        </div>
      </a>

      <a href="/systems/" class="sps-features__card reveal reveal--delay-3">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-smart-komp"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">Смарт-комплекты</h3>
          <p class="sps-features__desc">Готовые комплекты для&nbsp;специалистов разного профиля</p>
        </div>
      </a>

      <a href="/ii-pomoshchnik-konsultant-plyus/" class="sps-features__card reveal reveal--delay-1">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-ai-pomosch"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">ИИ-помощник</h3>
          <p class="sps-features__desc">ИИ-сервис для&nbsp;быстрого решения правовых вопросов</p>
        </div>
      </a>

      <a href="/services/" class="sps-features__card reveal reveal--delay-2">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-service"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">Сервис ЧДК</h3>
          <p class="sps-features__desc">Клиентский сервис с&nbsp;экспертной поддержкой и&nbsp;обучением</p>
        </div>
      </a>

      <a href="#" class="sps-features__card reveal reveal--delay-3">
        <svg class="icon sps-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#o-sps-kp-ustanovka"></use></svg>
        <div class="sps-features__body">
          <h3 class="sps-features__name">Установка КонсультантПлюс</h3>
          <p class="sps-features__desc">Узнайте, как происходит установка и&nbsp;настройка системы</p>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="sps-form">
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
