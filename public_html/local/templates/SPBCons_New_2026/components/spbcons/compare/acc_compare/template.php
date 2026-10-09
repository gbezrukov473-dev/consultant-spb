<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult['ELS'])) return;

$tplPath = SITE_TEMPLATE_PATH;

$systems = [];
if (!empty($arResult['TABS'])) {
    $tab = reset($arResult['TABS']);
    $tabSystemIds = $tab['ELS'] ?? [];
    foreach ($arResult['ELS'] as $sysId => $sys) {
        if (in_array($sysId, $tabSystemIds)) {
            $systems[$sysId] = $sys;
        }
    }
} else {
    $systems = $arResult['ELS'];
}

if (empty($systems)) return;

$systemIds = array_keys($systems);

$excluded = [];
if (!empty($arResult['INCS'])) {
    foreach ($arResult['INCS'] as $secId => $section) {
        if (empty($section['IB_ELS'])) continue;
        foreach ($section['IB_ELS'] as $elId => $el) {
            $found = array_intersect($systemIds, $el['SYSTEMS'] ?? []);
            if (empty($found)) {
                $excluded[$secId][] = $elId;
            }
        }
    }
}
?>

<div class="acc-compare__head">
  <div class="acc-compare__head-label">Информационные банки</div>
  <?php foreach ($systems as $sys): ?>
  <div class="acc-compare__head-col">
    <span class="acc-compare__head-name"><?= htmlspecialcharsEx($sys['NAME']) ?></span>
    <a href="#" class="btn acc-compare__head-btn" data-open-modal="modalPrice" data-lead-comment="Запрос на <?= htmlspecialcharsEx($sys['NAME']) ?>">Узнать цену</a>
  </div>
  <?php endforeach; ?>
</div>

<?php
$isFirst = true;
foreach ($arResult['INCS'] as $secId => $section):
    if (empty($section['IB_ELS'])) continue;
    $exIds = $excluded[$secId] ?? [];
    if (count($exIds) >= count($section['IB_ELS'])) continue;
?>
<div class="acc-compare__section<?= $isFirst ? ' is-open' : '' ?>">
  <button class="acc-compare__section-btn" aria-expanded="<?= $isFirst ? 'true' : 'false' ?>">
    <span class="acc-compare__section-name"><?= htmlspecialcharsEx($section['NAME']) ?></span>
    <svg class="acc-compare__chevron" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <div class="acc-compare__section-body">
    <?php foreach ($section['IB_ELS'] as $elId => $el):
        if (in_array($elId, $exIds)) continue;
    ?>
    <div class="acc-compare__row">
      <span class="acc-compare__row-label"><?= htmlspecialcharsEx($el['NAME']) ?></span>
      <?php foreach ($systemIds as $sysId): ?>
      <span class="acc-compare__row-cell">
        <?php if (in_array($sysId, $el['SYSTEMS'] ?? [])): ?>
        <svg class="icon acc-compare__icon" role="img" aria-label="есть"><use href="<?= $tplPath ?>/images/sprite.svg#galochka"></use></svg>
        <?php else: ?>
        <svg class="icon acc-compare__icon" role="img" aria-label="нет"><use href="<?= $tplPath ?>/images/sprite.svg#krest"></use></svg>
        <?php endif; ?>
      </span>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?php
    $isFirst = false;
endforeach;
?>
