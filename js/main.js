import './modals.js';
import { initPhoneMask } from './phone-mask.js';
import { initLeadForms } from './form-submit.js';

initPhoneMask();
initLeadForms();

if (document.querySelector('.kits__tab')) {
  import('./buy-tabs.js');
}

// ===== Dropdown «Новости» =====
const dropdownItem = document.querySelector('.header-nav__item--dropdown');
const dropdownBtn = dropdownItem?.querySelector('.header-nav__link--dropdown');

if (dropdownBtn) {
  dropdownBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = dropdownItem.classList.toggle('is-open');
    dropdownBtn.setAttribute('aria-expanded', isOpen);
  });
}

document.addEventListener('click', (e) => {
  if (dropdownItem && !dropdownItem.contains(e.target)) {
    dropdownItem.classList.remove('is-open');
    dropdownBtn?.setAttribute('aria-expanded', 'false');
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    dropdownItem?.classList.remove('is-open');
    dropdownBtn?.setAttribute('aria-expanded', 'false');
    closeMobileMenu();
  }
});

// ===== Бургер-меню =====
const burger = document.querySelector('.header-burger');
const mobileMenu = document.querySelector('.mobile-menu');

function closeMobileMenu() {
  burger?.classList.remove('is-active');
  burger?.setAttribute('aria-expanded', 'false');
  mobileMenu?.classList.remove('is-open');
  document.body.style.overflow = '';
}

function openMobileMenu() {
  burger?.classList.add('is-active');
  burger?.setAttribute('aria-expanded', 'true');
  mobileMenu?.classList.add('is-open');
  document.body.style.overflow = 'hidden';
}

burger?.addEventListener('click', () => {
  const isOpen = mobileMenu?.classList.contains('is-open');
  isOpen ? closeMobileMenu() : openMobileMenu();
});

mobileMenu?.addEventListener('click', (e) => {
  if (e.target === mobileMenu) {
    closeMobileMenu();
  }
});

mobileMenu?.querySelectorAll('.mobile-menu__link').forEach((link) => {
  link.addEventListener('click', closeMobileMenu);
});

// ===== Scroll Reveal (IntersectionObserver) =====
(function () {
  'use strict';

  const reveals = document.querySelectorAll('.reveal');
  if (!reveals.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal--visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
  );

  reveals.forEach((el) => observer.observe(el));
})();

// ===== Универсальная бесконечная карусель =====
function initInfiniteCarousel(viewportSel, trackSel, prevSel, nextSel, total) {
  'use strict';

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

  function getSlideWidth() {
    var vw = viewport.offsetWidth;
    var visible = getVisibleCount();
    var gap = getGap();
    return (vw - (visible - 1) * gap) / visible;
  }

  function applyWidths() {
    var sw = getSlideWidth();
    allSlides.forEach(function (s) {
      s.style.width = sw + 'px';
    });
  }

  function getOffset(index) {
    var sw = getSlideWidth();
    var gap = getGap();
    var vw = viewport.offsetWidth;
    return index * (sw + gap) - (vw - sw) / 2;
  }

  function updateCenterClass() {
    allSlides.forEach(function (s, i) {
      s.classList.toggle('is-center', i === currentIndex);
    });
  }

  function positionTrack(animate) {
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
    if (e.target === track) {
      checkBounds();
    }
  });

  btnPrev.addEventListener('click', prev);
  btnNext.addEventListener('click', next);

  document.addEventListener('keydown', function (e) {
    var rect = viewport.getBoundingClientRect();
    var inView = rect.top < window.innerHeight && rect.bottom > 0;
    if (!inView) return;
    if (e.key === 'ArrowLeft') prev();
    if (e.key === 'ArrowRight') next();
  });

  var touchStartX = 0;
  var touchStartY = 0;
  var touchDeltaX = 0;
  var isSwiping = false;
  var swipeThreshold = 40;

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
      if (touchDeltaX < 0) next();
      else prev();
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

// ===== Карусель экспертов — по 4 штуки, бесконечный скролл =====
(function initExpertsCarousel() {
  'use strict';

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
    var sw = getSlideWidth();
    var gap = getGap();
    return idx * (sw + gap);
  }

  function positionTrack(animate) {
    if (!animate) {
      track.classList.add('no-transition');
    }
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
    var dy = e.touches[0].clientY - (e.touches[0].clientY || 0);
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
