<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо за обращение!");
$APPLICATION->SetPageProperty("title", "Спасибо за обращение! — КонсультантПлюс СПБ");
?>

<section class="thanks-page">
  <div class="thanks-page__inner">
    <div class="thanks-page__icon">
      <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="40" cy="40" r="40" fill="#F5A623" opacity="0.15"/>
        <circle cx="40" cy="40" r="30" fill="#F5A623" opacity="0.25"/>
        <path d="M28 40L36 48L54 30" stroke="#F5A623" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <h1 class="thanks-page__title">Спасибо за обращение!</h1>
    <p class="thanks-page__text">Мы получили вашу заявку и свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
    <p class="thanks-page__hours">Время работы: пн-пт 9:00–19:00</p>
    <a href="/" class="btn btn--yellow thanks-page__btn">Вернуться на главную</a>
  </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
