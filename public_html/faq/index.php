<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Вопрос-ответ");
$APPLICATION->SetPageProperty("description", "Вопрос-ответ: частые вопросы по бухгалтерии, налогам, кадрам и праву — ответы экспертов КонсультантПлюс");
$APPLICATION->SetPageProperty("title", "Вопрос-ответ — КонсультантПлюс СПБ");
?>


<?php
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$dir = $request->getRequestedPageDirectory();
$arrdir = explode('/', $dir);
$new_array = array_filter($arrdir, function($element) { return !empty($element); });
$new_array = array_values($new_array);
$ID = $request->get('ID');

if ((is_array($new_array) && $new_array[1] != '') || $ID != '') {
    if ($ID != '') { $new_array = []; $new_array[1] = $ID; }
    if (is_numeric($new_array[1])) {
        \Bitrix\Main\Loader::includeModule('iblock');
        $elements = \Bitrix\Iblock\Elements\ElementFaqspbconsTable::getList([
            'select' => ['CODE'],
            'filter' => ['=ID' => $new_array[1]],
        ]);
        if ($arElement = $elements->fetch()) {
            LocalRedirect('/faq/' . $arElement['CODE'] . '/');
        } else {
            \Bitrix\Iblock\Component\Tools::process404('404 Не найдено', true, true, true, false);
        }
    }
}
?>


<?php $APPLICATION->IncludeComponent(
    "spbcons:news.ajax.filter",
    "questions_new",
    array(
        "IBLOCK_ID" => 141,
        "ROUTING" => "Y",
        "MAX_COUNT" => 999,
        "PAGE_URL" => '/faq/',
        "TAGS_PROPERTY" => "ELEMENT_TAGS",
        "MAX_DISPLAY_TAGS" => 15,
        "IMAGE_PROCESSOR" => BX_RESIZE_IMAGE_EXACT,
        "DATE_FILTER" => "N",
        "ADDITIONAL_FILTER" => [
            "CHECK_PERMISSIONS" => "N"
        ]
    )
); ?>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
