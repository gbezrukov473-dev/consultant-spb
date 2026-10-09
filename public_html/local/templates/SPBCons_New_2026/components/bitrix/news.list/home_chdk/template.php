<?php
/**
 * Шаблон: Сервисы ЧДК на главной
 * Путь: /local/templates/spbcons_dev/components/bitrix/news.list/home_chdk/template.php
 *
 * Поля инфоблока:
 *   NAME            — название сервиса
 *   PREVIEW_TEXT    — краткое описание
 *   Свойство COLOR       — "yellow" или "purple"
 *   Свойство BUTTON_TEXT — текст кнопки ("Задать вопрос", "Обратиться" и т.д.)
 *   Свойство DETAIL_LINK — ссылка «Подробнее»
 *   Свойство MODAL_ID    — ID модального окна (по умолчанию "modalService")
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult["ITEMS"])) return;

$delay = 0;
$maxDelay = 3;
?>

<div class="chdk__grid">
<?php foreach ($arResult["ITEMS"] as $arItem):
    $delay++;
    if ($delay > $maxDelay) $delay = 1;

    $color = strtolower($arItem["PROPERTIES"]["COLOR"]["VALUE"] ?? "yellow");
    $btnText = $arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"] ?: "Обратиться";
    $detailLink = $arItem["PROPERTIES"]["DETAIL_LINK"]["VALUE"] ?: "#";
    $modalId = $arItem["PROPERTIES"]["MODAL_ID"]["VALUE"] ?: "modalService";

    $btnColorClass = ($color === "purple") ? "chdk-card__btn--purple" : "chdk-card__btn--yellow";
    $linkClass = ($color === "purple") ? "btn--link-purple" : "btn--link-yellow";
?>
  <div class="chdk-card chdk-card--<?= $color ?> reveal reveal--delay-<?= $delay ?>">
    <h3 class="chdk-card__title chdk-card__title--<?= $color ?>"><?= $arItem["NAME"] ?></h3>
    <p class="chdk-card__text"><?= $arItem["PREVIEW_TEXT"] ?></p>
    <div class="chdk-card__actions">
      <a href="#" class="btn btn--sm chdk-card__btn <?= $btnColorClass ?>" data-open-modal="<?= $modalId ?>" data-lead-comment="Запрос по <?= htmlspecialcharsEx($arItem['NAME']) ?>"><?= htmlspecialcharsEx($btnText) ?></a>
      <a href="<?= $detailLink ?>" class="btn <?= $linkClass ?> btn--sm chdk-card__link">Подробнее</a>
    </div>
  </div>
<?php endforeach; ?>
</div>
