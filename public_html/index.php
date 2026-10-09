<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("КонсультантПлюс — Официальный представитель в Санкт-Петербурге");
$APPLICATION->SetPageProperty("description", "СПБ Консультант — официальный представитель КонсультантПлюс в Санкт-Петербурге и Ленобласти. Готовые смарт-комплекты для бухгалтера, юриста, руководителя и бюджетных организаций. Бесплатный пробный доступ на 2 дня.");
?>


<!-- ====== HERO ====== -->
<section class="hero">
  <div class="hero__inner">
    <div class="hero__content">
      <h1 class="hero__title">
        <span class="hero__title--orange">Официальный представитель</span>
        <span class="hero__title--black">КонсультантПлюс в&nbsp;Санкт-Петербурге и&nbsp;Ленобласти</span>
      </h1>
      <p class="hero__subtitle">
        Быстрый поиск решений для бухгалтеров, юристов и&nbsp;руководителей
      </p>
      <div class="hero__actions hero__actions--desktop">
        <a href="/systems/" class="btn btn--yellow">Купить Консультант Плюс</a>
        <a href="/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/" class="btn btn--gray">Попробовать бесплатно</a>
      </div>
    </div>
    <div class="hero__images">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/interface.png?v=2" alt="Интерфейс КонсультантПлюс" class="hero__img" />
    </div>
    <div class="hero__actions hero__actions--mobile">
      <a href="/systems/" class="btn btn--yellow">Купить Консультант Плюс</a>
      <a href="/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/" class="btn btn--gray">Попробовать бесплатно</a>
    </div>
  </div>
</section>


<!-- ====== СМАРТ-КОМПЛЕКТЫ ====== -->
<section class="sk reveal">
  <div class="sk__inner">
    <h2 class="sk__title">Мы выбрали для&nbsp;Вас<br>оптимальные смарт-комплекты</h2>

    <div class="sk__row sk__row--top">
      <div class="sk-card sk-card--purple reveal reveal--delay-1">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/SK-buhgalter.png" alt="КонсультантПлюс для бухгалтера" class="sk-card__icon sk-card__icon--buh" />
        <div class="sk-card__header">
          <h3 class="sk-card__title">Бухгалтеру</h3>
        </div>
        <div class="sk-card__body">
          <p class="sk-card__text">
            Ваш надёжный проводник в&nbsp;мире цифр и&nbsp;законов&nbsp;&mdash; все актуальные материалы
            по&nbsp;бухучёту, налогам и&nbsp;отчётности. Последние изменения в&nbsp;законодательстве
            для уверенной работы, без рисков и&nbsp;штрафов.
          </p>
          <div class="sk-card__actions">
            <a href="#" class="btn btn--yellow btn--sm" data-open-modal="modalPrice">Узнать цену</a>
            <a href="/systems/bukhgalteru/" class="btn btn--link-yellow btn--sm">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="sk-card sk-card--orange reveal reveal--delay-2">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/SK-jurist.png" alt="КонсультантПлюс для юриста" class="sk-card__icon sk-card__icon--jur" />
        <div class="sk-card__header">
          <h3 class="sk-card__title">Юристу</h3>
        </div>
        <div class="sk-card__body">
          <p class="sk-card__text">
            Профессиональный инструмент для победы в&nbsp;спорах и&nbsp;защиты интересов&nbsp;&mdash;
            полная база судебной практики, актуальные законы и&nbsp;формы документов. Аналитика
            позиций судов по&nbsp;сложным вопросам.
          </p>
          <div class="sk-card__actions">
            <a href="#" class="btn btn--yellow btn--sm" data-open-modal="modalPrice">Узнать цену</a>
            <a href="/systems/yuristu/" class="btn btn--link-yellow btn--sm">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="sk-card sk-card--purple reveal reveal--delay-3">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/SK-rukovoditel.png" alt="КонсультантПлюс для руководителя" class="sk-card__icon sk-card__icon--ruk" />
        <div class="sk-card__header">
          <h3 class="sk-card__title">Руководителю</h3>
        </div>
        <div class="sk-card__body">
          <p class="sk-card__text">
            Универсальная система для контроля рисков&nbsp;&mdash; принимайте важные стратегические
            решения, опираясь только на&nbsp;проверенные данные. Мониторинг изменений в&nbsp;законах
            и&nbsp;экспертные материалы по&nbsp;правовым вопросам.
          </p>
          <div class="sk-card__actions">
            <a href="#" class="btn btn--yellow btn--sm" data-open-modal="modalPrice">Узнать цену</a>
            <a href="/systems/rukovoditelyu/" class="btn btn--link-yellow btn--sm">Подробнее</a>
          </div>
        </div>
      </div>
    </div>

    <div class="sk__row sk__row--bottom">
      <div class="sk-card sk-card--orange reveal reveal--delay-1">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/SK-bujet-org.png" alt="КонсультантПлюс для бюджетной организации" class="sk-card__icon sk-card__icon--byudzhet" />
        <div class="sk-card__header">
          <h3 class="sk-card__title sk-card__title--sm">Бюджетной<br>организации</h3>
        </div>
        <div class="sk-card__body">
          <p class="sk-card__text">
            Специализированная информация по&nbsp;госзакупкам (44&#8209;ФЗ, 223&#8209;ФЗ),
            бюджетному учёту и&nbsp;трудовым правам госслужащих. Актуальные формы документов
            и&nbsp;методические рекомендации для стабильной работы.
          </p>
          <div class="sk-card__actions">
            <a href="#" class="btn btn--yellow btn--sm" data-open-modal="modalPrice">Узнать цену</a>
            <a href="/systems/byudzhetnoy-organizatsii/" class="btn btn--link-yellow btn--sm">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="sk-card sk-card--purple reveal reveal--delay-2">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/SK-kadr-ruk.png" alt="КонсультантПлюс для кадрового специалиста" class="sk-card__icon sk-card__icon--kadry" />
        <div class="sk-card__header">
          <h3 class="sk-card__title sk-card__title--sm">Кадровому<br>специалисту</h3>
        </div>
        <div class="sk-card__body">
          <p class="sk-card__text">
            Актуальные трудовые законы, готовые формы документов. Консультации по&nbsp;сложным
            ситуациям с&nbsp;сотрудниками и&nbsp;проверки на&nbsp;соответствие требованиям закона.
            Создавайте надёжную основу для работы коллектива.
          </p>
          <div class="sk-card__actions">
            <a href="#" class="btn btn--yellow btn--sm" data-open-modal="modalPrice">Узнать цену</a>
            <a href="/systems/kadroviku/" class="btn btn--link-yellow btn--sm">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП (статика + форма) ====== -->
<section class="trial reveal">
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
            "SUBMIT_CLASS"       => "modal__submit--purple",
            "LEAD_COMMENT"       => "Запрос бесплатного доступа на 2 дня",
          )
        );?>
      </div>
    </div>
  </div>
</section>


<!-- ====== СЕРВИС ЧДК ====== -->
<section class="chdk reveal">
  <div class="chdk__inner">
    <h2 class="chdk__title">Сервис ЧДК</h2>
    <p class="chdk__subtitle">Всем клиентам КонсультантПлюс предоставляется доступ к&nbsp;уникальному сервису ЧДК</p>

    <div class="chdk__grid">
      <div class="chdk-card chdk-card--yellow reveal reveal--delay-1">
        <h3 class="chdk-card__title chdk-card__title--yellow">Экспертная линия консультаций</h3>
        <p class="chdk-card__text">Развёрнутые ответы и&nbsp;разбор ситуации по&nbsp;правовым нормам</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--yellow" data-open-modal="modalService" data-lead-comment="Запрос по Линии консультаций">Задать вопрос</a>
          <a href="/consult/" class="btn btn--link-yellow btn--sm chdk-card__link">Подробнее</a>
        </div>
      </div>

      <div class="chdk-card chdk-card--purple reveal reveal--delay-2">
        <h3 class="chdk-card__title chdk-card__title--purple">Персональный менеджер</h3>
        <p class="chdk-card__text">Поможет решить любой вопрос и&nbsp;разобраться с&nbsp;системой КонсультантПлюс</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--purple" data-open-modal="modalService" data-lead-comment="Запрос по Персональному менеджеру">Обратиться</a>
          <a href="/services/personalnyy-menedzher/" class="btn btn--link-purple btn--sm chdk-card__link">Подробнее</a>
        </div>
      </div>

      <div class="chdk-card chdk-card--yellow reveal reveal--delay-3">
        <h3 class="chdk-card__title chdk-card__title--yellow">Обучение работе с&nbsp;КонсультантПлюс</h3>
        <p class="chdk-card__text">Обучение эффективной работе с&nbsp;КонсультантПлюс</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--yellow" data-open-modal="modalService" data-lead-comment="Запрос по Обучению КонсультантПлюс">Заказать</a>
          <a href="/services/obuchenie-rabote-s-konsultantplyus/" class="btn btn--link-yellow btn--sm chdk-card__link">Подробнее</a>
        </div>
      </div>

      <div class="chdk-card chdk-card--purple reveal reveal--delay-1">
        <h3 class="chdk-card__title chdk-card__title--purple">Запись на&nbsp;семинары-тренинги</h3>
        <p class="chdk-card__text">От экспертов КонсультантПлюс и&nbsp;ТОП-лекторов</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--purple" data-open-modal="modalService" data-lead-comment="Запрос по Семинарам-тренингам">Записаться</a>
          <a href="/services/seminary-i-praktikumy/" class="btn btn--link-purple btn--sm chdk-card__link">Подробнее</a>
        </div>
      </div>

      <div class="chdk-card chdk-card--yellow reveal reveal--delay-2">
        <h3 class="chdk-card__title chdk-card__title--yellow">Техподдержка</h3>
        <p class="chdk-card__text">Адаптация, модификация и&nbsp;сопровождение системы</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--yellow" data-open-modal="modalService" data-lead-comment="Запрос по Техподдержке КонсультантПлюс">Обратиться</a>
          <a href="/services/obsluzhivanie-programmy-konsultant-plyus/" class="btn btn--link-yellow btn--sm chdk-card__link">Подробнее</a>
        </div>
      </div>

      <div class="chdk-card chdk-card--purple reveal reveal--delay-3">
        <h3 class="chdk-card__title chdk-card__title--purple">Проверка контрагента</h3>
        <p class="chdk-card__text">Проверьте надёжность любой организации или&nbsp;ИП</p>
        <div class="chdk-card__actions">
          <a href="#" class="btn btn--sm chdk-card__btn chdk-card__btn--purple" data-open-modal="modalService" data-lead-comment="Запрос по Проверке контрагента">Проверить</a>
          <a href="/services/proverka-kontragenta/" class="btn btn--link-purple btn--sm chdk-card__link">Подробнее</a>
        </div>
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
            <div class="reviews__slide" data-index="0">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz1.png" alt="Отзыв ООО «БАДИС»" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="1">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz2.png" alt="Отзыв ЗАО «Тепломагистраль»" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="2">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz3.png" alt="Отзыв ООО «РЭЦ «Петрохим-Технология»" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="3">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz4.png" alt="Отзыв НО «ФКР МКД СПБ»" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="4">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz5.png" alt="Отзыв РГПУ им. А. И. Герцена" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
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






<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
