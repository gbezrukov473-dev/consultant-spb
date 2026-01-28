import './modules/mobileMenu.js';
import './modules/lazyImages.js';
import './modules/forms.js';
import { initMap } from './modules/lazyMap.js';

// Регистрация Service Worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/sw.js').catch(err => {
      console.error('SW registration failed:', err);
    });
  });
}

// Отложенная загрузка карты при скролле
const mapContainer = document.getElementById('map-container');
if(mapContainer) {
    const observer = new IntersectionObserver((entries) => {
        if(entries[0].isIntersecting) {
            initMap(mapContainer);
            observer.disconnect();
        }
    });
    observer.observe(mapContainer);
}