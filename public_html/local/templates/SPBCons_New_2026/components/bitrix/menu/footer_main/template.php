<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult)) return;

$half = ceil(count($arResult) / 2);
$col1 = array_slice($arResult, 0, $half);
$col2 = array_slice($arResult, $half);
?>
<nav class="footer__nav footer__nav--col1">
  <ul class="footer__nav-list">
    <?php foreach ($col1 as $item): ?>
    <li><a href="<?= $item["LINK"] ?>" class="footer__nav-link"><?= $item["TEXT"] ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
<nav class="footer__nav footer__nav--col2">
  <ul class="footer__nav-list">
    <?php foreach ($col2 as $item): ?>
    <li><a href="<?= $item["LINK"] ?>" class="footer__nav-link"><?= $item["TEXT"] ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
