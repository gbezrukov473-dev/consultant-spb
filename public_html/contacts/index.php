<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты — КонсультантПлюс СПБ");
$APPLICATION->SetPageProperty("description", "Контакты ООО «ЧДК» — официальный партнёр КонсультантПлюс в Санкт-Петербурге. Телефон, адрес, e-mail, схема проезда.");
$APPLICATION->SetTitle("Контакты");
?>
<?php include(\Bitrix\Main\Application::getDocumentRoot()."/include/contacts.php"); ?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Контакты</span>
  </div>
</nav>


<!-- ====== ЗАГОЛОВОК ====== -->
<section class="contacts-header">
  <div class="contacts-header__inner">
    <h1 class="contacts-header__title">Контакты</h1>
  </div>
</section>


<!-- ====== КОНТАКТНАЯ ИНФОРМАЦИЯ + КАРТА ====== -->
<section class="contacts-info reveal">
  <div class="contacts-info__inner">

    <div class="contacts-info__details">

      <!-- Телефон -->
      <div class="contacts-info__block">
        <a href="<?=$PHONE_LINK?>" class="contacts-info__phone"><?=$PHONE_DISPLAY?></a>
        <span class="contacts-info__schedule"><?=$WORK_HOURS?></span>
      </div>

      <!-- E-mail -->
      <a href="mailto:info@spbcons.ru" class="contacts-info__email">info@spbcons.ru</a>

      <!-- Адрес -->
      <div class="contacts-info__block">
        <h2 class="contacts-info__label">Адрес:</h2>
        <p class="contacts-info__text">191167, г.&nbsp;Санкт-Петербург, наб.&nbsp;Обводного канала, д.23, лит.Б, пом.1-Н</p>
      </div>

      <!-- Реквизиты -->
      <p class="contacts-info__text">ИНН:&nbsp;7842527584<br>ОГРН:&nbsp;1147847321049</p>

      <!-- Соцсети -->
      <div class="contacts-info__social">
        <span class="contacts-info__label">Мы в&nbsp;социальных сетях:</span>
        <a href="https://vk.com/consultantspb" class="contacts-info__social-link" aria-label="ВКонтакте" target="_blank" rel="noopener">
          <svg class="icon contacts-info__social-icon" role="img" aria-label="ВКонтакте"><use href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#icon-vk"></use></svg>
        </a>
      </div>

    </div>

    <!-- Яндекс.Карта -->
    <div class="contacts-info__map">
      <div id="contacts-map" class="contacts-info__ymap"></div>
    </div>

  </div>
</section>


<!-- ====== ОСТАЛИСЬ ВОПРОСЫ? ====== -->
<section class="acc-offer contacts-offer reveal">
  <div class="acc-offer__inner">
    <div class="acc-offer__content">
      <h2 class="acc-offer__title">Остались <strong>вопросы</strong>?</h2>
      <div class="faq-offer__subrow">
        <p class="faq-offer__subtitle">Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время для&nbsp;обсуждения.</p>
        <span class="acc-offer__badge">напишите нам</span>
      </div>
      <a href="#" class="btn btn--purple acc-offer__btn" data-open-modal="modalQuestion">Задать вопрос</a>
    </div>
    <div class="acc-offer__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/faq-question-box.png" alt="Остались вопросы?" class="acc-offer__img faq-offer__img" loading="lazy" />
    </div>
  </div>
</section>


<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  function initMap() {
    if (typeof ymaps === 'undefined') return;
    ymaps.ready(function() {
      var coords = [59.916685, 30.380053];
      var map = new ymaps.Map('contacts-map', {
        center: coords,
        zoom: 16,
        controls: ['zoomControl', 'fullscreenControl']
      });

      var placemark = new ymaps.Placemark(coords, {
        balloonContentHeader: 'ООО «ЧДК»',
        balloonContentBody: 'наб. Обводного канала, д.23, лит.Б, пом.1-Н',
        balloonContentFooter: '<a href="tel:+78123344481">8 812 334 44 81</a>',
        hintContent: 'ООО «ЧДК»'
      }, {
        preset: 'islands#violetDotIcon'
      });

      map.geoObjects.add(placemark);
      map.behaviors.disable('scrollZoom');
    });
  }

  if (typeof ymaps !== 'undefined') {
    initMap();
  } else {
    var script = document.querySelector('script[src*="api-maps.yandex.ru"]');
    if (script) script.addEventListener('load', initMap);
  }
});
</script>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
