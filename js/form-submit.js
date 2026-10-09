/**
 * Обработка лид-форм
 * Селектор: form.js-lead-form
 */

export function initLeadForms() {
  const forms = document.querySelectorAll('form.js-lead-form');
  forms.forEach(setupLeadForm);
}

function normalizeRuPhoneStrict(value) {
  let digits = String(value || '').replace(/\D/g, '');
  if (!digits) return { ok: false };

  if (digits.length === 11 && digits[0] === '8') {
    digits = '7' + digits.slice(1);
  }
  if (digits.length === 11 && digits[0] === '7') {
    const p = digits.slice(1);
    return {
      ok: true,
      e164: `+${digits}`,
      display: `+7 (${p.slice(0, 3)}) ${p.slice(3, 6)}-${p.slice(6, 8)}-${p.slice(8, 10)}`,
    };
  }
  if (digits.length === 10) {
    digits = '7' + digits;
    const p = digits.slice(1);
    return {
      ok: true,
      e164: `+${digits}`,
      display: `+7 (${p.slice(0, 3)}) ${p.slice(3, 6)}-${p.slice(6, 8)}-${p.slice(8, 10)}`,
    };
  }
  return { ok: false };
}

function setHidden(form, name, value) {
  let el = form.querySelector(`[name="${name}"]`);
  if (!el) {
    el = document.createElement('input');
    el.type = 'hidden';
    el.name = name;
    form.appendChild(el);
  }
  el.value = value ?? '';
}

function setSending(btn, isSending) {
  if (!btn) return;
  if (!btn.dataset.text) btn.dataset.text = btn.textContent || 'Отправить';
  btn.disabled = isSending;
  btn.textContent = isSending ? 'Отправляем...' : btn.dataset.text;
}

// Если в разметке нет <p data-error-for="…"> для поля (например, для e-mail), создаём его:
// поле в общей строке с другими (телефон + e-mail в .trial__row / .tp-form__row) — после строки,
// иначе — сразу после поля.
function ensureErrorHolder(form, field, name) {
  let holder = form.querySelector(`[data-error-for="${name}"]`);
  if (holder || field.type === 'checkbox') return holder;

  holder = document.createElement('p');
  holder.className = 'form-field-error hidden';
  holder.dataset.errorFor = name;

  const parent = field.parentElement;
  const sharesRow = parent && parent !== form && parent.querySelectorAll('input:not([type="hidden"])').length > 1;
  if (sharesRow) {
    const next = parent.nextElementSibling;
    (next && next.matches('.form-field-error') ? next : parent).after(holder);
  } else {
    field.after(holder);
  }
  return holder;
}

function setFieldError(form, field, message) {
  const name = field.getAttribute('name');
  const holder = name ? ensureErrorHolder(form, field, name) : null;

  if (field.type !== 'checkbox') {
    field.classList.add('input-error');
  }

  if (holder) {
    holder.textContent = message || 'Ошибка';
    holder.classList.remove('hidden');
  }
}

function clearOneFieldError(form, field) {
  const name = field.getAttribute('name');
  const holder = name ? form.querySelector(`[data-error-for="${name}"]`) : null;

  if (holder) {
    holder.classList.add('hidden');
    holder.textContent = '';
  }

  if (field.type !== 'checkbox') {
    field.classList.remove('input-error');
  }
}

function clearAllFieldErrors(form) {
  form.querySelectorAll('[data-error-for]').forEach(el => {
    el.classList.add('hidden');
    el.textContent = '';
  });
  form.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));
}

function showFormError(form, html) {
  const box = form.querySelector('[data-form-error]');
  if (!box) return;
  box.innerHTML = html;
  box.classList.remove('hidden');
}

function clearFormError(form) {
  const box = form.querySelector('[data-form-error]');
  if (!box) return;
  box.classList.add('hidden');
  box.innerHTML = '';
}

function persistAndFillTracking(form) {
  const params = new URLSearchParams(window.location.search);
  ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'yclid'].forEach(key => {
    const val = params.get(key);
    if (val) setHidden(form, key, val);
  });
  if (document.referrer) {
    setHidden(form, 'referrer', document.referrer);
  }
}

function goThanks(form) {
  const base = import.meta.env.BASE_URL || '/';
  const url = form.dataset.thanks || `${base}thanks.html`;
  window.location.href = url;
}

function setupLeadForm(form) {
  const phoneEl = form.querySelector('input[name="phone"]');
  const consentEl = form.querySelector('input[name="consent"]');
  const submitBtn = form.querySelector('[type="submit"]');
  const honeypotEl = form.querySelector('input[name="website"]');

  let startedAt = 0;
  let inFlight = false;

  form.addEventListener('focusin', () => {
    if (!startedAt) startedAt = Date.now();
  }, { once: true });

  if (phoneEl) {
    phoneEl.addEventListener('input', () => clearOneFieldError(form, phoneEl));

    phoneEl.addEventListener('blur', () => {
      const val = phoneEl.value.trim();
      if (val === '' || val === '+7 (') return;
      if (!normalizeRuPhoneStrict(val).ok) {
        setFieldError(form, phoneEl, 'Похоже, номер неполный. Проверьте, пожалуйста.');
      }
    });
  }
  if (consentEl) {
    consentEl.addEventListener('change', () => clearOneFieldError(form, consentEl));
  }
  form.querySelectorAll('input[name="name"], input[name="email"]').forEach((el) => {
    el.addEventListener('input', () => clearOneFieldError(form, el));
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (inFlight) return;

    clearAllFieldErrors(form);
    clearFormError(form);

    if (honeypotEl && honeypotEl.value.trim()) {
      goThanks(form);
      return;
    }

    const fillTime = Date.now() - (startedAt || Date.now());
    setHidden(form, 'fill_time_ms', String(fillTime));
    if (fillTime > 0 && fillTime < 900) {
      goThanks(form);
      return;
    }

    const firstInvalid = validateLeadForm(form, phoneEl, consentEl);
    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    const normalized = normalizeRuPhoneStrict(phoneEl?.value || '');
    if (phoneEl && normalized.ok) phoneEl.value = normalized.display;

    persistAndFillTracking(form);

    setSending(submitBtn, true);
    inFlight = true;

    try {
      const res = await fetch(form.action, {
        method: (form.method || 'POST').toUpperCase(),
        body: new FormData(form),
        headers: { 'Accept': 'application/json' },
      });

      const json = await res.json().catch(() => null);

      if (json && json.ok) {
        goThanks(form);
        return;
      }

      if (json && json.fieldErrors) {
        for (const [fieldName, message] of Object.entries(json.fieldErrors)) {
          const field = form.querySelector(`[name="${fieldName}"]`);
          if (field) setFieldError(form, field, message);
        }
        const firstErrField = form.querySelector('.input-error');
        if (firstErrField) firstErrField.focus();
      }

      const msg = json?.message ?? 'Ошибка отправки. Попробуйте ещё раз или позвоните: <a href="tel:+78123344481">8 812 334 44 81</a>';
      showFormError(form, msg);

    } catch {
      showFormError(form, 'Не удалось отправить форму. Проверьте интернет и попробуйте ещё раз.');
    } finally {
      setSending(submitBtn, false);
      inFlight = false;
    }
  });
}

function validateLeadForm(form, phoneEl, consentEl) {
  // Имя и e-mail обязательны, если у поля стоит required (так на сервере в modal_contact с 28.09.2026)
  const nameEl = form.querySelector('input[name="name"][required]');
  if (nameEl && !nameEl.value.trim()) {
    setFieldError(form, nameEl, 'Укажите, как к вам обращаться.');
    return nameEl;
  }

  if (phoneEl && !normalizeRuPhoneStrict(phoneEl.value).ok) {
    setFieldError(form, phoneEl, 'Похоже, номер неполный. Проверьте, пожалуйста.');
    return phoneEl;
  }

  const emailEl = form.querySelector('input[name="email"][required]');
  if (emailEl && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value.trim())) {
    setFieldError(form, emailEl, 'Укажите корректный e-mail.');
    return emailEl;
  }

  if (consentEl && !consentEl.checked) {
    setFieldError(form, consentEl, 'Нужно согласие на обработку персональных данных.');
    return consentEl;
  }

  return null;
}
