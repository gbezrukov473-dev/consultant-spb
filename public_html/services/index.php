<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сервис ЧДК — КонсультантПлюс СПБ");
$APPLICATION->SetPageProperty("description", "Сервис ЧДК — полное техническое сопровождение, экспертная поддержка и обучение для клиентов КонсультантПлюс в Санкт-Петербурге.");
$APPLICATION->SetTitle("Сервис ЧДК");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Сервис ЧДК</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="sv-hero reveal">
  <div class="sv-hero__inner">
    <div class="sv-hero__content">
      <h1 class="sv-hero__title">Сервис <span class="sv-hero__title-accent">ЧДК</span></h1>
      <p class="sv-hero__text">КонсультантПлюс&nbsp;&mdash; это только начало. Сервис ЧДК добавляет к&nbsp;нему полное техническое сопровождение, экспертную поддержку и&nbsp;обучение клиентов.</p>
      <p class="sv-hero__subtext">Мы&nbsp;не&nbsp;просто предоставляем доступ к&nbsp;КонсультантПлюс&nbsp;&mdash; мы&nbsp;помогаем использовать систему максимально эффективно, чтобы вы&nbsp;экономили время и&nbsp;работали уверенно.</p>
      <a href="#" class="btn btn--purple sv-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Сервису ЧДК">Узнать больше</a>
    </div>
    <div class="sv-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/serv-chdk-hero.png" alt="Сервис ЧДК" class="sv-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ЧТО ВХОДИТ В СЕРВИС ЧДК ====== -->
<section class="chdk sv-chdk reveal">
  <div class="chdk__inner">
    <h2 class="chdk__title">Что входит в&nbsp;сервис ЧДК</h2>
    <p class="chdk__subtitle">Все дополнительные услуги включены в&nbsp;стоимость обслуживания системы КонсультантПлюс</p>

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


<!-- ====== ЛИЧНЫЙ КАБИНЕТ ЧДК-ОНЛАЙН ====== -->
<section class="sv-lk reveal">
  <div class="sv-lk__inner">
    <div class="sv-lk__content">
      <h2 class="sv-lk__title">Все эти преимущества&nbsp;&mdash; в&nbsp;вашем <strong>личном кабинете</strong></h2>

      <div class="sv-lk__badge-wrap">
        <span class="sv-lk__badge">ЧДК-Онлайн</span>
      </div>

      <div class="sv-lk__text">
        <p><strong>Личный кабинет ЧДК-Онлайн</strong>&nbsp;&mdash; это персональное пространство для&nbsp;работы с&nbsp;сервисами и&nbsp;возможностями, которое получает каждый клиент.</p>
        <p>Здесь собрано все, что делает подписку удобной и&nbsp;полезной: от&nbsp;быстрого доступа к&nbsp;сервисам до&nbsp;свежих новостей, полезных материалов и&nbsp;полного расписания семинаров.</p>
      </div>

      <div class="sv-lk__buttons">
        <a href="#" class="btn btn--yellow sv-lk__btn" data-open-modal="modalService" data-lead-comment="Запрос по Личному кабинету ЧДК-Онлайн">Получить доступ</a>
        <a href="/services/chto-delat-onlayn/" class="btn sv-lk__btn sv-lk__btn--outline">Узнать подробнее</a>
      </div>
    </div>

    <div class="sv-lk__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/service-notebook.png" alt="Личный кабинет ЧДК-Онлайн на ноутбуке" class="sv-lk__img" loading="lazy" />
    </div>
  </div>
</section>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
