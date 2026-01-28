// src/js/modules/lazyMap.js

export function initMap(container) {
    if (!container) return;

    // Очищаем "Загрузка..."
    container.innerHTML = '';

    // Создаем iframe Яндекс.Карт (пример координат Спб)
    const iframe = document.createElement('iframe');
    iframe.src = "https://yandex.ru/map-widget/v1/?ll=30.315635%2C59.938951&z=17"; // Замени на свои координаты
    iframe.width = "100%";
    iframe.height = "100%";
    iframe.frameBorder = "0";
    iframe.style.border = "0";
    iframe.allowFullscreen = true;
    
    container.appendChild(iframe);
    
    console.log('Карта загружена');
}