<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["ITEM"]) {
    if ($arParams["FRESH_FILE_PROPERTY"]) {
        $fileId = $arResult["ITEM"]["PROPERTIES"][$arParams["FRESH_FILE_PROPERTY"]]["VALUE"];
    } else {
        $fileId = $arResult["ITEM"]["PROPERTIES"]["FRESH_FILE"]["VALUE"];
    }
    $arResult["ITEM"]["FILE_PATH"] = CFile::GetPath($fileId);
}
