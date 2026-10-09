<? if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/inoagents_text.php'))
  include $_SERVER['DOCUMENT_ROOT'] . '/local/inoagents_text.php';
?>
  <? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
  if (empty($arResult["ITEMS"])) return;
  
  $secData = $arResult["SECTION_DATA"] ?? [];
  $sectionName = !empty($secData["NAME"]) ? $secData["NAME"] : "";
  $sectionDesc = !empty($secData["DESCRIPTION"]) ? $secData["DESCRIPTION"] : "";
  $bottomText = !empty($secData["BOTTOM_TEXT"]) ? $secData["BOTTOM_TEXT"] : "";
  $sectionImgSrc = !empty($secData["PICTURE"]) ? \CFile::GetPath($secData["PICTURE"]) : SITE_TEMPLATE_PATH . "/images/ai-pom-kak-polzovats.png";
?>

<section class="aip-howto reveal ii">
    <div class="aip-howto__inner">
        <h2 class="aip-howto__title"><?=$sectionName?></h2>
        <? if (!empty($sectionDesc)): ?>
          <p class="aip-features__subtitle"><?=$sectionDesc?></p>
        <? endif; ?>
        
        <div class="aip-howto__body">
            <div class="aip-howto__left">
                <div class="aip-howto__screenshot-wrap">
                    <img src="<?=$sectionImgSrc?>" alt="<?=htmlspecialcharsbx($sectionName)?>" class="aip-howto__screenshot" loading="lazy" />
                </div>
            </div>

            <div class="aip-howto__right">
                <? if (!empty($arResult["ITEMS"])): ?>
                  <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
                    <?
                  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                  
                  $delayClass = ' reveal--delay-' . ($index + 1);
                  $circleColorClass = ($index % 2 === 0) ? 'aip-howto__step-circle--purple' : 'aip-howto__step-circle--orange';
                  ?>
                      <div class="aip-howto__step reveal<?=$delayClass?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                          <div class="aip-howto__step-circle <?=$circleColorClass?>">
                              <span class="aip-howto__step-num"><?=($index + 1)?></span>
                          </div>
                          <div class="aip-howto__step-content">
                              <p class="aip-howto__step-text"><?=$arItem["PREVIEW_TEXT"]?></p>
                          </div>
                      </div>
                  <? endforeach; ?>
                <? endif; ?>
              
                <? if (!empty($bottomText)): ?>
                  <p class="pereskaz"><?=$bottomText?></p>
                <? endif; ?>
            </div>
        </div>
    </div>
</section>

