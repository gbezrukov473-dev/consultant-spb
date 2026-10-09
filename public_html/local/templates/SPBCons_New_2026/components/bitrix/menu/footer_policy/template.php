<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult)) return;
?>
<nav class="footer__nav footer__nav--col3">
  <ul class="footer__nav-list">
    <?php foreach ($arResult as $item): ?>
    <li><a href="<?= $item["LINK"] ?>" class="footer__nav-link footer__nav-link--muted"<?php
      if (preg_match('/\.(pdf|doc|docx|zip)$/i', $item["LINK"])): ?> target="_blank" rel="noopener"<?php endif;
    ?>><?= preg_replace('/\s+/u', '<br>', $item["TEXT"], 1) ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
