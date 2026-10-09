<?php
/**
 * Контактные данные сайта.
 * Значения читаются из включаемых областей /include/phone.php, work_hours.php.
 * Администратор редактирует их через визуальный редактор (карандашик в режиме правки).
 */
if (!defined('PHONE_DISPLAY')) {
    $__root = \Bitrix\Main\Application::getDocumentRoot();

    $__phone = '8 812 334 44 81';
    if (file_exists($__root . "/include/phone.php")) {
        ob_start();
        include($__root . "/include/phone.php");
        $__val = trim(strip_tags(ob_get_clean()));
        if ($__val !== '') $__phone = $__val;
    }
    $__digits = preg_replace('/\D/', '', $__phone);
    if (strlen($__digits) === 10) $__digits = '7' . $__digits;
    if (strlen($__digits) === 11 && $__digits[0] === '8') $__digits = '7' . substr($__digits, 1);

    define('PHONE_DISPLAY', $__phone);
    define('PHONE_LINK', 'tel:+' . $__digits);

    $__hours = 'пн-пт 9:00-19:00';
    if (file_exists($__root . "/include/work_hours.php")) {
        ob_start();
        include($__root . "/include/work_hours.php");
        $__val = trim(strip_tags(ob_get_clean()));
        if ($__val !== '') $__hours = $__val;
    }
    define('WORK_HOURS', $__hours);
}
