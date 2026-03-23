(function () {
  'use strict';

  var overlay = document.getElementById('modalOverlay');
  var activeModal = null;

  function openModal(modalId) {
    closeModal();
    var modal = document.getElementById(modalId);
    if (!modal) return;

    if (modalId === 'modalLk') {
      switchStep(modal, 'a');
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

  var lkModal = document.getElementById('modalLk');
  if (lkModal) {
    lkModal.querySelectorAll('[data-goto]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var step = btn.getAttribute('data-goto');
        switchStep(lkModal, step);
      });
    });
  }

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
    if (text === 'Узнать цену' && !btn.classList.contains('header-top__cta-btn')) {
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
      openModal(el.getAttribute('data-open-modal'));
    });
  });

})();
