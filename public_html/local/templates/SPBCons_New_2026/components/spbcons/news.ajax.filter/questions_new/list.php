<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
<?php
	$this->getComponent()->initControlButtons($this, $arItem);
	$arItem["LINK"] = str_replace($arItem["ID"], $arItem["CODE"], $arItem["LINK"]);
	$questionText = !empty($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : $arItem["NAME"];

	$tagIds = [];
	if (!empty($arItem["PROPERTIES"]["ELEMENT_TAGS"]["VALUE"])) {
		$tagValues = $arItem["PROPERTIES"]["ELEMENT_TAGS"]["VALUE"];
		if (!is_array($tagValues)) $tagValues = [$tagValues];
		$tagIds = $tagValues;
	}
	$tagsAttr = implode(",", $tagIds);
?>

	<a href="<?=$arItem["LINK"];?>" class="faq-questions__link" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-tags="<?=htmlspecialcharsEx($tagsAttr);?>">
		<span class="faq-questions__text"><?=$questionText;?></span>
		<svg class="faq-questions__arrow" viewBox="0 0 24 24" fill="none"><path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
	</a>

<?php endforeach; ?>
