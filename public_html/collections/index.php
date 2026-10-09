<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Правовые сборники — ключевые изменения законодательства от ЧДК");
$APPLICATION->SetPageProperty("description", "Правовые сборники от ЧДК — ключевые изменения в законодательстве, алгоритмы действий и ссылки на материалы КонсультантПлюс");
$APPLICATION->SetTitle("Правовые сборники");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Правовые сборники</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="col-hero reveal">
  <div class="col-hero__inner">
    <div class="col-hero__content">
      <h1 class="col-hero__title">Правовые <span class="col-hero__title-accent">сборники</span></h1>
      <p class="col-hero__text">Правовые сборники от&nbsp;ЧДК&nbsp;– ваша личная база знаний.</p>
      <p class="col-hero__subtext">Самые важные изменения в&nbsp;законодательстве&nbsp;– структурированно, с&nbsp;алгоритмами действий и&nbsp;ссылками на&nbsp;материалы КонсультантПлюс. Выбирайте тему и&nbsp;получайте готовый инструмент для работы.</p>
      <a href="#" class="btn btn--purple col-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовым сборникам">Узнать подробности</a>
    </div>
    <div class="col-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-hero.png" alt="Правовые сборники КонсультантПлюс" class="col-hero__img" loading="lazy" />
      <div class="col-hero__shadow" aria-hidden="true"></div>
    </div>
  </div>
</section>


<!-- ====== КАТАЛОГ ПРАВОВЫХ СБОРНИКОВ ====== -->
<section class="col-catalog reveal" id="col-catalog">
  <div class="col-catalog__inner">
    <h2 class="col-catalog__title">Каталог правовых сборников</h2>

    <div class="col-catalog__tabs" role="tablist">
      <button class="col-catalog__tab is-active" role="tab" data-category="all">Бухгалтеру</button>
      <button class="col-catalog__tab" role="tab" data-category="lawyer">Юристу</button>
      <button class="col-catalog__tab" role="tab" data-category="head">Руководителю</button>
      <button class="col-catalog__tab" role="tab" data-category="budget">Бюджет</button>
      <button class="col-catalog__tab" role="tab" data-category="hr">Кадры</button>
      <button class="col-catalog__tab" role="tab" data-category="purchase">Закупки</button>
    </div>

    <div class="col-catalog__grid">
      <!-- Карточка 1 -->
      <article class="col-card reveal reveal--delay-1">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-1.png" alt="Налоговые изменения 2026" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Налоговые изменения 2026</h3>
          <p class="col-card__text">Новая ставка НДС, обновлённые правила проверок, лимиты по&nbsp;УСН, рост взносов и&nbsp;МРОТ. В&nbsp;сборнике&nbsp;— все ключевые поправки: что&nbsp;меняется, как&nbsp;применять и&nbsp;какие документы подготовить заранее.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Налоговые изменения 2026">Получить</a>
            <a href="/collections/nalogovye-izmeneniya-2026/" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>

      <!-- Карточка 2 -->
      <article class="col-card reveal reveal--delay-2">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-2.png" alt="Правовые изменения 2026" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Правовые изменения 2026</h3>
          <p class="col-card__text">Чтобы разобраться в&nbsp;новых законах, не&nbsp;нужно читать сотни страниц. Мы&nbsp;отобрали главное: поправки в&nbsp;КоАП, ГК&nbsp;и&nbsp;УК, новые требования к&nbsp;торговле, усиление контроля, маркировка и&nbsp;не&nbsp;только.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Правовые изменения 2026">Получить</a>
            <a href="#" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>

      <!-- Карточка 3 -->
      <article class="col-card reveal reveal--delay-3">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-3.png" alt="Кадровое законодательство 2026" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Кадровое законодательство 2026</h3>
          <p class="col-card__text">Новые лимиты взносов, повышение МРОТ, свежие коды доходов и&nbsp;вычетов по&nbsp;НДФЛ, необлагаемая матпомощь. Все ключевые изменения для расчёта зарплаты и&nbsp;отчётности&nbsp;— в&nbsp;одном сборнике.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Кадровое законодательство 2026">Получить</a>
            <a href="#" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>

      <!-- Карточка 4 -->
      <article class="col-card reveal reveal--delay-1">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-4.png" alt="Госзакупки в 2026 году" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Госзакупки в&nbsp;2026 году</h3>
          <p class="col-card__text">Правила реестра контрактов изменились, перечень обязательной информации стал шире, форматы документов&nbsp;— новые. Собрали все нюансы 44-ФЗ и&nbsp;223-ФЗ, чтобы ваши заявки принимали без замечаний.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Госзакупки в 2026 году">Получить</a>
            <a href="#" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>

      <!-- Карточка 5 -->
      <article class="col-card reveal reveal--delay-2">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-5.png" alt="Персональные данные 2026" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Персональные данные 2026</h3>
          <p class="col-card__text">Штрафы за утечки персональных данных выросли, а&nbsp;фальшивых «проверок» стало больше. В&nbsp;сборнике&nbsp;— официальные документы и&nbsp;актуальные формы, чтобы отличать реальные требования от&nbsp;подделок.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Персональные данные 2026">Получить</a>
            <a href="#" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>

      <!-- Карточка 6 -->
      <article class="col-card reveal reveal--delay-3">
        <div class="col-card__cover">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/sborniki-card-6.png" alt="Товарные знаки: руководство" class="col-card__img" loading="lazy" />
        </div>
        <div class="col-card__body">
          <h3 class="col-card__title">Товарные знаки: руководство</h3>
          <p class="col-card__text">Как зарегистрировать товарный знак, какие есть ограничения и&nbsp;чем грозит нарушение использования? Правила оформления и&nbsp;ссылки на&nbsp;актуальную правовую базу уже в&nbsp;нашем сборнике.</p>
          <div class="col-card__actions">
            <a href="#" class="btn btn--yellow col-card__btn" data-open-modal="modalService" data-lead-comment="Запрос по Правовому сборнику Товарные знаки">Получить</a>
            <a href="#" class="col-card__link">Подробнее →</a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>


<!-- ====== ФОРМА ПРОБНОГО ДОСТУПА ====== -->
<section class="trial reveal" id="col-form">
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


<script>
(function () {
  var tabs = document.querySelectorAll('.col-catalog__tab');
  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) { t.classList.remove('is-active'); });
      tab.classList.add('is-active');
    });
  });
})();
</script>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
