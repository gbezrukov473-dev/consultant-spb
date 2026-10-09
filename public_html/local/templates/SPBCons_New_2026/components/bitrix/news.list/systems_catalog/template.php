<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult["ITEMS"])) return;

$tplPath = SITE_TEMPLATE_PATH;

foreach ($arResult["ITEMS"] as $arItem):
    $profile  = $arItem["PROPERTIES"]["PROFILE"]["VALUE"] ?? "";
    $iconFile = $arItem["PROPERTIES"]["ICON_FILE"]["VALUE"] ?? "";
    $imgSrc   = $iconFile ? "{$tplPath}/images/{$iconFile}" : "";
    $link     = $arItem["PROPERTIES"]["DETAIL_LINK"]["VALUE"] ?? "";
?>
  <div class="sc-catalog__card" data-profile="<?= htmlspecialcharsEx($profile) ?>">
    <?php if ($imgSrc): ?>
    <div class="sc-catalog__card-img-wrap">
      <img src="<?= $imgSrc ?>" alt="<?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="sc-catalog__card-img" loading="lazy" />
    </div>
    <?php endif; ?>
    <h3 class="sc-catalog__card-name"><?= $arItem["NAME"] ?></h3>
    <div class="sc-catalog__card-actions">
      <a href="#" class="btn btn--orange sc-catalog__card-btn" data-open-modal="modalService" data-lead-comment="Запрос на <?= htmlspecialcharsEx($arItem['NAME']) ?>">Узнать цену</a>
      <?php if ($link): ?>
        <a href="<?= $link ?>" class="sc-catalog__card-link">Подробнее &rarr;</a>
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>
