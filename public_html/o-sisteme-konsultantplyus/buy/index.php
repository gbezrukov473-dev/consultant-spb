<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить КонсультантПлюс — СПБ Консультант");
$APPLICATION->SetPageProperty("description", "Купить КонсультантПлюс в Санкт-Петербурге — официальный представитель ЧДК");
$APPLICATION->SetTitle("Купить КонсультантПлюс");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/o-sisteme-konsultantplyus/" class="breadcrumbs__link">О СПС КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Купить КонсультантПлюс</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="buy-hero reveal">
  <div class="buy-hero__inner">
    <div class="buy-hero__content">
      <h1 class="buy-hero__title">
        <span class="buy-hero__title--purple">Купить</span> КонсультантПлюс
      </h1>
      <p class="buy-hero__text">
        <strong class="buy-hero__company">ЧДК</strong>&nbsp;&mdash; официальный представитель КонсультантПлюс с&nbsp;1996&nbsp;года.
      </p>
      <p class="buy-hero__text">
        Мы подберём для вас оптимальный комплект и&nbsp;предложим индивидуальные условия.
      </p>
      <a href="#" class="btn btn--purple buy-hero__btn" data-open-modal="modalPrice">Купить</a>
    </div>
    <div class="buy-hero__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/hero-boxes.png" alt="Комплекты КонсультантПлюс" class="buy-hero__img" />
    </div>
  </div>
</section>


<!-- ====== 4 ПРИЧИНЫ ====== -->
<section class="reasons reveal">
  <div class="reasons__inner">
    <h2 class="reasons__title">4 причины купить КонсультантПлюс у&nbsp;ЧДК</h2>
    <div class="reasons__grid">
      <div class="reasons__item reveal reveal--delay-1">
        <div class="reasons__marker reasons__marker--purple">1</div>
        <div class="reasons__info">
          <h3 class="reasons__heading">30 лет поддерживаем бизнес</h3>
          <p class="reasons__desc">Мы работаем более 1000 крупных компаний Петербурга и&nbsp;22000 пользователей по&nbsp;всей России.</p>
        </div>
      </div>
      <div class="reasons__item reveal reveal--delay-2">
        <div class="reasons__marker reasons__marker--yellow">2</div>
        <div class="reasons__info">
          <h3 class="reasons__heading">Гарантия качества</h3>
          <p class="reasons__desc">Мы поставляем, обслуживаем, модернизируем и&nbsp;сопровождаем только оригинальную продукцию.</p>
        </div>
      </div>
      <div class="reasons__item reveal reveal--delay-3">
        <div class="reasons__marker reasons__marker--yellow">3</div>
        <div class="reasons__info">
          <h3 class="reasons__heading">Программа поддержки клиентов</h3>
          <p class="reasons__desc">Техническая поддержка, линия консультаций и&nbsp;обучение работе с&nbsp;системой для каждого клиента.</p>
        </div>
      </div>
      <div class="reasons__item reveal reveal--delay-4">
        <div class="reasons__marker reasons__marker--purple">4</div>
        <div class="reasons__info">
          <h3 class="reasons__heading">Личный кабинет ЧДК-Онлайн</h3>
          <p class="reasons__desc">Это эксклюзивный сервис с&nbsp;полезными настройками, сквозным поиском и&nbsp;проверкой контрагента.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== ОТ ЧЕГО ЗАВИСИТ СТОИМОСТЬ ====== -->
<section class="cost reveal">
  <div class="cost__inner">
    <h2 class="cost__title">От чего зависит стоимость КонсультантПлюс?</h2>
    <div class="cost__grid">
      <div class="cost__card reveal reveal--delay-1">
        <svg class="icon cost__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-cost-1"></use></svg>
        <p class="cost__text">Количество и&nbsp;состав информационных банков</p>
      </div>
      <div class="cost__card reveal reveal--delay-2">
        <svg class="icon cost__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-cost-2"></use></svg>
        <p class="cost__text">Специализация и&nbsp;количество пользователей</p>
      </div>
      <div class="cost__card reveal reveal--delay-3">
        <svg class="icon cost__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-cost-3"></use></svg>
        <p class="cost__text">Версия системы: онлайн, локальная, на&nbsp;флеш-накопителе</p>
      </div>
      <div class="cost__card reveal reveal--delay-4">
        <svg class="icon cost__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-cost-4"></use></svg>
        <p class="cost__text">Действующие акции и&nbsp;спецпредложения</p>
      </div>
    </div>
    <div class="cost__action">
      <a href="#" class="btn btn--yellow cost__btn" data-open-modal="modalPrice">Узнать цену</a>
    </div>
  </div>
</section>


<!-- ====== ГОТОВЫЕ КОМПЛЕКТЫ (ТАБЫ) ====== -->
<section class="kits reveal">
  <div class="kits__inner">
    <h2 class="kits__title">Готовые комплекты Консультант Плюс</h2>
    <div class="kits__layout">
      <div class="kits__tabs">
        <button class="kits__tab is-active" data-tab="0">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/box-buh.png" alt="" class="kits__tab-img" loading="lazy" />
          <div class="kits__tab-info">
            <h3 class="kits__tab-title">Консультант Бухгалтер Оптимальный</h3>
            <p class="kits__tab-desc">Все необходимое для решения задач бухгалтера и&nbsp;специалиста по&nbsp;кадрам</p>
          </div>
        </button>
        <button class="kits__tab" data-tab="1">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/box-jurist.png" alt="" class="kits__tab-img" loading="lazy" />
          <div class="kits__tab-info">
            <h3 class="kits__tab-title">Консультант Юрист Оптимальный</h3>
            <p class="kits__tab-desc">Необходимая нормативная база и&nbsp;судебная практика для юриста</p>
          </div>
        </button>
        <button class="kits__tab" data-tab="2">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/box-universal.png" alt="" class="kits__tab-img" loading="lazy" />
          <div class="kits__tab-info">
            <h3 class="kits__tab-title">Консультант Универсал Оптимальный</h3>
            <p class="kits__tab-desc">Оптимальный комплект для специалистов и&nbsp;руководителей коммерческих организаций</p>
          </div>
        </button>
        <button class="kits__tab" data-tab="3">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/box-budget.png" alt="" class="kits__tab-img" loading="lazy" />
          <div class="kits__tab-info">
            <h3 class="kits__tab-title">Консультант Бюджетные организации Оптимальный</h3>
            <p class="kits__tab-desc">Необходимая нормативно-правовая и&nbsp;аналитическая информация для бюджетных организаций</p>
          </div>
        </button>
      </div>
      <div class="kits__content">
        <h3 class="kits__content-title" id="kitsTitle"></h3>
        <ul class="kits__list" id="kitsList"></ul>
        <div class="kits__content-actions">
          <a href="#" class="btn btn--purple" data-open-modal="modalPrice">Купить</a>
          <a href="/o-sisteme-konsultantplyus/" class="btn btn--link-purple">Подробнее</a>
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


<!-- ====== ЕЩЁ ДУМАЕТЕ? ПРОБНЫЙ ДОСТУП ====== -->
<section class="trial reveal">
  <div class="trial__inner">
    <h2 class="trial__section-title">Ещё думаете? Получите пробный доступ на&nbsp;2&nbsp;дня</h2>
    <div class="trial__card">
      <div class="trial__left">
        <p class="trial__promo">
          <span class="trial__title--orange">Протестируйте систему</span> перед покупкой и&nbsp;убедитесь в&nbsp;её удобстве. Наш специалист подберёт подходящий комплект и&nbsp;проведёт персональную презентацию.
        </p>
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
  'use strict';

  var kitsData = [
    {
      title: 'Консультант Бухгалтер Оптимальный',
      items: [
        'Фирменные авторские материалы КонсультантПлюс',
        'Консультации вопрос-ответ',
        'Разъясняющие письма органов власти',
        'Официальные формы, образцы заполнения документов',
        'Бухгалтерские проводки',
        'Пресса и книги',
        'Федеральное и региональное законодательство',
        'Судебная практика для бухгалтера',
        'Проекты законов и НПА',
        'Конструктор учётной политики',
        'Конструктор договоров',
        'Архивы документов муниципальных образований',
        'Готовые решения, образцы заполнения документов, позиции ведомств'
      ]
    },
    {
      title: 'Консультант Юрист Оптимальный',
      items: [
        'Федеральное и региональное законодательство',
        'Проекты законов и НПА',
        'Судебная практика',
        'Фирменные авторские материалы',
        'Комментарии законодательства',
        'Образцы заполнения документов, официальные формы',
        'Конструктор договоров',
        'Архивы судебной практики, документов ФАС и УФАС, муниципальных образований',
        'Готовые решения, образцы заполнения документов, позиции ведомств',
        'Обзоры "Важнейшая практика по статье"',
        'Поиск судебной практики по категории спора, требованиям, исходу спора',
        'Поиск похожих судебных решений',
        'Специальный поиск судебной практики'
      ]
    },
    {
      title: 'Консультант Универсал Оптимальный',
      items: [
        'Федеральное и региональное законодательство',
        'Проекты законов и НПА',
        'Фирменные авторские материалы КонсультантПлюс',
        'Консультации вопрос-ответ для бухгалтера',
        'Комментарии законодательства',
        'Судебная практика',
        'Официальные формы, образцы заполнения документов',
        'Конструктор договоров, учётной политики',
        'Архивы судебной практики, документов ФАС и УФАС, муниципальных образований',
        'Готовые решения, образцы заполнения документов, позиции ведомств',
        'Обзоры "Важнейшая практика по статье"',
        'Поиск похожих судебных решений',
        'Специальный поиск судебной практики'
      ]
    },
    {
      title: 'Консультант Бюджетные организации Оптимальный',
      items: [
        'Федеральное и региональное законодательство',
        'Проекты законов и НПА',
        'Фирменные авторские материалы КонсультантПлюс',
        'Консультации вопрос-ответ для бухгалтера бюджетной организации',
        'Комментарии законодательства',
        'Судебная практика',
        'Официальные формы, образцы заполнения документов',
        'Конструктор договоров, учётной политики для бюджетной организации',
        'Архивы судебной практики, документов ФАС и УФАС, муниципальных образований',
        'Готовые решения, образцы заполнения документов, позиции ведомств',
        'Обзоры "Важнейшая практика по статье"',
        'Поиск похожих судебных решений',
        'Специальный поиск судебной практики'
      ]
    }
  ];

  var tabs = document.querySelectorAll('.kits__tab');
  var titleEl = document.getElementById('kitsTitle');
  var listEl = document.getElementById('kitsList');

  if (!tabs.length || !titleEl || !listEl) return;

  function renderKit(index) {
    var data = kitsData[index];
    if (!data) return;

    titleEl.style.opacity = '0';
    listEl.style.opacity = '0';

    setTimeout(function () {
      titleEl.textContent = data.title;
      listEl.innerHTML = '';
      data.items.forEach(function (item) {
        var li = document.createElement('li');
        li.textContent = item;
        listEl.appendChild(li);
      });
      titleEl.style.opacity = '1';
      listEl.style.opacity = '1';
    }, 200);
  }

  function setActiveTab(index) {
    tabs.forEach(function (tab) { tab.classList.remove('is-active'); });
    tabs[index].classList.add('is-active');
    renderKit(index);
  }

  tabs.forEach(function (tab, i) {
    tab.addEventListener('click', function () { setActiveTab(i); });
  });

  setActiveTab(0);
})();
</script>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
