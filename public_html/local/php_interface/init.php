<? use Bitrix\Main\EventManager;
  
  include_once 'include/constants.php';
  
  Bitrix\Main\Loader::registerAutoLoadClasses(null, [
    'Chdk\\YandexCaptchaChecker' => '/local/php_interface/include/lib/Events.php',
    'Chdk\\FormActions' => '/local/php_interface/include/lib/Events.php',
  ]);

   EventManager::getInstance()->addEventHandler('form', 'onBeforeResultAdd', ['Chdk\YandexCaptchaChecker', 'checkFormCaptcha']);
  EventManager::getInstance()->addEventHandler("form", "onAfterResultAdd", ["Chdk\FormActions", "sendToPortal"]);