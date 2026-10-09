<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
  use Bitrix\Main\Loader;
  use Bitrix\Main\Localization\Loc;
  
  Loader::includeModule("form");
  
  // Проверка валидности отправки формы
  if (check_bitrix_sessid()) {
    $formErrors = \CForm::Check($_POST['WEB_FORM_ID'], $_REQUEST, false, "N", 'Y');

    // print_r($_REQUEST);
    
    // Если не все обязательные поля заполнены
    if (count($formErrors)) {
      echo json_encode(['success' => false, 'errors' => $formErrors, 'data' => []]);
      
    } elseif ($RESULT_ID = \CFormResult::Add($_POST['WEB_FORM_ID'], $_REQUEST)) {
     
      // Отправляем все события
      \CFormCRM::onResultAdded($_POST['WEB_FORM_ID'], $RESULT_ID);
      \CFormResult::SetEvent($RESULT_ID);
      \CFormResult::Mail($RESULT_ID);
      
      // Говорим, что успешно, заявка получена
      echo json_encode([
        'success' => true,
        'errors' => [],
        'data' => ['result_id' => $RESULT_ID],
        'message' => Loc::getMessage('FORM_HANDLER_SUCCESS'),
        'formName' => $_POST['form_name']
      ]);
    } else {
      // Какие-то еще ошибки произошли
      echo json_encode([
        'success' => false,
        'errors' => [$GLOBALS["strError"]],
        'data' => [],
        'message' => Loc::getMessage('FORM_HANDLER_ERROR'),
        'formName' => $_POST['form_name']
      ]);
    }
  } else {
    // Предотвратили CSRF атаку
    echo json_encode([
      'success' => false,
      'errors' => ['sessid' => Loc::getMessage('FORM_HANDLER_CSRF_ERROR')],
      'data' => []
    ]);
  }