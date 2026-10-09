<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "тестовый доступ консультант плюс, демо версия консультант плюс, попробовать консультант плюс бесплатно, бесплатный период консультант плюс спб, пробный консультант плюс, консультант плюс бесплатно");
$APPLICATION->SetPageProperty("title", "Пробный доступ к КонсультантПлюс на 2 дня бесплатно");
$APPLICATION->SetPageProperty("description", "Бесплатный пробный доступ к КонсультантПлюс на 2 дня. Полная версия: документы, судебная практика, экспертные материалы и линия консультаций. Оцените все возможности системы. Официальный представитель в СПб.");
$APPLICATION->SetTitle("Пробный доступ КонсультантПлюс на 2 дня");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/o-sisteme-konsultantplyus/" class="breadcrumbs__link">О СПС КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Пробный доступ КонсультантПлюс на 2 дня</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="tp-hero reveal">
  <div class="tp-hero__inner">
    <div class="tp-hero__content">
      <h1 class="tp-hero__title">Пробный доступ КонсультантПлюс на&nbsp;2&nbsp;дня</h1>
      <p class="tp-hero__text">Лучший способ понять, подходит&nbsp;ли вам система&nbsp;— поработать с&nbsp;ней.</p>
      <p class="tp-hero__text">Получите бесплатный полный доступ к&nbsp;документам, судебной практике и&nbsp;экспертным материалам.</p>
      <a href="#tp-form" class="btn btn--purple tp-hero__btn">Получить доступ</a>
    </div>
    <div class="tp-hero__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/hero-trial-box.png" alt="Пробный доступ КонсультантПлюс" class="tp-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== БАННЕР ====== -->
<section class="tp-banner reveal">
  <div class="tp-banner__inner">
    <div class="tp-banner__content">
      <h2 class="tp-banner__title">
        <div>Оцените <b>КонсультантПлюс</b></div>
        <div class="tp-banner__title-row2">
          <span>прямо сейчас</span>
          <span class="tp-banner__badge">2 дня бесплатно</span>
        </div>
      </h2>
      <a href="#tp-form" class="btn btn--yellow tp-banner__btn">Получить доступ</a>
    </div>
    <div class="tp-banner__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/banner-devices.png" alt="Устройства" class="tp-banner__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ЧТО ВЫ УСПЕЕТЕ ЗА 2 ДНЯ ====== -->
<section class="tp-days reveal">
  <div class="tp-days__inner">
    <h2 class="tp-days__title">Что вы успеете сделать за&nbsp;2&nbsp;дня?</h2>
    <p class="tp-days__subtitle">Вы оцените преимущества КонсультантПлюс на&nbsp;практике</p>
    <div class="tp-days__grid">
      <div class="tp-days__item reveal reveal--delay-1">
        <div class="tp-days__icon tp-days__icon--purple">
          <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-2days-1"></use></svg>
        </div>
        <div class="tp-days__item-body">
          <h3 class="tp-days__item-title">Решения&nbsp;— в&nbsp;пару кликов</h3>
          <p class="tp-days__item-text">Убедитесь, как&nbsp;легко и&nbsp;быстро находить ответы, готовить документы и&nbsp;быть уверенным в&nbsp;их&nbsp;актуальности.</p>
        </div>
      </div>
      <div class="tp-days__item reveal reveal--delay-2">
        <div class="tp-days__icon tp-days__icon--yellow">
          <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-2days-2"></use></svg>
        </div>
        <div class="tp-days__item-body">
          <h3 class="tp-days__item-title">Все&nbsp;инструменты под&nbsp;рукой</h3>
          <p class="tp-days__item-text">Работайте с&nbsp;огромной базой документов, уникальными аналитическими материалами и&nbsp;готовыми образцами.</p>
        </div>
      </div>
      <div class="tp-days__item reveal reveal--delay-3">
        <div class="tp-days__icon tp-days__icon--yellow">
          <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-2days-3"></use></svg>
        </div>
        <div class="tp-days__item-body">
          <h3 class="tp-days__item-title">Линия консультаций</h3>
          <p class="tp-days__item-text">Задайте свой вопрос Линии консультаций и&nbsp;получите ответ от&nbsp;профильных экспертов с&nbsp;практическими рекомендациями.</p>
        </div>
      </div>
      <div class="tp-days__item reveal reveal--delay-4">
        <div class="tp-days__icon tp-days__icon--purple">
          <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-2days-4"></use></svg>
        </div>
        <div class="tp-days__item-body">
          <h3 class="tp-days__item-title">Дополнительные привилегии</h3>
          <p class="tp-days__item-text">Получите доступ к&nbsp;закрытому сервису ЧДК-Онлайн для клиентов и&nbsp;записывайтесь на&nbsp;семинары-тренинги.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== ФОРМА ЗАЯВКИ ====== -->
<section class="tp-form reveal" id="tp-form">
  <div class="tp-form__inner">
    <div class="tp-form__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/form-gift-orange.png" alt="Подарок" class="tp-form__img" loading="lazy" />
    </div>
    <div class="tp-form__right">
      <h2 class="tp-form__title">Бесплатный пробный доступ</h2>
      <p class="tp-form__desc">Протестируйте систему и&nbsp;убедитесь в&nbsp;её&nbsp;удобстве. Наш&nbsp;специалист подберёт для&nbsp;вас&nbsp;подходящий комплект&nbsp;— это&nbsp;займёт не&nbsp;более 5&nbsp;минут, и&nbsp;проведёт персональную презентацию.</p>
      <div class="tp-form__card">
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


<!-- ====== ПОЧЕМУ СТОИТ ВЫБРАТЬ ====== -->
<section class="tp-adv reveal">
  <div class="tp-adv__inner">
    <h2 class="tp-adv__title">Почему стоит выбрать СПС&nbsp;КонсультантПлюс</h2>
    <div class="tp-adv__grid">
      <div class="tp-adv__card reveal reveal--delay-1">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-1"></use></svg>
        <p class="tp-adv__text">Крупнейшая и&nbsp;актуальная правовая база&nbsp;— более <span class="tp-adv__accent--purple">360&nbsp;млн документов</span> с&nbsp;ежедневным обновлением</p>
      </div>
      <div class="tp-adv__card reveal reveal--delay-2">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-2"></use></svg>
        <p class="tp-adv__text"><span class="tp-adv__accent--yellow">Персонализированные рекомендации</span> для вашей профессии с&nbsp;помощью 9&nbsp;готовых профилей</p>
      </div>
      <div class="tp-adv__card reveal reveal--delay-3">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-3"></use></svg>
        <p class="tp-adv__text"><span class="tp-adv__accent--purple">Контекст в&nbsp;один клик</span>&nbsp;— нажав на&nbsp;любую норму, вы получаете всю связанную практику и&nbsp;разъяснения</p>
      </div>
      <div class="tp-adv__card reveal reveal--delay-1">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-4"></use></svg>
        <p class="tp-adv__text">Экспертное мнение в&nbsp;комплекте: авторские консультационные <span class="tp-adv__accent--yellow">материалы и&nbsp;семинары от&nbsp;топовых лекторов</span></p>
      </div>
      <div class="tp-adv__card reveal reveal--delay-2">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-5"></use></svg>
        <p class="tp-adv__text"><span class="tp-adv__accent--purple">Уникальные сервисы:</span> конструкторы документов, калькуляторы, видеоразборы и&nbsp;специальный поиск судебной практики</p>
      </div>
      <div class="tp-adv__card reveal reveal--delay-3">
        <svg class="icon tp-adv__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-adv-6"></use></svg>
        <p class="tp-adv__text"><span class="tp-adv__accent--yellow">Современный технологический фундамент</span>, включая искусственный интеллект, для стабильной работы с&nbsp;огромным массивом данных</p>
      </div>
    </div>
  </div>
</section>


<!-- ====== ОТЗЫВЫ КЛИЕНТОВ ====== -->
<section class="reviews reveal">
  <div class="reviews__container">
    <div class="reviews__inner">
      <h2 class="reviews__title">Отзывы клиентов</h2>
      <div class="reviews__carousel">
        <button class="reviews__btn reviews__btn--prev" aria-label="Предыдущий отзыв">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="reviews__viewport">
          <div class="reviews__track">
            <div class="reviews__slide" data-index="0"><div class="reviews__card"><img src="<?=SITE_TEMPLATE_PATH?>/images/otz1.png" alt="Отзыв ООО «БАДИС»" class="reviews__card-img" loading="lazy" /></div></div>
            <div class="reviews__slide" data-index="1"><div class="reviews__card"><img src="<?=SITE_TEMPLATE_PATH?>/images/otz2.png" alt="Отзыв ЗАО «Тепломагистраль»" class="reviews__card-img" loading="lazy" /></div></div>
            <div class="reviews__slide" data-index="2"><div class="reviews__card"><img src="<?=SITE_TEMPLATE_PATH?>/images/otz3.png" alt="Отзыв ООО «РЭЦ «Петрохим-Технология»" class="reviews__card-img" loading="lazy" /></div></div>
            <div class="reviews__slide" data-index="3"><div class="reviews__card"><img src="<?=SITE_TEMPLATE_PATH?>/images/otz4.png" alt="Отзыв НО «ФКР МКД СПБ»" class="reviews__card-img" loading="lazy" /></div></div>
            <div class="reviews__slide" data-index="4"><div class="reviews__card"><img src="<?=SITE_TEMPLATE_PATH?>/images/otz5.png" alt="Отзыв РГПУ им. А. И. Герцена" class="reviews__card-img" loading="lazy" /></div></div>
          </div>
        </div>
        <button class="reviews__btn reviews__btn--next" aria-label="Следующий отзыв">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
