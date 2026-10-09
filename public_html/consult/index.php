<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "линия консультаций консультант плюс, горячая линия консультаций, вопросы консультант плюс, задать вопрос бухгалтеру онлайн, юридическая консультация спб, горячая линия консультант плюс спб, консультации по 44-фз");
$APPLICATION->SetPageProperty("title", "Линия консультаций КонсультантПлюс — быстрые ответы экспертов");
$APPLICATION->SetPageProperty("description", "Линия консультаций КонсультантПлюс в Санкт-Петербурге. Быстрые ответы на вопросы от экспертов по бухучету, налогам и праву. Получите доступ к Консультант Плюс и оцените преимущества надежной правовой поддержки.");
$APPLICATION->SetTitle("Линия консультаций");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/services/" class="breadcrumbs__link">Сервис</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Линия консультаций</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="lk-hero reveal">
  <div class="lk-hero__inner">
    <div class="lk-hero__content">
      <h1 class="lk-hero__title">Линия <span class="lk-hero__title-accent">консультаций</span></h1>
      <p class="lk-hero__text">Нужна консультация по&nbsp;бухучету, налогам или&nbsp;праву? Обратитесь на&nbsp;Линию консультаций.</p>
      <p class="lk-hero__subtext">Эксперты оперативно проанализируют ваш&nbsp;вопрос и&nbsp;предоставят краткий ответ со&nbsp;ссылками на&nbsp;актуальные нормативные акты и&nbsp;документы из&nbsp;системы КонсультантПлюс.</p>
      <a href="#lk-form" class="btn btn--purple lk-hero__btn">Задать вопрос</a>
    </div>
    <div class="lk-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/lk-laptop.png" alt="Линия консультаций КонсультантПлюс" class="lk-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ПРЕИМУЩЕСТВА ЛК ====== -->
<section class="lk-adv reveal">
  <div class="lk-adv__inner">
    <div class="lk-adv__grid">
      <div class="lk-adv__item reveal reveal--delay-1">
        <div class="lk-adv__number lk-adv__number--purple">01</div>
        <p class="lk-adv__text">99% клиентов удовлетворены ответами</p>
      </div>
      <div class="lk-adv__item reveal reveal--delay-2">
        <div class="lk-adv__number lk-adv__number--orange">02</div>
        <p class="lk-adv__text">25 тем консультирования: бухгалтерские, юридические, кадровые</p>
      </div>

      <div class="lk-adv__center">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/rab-1996.png" alt="Работаем с 1996 года" class="lk-adv__center-img" loading="lazy" />
      </div>

      <div class="lk-adv__item reveal reveal--delay-3">
        <div class="lk-adv__number lk-adv__number--purple">03</div>
        <p class="lk-adv__text">Быстрые ответы: короткие сроки предоставления информации</p>
      </div>
      <div class="lk-adv__item reveal reveal--delay-4">
        <div class="lk-adv__number lk-adv__number--orange">04</div>
        <p class="lk-adv__text">Подробные разъяснения для коммерческих и&nbsp;бюджетных организаций</p>
      </div>
    </div>
  </div>
</section>


<!-- ====== ЧТО МОЖЕТ ЛИНИЯ КОНСУЛЬТАЦИЙ ====== -->
<section class="lk-services reveal">
  <div class="lk-services__inner">
    <h2 class="lk-services__title">Что может Линия консультаций</h2>
    <p class="lk-services__subtitle">Услуги доступны всем пользователям КонсультантПлюс – клиентам ЧДК</p>

    <div class="lk-services__grid">
      <div class="lk-services__card reveal reveal--delay-1">
        <svg class="icon lk-services__card-icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#gor-lin"></use></svg>
        <div class="lk-services__card-body">
          <h3 class="lk-services__card-title">Горячая линия</h3>
          <p class="lk-services__card-text">Быстрые ответы в&nbsp;чате онлайн-диалога в&nbsp;системе КонсультантПлюс</p>
        </div>
      </div>

      <div class="lk-services__card reveal reveal--delay-2">
        <svg class="icon lk-services__card-icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#pis-kons"></use></svg>
        <div class="lk-services__card-body">
          <h3 class="lk-services__card-title">Устные и&nbsp;письменные консультации</h3>
          <p class="lk-services__card-text">Ответы на&nbsp;вопросы от&nbsp;ведущих специалистов по&nbsp;бухгалтерии, юриспруденции и&nbsp;налогам</p>
        </div>
      </div>

      <div class="lk-services__card reveal reveal--delay-3">
        <svg class="icon lk-services__card-icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#sprav-inf"></use></svg>
        <div class="lk-services__card-body">
          <h3 class="lk-services__card-title">Справочная информация</h3>
          <p class="lk-services__card-text">Подбор материалов из&nbsp;системы КонсультантПлюс по&nbsp;Вашему запросу</p>
        </div>
      </div>

      <div class="lk-services__card reveal reveal--delay-4">
        <svg class="icon lk-services__card-icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#doc-zapr"></use></svg>
        <div class="lk-services__card-body">
          <h3 class="lk-services__card-title">Документы по&nbsp;запросу</h3>
          <p class="lk-services__card-text">Поиск и&nbsp;предоставление документов, которых нет&nbsp;в&nbsp;Вашем комплекте</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ОБРАТИТЬСЯ ====== -->
<section class="lk-howto reveal">
  <div class="lk-howto__inner">
    <h2 class="lk-howto__title">Как обратиться на&nbsp;Линию консультаций</h2>

    <div class="lk-howto__body">
      <div class="lk-howto__left">
        <div class="lk-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/lk-screenshot.png" alt="Скриншот — кнопка «Задать вопрос» в программе КонсультантПлюс" class="lk-howto__screenshot" loading="lazy" />
        </div>
        <p class="lk-howto__caption">При помощи кнопки "Задать вопрос" в&nbsp;правом верхнем углу программы КонсультантПлюс</p>
      </div>

      <div class="lk-howto__right">
        <div class="lk-howto__feature reveal reveal--delay-1">
          <div class="lk-howto__feature-circle lk-howto__feature-circle--purple">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="lk-howto__feature-text">Быстро</span>
        </div>
        <div class="lk-howto__feature reveal reveal--delay-2">
          <div class="lk-howto__feature-circle lk-howto__feature-circle--orange">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="lk-howto__feature-text">Надежные ответы</span>
        </div>
        <div class="lk-howto__feature reveal reveal--delay-3">
          <div class="lk-howto__feature-circle lk-howto__feature-circle--purple">
            <svg class="icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#check-circle"></use></svg>
          </div>
          <span class="lk-howto__feature-text">Экспертность</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== НАШИ ЭКСПЕРТЫ ====== -->
<section class="lk-experts reveal">
  <div class="lk-experts__inner">
    <div class="lk-experts__header">
      <h2 class="lk-experts__title">Наши эксперты</h2>
      <div class="lk-experts__nav">
        <button class="lk-experts__btn lk-experts__btn--prev" aria-label="Предыдущий эксперт">
          <svg viewBox="0 0 24 24" fill="none"><path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="lk-experts__btn lk-experts__btn--next" aria-label="Следующий эксперт">
          <svg viewBox="0 0 24 24" fill="none"><path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>

    <div class="lk-experts__viewport">
      <div class="lk-experts__track">
        <div class="lk-experts__slide" data-index="0">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-1-melnikova.png" alt="Мельникова Ольга Геннадьевна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--purple">Мельникова Ольга Геннадьевна</h3>
              <p class="lk-experts__desc">Ведущий эксперт-бухгалтер. Опыт более 20&nbsp;лет. Имеет публикации в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="1">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-2-chepurina.png" alt="Чепурина Надежда Павловна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--orange">Чепурина Надежда Павловна</h3>
              <p class="lk-experts__desc">Ведущий эксперт-бухгалтер. Опыт работы более 30&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="2">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-3-zertsalova.png" alt="Зерцалова Елена Геннадьевна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--purple">Зерцалова Елена Геннадьевна</h3>
              <p class="lk-experts__desc">Ведущий эксперт-бухгалтер. Опыт более 20&nbsp;лет. Имеет публикации в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="3">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-4-kushcheva.png" alt="Кущева Олеся Владимировна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--orange">Кущева Олеся Владимировна</h3>
              <p class="lk-experts__desc">Ведущий юрист. Опыт работы более 17&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="4">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-5-nebsova.png" alt="Небесова Марина Валерьевна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--purple">Небесова Марина Валерьевна</h3>
              <p class="lk-experts__desc">Ведущий юрист. Опыт работы более 20&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="5">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-6-noverskaya.png" alt="Новерская Алина Валерьевна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--orange">Новерская Алина Валерьевна</h3>
              <p class="lk-experts__desc">Ведущий юрист. Опыт работы более 25&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="6">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-7-polyakova.png" alt="Полякова Ирина Олеговна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--purple">Полякова Ирина Олеговна</h3>
              <p class="lk-experts__desc">Ведущий эксперт-бухгалтер. Опыт работы более 15&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
        </div>

        <div class="lk-experts__slide" data-index="7">
          <div class="lk-experts__card">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/expert-8-tarasova.png" alt="Тарасова Ирина Викторовна" class="lk-experts__photo" loading="lazy" />
            <div class="lk-experts__info">
              <h3 class="lk-experts__name lk-experts__name--orange">Тарасова Ирина Викторовна</h3>
              <p class="lk-experts__desc">ВрИО руководителя Линии консультаций. Опыт работы более 17&nbsp;лет. Является автором публикаций в&nbsp;КонсультантПлюс.</p>
            </div>
          </div>
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
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz-lk-1.png" alt="Отзыв клиента" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="1">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz-lk-2.png" alt="Отзыв клиента" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="2">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz-lk-3.png" alt="Отзыв клиента" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="3">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz-lk-4.png" alt="Отзыв клиента" class="reviews__card-img" loading="lazy" />
              </div>
            </div>
            <div class="reviews__slide" data-index="4">
              <div class="reviews__card">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/otz-lk-5.png" alt="Отзыв клиента" class="reviews__card-img" loading="lazy" />
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


<!-- ====== ФОРМА ====== -->
<section class="lk-form reveal" id="lk-form">
  <div class="lk-form__inner">
    <div class="lk-form__bg">
      <span class="lk-form__deco lk-form__deco--big">?</span>
      <span class="lk-form__deco lk-form__deco--small">?</span>

      <div class="lk-form__content">
        <h2 class="lk-form__title">Задайте первый вопрос бесплатно</h2>
        <p class="lk-form__text">Мы предлагаем Вам уникальную возможность – задать бесплатный вопрос на&nbsp;Линию консультаций в&nbsp;рамках пробного периода.<br><br>Заполните форму и&nbsp;оцените экспертный уровень нашей поддержки.</p>
      </div>

      <div class="lk-form__card">
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


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
