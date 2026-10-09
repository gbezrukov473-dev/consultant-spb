<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Личный кабинет ЧДК-Онлайн — КонсультантПлюс СПБ");
$APPLICATION->SetPageProperty("description", "Личный кабинет ЧДК-Онлайн — эксклюзивный сервис для пользователей КонсультантПлюс, клиентов ЧДК в Санкт-Петербурге.");
$APPLICATION->SetTitle("Личный кабинет ЧДК-Онлайн");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Личный кабинет ЧДК-Онлайн</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="lko-hero reveal">
  <div class="lko-hero__inner">
    <div class="lko-hero__content">
      <h1 class="lko-hero__title">Личный кабинет <span class="lko-hero__title-accent">ЧДК-Онлайн</span></h1>
      <p class="lko-hero__text">В&nbsp;личном кабинете ЧДК-Онлайн все под рукой.</p>
      <p class="lko-hero__subtext">Получайте консультации экспертов, участвуйте в&nbsp;семинарах, изучайте новости и&nbsp;полезные материалы, проверяйте надёжность контрагентов. Все устроено так, чтобы вы&nbsp;тратили меньше времени на&nbsp;поиск и&nbsp;больше&nbsp;&mdash; на&nbsp;решение задач.</p>
      <a href="#" class="btn btn--purple lko-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Личному кабинету ЧДК-Онлайн">Получить доступ</a>
    </div>
    <div class="lko-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/lk-chdk-hero.png" alt="Личный кабинет ЧДК-Онлайн" class="lko-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ЧТО ЖДЕТ ВАС В ЛК ====== -->
<section class="lko-features reveal">
  <div class="lko-features__inner">
    <h2 class="lko-features__title">Что ждет вас в&nbsp;личном кабинете ЧДК-Онлайн</h2>
    <p class="lko-features__subtitle">Эксклюзивный сервис для&nbsp;пользователей КонсультантПлюс&nbsp;&ndash; клиентов ЧДК</p>

    <div class="lko-features__grid">
      <div class="lko-features__card reveal reveal--delay-1">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-semtr"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Семинары-тренинги</h3>
          <p class="lko-features__desc">Актуальное расписание и&nbsp;удобная онлайн-регистрация, записи и&nbsp;сертификаты для&nbsp;участников</p>
        </div>
      </div>
      <div class="lko-features__card reveal reveal--delay-2">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-linkons"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Линия консультаций</h3>
          <p class="lko-features__desc">Задавайте вопросы экспертам по&nbsp;праву, налогам и&nbsp;бухгалтерии, запрашивайте нужные документы</p>
        </div>
      </div>
      <div class="lko-features__card reveal reveal--delay-3">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-persman"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Персональный менеджер</h3>
          <p class="lko-features__desc">Ваш личный помощник, который поможет решить любой вопрос о&nbsp;работе с&nbsp;КонсультантПлюс</p>
        </div>
      </div>
      <div class="lko-features__card reveal reveal--delay-1">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-material"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Новости и&nbsp;материалы</h3>
          <p class="lko-features__desc">Новости законодательства, видео, подборки изменений и&nbsp;готовые решения по&nbsp;популярным темам</p>
        </div>
      </div>
      <div class="lko-features__card reveal reveal--delay-2">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-prov-kontrag"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Проверка контрагента</h3>
          <p class="lko-features__desc">Оценивайте надёжность по&nbsp;официальным источникам: финансы, суды, долги, госзакупки</p>
        </div>
      </div>
      <div class="lko-features__card reveal reveal--delay-3">
        <svg class="icon lko-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#lk-chdk-techsupp"></use></svg>
        <div class="lko-features__body">
          <h3 class="lko-features__name">Техническая поддержка</h3>
          <p class="lko-features__desc">Оперативно решим проблемы с&nbsp;настройкой, обновлением или восстановлением системы</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ВОЙТИ В ЛИЧНЫЙ КАБИНЕТ ====== -->
<section class="lko-howto reveal">
  <div class="lko-howto__inner">
    <h2 class="lko-howto__title">Как войти в&nbsp;личный кабинет ЧДК-Онлайн</h2>

    <div class="lko-howto__body">
      <div class="lko-howto__left">
        <div class="lko-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/kak-voiti-chdk.png" alt="Интерфейс личного кабинета ЧДК-Онлайн" class="lko-howto__screenshot" loading="lazy" />
        </div>
        <p class="lko-howto__caption">Интерфейс личного кабинета ЧДК-Онлайн</p>
      </div>

      <div class="lko-howto__right">
        <div class="lko-howto__step reveal reveal--delay-1">
          <div class="lko-howto__step-circle lko-howto__step-circle--purple">
            <span class="lko-howto__step-num">1</span>
          </div>
          <div class="lko-howto__step-content">
            <span class="lko-howto__step-text">Нажмите кнопку &laquo;Личный кабинет&raquo; в&nbsp;меню сайта или перейдите <a href="https://online.gk4dk.ru/" class="lko-howto__link" target="_blank" rel="noopener noreferrer">по&nbsp;ссылке</a></span>
          </div>
        </div>
        <div class="lko-howto__step reveal reveal--delay-2">
          <div class="lko-howto__step-circle lko-howto__step-circle--orange">
            <span class="lko-howto__step-num">2</span>
          </div>
          <div class="lko-howto__step-content">
            <span class="lko-howto__step-text">Введите логин и&nbsp;пароль, полученные при&nbsp;подключении</span>
          </div>
        </div>
        <div class="lko-howto__step reveal reveal--delay-3">
          <div class="lko-howto__step-circle lko-howto__step-circle--purple">
            <span class="lko-howto__step-num">3</span>
          </div>
          <div class="lko-howto__step-content">
            <span class="lko-howto__step-text">Если забыли данные&nbsp;&mdash; воспользуйтесь формой восстановления или обратитесь к&nbsp;своему персональному менеджеру</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="lko-form">
  <div class="trial__inner">
    <div class="trial__card">
      <div class="trial__left">
        <h2 class="trial__title">
          У&nbsp;вас еще нет личного кабинета? Получите <span class="trial__title--orange">пробный доступ</span> и&nbsp;оцените все преимущества <span class="trial__title--orange">ЧДК-Онлайн</span>
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
