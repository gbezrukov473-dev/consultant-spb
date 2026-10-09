<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru" data-template-path="<?=SITE_TEMPLATE_PATH?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/svg+xml" href="<?=SITE_TEMPLATE_PATH?>/images/logo-consultant-crop.svg" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <meta name="theme-color" content="#ffffff" />

<? Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/custom.css');?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<?php include_once(\Bitrix\Main\Application::getDocumentRoot() . "/include/contacts.php"); ?>

<header class="header">
    <div class="header-top">
        <div class="header-top__inner">
            <div class="header-top__logos">
                <a href="/" class="header-top__logo-link">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-consultant.svg" alt="КонсультантПлюс" class="logo-consultant" />
                </a>
                <a href="/" class="header-top__logo-link">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-chdk.svg" alt="ЧДК Право" class="logo-chdk" />
                </a>
            </div>

            <div class="header-top__right">
                <div class="header-top__phone-block">
                    <span class="phone-icon"></span>
                    <div class="header-top__phone-info">
                        <a href="<?=PHONE_LINK?>" class="header-top__phone-number"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/phone.php", "EDIT_TEMPLATE" => ""));?></a>
                        <span class="header-top__phone-hours"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/work_hours.php", "EDIT_TEMPLATE" => ""));?></span>
                    </div>
                </div>
              <div class="top-loc-info"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/loc_info.php"
	)
);?></div>
                <a href="#" class="btn btn--yellow-on-purple header-top__cta-btn">Узнать цену</a>
            </div>

            <button class="header-burger" aria-label="Меню" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- ====== ДЕСКТОПНОЕ МЕНЮ (компонент Битрикс) ====== -->
    <nav class="header-nav">
        <div class="header-nav__inner">
          <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "header_nav",
            Array(
              "ROOT_MENU_TYPE"   => "top",
              "CHILD_MENU_TYPE"  => "left",
              "MAX_LEVEL"        => "2",
              "USE_EXT"          => "Y",
              "MENU_CACHE_TYPE"  => "A",
              "MENU_CACHE_TIME"  => "3600",
              "DELAY"            => "N",
              "ALLOW_MULTI_SELECT" => "N",
            )
          );?>
        </div>
        <div class="header-nav__line"></div>
    </nav>

    <!-- ====== МОБИЛЬНОЕ МЕНЮ (тот же компонент, другой шаблон) ====== -->
    <div class="mobile-menu">
        <div class="mobile-menu__inner">
          <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "mobile_nav",
            Array(
              "ROOT_MENU_TYPE"   => "top",
              "CHILD_MENU_TYPE"  => "left",
              "MAX_LEVEL"        => "2",
              "USE_EXT"          => "Y",
              "MENU_CACHE_TYPE"  => "A",
              "MENU_CACHE_TIME"  => "3600",
              "DELAY"            => "N",
              "ALLOW_MULTI_SELECT" => "N",
            )
          );?>
            <div class="mobile-menu__contacts">
                <a href="<?=PHONE_LINK?>" class="mobile-menu__phone"><?=PHONE_DISPLAY?></a>
                <span class="mobile-menu__hours"><?=WORK_HOURS?></span>
              <?// Карандашики для мобильного меню не нужны — они есть в десктопной шапке ?>
                <a href="#" class="btn btn--yellow mobile-menu__cta">Узнать цену</a>
            </div>
        </div>
    </div>
</header>

<main id="content">
