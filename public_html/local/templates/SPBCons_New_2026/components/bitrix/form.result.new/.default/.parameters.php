<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arTemplateParameters = [
    "FORM_TITLE" => [
        "NAME"    => "Заголовок формы",
        "TYPE"    => "STRING",
        "DEFAULT" => "",
    ],
    "FORM_SUBTITLE" => [
        "NAME"    => "Подзаголовок формы",
        "TYPE"    => "STRING",
        "DEFAULT" => "",
    ],
    "SHOW_MESSAGE" => [
        "NAME"    => "Показывать поле «Сообщение»",
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "Y",
    ],
    "SUBMIT_TEXT" => [
        "NAME"    => "Текст кнопки",
        "TYPE"    => "STRING",
        "DEFAULT" => "Отправить",
    ],
    "SUBMIT_CLASS" => [
        "NAME"    => "CSS-класс кнопки",
        "TYPE"    => "STRING",
        "DEFAULT" => "modal__submit--yellow",
    ],
    "LEAD_COMMENT" => [
        "NAME"    => "Комментарий лида (автоматический)",
        "TYPE"    => "STRING",
        "DEFAULT" => "",
    ],
    "USE_YANDEX_SMART_CAPTCHA" => [
        "NAME"    => "Использовать Яндекс Smart Captcha",
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "N",
    ],
];
