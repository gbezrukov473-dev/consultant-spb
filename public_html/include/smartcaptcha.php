<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<script src="https://smartcaptcha.cloud.yandex.ru/captcha.js?render=onload&onload=onloadChdkYandexCaptchaInit" defer></script>
<script type="text/javascript">
    //  состояния капчи
    window.chdkGlobalCaptcha = window.chdkGlobalCaptcha || {
        lastTokenRefresh: 0,
        TOKEN_REFRESH_TIMEOUT: 5 * 60 * 1000, // 5 минут
        isExecuting: false //  флаг защиты от параллельных вызовов
    };

    //  колбэк, вызывается при успешном получении токена
    function handleChdkGlobalCaptchaCallback(token) {
        if (!token) return;

        // Размножаем полученный токен во ВСЕ формы на странице
        document.querySelectorAll('.chdk-yandexcaptcha [name="smart-token"]').forEach(input => {
            input.value = token;
        });
        document.querySelectorAll('[name="smart-captcha-token"]').forEach(bakInput => {
            bakInput.value = token;
        });

        // Снимаем блокировку
        window.chdkGlobalCaptcha.isExecuting = false;
    }

    function attachChdkYandexCaptchaInvisibleExe() {
        if (!window.smartCaptcha) {
            console.warn('Yandex SmartCaptcha не загружена');
            return;
        }

        let forms = document.querySelectorAll('form:has(.chdk-yandexcaptcha)');
        forms.forEach(form => {
            if (form.dataset.addedSubmitEventHandler === 'Y') return;

            //  Логика генерации токена при клике на поля ввода
            let fields = form.querySelectorAll('input:not([type="hidden"]):not([type="submit"]), textarea, select');
            if (fields.length) {
                fields.forEach(field => {
                    field.addEventListener('click', () => {
                        // Блокируем выполнение, если уже идет запрос токена или отображается челлендж
                        if (window.chdkGlobalCaptcha.isExecuting) return;

                        const now = Date.now();

                        // Проверяем наличие токена на странице
                        let anyFreshTokenInput = document.querySelector('.chdk-yandexcaptcha [name="smart-token"]');
                        let hasValidToken = anyFreshTokenInput && anyFreshTokenInput.value && anyFreshTokenInput.value !== '';
                        let isTimeoutExpired = (now - window.chdkGlobalCaptcha.lastTokenRefresh >= window.chdkGlobalCaptcha.TOKEN_REFRESH_TIMEOUT);

                        // Запрашиваем новый токен, если его нет или истек таймаут
                        if (!hasValidToken || isTimeoutExpired) {
                            let widgetId = form.dataset.yandexCaptchaId;
                            if (widgetId && typeof window.smartCaptcha.execute === 'function') {

                                // Включаем блокировку перед execute
                                window.chdkGlobalCaptcha.isExecuting = true;
                                window.chdkGlobalCaptcha.lastTokenRefresh = now;

                                window.smartCaptcha.execute(widgetId);

                                // Страховка: снимаем блок через 15 сек.
                                setTimeout(() => {
                                    if (window.chdkGlobalCaptcha.isExecuting) {
                                        window.chdkGlobalCaptcha.isExecuting = false;
                                        console.warn('Превышено время ожидания общего токена. Блокировка снята.');
                                    }
                                }, 15000);

                            } else {
                                console.warn('Невозможно выполнить CAPTCHA: неверный widgetId или функция execute');
                            }
                        }
                    });
                });
            }

            // Отслеживание клика по кнопке отправки
            let submitBtn = form.querySelector('[type="submit"]');
            if (submitBtn) {
                submitBtn.addEventListener('click', () => { //on form submit не отрабатывает
                    // Сбрасываем таймер и флаг, так как текущий токен использовали
                    window.chdkGlobalCaptcha.lastTokenRefresh = 0;
                    window.chdkGlobalCaptcha.isExecuting = false;
                    
                    setTimeout(() => {
                        document.querySelectorAll('.chdk-yandexcaptcha [name="smart-token"], [name="smart-captcha-token"]').forEach(input => {
                            input.value = '';
                        });
                    }, 1000);
                });
            }

            form.dataset.addedSubmitEventHandler = 'Y';
        });
    }

    function onloadChdkYandexCaptchaInit() {
        if (!window.smartCaptcha) {
            console.warn('Yandex SmartCaptcha не загружена');
            return;
        }
        let sitekey = '<?=SMARTCAPTCHA_CLIENT_KEY?>';
        if (!sitekey) {
            console.error('Отсутствует sitekey для Yandex SmartCaptcha');
            return;
        }

        let forms = document.querySelectorAll('form:has(.chdk-yandexcaptcha)');
        forms.forEach(form => {
            const captchaContainer = form.querySelector('.chdk-yandexcaptcha');

            try {
                const options = {
                    sitekey,
                    invisible: true,
                    hideShield: true,
                    callback: handleChdkGlobalCaptchaCallback //  функция синхронизации токенов
                };
                let widgetId = window.smartCaptcha.render(captchaContainer, options);
                form.dataset.yandexCaptchaId = widgetId;
            } catch (error) {
                console.error('Не удалось инициализировать Yandex SmartCaptcha:', error);
            }
        });

        attachChdkYandexCaptchaInvisibleExe();
    }

    document.addEventListener('DOMContentLoaded', () => {
        attachChdkYandexCaptchaInvisibleExe();
    });
</script>