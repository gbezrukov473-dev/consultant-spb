<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "семинары консультант плюс, практикумы консультант плюс, вебинары консультант плюс, обучение консультант плюс, семинары для бухгалтеров, семинары для юристов, семинары для кадровиков, мероприятия консультант плюс");
$APPLICATION->SetPageProperty("title", "Семинары и вебинары КонсультантПлюс в Санкт-Петербурге");
$APPLICATION->SetPageProperty("description", "Семинары, вебинары и практикумы по актуальным изменениям законодательства для пользователей КонсультантПлюс. Экспертные разборы, практические рекомендации и ответы на вопросы специалистов. Эксклюзивно для клиентов Консультант Плюс компании ЧДК в Санкт-Петербурге");
$APPLICATION->SetTitle("Семинары-тренинги");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Семинары-тренинги</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="st-hero reveal">
  <div class="st-hero__inner">
    <div class="st-hero__content">
      <h1 class="st-hero__title">Семинары-тренинги</h1>
      <p class="st-hero__text">Актуальные темы, живое общение и&nbsp;разбор сложных вопросов с&nbsp;ведущими экспертами КонсультантПлюс.</p>
      <p class="st-hero__subtext">На&nbsp;семинарах ЧДК&#8209;Право вы&nbsp;не&nbsp;просто слушаете, а&nbsp;разбираетесь в&nbsp;тонкостях и&nbsp;получаете практические ответы. Выбирайте семинары по&nbsp;бухгалтерии, праву и&nbsp;налогам&nbsp;&mdash; повышайте квалификацию вместе с&nbsp;нами.</p>
      <a href="#" class="btn btn--purple st-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Семинарам-тренингам">Записаться</a>
    </div>
    <div class="st-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/semin-tren-hero.png" alt="Семинары-тренинги КонсультантПлюс" class="st-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== 4 ПРИЧИНЫ ВЫБРАТЬ СЕМИНАРЫ ====== -->
<section class="st-features reveal">
  <div class="st-features__inner">
    <h2 class="st-features__title">4&nbsp;причины выбрать семинары ЧДК</h2>
    <p class="st-features__subtitle">Участие в&nbsp;семинарах-тренингах бесплатно для&nbsp;пользователей КонсультантПлюс&nbsp;&mdash; клиентов ЧДК</p>

    <div class="st-features__grid">
      <div class="st-features__card reveal reveal--delay-1">
        <svg class="icon st-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ST-masklass"></use></svg>
        <div class="st-features__body">
          <h3 class="st-features__name">Мастер-класс от&nbsp;экспертов</h3>
          <p class="st-features__desc">Наши специалисты&#8209;практики знают КонсультантПлюс до&nbsp;мелочей и&nbsp;покажут, как использовать скрытые возможности системы и&nbsp;эффективно решать рабочие задачи</p>
        </div>
      </div>
      <div class="st-features__card reveal reveal--delay-2">
        <svg class="icon st-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ST-toplect"></use></svg>
        <div class="st-features__body">
          <h3 class="st-features__name">Вебинары топ-лекторов</h3>
          <p class="st-features__desc">Вебинары с&nbsp;разбором сложных тем от&nbsp;ведущих экспертов: Крутякова&nbsp;Т.Л., Климова&nbsp;М.М., Бобовникова&nbsp;С.А., Чамкина&nbsp;Н.С., Куликов&nbsp;А.А. и&nbsp;другие</p>
        </div>
      </div>
      <div class="st-features__card reveal reveal--delay-3">
        <svg class="icon st-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ST-format"></use></svg>
        <div class="st-features__body">
          <h3 class="st-features__name">Удобный формат и&nbsp;напоминания</h3>
          <p class="st-features__desc">Вы&nbsp;всегда в&nbsp;курсе ближайших семинаров и&nbsp;новых тем&nbsp;&mdash; расписание и&nbsp;уведомления приходят на&nbsp;почту и&nbsp;в&nbsp;личный кабинет</p>
        </div>
      </div>
      <div class="st-features__card reveal reveal--delay-4">
        <svg class="icon st-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ST-sertificat"></use></svg>
        <div class="st-features__body">
          <h3 class="st-features__name">Сертификат участника</h3>
          <p class="st-features__desc">После семинара вы&nbsp;получаете сертификат&nbsp;&mdash; подтверждение того, что вы&nbsp;прошли обучение и&nbsp;разобрали актуальные темы с&nbsp;экспертами</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ЗАПИСАТЬСЯ НА СЕМИНАРЫ ====== -->
<section class="st-howto reveal">
  <div class="st-howto__inner">
    <h2 class="st-howto__title">Как записаться на&nbsp;семинары-тренинги</h2>

    <div class="st-howto__body">
      <div class="st-howto__left">
        <div class="st-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/ST-zapis.png" alt="Скриншот — кнопка «Записаться» в личном кабинете ЧДК-Онлайн" class="st-howto__screenshot" loading="lazy" />
        </div>
        <p class="st-howto__caption">При помощи кнопки &laquo;Записаться&raquo; в&nbsp;личном кабинете ЧДК-Онлайн</p>
      </div>

      <div class="st-howto__right">
        <div class="st-howto__feature reveal reveal--delay-1">
          <div class="st-howto__feature-circle st-howto__feature-circle--purple">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="st-howto__feature-text">В&nbsp;личном кабинете ЧДК-Онлайн</span>
        </div>
        <div class="st-howto__feature reveal reveal--delay-2">
          <div class="st-howto__feature-circle st-howto__feature-circle--orange">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="st-howto__feature-text">Через персонального менеджера</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial reveal" id="st-form">
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
