/**
 * Вкладки «ИИ-сервисы» + пауза видео при закрытии попапа.
 * Статический аналог серверного components/bitrix/news.list/ai_tabs/script.js
 * (на сервере этот файл подключает сам компонент, в main.bundle.js его нет).
 * Подгружается из main.js, только если на странице есть .kits__pane.
 */
const tabs = document.querySelectorAll('.kits__tab');
const panes = document.querySelectorAll('.kits__pane');

function setActiveTab(index) {
  tabs.forEach((tab) => tab.classList.remove('is-active'));
  tabs[index].classList.add('is-active');
  panes.forEach((pane) => pane.classList.remove('is-active'));
  if (panes[index]) panes[index].classList.add('is-active');
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => setActiveTab(index));
});

// --- Видео в попапах .modal--video: останавливаем при закрытии ---
const videoModals = document.querySelectorAll('.modal--video');

function pauseModalVideo(modal) {
  const video = modal.querySelector('video');
  if (video) video.pause();
}

document.querySelectorAll('.modal--video .modal__close').forEach((btn) => {
  btn.addEventListener('click', () => {
    const modal = btn.closest('.modal--video');
    if (modal) pauseModalVideo(modal);
  });
});

// Клик по оверлею / вне попапа — после закрытия (модалка теряет is-active) ставим на паузу
document.addEventListener('click', (e) => {
  if (e.target.closest('video, [data-open-modal]')) return;
  setTimeout(() => {
    videoModals.forEach((modal) => {
      if (!modal.classList.contains('is-active')) pauseModalVideo(modal);
    });
  }, 50);
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') videoModals.forEach(pauseModalVideo);
});
