<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "техническая поддержка консультант плюс, консультант плюс техподдержка, поддержка пользователей консультант плюс, адаптация консультант плюс, настройка консультант плюс, установка консультант плюс");
$APPLICATION->SetPageProperty("title", "Техническая поддержка КонсультантПлюс в Санкт-Петербурге");
$APPLICATION->SetPageProperty("description", "Специалисты службы поддержки ЧДК помогут решить технические вопросы по работе КонсультантПлюс: установка, обновление, настройка и восстановление работоспособности системы. Эксклюзивный сервис для клиентов в Санкт-Петербурге.");
$APPLICATION->SetTitle("Техническая поддержка");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Техническая поддержка</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="ts-hero reveal">
  <div class="ts-hero__inner">
    <div class="ts-hero__content">
      <h1 class="ts-hero__title">Техническая <span class="ts-hero__title-accent">поддержка</span></h1>
      <p class="ts-hero__text">Чтобы система КонсультантПлюс работала без&nbsp;сбоев, а&nbsp;документы всегда были актуальны, не&nbsp;нужно разбираться в&nbsp;технических тонкостях.</p>
      <p class="ts-hero__subtext">Просто доверьте это нам&nbsp;&mdash; техподдержка ЧДК полностью возьмёт на&nbsp;себя настройку, обновление и&nbsp;обслуживание.</p>
      <a href="#" class="btn btn--purple ts-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Техподдержке КонсультантПлюс">Обратиться</a>
    </div>
    <div class="ts-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/tech-supp-hero.png" alt="Техническая поддержка КонсультантПлюс" class="ts-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== КАК ТЕХПОДДЕРЖКА ЗАБОТИТСЯ О СИСТЕМЕ ====== -->
<section class="ts-features reveal">
  <div class="ts-features__inner">
    <h2 class="ts-features__title">Как техподдержка ЧДК заботится о&nbsp;вашей системе</h2>
    <p class="ts-features__subtitle">Профессиональное обслуживание для&nbsp;пользователей КонсультантПлюс&nbsp;&mdash; клиентов ЧДК</p>

    <div class="ts-features__grid">
      <div class="ts-features__card reveal reveal--delay-1">
        <svg class="icon ts-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#TS-actinf"></use></svg>
        <div class="ts-features__body">
          <h3 class="ts-features__name">Всегда актуальная информация</h3>
          <p class="ts-features__desc">Ежедневное автоматическое обновление системы&nbsp;&mdash; вы&nbsp;всегда получаете свежие документы и&nbsp;изменения в&nbsp;законодательстве</p>
        </div>
      </div>
      <div class="ts-features__card reveal reveal--delay-2">
        <svg class="icon ts-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#TS-reshpr"></use></svg>
        <div class="ts-features__body">
          <h3 class="ts-features__name">Быстрое решение проблем</h3>
          <p class="ts-features__desc">Оперативное удалённое подключение, диагностика проблемы и&nbsp;восстановление системы&nbsp;&mdash; без&nbsp;необходимости вашего участия</p>
        </div>
      </div>
      <div class="ts-features__card reveal reveal--delay-3">
        <svg class="icon ts-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#TS-servobsl"></use></svg>
        <div class="ts-features__body">
          <h3 class="ts-features__name">Комплексное обслуживание</h3>
          <p class="ts-features__desc">Установка, настройка, модификации, замена информационных банков&nbsp;&mdash; вы&nbsp;просто работаете, а&nbsp;мы&nbsp;берём все технические вопросы на&nbsp;себя</p>
        </div>
      </div>
      <div class="ts-features__card reveal reveal--delay-4">
        <svg class="icon ts-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#TS-bezopasn"></use></svg>
        <div class="ts-features__body">
          <h3 class="ts-features__name">С&nbsp;заботой о&nbsp;безопасности</h3>
          <p class="ts-features__desc">Подключение к&nbsp;ПК только с&nbsp;вашего разрешения, многоуровневая защита данных и&nbsp;ежедневный мониторинг работоспособности системы</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ОБРАТИТЬСЯ В ТЕХПОДДЕРЖКУ ====== -->
<section class="ts-howto reveal">
  <div class="ts-howto__inner">
    <h2 class="ts-howto__title">Как обратиться в&nbsp;техническую поддержку</h2>

    <div class="ts-howto__body">
      <div class="ts-howto__left">
        <div class="ts-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/TS-kak-obrat.png" alt="Скриншот — онлайн-чат в личном кабинете ЧДК-Онлайн" class="ts-howto__screenshot" loading="lazy" />
        </div>
        <p class="ts-howto__caption">При помощи онлайн-чата в&nbsp;личном кабинете ЧДК-Онлайн</p>
      </div>

      <div class="ts-howto__right">
        <div class="ts-howto__feature reveal reveal--delay-1">
          <div class="ts-howto__feature-circle ts-howto__feature-circle--purple">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="ts-howto__feature-text">В&nbsp;личном кабинете ЧДК-Онлайн</span>
        </div>
        <div class="ts-howto__feature reveal reveal--delay-2">
          <div class="ts-howto__feature-circle ts-howto__feature-circle--orange">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="ts-howto__feature-text">Через персонального менеджера</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="ts-form">
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
