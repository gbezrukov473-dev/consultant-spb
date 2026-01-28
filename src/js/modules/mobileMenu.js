// src/js/modules/mobileMenu.js

const btn = document.getElementById('mobile-menu-btn');
const menu = document.getElementById('mobile-menu');
const body = document.body;

if (btn && menu) {
    btn.addEventListener('click', () => {
        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
        
        btn.setAttribute('aria-expanded', !isExpanded);
        
        // Переключаем классы видимости Tailwind
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        
        // Блокируем скролл страницы
        body.classList.toggle('overflow-hidden'); 
        
        // Класс для CSS-анимации крестика (см. style.css)
        body.classList.toggle('is-open'); 
    });
}