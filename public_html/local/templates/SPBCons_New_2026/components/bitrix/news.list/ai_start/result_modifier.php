<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\Model\Section;

if (empty($arResult["ITEMS"])) {
    return;
}

$firstItem = reset($arResult["ITEMS"]);
$sectionId = (int)$firstItem["IBLOCK_SECTION_ID"];
$iblockId = (int)$arResult["ID"];

if ($sectionId > 0 && Loader::includeModule('iblock')) {
    
    $sectionEntity = Section::compileEntityByIblock($iblockId);
    
    $sectionData = $sectionEntity::getList([
        'select' => [
            'ID', 
            'NAME', 
            'DESCRIPTION', 
            'PICTURE',  
            'UF_VIDEO_LINK'  
        ],
        'filter' => [
            '=ID' => $sectionId,
            '=IBLOCK_ID' => $iblockId,
            '=ACTIVE' => 'Y'
        ]
    ])->fetch();

    if ($sectionData) {
        $arResult["SECTION_DATA"] = [
            "NAME" => $sectionData["NAME"],
            "DESCRIPTION" => $sectionData["DESCRIPTION"], 
            "PICTURE" => $sectionData["PICTURE"],
            "BOTTOM_TEXT" => $sectionData["UF_VIDEO_LINK"],
        ];
    }
}
