<?php
/**
 * Шаблон мобильного меню — mobile_nav
 *
 * Путь: /local/templates/spbcons_dev/components/bitrix/menu/mobile_nav/template.php
 *
 * Мобильное меню показывает все пункты плоским списком (без вложенности).
 * Подпункты "Новости" (Вопрос-ответ, Сборники) выводятся как обычные пункты.
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult)) return;
?>

<ul class="mobile-menu__list">
<?php foreach ($arResult as $arItem):
    $isLk = (isset($arItem["PARAMS"]["is_lk"]) && $arItem["PARAMS"]["is_lk"] === "Y");
    $text = htmlspecialcharsEx($arItem["TEXT"]);
    $link = $arItem["LINK"];

    // Пропускаем «родительский» пункт "Новости" уровня 1, т.к.
    // в мобильном меню его дочерние пункты уже отображаются отдельно
    if ($arItem["DEPTH_LEVEL"] == 1 && $arItem["IS_PARENT"]):
        continue;
    endif;

    $class = "mobile-menu__link";
    if ($isLk) $class .= " islk"; //" mobile-menu__link--lk";
?>
  <li><a href="<?= $link ?>" class="<?= $class ?>"><?= $text ?></a></li>
<?php endforeach; ?>
</ul>
