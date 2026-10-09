<?php
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetPageProperty("keywords", "ии помощник консультант, консультант плюс ии помощник, ии помощник консультантплюс, ии помощник договоры консультант плюс, консультант плюс ии, ии договоры консультант плюс, нейросеть консультант, нейросеть консультант плюс, аи консультант плюс, ии проверка договоров консультант плюс, ии глубокий поиск консультант плюс, ии консультант юрист, ии для бухгалтера, правовой ии");
  $APPLICATION->SetPageProperty("title", "ИИ-сервисы КонсультантПлюс – нейросеть для бухгалтеров и юристов");
  $APPLICATION->SetPageProperty("description", "Используйте ИИ-сервисы КонсультантПлюс для поиска ответов на правовые и налоговые вопросы, сложного анализа и оценки рисков. Доступен глубокий поиск, проверка договоров и краткий пересказ документов. Получите доступ к системе и ИИ-сервису от официального представителя в СПб и ЛО");
  $APPLICATION->SetTitle("ИИ-сервисы КонсультантПлюс");?>


<?/* ====== ХЛЕБНЫЕ КРОШКИ интегрировать и убрать в шаблон ====== */?>
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="/o-sisteme-konsultantplyus/" class="breadcrumbs__link">О СПС КонсультантПлюс</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">ИИ-сервисы</span>
  </div>
</nav>


<!-- ====== HERO ====== -->
<?$APPLICATION->IncludeComponent(
  "bitrix:news.detail",
  "ai_banner",
  [
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_ELEMENT_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "BROWSER_TITLE" => "-",
    "CACHE_GROUPS" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_CODE" => "",
    "ELEMENT_ID" => "252272",
    "FIELD_CODE" => [
      0 => "",
      1 => "",
    ],
    "IBLOCK_ID" => "229",
    "IBLOCK_TYPE" => "spbcons",
    "IBLOCK_URL" => "",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "-",
    "META_KEYWORDS" => "-",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Страница",
    "PROPERTY_CODE" => [
      0 => "",
      1 => "",
    ],
    "SET_BROWSER_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "STRICT_SECTION_CHECK" => "N",
    "USE_PERMISSIONS" => "N",
    "USE_SHARE" => "N"
  ],
  false
);?>


<!-- ====== вкладки ИИ-ПОМОЩНИКА ====== -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"ai_tabs", 
	[
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [
			0 => "DETAIL_TEXT",
			1 => "",
		],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "229",
		"IBLOCK_TYPE" => "spbcons",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "811",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => [
			0 => "CAN",
			1 => "HELP",
			2 => "VIDEO",
		],
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "ai_tabs"
	],
	false
);?>
<!-- ====== ВОЗМОЖНОСТИ ИИ-ПОМОЩНИКА ====== -->
<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "ai_can",
  [
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => [
      0 => "",
      1 => "",
    ],
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "229",
    "IBLOCK_TYPE" => "spbcons",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "812",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => [
      0 => "",
      1 => "PREVIEW_PICTURE_SVG",
      2 => "",
    ],
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "NAME",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "ai_can"
  ],
  false
);?>


<!-- ====== КАК ПОЛЬЗОВАТЬСЯ ИИ-ПОМОЩНИКОМ ====== -->
<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "ai_start",
  [
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => [
      0 => "",
      1 => "",
    ],
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "229",
    "IBLOCK_TYPE" => "spbcons",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "813",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => [
      0 => "",
      1 => "",
      2 => "",
    ],
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "NAME",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "ai_can"
  ],
  false
);?>


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