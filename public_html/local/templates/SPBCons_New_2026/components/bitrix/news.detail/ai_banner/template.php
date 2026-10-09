  <? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
  if (empty($arResult["ID"])) return;
  
  $title = $arResult["NAME"];
  $previewText = $arResult["PREVIEW_TEXT"] ?? '';
  $previewImgSrc = $arResult["PREVIEW_PICTURE"]["SRC"] ?? SITE_TEMPLATE_PATH . '/images/ai-pomoschnik-hero.png';
?>

<section class="aip-hero reveal">
    <div class="aip-hero__inner">
        <div class="aip-hero__content">
          
            <? if (!empty($previewText)): ?>
              <div class="aip-hero__text">
                <?=$previewText?>
              </div>
            <? endif; ?>

            <a href="#" class="btn btn--purple aip-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по ИИ-сервису">Получить доступ</a>
        </div>

        <div class="aip-hero__visual">
            <img src="<?=$previewImgSrc?>" alt="<?=htmlspecialcharsbx($title)?>" class="aip-hero__img" loading="lazy" />
        </div>
    </div>
</section>
