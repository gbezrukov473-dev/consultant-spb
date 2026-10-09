/**
 * SPBCons — combined JS bundle
 * Modals + Phone Mask + Form Submit + Main
 */
(function () {
'use strict';

// ============================================================
// MODALS
// ============================================================
(function () {
  var overlay = document.getElementById('modalOverlay');
  var activeModal = null;

  function openModal(modalId, leadComment) {
    closeModal();
    var modal = document.getElementById(modalId);
    if (!modal) return;

    if (modalId === 'modalLk') {
      switchStep(modal, 'a');
    }

    if (leadComment) {
      var commentFields = modal.querySelectorAll('input[name="lead_comment"], .js-lead-comment-field');
      commentFields.forEach(function (f) { f.value = leadComment; });
    }

    overlay.classList.add('is-active');
    modal.classList.add('is-active');
    document.body.classList.add('modal-open');
    activeModal = modal;
  }

  function closeModal() {
    if (!activeModal) return;
    overlay.classList.remove('is-active');
    activeModal.classList.remove('is-active');
    document.body.classList.remove('modal-open');
    activeModal = null;
  }

  window.openModal = openModal;
  window.closeModal = closeModal;

  overlay.addEventListener('click', closeModal);

  document.querySelectorAll('.modal__close').forEach(function (btn) {
    btn.addEventListener('click', closeModal);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeModal();
  });

  document.querySelectorAll('.modal').forEach(function (modal) {
    modal.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });

  function switchStep(modal, targetStep) {
    var steps = modal.querySelectorAll('.modal__step');
    steps.forEach(function (step) {
      step.classList.remove('modal__step--active');
      step.classList.remove('modal__step--entering');
    });

    var target = modal.querySelector('[data-step="' + targetStep + '"]');
    if (!target) return;

    target.classList.add('modal__step--entering');
    void target.offsetHeight;
    target.classList.add('modal__step--active');
    target.classList.remove('modal__step--entering');
  }

  document.querySelectorAll('[data-switch-modal]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var targetId = btn.getAttribute('data-switch-modal');
      closeModal();
      setTimeout(function () { openModal(targetId); }, 200);
    });
  });

  document.querySelectorAll('.header-top__cta-btn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal('modalPrice');
    });
  });

  document.querySelectorAll('.btn--gray').forEach(function (btn) {
    if (btn.textContent.trim() === 'Попробовать бесплатно') {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openModal('modalTrial');
      });
    }
  });

  document.querySelectorAll('.header-nav__link--lk, .mobile-menu__link--lk').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal('modalLk');
    });
  });

  document.querySelectorAll('a.btn').forEach(function (btn) {
    var text = btn.textContent.trim();
    if (text === 'Узнать цену' && !btn.classList.contains('header-top__cta-btn') && !btn.hasAttribute('data-open-modal')) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openModal('modalPrice');
      });
    }
  });

  document.querySelectorAll('.js-open-modal-price').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal('modalPrice');
    });
  });

  document.querySelectorAll('.js-open-modal-trial').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal('modalTrial');
    });
  });

  document.querySelectorAll('[data-open-modal]').forEach(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      openModal(el.getAttribute('data-open-modal'), el.getAttribute('data-lead-comment') || '');
    });
  });
})();

// ============================================================
// PHONE MASK
// ============================================================
function initPhoneMask() {
  var inputs = document.querySelectorAll('input[type="tel"], .mask-phone');
  inputs.forEach(applyPhoneMask);
}

function applyPhoneMask(input) {
  input.setAttribute('autocomplete', 'tel');
  input.setAttribute('inputmode', 'tel');
  input.setAttribute('placeholder', '+7 (9__) ___-__-__');

  input.addEventListener('input', handleMaskInput);
  input.addEventListener('focus', handleMaskFocus);
  input.addEventListener('blur', handleMaskBlur);
  input.addEventListener('paste', handleMaskPaste);
  input.addEventListener('keydown', handleMaskKeydown);
}

function formatPhone(digits) {
  digits = digits.replace(/\D/g, '');
  if (digits.length > 0 && (digits[0] === '7' || digits[0] === '8')) {
    digits = digits.substring(1);
  }
  if (digits.length > 0 && digits[0] !== '9') {
    digits = digits.substring(1);
  }
  digits = digits.substring(0, 10);

  var result = '+7 (';
  if (digits.length > 0) result += digits.substring(0, 3);
  if (digits.length >= 3) result += ') ' + digits.substring(3, 6);
  if (digits.length >= 6) result += '-' + digits.substring(6, 8);
  if (digits.length >= 8) result += '-' + digits.substring(8, 10);
  return result;
}

function extractDigits(value) {
  var digits = value.replace(/\D/g, '');
  if (digits.length > 0 && (digits[0] === '7' || digits[0] === '8')) {
    digits = digits.substring(1);
  }
  return digits;
}

function handleMaskInput(e) {
  var input = e.target;
  input.value = formatPhone(extractDigits(input.value));
}

function handleMaskKeydown(e) {
  var input = e.target;
  var digits = extractDigits(input.value);

  if (e.key === 'Backspace') {
    e.preventDefault();
    if (digits.length === 0) return;
    var shorter = digits.slice(0, -1);
    input.value = shorter.length > 0 ? formatPhone(shorter) : '+7 (';
    var len = input.value.length;
    input.setSelectionRange(len, len);
    return;
  }

  if (e.key === 'Delete') {
    e.preventDefault();
    return;
  }

  if (digits.length === 0 && /^[0-9]$/.test(e.key) && e.key !== '9') {
    e.preventDefault();
  }
}

function handleMaskFocus(e) {
  var input = e.target;
  if (!input.value || input.value.length < 4) {
    input.value = '+7 (';
  }
  setTimeout(function () {
    var len = input.value.length;
    input.setSelectionRange(len, len);
  }, 0);
}

function handleMaskBlur(e) {
  var input = e.target;
  if (extractDigits(input.value).length === 0) {
    input.value = '';
  }
}

function handleMaskPaste(e) {
  e.preventDefault();
  var input = e.target;
  var pasted = (e.clipboardData || window.clipboardData).getData('text');
  var digits = pasted.replace(/\D/g, '');
  if (digits.length > 0 && (digits[0] === '7' || digits[0] === '8')) {
    digits = digits.substring(1);
  }
  input.value = formatPhone(digits);
  var len = input.value.length;
  input.setSelectionRange(len, len);
  input.dispatchEvent(new Event('input', { bubbles: true }));
}

// ============================================================
// (Lead form handlers removed – forms are now handled by Bitrix CRM scripts)

// ============================================================
// MAIN INIT
// ============================================================
initPhoneMask();

if (document.querySelector('.kits__tab')) {
  var s = document.createElement('script');
  s.src = (document.documentElement.dataset.templatePath || '/local/templates/spbcons_dev') + '/js/buy-tabs.js';
  document.head.appendChild(s);
}

// Dropdown «Новости»
var dropdownItem = document.querySelector('.header-nav__item--dropdown');
var dropdownBtn = dropdownItem ? dropdownItem.querySelector('.header-nav__link--dropdown') : null;

if (dropdownBtn) {
  dropdownBtn.addEventListener('click', function (e) {
    e.stopPropagation();
    var isOpen = dropdownItem.classList.toggle('is-open');
    dropdownBtn.setAttribute('aria-expanded', isOpen);
  });
}

document.addEventListener('click', function (e) {
  if (dropdownItem && !dropdownItem.contains(e.target)) {
    dropdownItem.classList.remove('is-open');
    if (dropdownBtn) dropdownBtn.setAttribute('aria-expanded', 'false');
  }
});

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    if (dropdownItem) dropdownItem.classList.remove('is-open');
    if (dropdownBtn) dropdownBtn.setAttribute('aria-expanded', 'false');
    closeMobileMenu();
  }
});

// Бургер-меню
var burger = document.querySelector('.header-burger');
var mobileMenu = document.querySelector('.mobile-menu');

function closeMobileMenu() {
  if (burger) {
    burger.classList.remove('is-active');
    burger.setAttribute('aria-expanded', 'false');
  }
  if (mobileMenu) mobileMenu.classList.remove('is-open');
  document.body.style.overflow = '';
}

function openMobileMenu() {
  if (burger) {
    burger.classList.add('is-active');
    burger.setAttribute('aria-expanded', 'true');
  }
  if (mobileMenu) mobileMenu.classList.add('is-open');
  document.body.style.overflow = 'hidden';
}

if (burger) {
  burger.addEventListener('click', function () {
    if (mobileMenu && mobileMenu.classList.contains('is-open')) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });
}

if (mobileMenu) {
  mobileMenu.addEventListener('click', function (e) {
    if (e.target === mobileMenu) closeMobileMenu();
  });
  mobileMenu.querySelectorAll('.mobile-menu__link').forEach(function (link) {
    link.addEventListener('click', closeMobileMenu);
  });
}

// Scroll Reveal
(function () {
  var reveals = document.querySelectorAll('.reveal');
  if (!reveals.length) return;

  reveals.forEach(function (el) { el.classList.add('reveal--pending'); });

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal--visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
  );

  reveals.forEach(function (el) { observer.observe(el); });
})();

// Универсальная бесконечная карусель
function initInfiniteCarousel(viewportSel, trackSel, prevSel, nextSel, total) {
  var TOTAL = total;
  var viewport = document.querySelector(viewportSel);
  var track    = document.querySelector(trackSel);
  var btnPrev  = document.querySelector(prevSel);
  var btnNext  = document.querySelector(nextSel);

  if (!viewport || !track) return;

  var origSlides = Array.from(track.children);
  origSlides.forEach(function (s) {
    var clone = s.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);
  });
  for (var i = origSlides.length - 1; i >= 0; i--) {
    var clone = origSlides[i].cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.insertBefore(clone, track.firstChild);
  }

  var allSlides = Array.from(track.children);
  var currentIndex = TOTAL + Math.floor(TOTAL / 2);
  var isAnimating = false;

  function getVisibleCount() {
    var w = window.innerWidth;
    if (w <= 600) return 1;
    if (w <= 960) return 3;
    return 5;
  }

  function getGap() {
    return parseInt(getComputedStyle(track).gap) || 16;
  }

  function getCenterScale() {
    return getVisibleCount() === 1 ? 1 : 1.3;
  }

  function getSlideWidth() {
    var vw = viewport.offsetWidth;
    var visible = getVisibleCount();
    var gap = getGap();
    return (vw - (visible - 1) * gap) / (visible - 1 + getCenterScale());
  }

  function applyWidths() {
    var sw = getSlideWidth();
    var cw = sw * getCenterScale();
    allSlides.forEach(function (s, i) { s.style.width = (i === currentIndex ? cw : sw) + 'px'; });
    viewport.style.height = Math.round(cw * 808 / 566) + 'px';
  }

  function getOffset(index) {
    var sw = getSlideWidth();
    var gap = getGap();
    var vw = viewport.offsetWidth;
    return index * (sw + gap) + (sw * getCenterScale()) / 2 - vw / 2;
  }

  function updateCenterClass() {
    allSlides.forEach(function (s, i) {
      s.classList.toggle('is-center', i === currentIndex);
    });
  }

  function positionTrack(animate) {
    applyWidths();
    var offset = getOffset(currentIndex);
    if (!animate) {
      track.classList.add('no-transition');
      allSlides.forEach(function (s) { s.style.transition = 'none'; });
    }
    track.style.transform = 'translateX(' + (-offset) + 'px)';
    updateCenterClass();
    if (!animate) {
      void track.offsetHeight;
      track.classList.remove('no-transition');
      allSlides.forEach(function (s) { s.style.transition = ''; });
    }
  }

  function goTo(index, animate) {
    currentIndex = index;
    positionTrack(animate);
  }

  function next() {
    if (isAnimating) return;
    isAnimating = true;
    goTo(currentIndex + 1, true);
  }

  function prev() {
    if (isAnimating) return;
    isAnimating = true;
    goTo(currentIndex - 1, true);
  }

  function checkBounds() {
    isAnimating = false;
    if (currentIndex >= TOTAL + TOTAL) {
      goTo(currentIndex - TOTAL, false);
    } else if (currentIndex < TOTAL) {
      goTo(currentIndex + TOTAL, false);
    }
  }

  track.addEventListener('transitionend', function (e) {
    if (e.target === track) checkBounds();
  });

  btnPrev.addEventListener('click', prev);
  btnNext.addEventListener('click', next);

  document.addEventListener('keydown', function (e) {
    var rect = viewport.getBoundingClientRect();
    if (rect.top >= window.innerHeight || rect.bottom <= 0) return;
    if (e.key === 'ArrowLeft') prev();
    if (e.key === 'ArrowRight') next();
  });

  var touchStartX = 0, touchStartY = 0, touchDeltaX = 0;
  var isSwiping = false, swipeThreshold = 40;

  viewport.addEventListener('touchstart', function (e) {
    if (isAnimating) return;
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
    touchDeltaX = 0;
    isSwiping = false;
    track.classList.add('no-transition');
    allSlides.forEach(function (s) { s.style.transition = 'none'; });
  }, { passive: true });

  viewport.addEventListener('touchmove', function (e) {
    if (isAnimating) return;
    var dx = e.touches[0].clientX - touchStartX;
    var dy = e.touches[0].clientY - touchStartY;
    if (!isSwiping && (Math.abs(dx) > 8 || Math.abs(dy) > 8)) {
      isSwiping = Math.abs(dx) > Math.abs(dy);
      if (!isSwiping) return;
    }
    if (!isSwiping) return;
    e.preventDefault();
    touchDeltaX = dx;
    var baseOffset = getOffset(currentIndex);
    track.style.transform = 'translateX(' + (-baseOffset + touchDeltaX) + 'px)';
  }, { passive: false });

  viewport.addEventListener('touchend', function () {
    track.classList.remove('no-transition');
    allSlides.forEach(function (s) { s.style.transition = ''; });
    if (!isSwiping && touchDeltaX === 0) return;
    if (Math.abs(touchDeltaX) > swipeThreshold) {
      if (touchDeltaX < 0) next(); else prev();
    } else {
      positionTrack(true);
    }
    touchDeltaX = 0;
    isSwiping = false;
  }, { passive: true });

  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      applyWidths();
      positionTrack(false);
    }, 100);
  });

  applyWidths();
  positionTrack(false);
}

initInfiniteCarousel('.reviews__viewport', '.reviews__track', '.reviews__btn--prev', '.reviews__btn--next', 5);

// Карусель экспертов
(function () {
  var viewport = document.querySelector('.lk-experts__viewport');
  var track    = document.querySelector('.lk-experts__track');
  var btnPrev  = document.querySelector('.lk-experts__btn--prev');
  var btnNext  = document.querySelector('.lk-experts__btn--next');

  if (!viewport || !track) return;

  var TOTAL = 8;
  var origSlides = Array.from(track.children);

  origSlides.forEach(function (s) {
    var clone = s.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);
  });
  for (var i = origSlides.length - 1; i >= 0; i--) {
    var clone = origSlides[i].cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.insertBefore(clone, track.firstChild);
  }

  var allSlides = Array.from(track.children);
  var currentIndex = TOTAL;
  var isAnimating = false;

  function getVisible() {
    var w = window.innerWidth;
    if (w <= 600) return 1;
    if (w <= 768) return 2;
    if (w <= 1024) return 3;
    return 4;
  }

  function getGap() {
    return parseInt(getComputedStyle(track).gap) || 20;
  }

  function getSlideWidth() {
    var vw = viewport.offsetWidth;
    var visible = getVisible();
    var gap = getGap();
    return (vw - (visible - 1) * gap) / visible;
  }

  function applyWidths() {
    var sw = getSlideWidth();
    allSlides.forEach(function (s) { s.style.width = sw + 'px'; });
  }

  function getOffset(idx) {
    return idx * (getSlideWidth() + getGap());
  }

  function positionTrack(animate) {
    if (!animate) track.classList.add('no-transition');
    track.style.transform = 'translateX(' + (-getOffset(currentIndex)) + 'px)';
    if (!animate) {
      void track.offsetHeight;
      track.classList.remove('no-transition');
    }
  }

  function next() {
    if (isAnimating) return;
    isAnimating = true;
    currentIndex += getVisible();
    positionTrack(true);
  }

  function prev() {
    if (isAnimating) return;
    isAnimating = true;
    currentIndex -= getVisible();
    positionTrack(true);
  }

  function checkBounds() {
    isAnimating = false;
    if (currentIndex >= TOTAL * 2) {
      currentIndex -= TOTAL;
      positionTrack(false);
    } else if (currentIndex < TOTAL) {
      currentIndex += TOTAL;
      positionTrack(false);
    }
  }

  track.addEventListener('transitionend', function (e) {
    if (e.target === track) checkBounds();
  });

  if (btnPrev) btnPrev.addEventListener('click', prev);
  if (btnNext) btnNext.addEventListener('click', next);

  var touchStartX = 0, touchDeltaX = 0, isSwiping = false;

  viewport.addEventListener('touchstart', function (e) {
    if (isAnimating) return;
    touchStartX = e.touches[0].clientX;
    touchDeltaX = 0;
    isSwiping = false;
    track.classList.add('no-transition');
  }, { passive: true });

  viewport.addEventListener('touchmove', function (e) {
    if (isAnimating) return;
    var dx = e.touches[0].clientX - touchStartX;
    if (!isSwiping && Math.abs(dx) > 8) isSwiping = true;
    if (!isSwiping) return;
    e.preventDefault();
    touchDeltaX = dx;
    track.style.transform = 'translateX(' + (-getOffset(currentIndex) + touchDeltaX) + 'px)';
  }, { passive: false });

  viewport.addEventListener('touchend', function () {
    track.classList.remove('no-transition');
    if (Math.abs(touchDeltaX) > 40) {
      if (touchDeltaX < 0) next(); else prev();
    } else {
      positionTrack(true);
    }
    touchDeltaX = 0;
    isSwiping = false;
  }, { passive: true });

  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      applyWidths();
      positionTrack(false);
    }, 100);
  });

  applyWidths();
  positionTrack(false);
})();

})();
