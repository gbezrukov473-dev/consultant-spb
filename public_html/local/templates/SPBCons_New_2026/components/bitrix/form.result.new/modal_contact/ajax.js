/**
 * Класс BAjax предназначен для отправки формы через AJAX запрос и обработки ответа в виде JSON.
 */
class BAjax {
    static events = {
        before: 'bajax:before',
        success: 'bajax:success',
        error: 'bajax:error',
        after: 'bajax:after',
        reset: 'bajax:reset',
    }

    /**
     * Создает экземпляр класса BAjax.
     * @param {Element} formElement - DOM элемент формы.
     * @param {string} actionUrl - URL адрес, на который будет отправлен запрос.
     */
    constructor(formElement, actionUrl) {
        if (!(formElement instanceof HTMLFormElement)) {
            throw new Error('Не форма');
        }

        this.form = formElement;
        this.actionUrl = actionUrl || this.form.getAttribute('action');
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.form.addEventListener('reset', this.handleReset.bind(this));
    }

    /**
     * Обработчик события отправки формы.
     * @param {Event} event - Событие отправки формы.
     */
    handleSubmit(event) {
        event.preventDefault();

        this.formData = new FormData(this.form);

        this.clearErrors();
        this.toggleDisabledForm(true);

        const beforeEvent = new CustomEvent(BAjax.events.before, {
            cancelable: true,
            detail: {
                core: this,
                form: this.form,
                formData: this.formData,
            },
        });

        if (!document.dispatchEvent(beforeEvent)) {
            this.finally();
            return;
        }

        this.sendAjaxRequest(this.formData);
    }

    /**
     * Отправляет AJAX запрос на сервер с данными формы.
     * @param {FormData} formData - Данные формы.
     */
    async sendAjaxRequest(formData) {
        try {
            const response = await fetch(this.actionUrl, {method: 'POST', body: formData});

            if (!response.ok) {
                this.showErrors({error: response.statusText});
                // console.error(`Ошибка ${response.status}: ${response.statusText}`);
                return;
            }

            const jsonData = await response.json();

            if (!jsonData.success) {
                this.showErrors(jsonData.errors);
                return;
            }

            const successEvent = new CustomEvent(BAjax.events.success, {
                detail: {
                    form: this.form,
                    formData: this.formData,
                    response: jsonData
                },
            });

            if (!document.dispatchEvent(successEvent)) {
                return;
            }

            // Очистка полей формы после успешной отправке
            //this.clearFormFields();

        } catch (error) {
            this.showErrors({error: error.message});
        } finally {
            this.finally();
        }
    }

    /**
     * Обработчик события сброса формы.
     */
    handleReset() {
        const resetEvent = new CustomEvent(BAjax.events.reset, {
            detail: {
                core: this,
                form: this.form,
            },
        });

        this.toggleDisabledForm(false);
        document.dispatchEvent(resetEvent);
    }

    /**
     * Вызывается после получения ответа на AJAX запрос.
     */
    finally() {
        const afterEvent = new CustomEvent(BAjax.events.after, {
            detail: {
                core: this,
                form: this.form,
            },
        });

        if (!document.dispatchEvent(afterEvent)) {
            return;
        }

        this.handleReset();
    }

    /**
     * Очистка ошибок с формы
     */
    clearErrors() {
        const listDataError = this.form.querySelectorAll('[data-error]');

        listDataError.forEach((i) => (i.textContent = ''));
    }

    /**
     * Отображает ошибки в форме.
     * @param {Object} objErrors - Объект с ошибками.
     */
    showErrors(objErrors = {}) {
        this.clearErrors();

        const errorEvent = new CustomEvent(BAjax.events.error, {
            cancelable: true,
            detail: {
                core: this,
                form: this.form,
                formData: this.formData,
                errors: objErrors,
            },
        });

        if (!document.dispatchEvent(errorEvent)) {
            return;
        }

        const $errorMsg = this.form.querySelector('.response-msg');

        let errorStr = '';
        for (let fieldKey in objErrors) {
            const $dataError = this.form.querySelector(
                `[data-error="${fieldKey}"]`
            );

            if ($dataError) {
                $dataError.textContent = objErrors[fieldKey];
            } else {
                errorStr += objErrors[fieldKey] + '<br>';
            }
        }

        if ($errorMsg) {
            $errorMsg.innerHTML = errorStr;
        } else {
            // console.error(objErrors);
        }
    }

    /**
     * Включает или отключает атрибут disabled для элементов формы.
     * @param {boolean} toggle - Флаг для включения или отключения атрибута disabled.
     */
    toggleDisabledForm(toggle) {
        const elements = this.form.querySelectorAll(
            ':scope :not([data-bajax="no-disabled"])'
        );

        elements.forEach((element) => {
            if (toggle) {
                element.setAttribute('disabled', 'disabled');
            } else {
                element.removeAttribute('disabled');
            }
        });
    }


    /**
     * Очистка полей формы
     */
    clearFormFields() {
        const inputs = this.form.querySelectorAll('input, textarea, select');
        inputs.forEach((input) => {
            if (input.type === 'checkbox' || input.type === 'radio') {
                input.checked = false;
            } else {
                if (input.type != 'submit' && input.type != 'hidden') input.value = '';
            }
        });
    }
}