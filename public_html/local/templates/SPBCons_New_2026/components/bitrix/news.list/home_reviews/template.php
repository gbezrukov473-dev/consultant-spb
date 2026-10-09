<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$tplPath = SITE_TEMPLATE_PATH;
?>

<!-- DEBUG: items count = <?= count($arResult["ITEMS"] ?? []) ?> -->
<?php if (!empty($arResult["ITEMS"])): ?>
<!-- DEBUG: first item keys = <?= implode(", ", array_keys($arResult["ITEMS"][0])) ?> -->
<!-- DEBUG: first item PROPERTIES keys = <?= implode(", ", array_keys($arResult["ITEMS"][0]["PROPERTIES"] ?? [])) ?> -->
<?php foreach ($arResult["ITEMS"] as $i => $item): ?>
<!-- DEBUG item <?= $i ?>: NAME=<?= $item["NAME"] ?> | ICON_FILE=<?= $item["PROPERTIES"]["ICON_FILE"]["VALUE"] ?? "EMPTY" ?> -->
<?php endforeach; ?>
<?php endif; ?>

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
        <?php if (!empty($arResult["ITEMS"])): ?>
        <?php foreach ($arResult["ITEMS"] as $index => $arItem):
            $iconFile = $arItem["PROPERTIES"]["ICON_FILE"]["VALUE"] ?? "";
            if (!$iconFile) continue;
            $imgSrc = "{$tplPath}/images/{$iconFile}";
        ?>
          <div class="reviews__slide" data-index="<?= $index ?>">
            <div class="reviews__card">
              <img src="<?= $imgSrc ?>" alt="Отзыв <?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="reviews__card-img" loading="lazy" />
            </div>
          </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <button class="reviews__btn reviews__btn--next" aria-label="Следующий отзыв">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </div>
</div>
