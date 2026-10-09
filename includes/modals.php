<!-- ====== МОДАЛЬНЫЕ ОКНА ====== -->
<!-- Битрикс: bitrix:main.include area_id="modals" -->
<div class="modal-overlay" id="modalOverlay"></div>

<!-- Узнать цену -->
<div class="modal" id="modalPrice">
  <button class="modal__close" aria-label="Закрыть">&times;</button>
  <!-- Тексты = footer.php на сервере (MODAL_TITLE / MODAL_SUBTITLE / SUBMIT_TEXT), обновлено 28.09.2026 -->
  <h2 class="modal__title">Узнать цену</h2>
  <p class="modal__subtitle">Оставьте заявку, чтобы получить актуальный прайс-лист на&nbsp;КонсультантПлюс для юрлиц и&nbsp;ИП в&nbsp;Санкт-Петербурге и&nbsp;Ленобласти</p>
  <form class="modal__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="modal-price<?= $suffix ?>" data-thanks="/thanks.html">
    <input type="text" name="name" class="modal__input" placeholder="Ваше Имя *" required />
    <p class="form-field-error hidden" data-error-for="name"></p>
    <input type="tel" name="phone" class="modal__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
    <p class="form-field-error hidden" data-error-for="phone"></p>
    <input type="email" name="email" class="modal__input" placeholder="Электронная почта *" required />
    <label class="modal__checkbox">
      <input type="checkbox" name="consent" required />
      <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="modal__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
    </label>
    <p class="form-field-error hidden" data-error-for="consent"></p>
    <div class="form-error-box hidden" data-form-error></div>
    <input type="hidden" name="form_id" value="modal-price<?= $suffix ?>" />
    <input type="hidden" name="page" value="<?= $page ?>" />
    <input type="hidden" name="fill_time_ms" value="" />
    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />
    <button type="submit" class="modal__submit modal__submit--yellow">Получить прайс-лист</button>
  </form>
</div>

<!-- Пробный доступ -->
<div class="modal" id="modalTrial">
  <button class="modal__close" aria-label="Закрыть">&times;</button>
  <h2 class="modal__title">Бесплатный доступ</h2>
  <p class="modal__subtitle">Попробуйте КонсультантПлюс бесплатно в&nbsp;течение 2&nbsp;дней. Мы работаем с&nbsp;юрлицами и&nbsp;ИП Санкт-Петербурга и&nbsp;Ленобласти</p>
  <form class="modal__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="modal-trial<?= $suffix ?>" data-thanks="/thanks.html">
    <input type="text" name="name" class="modal__input" placeholder="Ваше Имя *" required />
    <p class="form-field-error hidden" data-error-for="name"></p>
    <input type="tel" name="phone" class="modal__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
    <p class="form-field-error hidden" data-error-for="phone"></p>
    <input type="email" name="email" class="modal__input" placeholder="Электронная почта *" required />
    <label class="modal__checkbox">
      <input type="checkbox" name="consent" required />
      <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="modal__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
    </label>
    <p class="form-field-error hidden" data-error-for="consent"></p>
    <div class="form-error-box hidden" data-form-error></div>
    <input type="hidden" name="form_id" value="modal-trial<?= $suffix ?>" />
    <input type="hidden" name="page" value="<?= $page ?>" />
    <input type="hidden" name="fill_time_ms" value="" />
    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />
    <button type="submit" class="modal__submit modal__submit--yellow">Получить бесплатный доступ</button>
  </form>
</div>

<!-- Личный кабинет (3 состояния) -->
<div class="modal" id="modalLk">
  <button class="modal__close" aria-label="Закрыть">&times;</button>

  <div class="modal__step modal__step--active" data-step="a">
    <h2 class="modal__title">Вы уже являетесь нашим клиентом?</h2>
    <div class="modal__choice">
      <button type="button" class="modal__choice-btn modal__choice-btn--purple" data-goto="b">Да</button>
      <button type="button" class="modal__choice-btn modal__choice-btn--yellow" data-goto="c">Еще нет</button>
    </div>
  </div>

  <div class="modal__step" data-step="b">
    <h2 class="modal__title">Заполните форму</h2>
    <p class="modal__subtitle">Наш специалист свяжется с&nbsp;Вами в&nbsp;ближайшее время. Мы работаем с&nbsp;юрлицами и&nbsp;ИП Санкт-Петербурга и&nbsp;Ленобласти</p>
    <form class="modal__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="modal-lk-client<?= $suffix ?>" data-thanks="/thanks.html">
      <input type="text" name="name" class="modal__input" placeholder="Ваше Имя *" required />
      <p class="form-field-error hidden" data-error-for="name"></p>
      <input type="tel" name="phone" class="modal__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
      <p class="form-field-error hidden" data-error-for="phone"></p>
      <input type="email" name="email" class="modal__input" placeholder="Электронная почта *" required />
      <label class="modal__checkbox">
        <input type="checkbox" name="consent" required />
        <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="modal__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
      </label>
      <p class="form-field-error hidden" data-error-for="consent"></p>
      <div class="form-error-box hidden" data-form-error></div>
      <input type="hidden" name="form_id" value="modal-lk-client<?= $suffix ?>" />
      <input type="hidden" name="page" value="<?= $page ?>" />
      <input type="hidden" name="fill_time_ms" value="" />
      <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />
      <button type="submit" class="modal__submit modal__submit--yellow">Отправить</button>
    </form>
  </div>

  <div class="modal__step" data-step="c">
    <h2 class="modal__title">Заполните форму</h2>
    <p class="modal__subtitle">Наш специалист свяжется с&nbsp;Вами в&nbsp;ближайшее время. Мы работаем с&nbsp;юрлицами и&nbsp;ИП Санкт-Петербурга и&nbsp;Ленобласти</p>
    <form class="modal__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="modal-lk-new<?= $suffix ?>" data-thanks="/thanks.html">
      <input type="text" name="name" class="modal__input" placeholder="Ваше Имя *" required />
      <p class="form-field-error hidden" data-error-for="name"></p>
      <input type="tel" name="phone" class="modal__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
      <p class="form-field-error hidden" data-error-for="phone"></p>
      <input type="email" name="email" class="modal__input" placeholder="Электронная почта *" required />
      <textarea name="comment" class="modal__input modal__textarea" placeholder="Ваш вопрос"></textarea>
      <label class="modal__checkbox">
        <input type="checkbox" name="consent" required />
        <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="modal__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
      </label>
      <p class="form-field-error hidden" data-error-for="consent"></p>
      <div class="form-error-box hidden" data-form-error></div>
      <input type="hidden" name="form_id" value="modal-lk-new<?= $suffix ?>" />
      <input type="hidden" name="page" value="<?= $page ?>" />
      <input type="hidden" name="fill_time_ms" value="" />
      <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />
      <button type="submit" class="modal__submit modal__submit--yellow">Отправить</button>
    </form>
  </div>
</div>

<!-- Сервис ЧДК-Право: заполните форму -->
<div class="modal" id="modalService">
  <button class="modal__close" aria-label="Закрыть">&times;</button>
  <h2 class="modal__title">Заполните форму</h2>
  <p class="modal__subtitle">Наш специалист свяжется с&nbsp;Вами в&nbsp;ближайшее время. Мы работаем с&nbsp;юрлицами и&nbsp;ИП Санкт-Петербурга и&nbsp;Ленобласти</p>
  <form class="modal__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="modal-service<?= $suffix ?>" data-thanks="/thanks.html">
    <input type="text" name="name" class="modal__input" placeholder="Ваше Имя *" required />
    <p class="form-field-error hidden" data-error-for="name"></p>
    <input type="tel" name="phone" class="modal__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
    <p class="form-field-error hidden" data-error-for="phone"></p>
    <input type="email" name="email" class="modal__input" placeholder="Электронная почта *" required />
    <label class="modal__checkbox">
      <input type="checkbox" name="consent" required />
      <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="modal__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
    </label>
    <p class="form-field-error hidden" data-error-for="consent"></p>
    <div class="form-error-box hidden" data-form-error></div>
    <input type="hidden" name="form_id" value="modal-service<?= $suffix ?>" />
    <input type="hidden" name="page" value="<?= $page ?>" />
    <input type="hidden" name="fill_time_ms" value="" />
    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />
    <button type="submit" class="modal__submit modal__submit--yellow">Отправить</button>
  </form>
</div>
