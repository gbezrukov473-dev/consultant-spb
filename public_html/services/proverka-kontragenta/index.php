<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "проверка контрагента, проверка контрагента чдк, проверка организации по ИНН, проверка юридического лица, проверка надежности контрагента, анализ контрагента");
$APPLICATION->SetPageProperty("title", "Проверка контрагента от ЧДК – анализ и оценка рисков");
$APPLICATION->SetPageProperty("description", "Проверяйте контрагентов с помощью сервиса ЧДК: сведения о компании, судебные споры, исполнительные производства, банкротство и другие данные для оценки надежности партнеров. Уникальный сервис для клиентов Консультант Плюс компании ЧДК");
$APPLICATION->SetTitle("Проверка контрагента");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Проверка контрагента</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="pk-hero reveal">
  <div class="pk-hero__inner">
    <div class="pk-hero__content">
      <h1 class="pk-hero__title"><span class="pk-hero__title-accent">Проверка</span> контрагента</h1>
      <p class="pk-hero__text">Прежде чем начать работу с&nbsp;контрагентом, оцените риски возможного сотрудничества.</p>
      <p class="pk-hero__subtext">Финансовая отчётность, арбитражные дела, связи и&nbsp;госзакупки&nbsp;&mdash; получите все данные о&nbsp;компании или ИП из&nbsp;официальных источников в&nbsp;рамках вашего обслуживания.</p>
      <a href="#" class="btn btn--purple pk-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Проверке контрагента">Проверить</a>
    </div>
    <div class="pk-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/proverka-kontr-hero.png" alt="Проверка контрагента — КонсультантПлюс" class="pk-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ЧТО ВЫ УЗНАЕТЕ О КОНТРАГЕНТЕ ====== -->
<section class="pk-features reveal">
  <div class="pk-features__inner">
    <h2 class="pk-features__title">Что вы&nbsp;узнаете о&nbsp;контрагенте с&nbsp;ЧДК</h2>
    <p class="pk-features__subtitle">Сервис доступен для&nbsp;пользователей КонсультантПлюс&nbsp;&ndash; клиентов ЧДК</p>

    <div class="pk-features__grid">
      <div class="pk-features__card reveal reveal--delay-1">
        <svg class="icon pk-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PrKon-finsost"></use></svg>
        <div class="pk-features__body">
          <h3 class="pk-features__name">Финансовое состояние</h3>
          <p class="pk-features__desc">Бухгалтерская отчётность, выручка и&nbsp;прибыль, оценка платёжеспособности</p>
        </div>
      </div>
      <div class="pk-features__card reveal reveal--delay-2">
        <svg class="icon pk-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PrKon-sudrisk"></use></svg>
        <div class="pk-features__body">
          <h3 class="pk-features__name">Судебные риски и&nbsp;долги</h3>
          <p class="pk-features__desc">Арбитражные дела, исполнительные производства, сообщения о&nbsp;банкротстве</p>
        </div>
      </div>
      <div class="pk-features__card reveal reveal--delay-3">
        <svg class="icon pk-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PrKon-blagonad"></use></svg>
        <div class="pk-features__body">
          <h3 class="pk-features__name">Связи и&nbsp;благонадёжность</h3>
          <p class="pk-features__desc">Аффилированность, связи по&nbsp;директору и&nbsp;учредителям, лицензии, товарные знаки</p>
        </div>
      </div>
      <div class="pk-features__card reveal reveal--delay-4">
        <svg class="icon pk-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#PrKon-kontr"></use></svg>
        <div class="pk-features__body">
          <h3 class="pk-features__name">Госзакупки и&nbsp;контракты</h3>
          <p class="pk-features__desc">Заключённые госконтракты в&nbsp;качестве заказчика и&nbsp;поставщика, суммы и&nbsp;объёмы</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ПРОВЕРИТЬ НАДЕЖНОСТЬ КОНТРАГЕНТА ====== -->
<section class="pk-howto reveal">
  <div class="pk-howto__inner">
    <h2 class="pk-howto__title">Как проверить надежность контрагента</h2>

    <div class="pk-howto__body">
      <div class="pk-howto__left">
        <div class="pk-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/kak-prov-ka.png" alt="Скриншот — проверка контрагента в личном кабинете ЧДК-Онлайн" class="pk-howto__screenshot" loading="lazy" />
        </div>
        <p class="pk-howto__caption">При помощи сервиса в&nbsp;личном кабинете ЧДК-Онлайн</p>
      </div>

      <div class="pk-howto__right">
        <div class="pk-howto__step reveal reveal--delay-1">
          <div class="pk-howto__step-circle pk-howto__step-circle--purple">
            <span class="pk-howto__step-num">1</span>
          </div>
          <span class="pk-howto__step-text">Введите ИНН, ОГРН или ОГРНИП контрагента</span>
        </div>
        <div class="pk-howto__step reveal reveal--delay-2">
          <div class="pk-howto__step-circle pk-howto__step-circle--orange">
            <span class="pk-howto__step-num">2</span>
          </div>
          <span class="pk-howto__step-text">Выберите необходимые дополнительные сведения</span>
        </div>
        <div class="pk-howto__step reveal reveal--delay-3">
          <div class="pk-howto__step-circle pk-howto__step-circle--purple">
            <span class="pk-howto__step-num">3</span>
          </div>
          <span class="pk-howto__step-text">Нажмите &laquo;Проверить&raquo; и&nbsp;получите полный отчет</span>
        </div>
        <div class="pk-howto__step reveal reveal--delay-4">
          <div class="pk-howto__step-circle pk-howto__step-circle--orange">
            <span class="pk-howto__step-num">4</span>
          </div>
          <span class="pk-howto__step-text">Скачайте документ для&nbsp;использования в&nbsp;работе</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="pk-form">
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
