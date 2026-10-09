<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "консультант плюс для руководителя, консультант плюс руководителю, контроль рисков бизнеса, отслеживание изменений в законах, избежать штрафов компании");
$APPLICATION->SetPageProperty("title", "КонсультантПлюс для руководителя — контроль рисков");
$APPLICATION->SetPageProperty("description", "КонсультантПлюс руководителю в СПб: защита бизнеса от штрафов, проверка контрагентов, контроль сделок. Получите выгодную цену на Консультант Плюс от официального представителя в СПб");
$APPLICATION->SetTitle("КонсультантПлюс для руководителя");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/systems/" class="breadcrumbs__link">Системы КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">КонсультантПлюс для руководителя</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="acc-hero reveal">
  <div class="acc-hero__inner">
    <div class="acc-hero__content">
      <h1 class="acc-hero__title">КонсультантПлюс <span class="acc-hero__title-accent">для&nbsp;руководителя</span></h1>
      <p class="acc-hero__text">Управлять&nbsp;&mdash; значит предвидеть.</p>
      <p class="acc-hero__subtext">КонсультантПлюс помогает вовремя увидеть риски, отследить изменения в&nbsp;законах и&nbsp;защитить бизнес. Всё, чтобы вы&nbsp;оставались уверенными даже в&nbsp;сложных ситуациях.</p>
      <div class="acc-hero__buttons">
        <a href="#" class="btn btn--purple acc-hero__btn" data-open-modal="modalPrice">Узнать цену</a>
        <a href="#" data-open-modal="modalTrial" class="btn acc-hero__btn acc-hero__btn--outline">Получить демо-доступ</a>
      </div>
    </div>
    <div class="acc-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/hero-manager-bg.png" alt="КонсультантПлюс для руководителя" class="acc-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ПОЧЕМУ РУКОВОДИТЕЛИ ВЫБИРАЮТ ====== -->
<section class="acc-reasons reveal">
  <div class="acc-reasons__inner">
    <h2 class="acc-reasons__title">Почему руководители выбирают КонсультантПлюс</h2>

    <div class="acc-reasons__grid">
      <div class="acc-reasons__card reveal reveal--delay-1">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-protection"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--purple">Защита бизнеса</span>&nbsp;&mdash; отслеживание изменений в&nbsp;законах</p>
        </div>
      </div>
      <div class="acc-reasons__card reveal reveal--delay-2">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-costs"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--orange">Сокращение расходов</span> компании&nbsp;&mdash; избегайте штрафов и&nbsp;пеней</p>
        </div>
      </div>
      <div class="acc-reasons__card reveal reveal--delay-3">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-verification"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--purple">Проверка контрагентов</span> и&nbsp;договоров перед заключением сделок</p>
        </div>
      </div>
      <div class="acc-reasons__card reveal reveal--delay-1">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-time"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--orange">Экономия времени</span>&nbsp;&mdash; быстрые и&nbsp;верные решения</p>
        </div>
      </div>
      <div class="acc-reasons__card reveal reveal--delay-2">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-team"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--purple">Развитие персонала</span> через аналитику, литературу и&nbsp;обучение</p>
        </div>
      </div>
      <div class="acc-reasons__card reveal reveal--delay-3">
        <svg class="icon acc-reasons__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-manager-hr-risks"></use></svg>
        <div class="acc-reasons__body">
          <p class="acc-reasons__text"><span class="acc-reasons__accent acc-reasons__accent--orange">Контроль кадровых рисков</span>&nbsp;&mdash; найм, увольнения, трудовые споры</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== ОЦЕНИТЕ КОНСУЛЬТАНТПЛЮС ====== -->
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
      <a href="#" class="btn btn--yellow tp-banner__btn" data-open-modal="modalTrial">Получить доступ</a>
    </div>
    <div class="tp-banner__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/banner-devices.png" alt="Устройства" class="tp-banner__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== СРАВНЕНИЕ КОМПЛЕКТОВ (из инфоблока, 3 тарифа = 4 колонки) ====== -->
<section class="acc-compare acc-compare--4 reveal">
  <div class="acc-compare__inner">
    <h2 class="acc-compare__title">Сравнение комплектов КонсультантПлюс для&nbsp;руководителя</h2>

    <div class="acc-compare__scroll">
      <?$APPLICATION->IncludeComponent(
          "spbcons:compare",
          "acc_compare",
          Array(
              "IBLOCK_ID"    => "138",
              "SECTION_ID"   => "808",
              "PROP_ID"      => "include0",
              "IBLOCK_IB_ID" => "156",
              "CACHE_TYPE"   => "A",
              "CACHE_TIME"   => "36000000",
          )
      );?>
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


<!-- ====== СПЕЦПРЕДЛОЖЕНИЕ ====== -->
<section class="acc-offer reveal">
  <div class="acc-offer__inner">
    <div class="acc-offer__content">
      <h2 class="acc-offer__title">
        <div>Получите <strong>спецпредложение</strong></div>
        <div class="acc-offer__title-row2">
          <span>на&nbsp;КонсультантПлюс</span>
          <span class="acc-offer__badge">За 5 минут</span>
        </div>
      </h2>
      <a href="#" class="btn btn--purple acc-offer__btn" data-open-modal="modalPrice">Узнать цену</a>
    </div>
    <div class="acc-offer__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/o-sps-kp-hero.png" alt="Спецпредложение КонсультантПлюс" class="acc-offer__img" loading="lazy" />
    </div>
  </div>
</section>


<script>
document.querySelectorAll('.acc-compare__section-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var section = btn.closest('.acc-compare__section');
    var isOpen = section.classList.contains('is-open');
    section.classList.toggle('is-open', !isOpen);
    btn.setAttribute('aria-expanded', String(!isOpen));
  });
});
</script>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
