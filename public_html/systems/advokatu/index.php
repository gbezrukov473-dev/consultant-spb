<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "консультант плюс адвокат, консультант плюс для адвоката, консультант адвокат, правовая система для адвоката, судебная практика для адвоката, ии для адвоката, консультант плюс скидка адвокатам, консультант плюс адвокатская палата");
$APPLICATION->SetPageProperty("title", "КонсультантПлюс для адвоката — комплект «Адвокат» со скидкой");
$APPLICATION->SetPageProperty("description", "КонсультантПлюс Адвокат от официального партнёра адвокатской палаты: вся судебная практика, ИИ-помощник Юрист Проф и юридическая аналитика. Максимальная скидка для членов адвокатской палаты, пробный доступ на 2 дня.");
$APPLICATION->SetTitle("КонсультантПлюс для адвоката");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/systems/" class="breadcrumbs__link">Системы КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">КонсультантПлюс для адвоката</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<!-- Иллюстрация — фрагмент листовки «Консультант Адвокат» (ИПК), отрисован из PDF с прозрачным фоном.
     Без .reveal и без lazy: это первый экран (LCP), он должен быть виден сразу. -->
<section class="acc-hero acc-hero--img acc-hero--advocate">
  <div class="acc-hero__inner">
    <div class="acc-hero__content">
      <h1 class="acc-hero__title">КонсультантПлюс <span class="acc-hero__title-accent">Адвокат</span></h1>
      <p class="acc-hero__text">Комплект от&nbsp;официального партнёра адвокатской палаты</p>
      <p class="acc-hero__subtext">Оптимальный объём информации для адвокатов и&nbsp;три ИИ-сервиса от&nbsp;КонсультантПлюс: Глубокий поиск, Проверка договоров и&nbsp;Задать вопрос.</p>
      <p class="adv-perk">
        <svg class="adv-perk__mark" viewBox="0 0 40 40" aria-hidden="true"><circle cx="20" cy="20" r="20" fill="currentColor"/><g class="adv-perk__glyph" fill="none" stroke-width="2.6" stroke-linecap="round"><circle cx="14.5" cy="14.5" r="3.2"/><circle cx="25.5" cy="25.5" r="3.2"/><path d="M27 13 13 27"/></g></svg>
        <span class="adv-perk__text"><b>Максимальная скидка</b> для&nbsp;членов адвокатской палаты</span>
      </p>
      <div class="acc-hero__buttons">
        <a href="#" class="btn btn--purple acc-hero__btn" data-open-modal="modalPrice" data-lead-comment="Запрос по КонсультантПлюс Адвокат">Узнать цену со&nbsp;скидкой</a>
        <a href="#" data-open-modal="modalTrial" class="btn acc-hero__btn acc-hero__btn--outline" data-lead-comment="Запрос по КонсультантПлюс Адвокат — демо-доступ">Попробовать 2&nbsp;дня бесплатно</a>
      </div>
    </div>
    <div class="acc-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/advocate-hero.png" alt="КонсультантПлюс Адвокат" class="acc-hero__img" width="935" height="849" fetchpriority="high" />
    </div>
  </div>
</section>


<!-- ====== ПОЧЕМУ АДВОКАТЫ ВЫБИРАЮТ (листовка ЧДК) ====== -->
<section class="adv-benefits reveal">
  <div class="adv-benefits__inner">
    <h2 class="adv-benefits__title">Почему адвокаты выбирают КонсультантПлюс Адвокат</h2>
    <p class="adv-benefits__subtitle">Новый профессиональный комплект, разработанный <span class="adv-benefits__accent">для адвокатской деятельности</span>. <span class="adv-benefits__accent">Лучший юридический ИИ</span> на&nbsp;рынке и&nbsp;<span class="adv-benefits__accent">максимальная скидка</span> для членов адвокатской палаты.</p>

    <div class="adv-benefits__grid">
      <div class="adv-benefits__card reveal reveal--delay-1">
        <svg class="icon adv-benefits__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-lawyer-analysis"></use></svg>
        <h3 class="adv-benefits__name">Вся судебная практика в&nbsp;комплекте</h3>
        <p class="adv-benefits__text">Полный охват судебной практики по&nbsp;всем округам и&nbsp;инстанциям. Специальный поиск практики по&nbsp;описанию ситуации, а&nbsp;также ИИ-функции «Краткий пересказ» и&nbsp;«Выводы суда» для быстрого анализа сути дела.</p>
      </div>
      <div class="adv-benefits__card reveal reveal--delay-2">
        <svg class="icon adv-benefits__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ai-pom-dialogue"></use></svg>
        <h3 class="adv-benefits__name">ИИ-помощник Юрист Проф</h3>
        <p class="adv-benefits__text">Работает на&nbsp;верифицированном правовом массиве КонсультантПлюс, риск ошибок сведён к&nbsp;минимуму. Вместо общих ответов&nbsp;&mdash; глубокий анализ сложных вопросов, заключения с&nbsp;оценкой рисков и&nbsp;ссылками на&nbsp;законы.</p>
      </div>
      <div class="adv-benefits__card reveal reveal--delay-3">
        <svg class="icon adv-benefits__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-hr-templates"></use></svg>
        <h3 class="adv-benefits__name">Полноценная юридическая аналитика</h3>
        <p class="adv-benefits__text">Экономия часов на&nbsp;подготовке: путеводители по&nbsp;судебной практике, договорной работе и&nbsp;спорам, экспертные комментарии, образцы документов и&nbsp;готовые решения по&nbsp;актуальным вопросам.</p>
      </div>
    </div>
  </div>
</section>


<!-- ====== ТРИ ИИ-СЕРВИСА (листовка ИПК; 3D-иконки — те же, что на /ii-pomoshchnik-konsultant-plyus/) ====== -->
<section class="adv-ai reveal">
  <div class="adv-ai__inner">
    <div class="adv-ai__intro">
      <h2 class="adv-ai__title">Три ИИ-сервиса в&nbsp;комплекте</h2>
      <p class="adv-ai__text">ИИ-помощник Юрист Проф с&nbsp;доступом к&nbsp;трём ИИ-сервисам&nbsp;&mdash; лучший юридический ИИ на&nbsp;рынке.</p>
      <a href="/ii-pomoshchnik-konsultant-plyus/" class="btn btn--link-purple btn--sm adv-ai__link">Подробнее об&nbsp;ИИ-сервисах</a>
    </div>

    <ul class="adv-ai__list">
      <li class="adv-ai__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/box-search.png" alt="" class="adv-ai__img" width="92" height="120" loading="lazy" />
        <div class="adv-ai__body">
          <h3 class="adv-ai__name">Глубокий поиск</h3>
          <p class="adv-ai__desc">Для сложных юридических кейсов, где нужен анализ многих источников и&nbsp;судебной практики.</p>
        </div>
      </li>
      <li class="adv-ai__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/box-dogovor.png" alt="" class="adv-ai__img" width="92" height="120" loading="lazy" />
        <div class="adv-ai__body">
          <h3 class="adv-ai__name">Проверка договоров</h3>
          <p class="adv-ai__desc">Подсветит слабые места договора: юридические и&nbsp;финансовые риски, технические нестыковки.</p>
        </div>
      </li>
      <li class="adv-ai__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/box-question.png" alt="" class="adv-ai__img" width="92" height="120" loading="lazy" />
        <div class="adv-ai__body">
          <h3 class="adv-ai__name">Задать вопрос</h3>
          <p class="adv-ai__desc">Для повседневных рабочих ситуаций и&nbsp;правовых вопросов. Быстро даст ответ, подкрепив его ссылками на&nbsp;актуальные материалы из&nbsp;КонсультантПлюс.</p>
        </div>
      </li>
    </ul>

    <p class="adv-ai__note">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/box-pereskaz.png" alt="" class="adv-ai__note-img" width="92" height="120" loading="lazy" />
      <span>В&nbsp;судебной практике&nbsp;&mdash; ИИ-функции <b>«Краткий пересказ»</b> и&nbsp;<b>«Выводы суда»</b> для быстрого анализа сути дела.</span>
    </p>
  </div>
</section>


<!-- ====== СОСТАВ КОМПЛЕКТА (листовка ИПК + «В составе комплекта» из листовки ЧДК) ======
     Справочник: группа = строка «иконка + название | список в 2 колонки», как в листовке.
     ИИ-сервисы отсюда убраны — у них своя секция .adv-ai выше. -->
<section class="adv-includes reveal">
  <div class="adv-includes__inner">
    <h2 class="adv-includes__title">Что включает КонсультантПлюс Адвокат</h2>
    <p class="adv-includes__subtitle">Информационно-правовой комплекс с&nbsp;оптимальным объёмом информации для адвокатов</p>

    <div class="adv-includes__panel">
      <div class="adv-includes__group">
        <div class="adv-includes__head">
          <svg class="icon adv-includes__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-budget-legislation"></use></svg>
          <h3 class="adv-includes__name">Вся судебная практика</h3>
        </div>
        <ul class="adv-includes__list">
          <li>Решения высших судов</li>
          <li>Арбитражные суды всех округов</li>
          <li>Все апелляционные суды</li>
          <li>Суды общей юрисдикции</li>
          <li>Суд по&nbsp;интеллектуальным правам</li>
        </ul>
      </div>

      <div class="adv-includes__group">
        <div class="adv-includes__head">
          <svg class="icon adv-includes__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-lawyer-prospects"></use></svg>
          <h3 class="adv-includes__name">Фирменные аналитические продукты для юриста</h3>
        </div>
        <ul class="adv-includes__list">
          <li>Перспективы и&nbsp;риски арбитражных споров</li>
          <li>Перспективы и&nbsp;риски споров в&nbsp;суде общей юрисдикции</li>
          <li>Правовые позиции высших судов</li>
          <li>Готовые решения по&nbsp;самым актуальным вопросам для юристов</li>
          <li>Путеводители КонсультантПлюс для юристов (по&nbsp;судебной практике, договорной работе, корпоративным процедурам и&nbsp;спорам, по&nbsp;госуслугам для юрлиц, трудовым спорам, контрактной системе и&nbsp;спорам в&nbsp;сфере закупок)</li>
        </ul>
      </div>

      <div class="adv-includes__group">
        <div class="adv-includes__head">
          <svg class="icon adv-includes__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-buhg-putevod"></use></svg>
          <h3 class="adv-includes__name">Законодательство, консультации, формы</h3>
        </div>
        <ul class="adv-includes__list">
          <li>Федеральное и&nbsp;региональное законодательство</li>
          <li>Решения госорганов по&nbsp;спорным ситуациям</li>
          <li>Проекты законов и&nbsp;НПА</li>
          <li>Комментарии законодательства</li>
          <li>Материалы юридической прессы, книги</li>
          <li>Официальные формы, образцы заполнения документов</li>
          <li>Подборки и&nbsp;консультации Горячей линии</li>
          <li>Архивы судов, ФАС и&nbsp;УФАС, муниципальных образований</li>
          <li>Конструктор договоров</li>
        </ul>
      </div>

      <div class="adv-includes__group adv-includes__group--bundle">
        <div class="adv-includes__head">
          <span class="adv-includes__check" aria-hidden="true"></span>
          <h3 class="adv-includes__name adv-includes__name--accent">В&nbsp;составе комплекта</h3>
        </div>
        <ul class="adv-includes__bundle-list">
          <li><span><b>СПС Консультант Юрист</b>, комплект «Оптимальный»</span></li>
          <li><span><b>КонсультантСудебнаяПрактика</b>: Суды общей юрисдикции всех округов</span></li>
          <li><span><b>КонсультантАрбитраж</b>: Арбитражные суды всех округов</span></li>
          <li><span><b>Перспективы и&nbsp;риски арбитражных споров</b></span></li>
          <li><span><b>КонсультантАрбитраж</b>: Все апелляционные суды</span></li>
          <li><span><b>Перспективы и&nbsp;риски споров в&nbsp;суде общей юрисдикции</b></span></li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ====== ОЦЕНИТЕ КОНСУЛЬТАНТПЛЮС (как на /systems/yuristu/) ====== -->
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
      <a href="#" class="btn btn--yellow tp-banner__btn" data-open-modal="modalTrial" data-lead-comment="Запрос по КонсультантПлюс Адвокат — пробный доступ">Получить доступ</a>
    </div>
    <div class="tp-banner__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/banner-devices.png" alt="Устройства" class="tp-banner__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== СКИДКА ДЛЯ ЧЛЕНОВ ПАЛАТЫ (блок acc-offer: заголовок держим не длиннее «Получите спецпредложение») ====== -->
<section class="acc-offer reveal">
  <div class="acc-offer__inner">
    <div class="acc-offer__content">
      <h2 class="acc-offer__title">
        <div>Максимальная <strong>скидка</strong></div>
        <div class="acc-offer__title-row2">
          <span>членам палаты</span>
          <span class="acc-offer__badge">Партнёр палаты</span>
        </div>
      </h2>
      <a href="#" class="btn btn--purple acc-offer__btn" data-open-modal="modalPrice" data-lead-comment="Запрос по КонсультантПлюс Адвокат — скидка членам палаты">Узнать цену со&nbsp;скидкой</a>
    </div>
    <div class="acc-offer__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/o-sps-kp-hero.png" alt="КонсультантПлюс Адвокат — скидка для членов адвокатской палаты" class="acc-offer__img" loading="lazy" />
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


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
