<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="news-list reveal">
  <div class="news-list__inner">
    <div class="news-list__items">

      <?php foreach ($arResult["ITEMS"] as $i => $arItem): ?>
      <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => "Удалить?"));
        $bgClass = ($i % 2 === 0) ? 'news-card--purple' : 'news-card--gray';
        $imgSrc = '';
        if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) {
            $imgSrc = $arItem["PREVIEW_PICTURE"]["SRC"];
        } elseif (!empty($arItem["DETAIL_PICTURE"]["SRC"])) {
            $imgSrc = $arItem["DETAIL_PICTURE"]["SRC"];
        }
      ?>

      <article class="news-card <?=$bgClass;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="news-card__img-wrap<?= empty($imgSrc) ? ' news-card__img-wrap--placeholder' : '' ?>">
          <?php if (!empty($imgSrc)): ?>
            <img src="<?=$imgSrc;?>" alt="<?=htmlspecialcharsEx($arItem["NAME"]);?>" class="news-card__img" loading="lazy" />
          <?php endif; ?>
        </div>
        <div class="news-card__body">
          <?php if (!empty($arItem["DISPLAY_ACTIVE_FROM"])): ?>
            <time class="news-card__date"><?=$arItem["DISPLAY_ACTIVE_FROM"];?></time>
          <?php endif; ?>
          <h2 class="news-card__title">
            <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="news-card__link"><?=$arItem["NAME"];?></a>
          </h2>
          <?php if (!empty($arItem["PREVIEW_TEXT"])): ?>
            <p class="news-card__text"><?=$arItem["PREVIEW_TEXT"];?></p>
          <?php endif; ?>
        </div>
      </article>

      <?php endforeach; ?>

    </div>

    <!-- Пагинация -->
    <div class="news-pagination">
      <?=$arResult["NAV_STRING"];?>
    </div>

  </div>
</section>
