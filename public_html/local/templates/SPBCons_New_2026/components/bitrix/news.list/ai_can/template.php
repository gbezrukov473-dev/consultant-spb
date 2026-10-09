  <? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
  if (empty($arResult["ITEMS"])) return;
  
  $sectionId = (int)($arResult["SECTION"]["PATH"][0]["ID"] ?? $arResult["IBLOCK_SECTION_ID"] ?? 0);
  $sectionName = "";
  $sectionDesc = "";
  
  if ($sectionId > 0 && \Bitrix\Main\Loader::includeModule('iblock')) {
    $arSection = \Bitrix\Iblock\SectionTable::getById($sectionId)->fetch();
    if ($arSection) {
      if (!empty($arSection["NAME"])) $sectionName = $arSection["NAME"];
      if (!empty($arSection["DESCRIPTION"])) $sectionDesc = $arSection["DESCRIPTION"];
    }
  }
?>

<section class="aip-features reveal">
    <div class="aip-features__inner">
        <h2 class="aip-features__title"><?=$sectionName?></h2>
        <p class="aip-features__subtitle"><?=$sectionDesc?></p>
      
        <? if (!empty($arResult["ITEMS"])): ?>
          <div class="aip-features__grid">
              <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
                <?
              $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
              $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
              
              $delayClass = ' reveal--delay-' . ($index + 1);
              $fileId = $arItem["PROPERTIES"]["PREVIEW_PICTURE_SVG"]["VALUE"] ?? null;
              $svgSrc = !empty($fileId) ? \CFile::GetPath($fileId) : '';
              ?>
                <div class="aip-features__card reveal<?=$delayClass?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <? if (!empty($svgSrc)): ?>
                      <img class="icon aip-features__icon" src="<?=$svgSrc?>" alt="<?=htmlspecialcharsbx($arItem["NAME"])?>" aria-hidden="true" loading="lazy" />
                    <? endif; ?>
                    <div class="aip-features__body">
                        <h3 class="aip-features__name"><?=$arItem["NAME"]?></h3>
                        <p class="aip-features__desc"><?=$arItem["PREVIEW_TEXT"]?></p>
                    </div>
                </div>
              <? endforeach; ?>
          </div>
        <? endif; ?>
    </div>
</section>