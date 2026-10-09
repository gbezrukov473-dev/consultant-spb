<!-- ====== СКВОЗНАЯ ФОРМА ПЕРЕД ФУТЕРОМ ====== -->
<!-- Битрикс: bitrix:form.result.new form_id="<?= $form_id ?>" -->
<section class="lead-pre-footer reveal">
  <div class="lead-pre-footer__inner">
    <div class="lead-pre-footer__card">
      <div class="lead-pre-footer__intro">
        <h2 class="lead-pre-footer__title">Остались <span class="lead-pre-footer__title--accent">вопросы</span>?</h2>
        <p class="lead-pre-footer__text">Оставьте заявку&nbsp;&mdash; наш менеджер свяжется с&nbsp;вами в&nbsp;течение 15&nbsp;минут, подберёт оптимальный комплект и&nbsp;рассчитает индивидуальное предложение.</p>
      </div>

      <form class="lead-pre-footer__form js-lead-form" action="/api/lead.php" method="POST" novalidate data-form-id="<?= $form_id ?>" data-thanks="/thanks.html">
        <div class="lead-pre-footer__fields">
          <div class="lead-pre-footer__field">
            <input type="text" name="name" class="lead-pre-footer__input" placeholder="Ваше Имя *" required />
            <p class="form-field-error hidden" data-error-for="name"></p>
          </div>
          <div class="lead-pre-footer__field">
            <input type="tel" name="phone" class="lead-pre-footer__input mask-phone" placeholder="+7 (9__) ___-__-__" required />
            <p class="form-field-error hidden" data-error-for="phone"></p>
          </div>
          <div class="lead-pre-footer__field">
            <input type="email" name="email" class="lead-pre-footer__input" placeholder="Электронная почта *" required />
          </div>
        </div>

        <label class="lead-pre-footer__checkbox">
          <input type="checkbox" name="consent" required />
          <span>Я ознакомлен с <a href="/polzovatelskoe_soglashenie.php" class="lead-pre-footer__policy-link">политикой конфиденциальности</a> и&nbsp;даю согласие на&nbsp;обработку персональных данных</span>
        </label>
        <p class="form-field-error hidden" data-error-for="consent"></p>

        <div class="form-error-box hidden" data-form-error></div>
        <div class="form-success-box hidden" data-form-success></div>

        <input type="hidden" name="form_id" value="<?= $form_id ?>" />
        <input type="hidden" name="page" value="<?= $page ?>" />
        <input type="hidden" name="fill_time_ms" value="" />
        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" />

        <button type="submit" class="lead-pre-footer__submit btn btn--yellow">Оставить заявку</button>
      </form>
    </div>
  </div>
</section>
