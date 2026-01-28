// src/js/modules/forms.js

document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.js-lead-form');

    forms.forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            
            // Имитация загрузки
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            try {
                // Здесь будет fetch запрос на PHP
                // const formData = new FormData(form);
                // await fetch('/send-form/', { method: 'POST', body: formData });
                
                alert('Спасибо! Заявка (тестовая) отправлена.');
                form.reset();
            } catch (error) {
                alert('Ошибка отправки');
            } finally {
                btn.disabled = false;
                btn.innerText = originalText;
            }
        });
    });
});