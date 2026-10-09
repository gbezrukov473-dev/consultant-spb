<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "обучение консультант плюс, обучение работе с консультант плюс, обучение пользователей консультант плюс, курсы консультант плюс, обучение работе в консультант плюс, обучение бухгалтеров консультант плюс, обучение юристов консультант плюс");
$APPLICATION->SetPageProperty("title", "Обучение КонсультантПлюс – курсы и консультации экспертов");
$APPLICATION->SetPageProperty("description", "Обучение работе с системой КонсультантПлюс для бухгалтеров, юристов, кадровых специалистов и руководителей. Индивидуальное обучение, практические рекомендации и помощь в эффективной работе с системой. Сервис для клиентов Консультант Плюс компании ЧДК");
$APPLICATION->SetTitle("Обучение КонсультантПлюс");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Обучение КонсультантПлюс</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="edu-hero reveal">
  <div class="edu-hero__inner">
    <div class="edu-hero__content">
      <h1 class="edu-hero__title"><span class="edu-hero__title-accent">Обучение</span> КонсультантПлюс</h1>
      <p class="edu-hero__text">КонсультантПлюс&nbsp;&mdash; мощный инструмент, который раскрывается в&nbsp;руках опытного пользователя.</p>
      <p class="edu-hero__subtext">Обучение поможет вам освоить базовые и&nbsp;расширенные возможности системы, чтобы работать быстрее, находить точные ответы и&nbsp;использовать все преимущества профессиональной правовой поддержки.</p>
      <a href="#" class="btn btn--purple edu-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Обучению КонсультантПлюс">Заказать</a>
    </div>
    <div class="edu-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/obuch-KP-hero.png" alt="Обучение КонсультантПлюс" class="edu-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== 4 ПРИЧИНЫ ПРОЙТИ ОБУЧЕНИЕ ====== -->
<section class="edu-features reveal">
  <div class="edu-features__inner">
    <h2 class="edu-features__title">4&nbsp;причины пройти обучение КонсультантПлюс</h2>
    <p class="edu-features__subtitle">Обучение бесплатно для&nbsp;пользователей КонсультантПлюс&nbsp;&mdash; клиентов ЧДК</p>

    <div class="edu-features__grid">
      <div class="edu-features__card reveal reveal--delay-1">
        <svg class="icon edu-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#obuch-KP-prof"></use></svg>
        <div class="edu-features__body">
          <h3 class="edu-features__name">Работайте как&nbsp;профессионал</h3>
          <p class="edu-features__desc">Освойте все&nbsp;инструменты КонсультантПлюс&nbsp;&mdash; от&nbsp;быстрого поиска до&nbsp;глубокой аналитики и&nbsp;судебной практики</p>
        </div>
      </div>
      <div class="edu-features__card reveal reveal--delay-2">
        <svg class="icon edu-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#obuch-KP-kurs"></use></svg>
        <div class="edu-features__body">
          <h3 class="edu-features__name">Курсы под&nbsp;ваши задачи</h3>
          <p class="edu-features__desc">Обучение для&nbsp;бухгалтеров, юристов, руководителей и&nbsp;других специалистов с&nbsp;учётом особенностей именно вашей работы</p>
        </div>
      </div>
      <div class="edu-features__card reveal reveal--delay-3">
        <svg class="icon edu-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#obuch-KP-praktika"></use></svg>
        <div class="edu-features__body">
          <h3 class="edu-features__name">Практика на&nbsp;реальных примерах</h3>
          <p class="edu-features__desc">Разбираем ситуации, с&nbsp;которыми вы&nbsp;сталкиваетесь каждый день, и&nbsp;учим приёмам, экономящим часы поиска</p>
        </div>
      </div>
      <div class="edu-features__card reveal reveal--delay-4">
        <svg class="icon edu-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#obuch-KP-kvalif"></use></svg>
        <div class="edu-features__body">
          <h3 class="edu-features__name">Подтвердите квалификацию</h3>
          <p class="edu-features__desc">По&nbsp;итогам обучения выдаём официальный документ, подтверждающий ваши навыки работы с&nbsp;КонсультантПлюс</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="edu-form">
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
