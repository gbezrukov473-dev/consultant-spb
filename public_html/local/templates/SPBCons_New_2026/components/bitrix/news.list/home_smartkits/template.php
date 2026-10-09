<?php
/**
 * Шаблон: Смарт-комплекты на главной
 * Путь: /local/templates/spbcons_dev/components/bitrix/news.list/home_smartkits/template.php
 *
 * Поля инфоблока (ID 223, код smart_kits):
 *   Название (NAME)             — "Бухгалтеру", "Юристу" и т.д.
 *   Описание для анонса (PREVIEW_TEXT) — текст карточки
 *   Свойство COLOR      — "purple" или "orange"
 *   Свойство BUTTON_TEXT — текст CTA-кнопки (по умолчанию "Узнать цену")
 *   Свойство TITLE_SIZE  — "ruk" для «Руководителю», пусто для обычного
 *   Свойство LINK        — ссылка «Подробнее» (/systems/bukhgalteru/ и т.д.)
 *   Свойство ICON_FILE   — имя файла иконки в images/ (SK-buhgalter.png и т.д.)
 *
 * Первые 3 элемента → верхний ряд, остальные → нижний.
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult["ITEMS"])) return;

$tplPath = SITE_TEMPLATE_PATH;
$items = $arResult["ITEMS"];
$topItems = array_slice($items, 0, 3);
$bottomItems = array_slice($items, 3);
// Модификатор позиционирования иконки по имени файла (см. .sk-card__icon--* в styles.css)
$iconMods = [
    "SK-buhgalter"   => "buh",
    "SK-jurist"      => "jur",
    "SK-rukovoditel" => "ruk",
    "SK-bujet-org"   => "byudzhet",
    "SK-kadr-ruk"    => "kadry",
];
$iconModClass = function ($iconFile) use ($iconMods) {
    $base = $iconFile ? pathinfo($iconFile, PATHINFO_FILENAME) : "";
    return isset($iconMods[$base]) ? " sk-card__icon--{$iconMods[$base]}" : "";
};
$delay = 0;
?>

<div class="sk__row sk__row--top">
<?php foreach ($topItems as $arItem):
    $delay++;
    $color = strtolower($arItem["PROPERTIES"]["COLOR"]["VALUE"] ?? "purple");
    $iconFile = $arItem["PROPERTIES"]["ICON_FILE"]["VALUE"] ?? "";
    $imgSrc = $iconFile ? "{$tplPath}/images/{$iconFile}" : "";
    $link = $arItem["PROPERTIES"]["LINK"]["VALUE"] ?? "";
    $btnText = $arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"] ?: "Узнать цену";
    $titleSize = $arItem["PROPERTIES"]["TITLE_SIZE"]["VALUE"] ?? "";
    $titleClass = $titleSize ? " sk-card__title--{$titleSize}" : "";
?>
  <div class="sk-card sk-card--<?= $color ?> reveal reveal--delay-<?= $delay ?>">
    <?php if ($imgSrc): ?>
      <img src="<?= $imgSrc ?>" alt="" class="sk-card__icon<?= $iconModClass($iconFile) ?>" />
    <?php endif; ?>
    <div class="sk-card__header">
      <h3 class="sk-card__title<?= $titleClass ?>"><?= $arItem["NAME"] ?></h3>
    </div>
    <div class="sk-card__body">
      <p class="sk-card__text"><?= $arItem["PREVIEW_TEXT"] ?></p>
      <div class="sk-card__actions">
        <a href="#" class="btn btn--yellow btn--sm js-open-modal-price"><?= htmlspecialcharsEx($btnText) ?></a>
        <?php if ($link): ?>
          <a href="<?= $link ?>" class="btn btn--link-yellow btn--sm">Подробнее</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<?php if (!empty($bottomItems)): ?>
<div class="sk__row sk__row--bottom">
<?php
$delay = 0;
foreach ($bottomItems as $arItem):
    $delay++;
    $color = strtolower($arItem["PROPERTIES"]["COLOR"]["VALUE"] ?? "orange");
    $iconFile = $arItem["PROPERTIES"]["ICON_FILE"]["VALUE"] ?? "";
    $imgSrc = $iconFile ? "{$tplPath}/images/{$iconFile}" : "";
    $link = $arItem["PROPERTIES"]["LINK"]["VALUE"] ?? "";
    $btnText = $arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"] ?: "Узнать цену";
?>
  <div class="sk-card sk-card--<?= $color ?> reveal reveal--delay-<?= $delay ?>">
    <?php if ($imgSrc): ?>
      <img src="<?= $imgSrc ?>" alt="" class="sk-card__icon<?= $iconModClass($iconFile) ?>" />
    <?php endif; ?>
    <div class="sk-card__header">
      <h3 class="sk-card__title sk-card__title--sm"><?= $arItem["NAME"] ?></h3>
    </div>
    <div class="sk-card__body">
      <p class="sk-card__text"><?= $arItem["PREVIEW_TEXT"] ?></p>
      <div class="sk-card__actions">
        <a href="#" class="btn btn--yellow btn--sm js-open-modal-price"><?= htmlspecialcharsEx($btnText) ?></a>
        <?php if ($link): ?>
          <a href="<?= $link ?>" class="btn btn--link-yellow btn--sm">Подробнее</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
<?php endif; ?>
