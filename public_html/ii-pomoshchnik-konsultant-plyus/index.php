<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ИИ-помощник КонсультантПлюс — интеллектуальный сервис для правовых вопросов");
$APPLICATION->SetPageProperty("description", "ИИ-помощник КонсультантПлюс — интеллектуальный сервис для быстрого решения правовых вопросов.");
$APPLICATION->SetTitle("ИИ-помощник КонсультантПлюс");
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/o-sisteme-konsultantplyus/" class="breadcrumbs__link">О СПС КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">ИИ-помощник</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<section class="aip-hero reveal">
  <div class="aip-hero__inner">
    <div class="aip-hero__content">
      <h1 class="aip-hero__title">
        <span class="aip-hero__title-accent">ИИ-помощник</span><br />
        КонсультантПлюс
      </h1>
      <p class="aip-hero__text">Задайте вопрос по&nbsp;праву или налогам в&nbsp;свободной форме и&nbsp;получите развёрнутый ответ со&nbsp;ссылками на&nbsp;актуальные документы.</p>
      <p class="aip-hero__subtext">ИИ-помощник учитывает контекст диалога, формирует подборку материалов из&nbsp;системы КонсультантПлюс и&nbsp;сохраняет историю обсуждения. Все, чтобы вы&nbsp;быстро нашли решение и&nbsp;опирались на&nbsp;проверенные источники.</p>
      <a href="#" class="btn btn--purple aip-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по ИИ-помощнику">Получить доступ</a>
    </div>
    <div class="aip-hero__visual">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/ai-pomoschnik-hero.png" alt="ИИ-помощник КонсультантПлюс" class="aip-hero__img" loading="lazy" />
    </div>
  </div>
</section>


<!-- ====== ВОЗМОЖНОСТИ ИИ-ПОМОЩНИКА ====== -->
<section class="aip-features reveal">
  <div class="aip-features__inner">
    <h2 class="aip-features__title">Что умеет ИИ-помощник Консультант&nbsp;Плюс</h2>
    <p class="aip-features__subtitle">Это современный сервис на&nbsp;основе искусственного интеллекта для&nbsp;работы с&nbsp;правовой информацией</p>

    <div class="aip-features__grid">
      <div class="aip-features__card reveal reveal--delay-1">
        <svg class="icon aip-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ai-pom-vopros"></use></svg>
        <div class="aip-features__body">
          <h3 class="aip-features__name">Отвечает на&nbsp;ваши вопросы</h3>
          <p class="aip-features__desc">Получите ответ на&nbsp;сложный правовой или налоговый вопрос&nbsp;&mdash; с&nbsp;актуальными НПА, судебной практикой и&nbsp;комментариями экспертов</p>
        </div>
      </div>
      <div class="aip-features__card reveal reveal--delay-2">
        <svg class="icon aip-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ai-pom-obuch"></use></svg>
        <div class="aip-features__body">
          <h3 class="aip-features__name">Постоянно обучается</h3>
          <p class="aip-features__desc">В&nbsp;основе технологии&nbsp;&mdash; более чем 360&nbsp;млн документов, судебных актов и&nbsp;аналитических материалов КонсультантПлюс</p>
        </div>
      </div>
      <div class="aip-features__card reveal reveal--delay-3">
        <svg class="icon aip-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ai-pom-material"></use></svg>
        <div class="aip-features__body">
          <h3 class="aip-features__name">Формирует подборку материалов</h3>
          <p class="aip-features__desc">Дополнительно показывает документы из&nbsp;системы КонсультантПлюс, которые помогут глубже изучить вопрос</p>
        </div>
      </div>
      <div class="aip-features__card reveal reveal--delay-4">
        <svg class="icon aip-features__icon" aria-hidden="true"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#ai-pom-dialogue"></use></svg>
        <div class="aip-features__body">
          <h3 class="aip-features__name">Учитывает контекст диалога</h3>
          <p class="aip-features__desc">Можно уточнять и&nbsp;развивать тему&nbsp;&mdash; ИИ-помощник помнит историю обсуждения и&nbsp;отвечает с&nbsp;учётом сказанного ранее</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ====== КАК ПОЛЬЗОВАТЬСЯ ИИ-ПОМОЩНИКОМ ====== -->
<section class="aip-howto reveal">
  <div class="aip-howto__inner">
    <h2 class="aip-howto__title">Как пользоваться ИИ-помощником Консультант&nbsp;Плюс</h2>

    <div class="aip-howto__body">
      <div class="aip-howto__left">
        <div class="aip-howto__screenshot-wrap">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/ai-pom-kak-polzovats.png" alt="Скриншот — ИИ-помощник в системе КонсультантПлюс" class="aip-howto__screenshot" loading="lazy" />
        </div>
      </div>

      <div class="aip-howto__right">
        <div class="aip-howto__step reveal reveal--delay-1">
          <div class="aip-howto__step-circle aip-howto__step-circle--purple">
            <span class="aip-howto__step-num">1</span>
          </div>
          <div class="aip-howto__step-content">
            <p class="aip-howto__step-text"><strong>Задайте вопрос в&nbsp;свободной форме.</strong> Напишите его своими словами, как спросили&nbsp;бы у&nbsp;коллеги&nbsp;&mdash; специальные формулировки и&nbsp;точные запросы не&nbsp;обязательны.</p>
          </div>
        </div>
        <div class="aip-howto__step reveal reveal--delay-2">
          <div class="aip-howto__step-circle aip-howto__step-circle--orange">
            <span class="aip-howto__step-num">2</span>
          </div>
          <div class="aip-howto__step-content">
            <p class="aip-howto__step-text"><strong>Получите ответ и&nbsp;подборку документов.</strong> ИИ-помощник подготовит ответ, а&nbsp;также покажет дополнительные материалы по&nbsp;теме, в&nbsp;том числе похожие запросы пользователей.</p>
          </div>
        </div>
        <div class="aip-howto__step reveal reveal--delay-3">
          <div class="aip-howto__step-circle aip-howto__step-circle--purple">
            <span class="aip-howto__step-num">3</span>
          </div>
          <div class="aip-howto__step-content">
            <p class="aip-howto__step-text"><strong>Уточняйте и&nbsp;развивайте тему.</strong> Задавайте дополнительные вопросы&nbsp;&mdash; помощник помнит историю вашего общения. Все диалоги сохраняются&nbsp;&mdash; вы&nbsp;сможете вернуться к&nbsp;ним позже.</p>
          </div>
        </div>

        <a href="https://spbcons.ru/upload/rolik_ii_pomoshnik-dialog_20260224.mp4" class="btn btn--purple aip-howto__action-btn" target="_blank" rel="noopener">Как это работает</a>
      </div>
    </div>
  </div>
</section>


<!-- ====== БЕСПЛАТНЫЙ ДОСТУП ====== -->
<section class="trial trial--aip reveal" id="aip-form">
  <div class="trial__inner">
    <div class="trial__card">
      <div class="trial__left">
        <h2 class="trial__title aip-trial__title">
          <span class="aip-trial__line">Любопытно, <span class="aip-trial__accent">справится&nbsp;ли ИИ-</span></span>
          <span class="aip-trial__line"><span class="aip-trial__accent">помощник </span>с&nbsp;вашим вопросом?</span>
          <span class="aip-trial__sub">Проверьте сами&nbsp;&mdash; оставьте заявку на&nbsp;пробный доступ</span>
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
