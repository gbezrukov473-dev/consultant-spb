# СПБ Консультант — Инструкция для разработки

## Обзор проекта

Корпоративный сайт официального представителя КонсультантПлюс в Санкт-Петербурге. Многостраничный сайт, подготовленный для нарезки на PHP-шаблоны компонентов 1С-Битрикс.

**Стек:** HTML5, CSS3 (Custom Properties, BEM), Vanilla JS (ES6+ модули), Vite (dev-сервер и сборка).

---

## Структура проекта

```
consultant-spb/
├── index.html                    # Главная страница          → /
├── buy.html                      # «Купить КонсультантПлюс»  → /buy/
├── consult.html                  # «Линия консультаций»       → /consult/
├── about.html                    # «О компании»               → /about/
├── collections.html              # «Правовые сборники»        → /collections/
├── collection-detail.html        # Детальная сборника         → /collection-detail/
├── lk-online.html                # «Личный кабинет ЧДК-Онлайн» → /lk-online/
├── ai-assistant.html             # «ИИ-помощник»              → /ai-assistant/
├── news.html                     # «Новости»                  → /news/
├── news-detail.html              # Детальная новость          → /news-detail/
├── faq.html                      # «Вопрос-ответ»             → /faq/
├── faq-detail.html               # Детальный ответ            → /faq-detail/
├── contacts.html                 # «Контакты»                 → /contacts/
├── thanks.html                   # «Спасибо» (в разработке)
│
├── systems/                      # Системы (комплекты)        → /systems/
│   ├── index.html                # Каталог систем             → /systems/
│   ├── bukhgalteru.html          # Для бухгалтера             → /systems/bukhgalteru/
│   ├── yuristu.html              # Для юриста                 → /systems/yuristu/
│   ├── rukovoditelyu.html        # Для руководителя           → /systems/rukovoditelyu/
│   ├── byudzhetnoy-organizatsii.html # Для бюджетной орг.     → /systems/byudzhetnoy-organizatsii/
│   └── kadroviku.html            # Для кадрового специалиста  → /systems/kadroviku/
│
├── services/                     # Сервис ЧДК-Право           → /services/
│   ├── index.html                # Агрегатор сервисов         → /services/
│   ├── personalnyy-menedzher.html           # Персональный менеджер            → /services/personalnyy-menedzher/
│   ├── obuchenie-rabote-s-konsultantplyus.html # Обучение                      → /services/obuchenie-rabote-s-konsultantplyus/
│   ├── seminary-i-praktikumy.html           # Семинары-тренинги               → /services/seminary-i-praktikumy/
│   ├── obsluzhivanie-programmy-konsultant-plyus.html # Техподдержка            → /services/obsluzhivanie-programmy-konsultant-plyus/
│   └── proverka-kontragenta.html            # Проверка контрагента            → /services/proverka-kontragenta/
│
├── o-sisteme-konsultantplyus/    # О СПС КонсультантПлюс      → /o-sisteme-konsultantplyus/
│   ├── index.html                # О системе                  → /o-sisteme-konsultantplyus/
│   └── dostup-konsultantplyus-na-2-dnya.html # Пробный доступ → /o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/
│
├── includes/
│   ├── header.php                # PHP-шаблон шапки (переиспользуется на всех страницах)
│   ├── footer.php                # PHP-шаблон подвала
│   ├── modals.php                # PHP-шаблон модальных окон (modalPrice, modalTrial, modalLk, modalService)
│   └── favicons.php              # Ссылки на favicon / manifest (подключается в <head> каждой страницы)
├── styles/
│   ├── variables.css             # Дизайн-токены: цвета, радиусы, тени, переходы
│   ├── global.css                # @font-face, CSS Reset, типографика clamp(), утилиты
│   ├── ui-kit.css                # BEM-компоненты: кнопки, инпуты, карточки, слайдер
│   ├── blocks.css                # Стили общих секций: header, hero, sk, trial, chdk, reviews, footer, модалки
│   └── pages/
│       ├── buy.css               # Стили секций страницы «Купить»: breadcrumbs, buy-hero, reasons, cost, kits
│       ├── trial.css             # Стили секций страницы «Пробный доступ»: tp-hero, tp-banner, tp-days, tp-form, tp-adv
│       ├── consultation.css     # Стили секций страницы «Линия консультаций»: lk-hero, lk-adv, lk-services, lk-howto, lk-experts, lk-reviews, lk-form
│       ├── collections.css     # Стили страницы «Правовые сборники»: col-hero, col-catalog, col-card (форма — блок .trial из blocks.css)
│       ├── collection-detail.css  # Стили детальной сборника: cd-hero, breadcrumbs, cd-contents, cd-audience, cd-related (форма — блок .trial из blocks.css)
│       ├── personal-manager.css  # Стили страницы «Персональный менеджер»: pm-hero, pm-features (форма — блок .trial из blocks.css)
│       ├── education.css        # Стили страницы «Обучение КонсультантПлюс»: edu-hero, edu-features (форма — блок .trial из blocks.css)
│       ├── seminars.css         # Стили страницы «Семинары-тренинги»: st-hero, st-features (фиолетовый фон), st-howto (форма — блок .trial)
│       ├── tech-support.css    # Стили страницы «Техническая поддержка»: ts-hero, ts-features (фиолетовый фон), ts-howto (форма — блок .trial)
│       ├── counterparty-check.css # Стили страницы «Проверка контрагента»: pk-hero, pk-features (фиолетовый фон), pk-howto (4 шага) (форма — блок .trial)
│       ├── lk-online.css         # Стили страницы «Личный кабинет ЧДК-Онлайн»: lko-hero, lko-features (фиолетовый фон, 3×2 сетка), lko-howto (3 шага) (форма — блок .trial)
│       ├── services.css          # Стили страницы «Сервис ЧДК-Право»: sv-hero, sv-chdk (переиспользует .chdk из blocks.css), sv-lk (фиолетовый градиент)
│       ├── about-sps.css         # Стили страницы «О СПС КонсультантПлюс»: sps-hero (оранжевый градиент, 2 кнопки), sps-features (3×2 белые карточки с тенью) (форма — блок .trial)
│       ├── ai-assistant.css      # Стили страницы «ИИ-помощник»: aip-hero, aip-features (фиолетовый фон, 2×2), aip-howto (скриншот + 3 шага), trial--aip (заголовок формы с жёлтым акцентом)
│       ├── accountant.css       # Стили страницы «Бухгалтеру»: acc-hero, acc-reasons (3×2 иконки), acc-compare (таблица сравнения), acc-offer. Реиспользует .tp-banner (trial.css) и .chdk (blocks.css)
│       └── system-pages.css     # Доп. к accountant: hero с фоновым изображением; сравнение на 4 колонки (3 тарифа) для юрист/руководитель/бюджет
├── js/
│   ├── main.js                   # Точка входа: импорты, бургер, dropdown, scroll reveal, карусель
│   ├── buy-tabs.js               # Табы готовых комплектов (страница «Купить»)
│   ├── phone-mask.js             # Маска телефона +7 (9XX) XXX-XX-XX
│   ├── form-submit.js            # Валидация и отправка лид-форм (fetch + JSON)
│   └── modals.js                 # Логика модальных окон (открытие, закрытие, шаги)
├── public/
│   ├── site.webmanifest          # PWA manifest (name, theme_color, иконки)
│   ├── android-chrome-192x192.png
│   ├── android-chrome-512x512.png
│   ├── img/                      # Статические изображения (SVG, PNG)
│   └── fonts/                    # Шрифты Gilroy (woff2)
├── api/
│   └── lead.php                  # Бэкенд обработки форм (в разработке)
├── .htaccess                     # Apache rewrite-правила для clean URLs (production)
├── vite.config.js                # Конфигурация Vite (MPA input, плагины)
├── vite-plugin-php-include.js    # Кастомный Vite-плагин: обработка <?php include ?>
├── vite-plugin-clean-urls.js     # Кастомный Vite-плагин: clean URLs в dev-режиме
├── vite-plugin-gh-pages-links.js # Кастомный Vite-плагин: префикс для GitHub Pages
├── build-sprite.js               # Скрипт: генерация SVG-спрайта из public/img/*.svg
└── package.json
```

---

## Дизайн-система

### Источник дизайна
Figma: `https://www.figma.com/design/GFmp5kaM7zrQtRMRTzlzYO/СПБКонс`
- UI Kit (node-id=156-1010) — читать слева направо
- Главная страница (node-id=140-8)

### Цветовая палитра

| Токен | Значение | Назначение |
|-------|----------|------------|
| `--color-primary` | `#EDA700` | Оранжевый (основной акцент) |
| `--color-secondary` | `#6263A5` | Фиолетовый (вторичный акцент) |
| `--color-gray` | `#D8D8D8` | Светло-серый (рамки, disabled) |
| `--color-black` | `#24272A` | Чёрный (текст, заливки) |
| `--color-error` | `#D00000` | Ошибка валидации |

### Шрифт
**Gilroy** — 4 начертания: Regular (400), Medium (500), Semibold (600), Bold (700). Подключаются через `@font-face` в `global.css`.

### Типографика
Адаптивная через `clamp()`. Никаких медиазапросов для размеров шрифтов — масштабирование плавное между 320px и 1440px.

---

## UI Kit — Компоненты и их состояния

### Кнопки

Все кнопки используют базовый класс `.btn` + модификатор. Размеры: `.btn--sm`, `.btn--lg`.

| Класс | Normal | Hover | Disabled |
|-------|--------|-------|----------|
| `.btn--yellow-on-purple` | Оранжевый фон, белый текст | Белый фон, оранжевый текст | Серый фон, белый текст |
| `.btn--yellow` | Оранжевый фон, белый текст | Фиолетовый фон, белый текст | Серый фон, белый текст |
| `.btn--gray` | Белый фон, серая рамка, чёрный текст | Оранжевый фон, чёрный текст | Серый фон, белый текст |
| `.btn--purple` | Фиолетовый фон, белый текст | Оранжевый фон, белый текст | Серый фон, белый текст |
| `.btn--link-purple` | Фиолетовый текст + стрелка → | Оранжевый текст, стрелка сдвигается | Серый текст |
| `.btn--link-yellow` | Оранжевый текст + стрелка → | Фиолетовый текст, стрелка сдвигается | Серый текст |

### Поле ввода (Input)

Класс `.trial__input` / `.modal__input`. Маска телефона через `phone-mask.js`.

| Состояние | Описание |
|-----------|----------|
| Normal | Белый фон, серая рамка `#D8D8D8`, плейсхолдер `#999` |
| Focus | Рамка меняется на фиолетовую `--color-secondary` |
| Error | Красная рамка `#D00000`, красный текст |

### Карточки ЧДК-Право (.chdk-card)

Два варианта: `--yellow` и `--purple`. При hover вся карточка заливается фирменным цветом, элементы внутри инвертируются в белый, кнопка становится белой с цветным текстом.

### Карточки смарт-комплектов (.sk-card)

Два фона: `--purple` (#E4E4FF) и `--orange` (#FFDBBA). Кнопки чередуются:
- Нечётные карточки → фиолетовая кнопка (hover: оранжевая)
- Чётные карточки → оранжевая кнопка (hover: фиолетовая)

### Навигация слайдера

Круглые кнопки `.reviews__btn`: фиолетовый фон → при hover оранжевый. Белая SVG-стрелка.

---

## Правила написания кода

### CSS

1. **ЗАПРЕЩЁН хардкод цветов.** Абсолютно все цвета, шрифты, радиусы, тени берутся из `var(--...)` в `variables.css`.
2. **BEM-методология:** `.block__element--modifier`. Критично для будущей нарезки в Битрикс.
3. **Файловая структура:** `variables.css` → `global.css` → `ui-kit.css` → `blocks.css`. Порядок подключения важен.
4. **Адаптивность:** Mobile-First не обязателен, но адаптив обязателен. Брейкпоинты: 1380px, 1200px, 1060px, 960px, 600px.
5. **Отступы контейнера:** `--side-padding` (60px → 40px → 32px → 20px) — адаптивно через `:root` в медиазапросах.
6. **Все переходы** через `transition` с переменными `--transition-fast` / `--transition-base` / `--transition-card`.

### HTML

1. **Семантика:** `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`, `<article>`.
2. **Изображения:** `loading="lazy"` на всех кроме hero. `alt` обязательны.
3. **Формы:** Все формы имеют класс `.js-lead-form`, скрытые поля (honeypot `website`, `fill_time_ms`, `form_id`, `page`), `data-thanks` для редиректа.
4. **Модалки:** 4 модальных окна — `#modalPrice`, `#modalTrial`, `#modalLk` (с 3 шагами A→B/C), `#modalService` (жёлтая кнопка «Отправить»).
5. **Scroll Reveal:** Секции и карточки получают класс `.reveal`, задержки `.reveal--delay-1..4`.

### JavaScript

1. **Vanilla JS, ES6+ модули.** Никакого jQuery.
2. **Точка входа:** `js/main.js` — импортирует все модули.
3. **Модули:**
   - `phone-mask.js` — маска телефона `+7 (9XX) XXX-XX-XX`
   - `form-submit.js` — клиентская валидация, honeypot, fill_time, UTM-трекинг, fetch-отправка
   - `modals.js` — IIFE, управление открытием/закрытием, шагами
4. **Scroll Reveal:** `IntersectionObserver` с `threshold: 0.15`.
5. **Карусель отзывов:** Бесконечная, клонирование слайдов, touch/swipe, keyboard, центральный слайд масштабируется.

---

## Получение изображений

### Для существующих страниц
Изображения хранятся в `public/img/`. Именование: описательное, kebab-case.

### Для новых страниц
Скачивать из Figma через **Figma MCP** (`download_figma_images`):
- fileKey: `GFmp5kaM7zrQtRMRTzlzYO`
- localPath: `public/img`
- PNG для растровых изображений (pngScale: 2), SVG для иконок и логотипов

---

## Страницы проекта

| Страница | Файл | URL (Битрикс) | Статус |
|----------|------|---------------|--------|
| Главная | `index.html` | `/` | Готова |
| Купить КонсультантПлюс | `buy.html` | `/o-sisteme-konsultantplyus/buy/` | Готова |
| Пробный доступ | `trial.html` | `/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/` | Готова |
| Линия консультаций | `consultation.html` | `/consult/` | Готова |
| Правовые сборники | `collections.html` | (новый раздел) | Готова |
| Детальная сборника | `collection-detail.html` | (новый раздел)/slug/ | Готова |
| Персональный менеджер | `personal-manager.html` | `/services/personalnyy-menedzher/` | Готова |
| Обучение КонсультантПлюс | `education.html` | `/services/obuchenie-rabote-s-konsultantplyus/` | Готова |
| Семинары-тренинги | `seminars.html` | `/services/seminary-i-praktikumy/` | Готова |
| Техническая поддержка | `tech-support.html` | `/services/obsluzhivanie-programmy-konsultant-plyus/` | Готова |
| Проверка контрагента | `counterparty-check.html` | `/services/proverka-kontragenta/` | Готова |
| Личный кабинет ЧДК-Онлайн | `lk-online.html` | `/services/chto-delat-onlayn/` | Готова |
| Сервис ЧДК-Право (агрегатор) | `services.html` | `/services/` | Готова |
| КонсультантПлюс для бухгалтера | `accountant.html` | `/systems/bukhgalteru/` | Готова |
| КонсультантПлюс для юриста | `lawyer.html` | `/systems/yuristu/` | Готова |
| КонсультантПлюс для руководителя | `manager.html` | `/systems/rukovoditelyu/` | Готова |
| КонсультантПлюс для бюджетной организации | `budget.html` | `/systems/byudzhetnoy-organizatsii/` | Готова |
| КонсультантПлюс для кадрового специалиста | `hr.html` | (раздел «Кадровику») | Готова |
| О СПС КонсультантПлюс | `about-sps.html` | `/o-sisteme-konsultantplyus/` | Готова |
| ИИ-помощник | `ai-assistant.html` | `/o-sisteme-konsultantplyus/ii-pomoshchnik/` | Готова |
| Спасибо (после формы) | `thanks.html` | `/thanks.html` | В разработке |

### Страницы, ещё не свёрстанные (по ТЗ PDF)

Figma-проект: `GFmp5kaM7zrQtRMRTzlzYO` (СПБКонс)

| Страница | URL (Битрикс) | Figma node | Блоки (кратко) |
|----------|---------------|------------|----------------|
| Системы КонсультантПлюс | `/systems/` | `936-3331` | Баннер (Попап 1), выбор профиля с фильтрами, 12 комплектов (кнопки «Узнать цену» → Попап 4 + скрытый коммент.) |
| ~~Бухгалтеру~~ | `/systems/bukhgalteru/` | `694-803` (файл `TWwPbEFDkWDFdJY0mVU40H`) | **Свёрстана** → `accountant.html` |
| ~~Юристу~~ | `/systems/yuristu/` | — | **Свёрстана** → `lawyer.html` |
| ~~Руководителю~~ | `/systems/rukovoditelyu/` | `850-1901` | **Свёрстана** → `manager.html` |
| ~~Бюджету~~ | `/systems/byudzhetnoy-organizatsii/` | `887-2696` | **Свёрстана** → `budget.html` |
| ~~Кадровику~~ | — | — | **Свёрстана** → `hr.html` |
| О СПС КонсультантПлюс | `/o-sisteme-konsultantplyus/` | `1357-6769` | Баннер (Попап 1 + Попап 2), состав системы (6 мини-блоков с ссылками), пробный доступ (inline-форма `inline/5/gd9kwc`) |
| ~~ИИ-помощник~~ | `/o-sisteme-konsultantplyus/ii-pomoshchnik-konsultant-plyus/` | `1350-6256` | **Свёрстана** → `ai-assistant.html`. Макет в Figma: файл `RicIF4xm6tmV9vYnQrtbjN` (узел `1350-6256`; ранее `SMGbLwQ1O7mBeZfpsDwCQs`) |
| ~~Сервис ЧДК-Право (агрегатор)~~ | `/services/` | `1384-8016` | **Свёрстана** → `services.html` |
| ~~Обучение~~ | `/services/obuchenie-rabote-s-konsultantplyus/` | `1134-4636` | **Свёрстана** → `education.html` |
| ~~Семинары-тренинги~~ | `/services/seminary-i-praktikumy/` | `1137-5467` | **Свёрстана** → `seminars.html` |
| ~~Техническая поддержка~~ | `/services/obsluzhivanie-programmy-konsultant-plyus/` | `1244-5188` | **Свёрстана** → `tech-support.html` |
| ~~Проверка контрагента~~ | `/services/proverka-kontragenta/` | `1283-5747` | **Свёрстана** → `counterparty-check.html` |
| ~~Личный кабинет ЧДК-Онлайн~~ | `/services/chto-delat-onlayn/` | `1371-7436` | **Свёрстана** → `lk-online.html` |
| Контакты | `/contacts/` | `962-4022` | Контакты + Яндекс-карта (59.916685564219, 30.379735999336), «Задать вопрос» (Попап Контакты с полем «Ваш вопрос») |
| Новости (список) | `/news/` | — | Единый шаблон раздела |
| Новость (шаблон) | `/news/{slug}/` | `943-4810` | Текст + гиперссылки, пробный доступ (inline-форма) |
| Вопрос-ответ (список) | `/faq/` | `951-3017` | Фильтры по темам, «Показать ещё» (+10), «Задать вопрос» (Попап Контакты с полем «Ваш вопрос») |
| Вопрос-ответ (шаблон) | `/faq/{slug}/` | `958-3609` | Текст, «Задать вопрос» (Попап Контакты) |

---

## Карта навигации и всплывающих окон

### Справочник попапов (по ТЗ PDF)

| ID попапа | Figma node | Назначение | HTML-модалка | CRM-форма (Битрикс) | Поля |
|-----------|------------|------------|--------------|----------------------|------|
| Попап 1 | `181-2` | Форма покупки К+ | `#modalPrice` | `inline/67/6na755` | Имя, Телефон, Email |
| Попап 2 | `181-528` | Форма пробного доступа | `#modalTrial` | `inline/5/gd9kwc` | Имя, Телефон, Email |
| Попап 4 | `186-894` | Форма сервиса / Узнать цену | `#modalPrice` | `WEB_FORM_ID=68` (форма Контакты) | Имя, Телефон, Email + скрытый коммент. |
| Попап Сервис | — | Заполните форму (карточки ЧДК-Право) | `#modalService` | `WEB_FORM_ID=68` | Имя, Телефон, Email |
| Попап Контакты | `963-4377` | Задать вопрос (Контакты, FAQ) | `#modalLk` шаг C | `WEB_FORM_ID=68` (форма Контакты) | Имя, Телефон, Email, **Ваш вопрос** |

> **Попап 3** из первоначального ТЗ = **Попап 4** (та же форма `WEB_FORM_ID=68`, тот же визуал `186-894`). Различие только в скрытом комментарии: для «Узнать цену» в Системах передаётся название комплекта, для сервисных страниц — название услуги.

#### Где используются попапы

| Попап | Где |
|-------|-----|
| Попап 1 | Шапка «Купить», футер «Купить КонсультантПлюс», баннеры профильных страниц (Бухгалтеру/Юристу/Руководителю/Бюджету), сравнение комплектов «Купить», спецпредложение |
| Попап 2 | Кнопки «Пробный доступ» на баннерах профильных страниц, блоки «Запросить пробный доступ» |
| Попап 4 | Кнопки «Узнать цену» в Системах (12 комплектов + скрытый коммент.), кнопки «Заказать/Записаться» в блоке Сервис ЧДК-Право (6 мини-блоков), баннеры сервисных страниц (Персональный менеджер, Обучение, Семинары, Техподдержка, Проверка контрагента, ЛК ЧДК-Онлайн, Сервис ЧДК-Право, ИИ-помощник), Правовые сборники (баннер + карточки «Получить»), Правовой сборник детально (баннер + форма на странице) |
| Попап Контакты | Страница Контакты «Задать вопрос», Вопрос-ответ «Задать вопрос», Страница отдельного вопрос-ответа «Задать вопрос» |

#### При миграции в Битрикс

- Попап 1 (`#modalPrice`) → CRM-форма `inline/67/6na755` (скрипт: `loader_67_6na755.js`)
- Попап 2 (`#modalTrial`) → CRM-форма `inline/5/gd9kwc` (скрипт: `loader_5_gd9kwc.js`)
- Попап Сервис (`#modalService`) → Форма Контакты `WEB_FORM_ID=68` + `<input type="hidden" name="COMMENT" value="Название услуги">`
- Попап 4 → Форма Контакты `WEB_FORM_ID=68` + `<input type="hidden" name="COMMENT" value="Название услуги/комплекта">`
- Попап Контакты → Та же форма `WEB_FORM_ID=68`, но с видимым полем «Ваш вопрос»
- Inline-формы пробного доступа (на страницах) → CRM-форма `inline/5/gd9kwc` встроенная в страницу

### Кнопки и триггеры модалок

| CSS-класс / data-атрибут | Действие |
|---------------------------|----------|
| `.header-top__cta-btn` | Открывает `#modalPrice` (Попап 1) |
| `.js-open-modal-price` | Открывает `#modalPrice` |
| `.js-open-modal-trial` | Открывает `#modalTrial` |
| `[data-open-modal="modalPrice"]` | Открывает `#modalPrice` |
| `[data-open-modal="modalTrial"]` | Открывает `#modalTrial` |
| `[data-open-modal="modalService"]` | Открывает `#modalService` (карточки «Сервис ЧДК-Право») |
| `.header-nav__link--lk` | Открывает `#modalLk` |

### Навигация шапки

| Пункт | URL |
|-------|-----|
| Бухгалтеру | `/systems/bukhgalteru/` |
| Юристу | `/systems/yuristu/` |
| Руководителю | `/systems/rukovoditelyu/` |
| Бюджету | `/systems/byudzhetnoy-organizatsii/` |
| Кадровику | `/systems/kadroviku/` |
| Линия консультаций | `/consult/` |
| О нас | `/about/` |
| Новости (dropdown, hover) → Новости | `/news/` |
| Новости (dropdown, hover) → Вопрос-ответ | `/faq/` |
| Новости (dropdown, hover) → Правовые сборники | `/collections.html` (пока нет URL на сайте) |
| Контакты | `/contacts/` |
| Личный кабинет | Открывает `#modalLk` |
| Купить (кнопка) | Открывает `#modalPrice` |

### Навигация подвала

| Пункт | URL |
|-------|-----|
| О СПС КонсультантПлюс | `/o-sisteme-konsultantplyus/` |
| Системы | `/systems/` |
| Пробный доступ | `/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/` |
| Контакты | `/contacts/` |
| Обучение | `/services/obuchenie-rabote-s-konsultantplyus/` |
| Сервис ЧДК-Право | `/services/` |
| Купить КонсультантПлюс | Открывает `#modalPrice` |
| Пользовательское соглашение | `/polzovatelskoe_soglashenie.php` |
| Согласие на обработку ПД | `/consent_to_processing_of_personal_data.pdf` |

### Мессенджеры

| Канал | URL | Где отображается |
|-------|-----|------------------|
| Телефон | `tel:+78123344481` | Шапка, футер |
| MAX | `https://max.ru/u/f9LHodD0cOIevbLN7WToeY90aC9RgJCNUl7v8Z3J5L1adS2-OklcZcPVMF8` | Шапка, футер |
| Telegram | `https://t.me/+79219505756` | **Убран из вёрстки по решению заказчика** (в ТЗ PDF присутствует, но не используется) |
| Email | `mailto:info@spbcons.ru` | Страница Контакты |
| ВКонтакте | `https://vk.com/consultantspb` | Страница Контакты |

### Блок «Сервис ЧДК-Право» (типовой, на главной, профильных и сервисных страницах)

Все кнопки «Заказать/Задать вопрос/Обратиться/Записаться/Проверить» открывают **Попап 4** (`WEB_FORM_ID=68`). В Битриксе к лиду добавляется скрытый комментарий с названием услуги.

| Мини-блок | Кнопка | Ссылка «Подробнее» |
|-----------|--------|---------------------|
| Экспертная Линия консультаций | `data-open-modal="modalService"` | `/consult/` |
| Персональный менеджер | `data-open-modal="modalService"` | `/services/personalnyy-menedzher/` |
| Обучение работе с КонсультантПлюс | `data-open-modal="modalService"` | `/services/obuchenie-rabote-s-konsultantplyus/` |
| Запись на семинары-тренинги | `data-open-modal="modalService"` | `/services/seminary-i-praktikumy/` |
| Техподдержка | `data-open-modal="modalService"` | `/services/obsluzhivanie-programmy-konsultant-plyus/` |
| Проверка контрагента | `data-open-modal="modalService"` | `/services/proverka-kontragenta/` |

### Страница «Купить КонсультантПлюс» (`buy.html`)

**CSS:** `styles/pages/buy.css` (подключается только на этой странице)
**JS:** `js/buy-tabs.js` (подгружается динамически через `import()` при наличии `.kits__tab`)

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `bitrix:main.include` area_id="header" |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.buy-hero` | Произвольный компонент |
| 4 причины | `.reasons` | Произвольный компонент |
| Стоимость | `.cost` | Произвольный компонент |
| Готовые комплекты (табы) | `.kits` | Произвольный компонент, данные из инфоблока |
| Отзывы | `.reviews` | Переиспользуется с главной |
| Пробный доступ | `.trial` | Переиспользуется с главной |
| Подвал | `.footer` | `bitrix:main.include` area_id="footer" |
| Модальные окна | `.modal` | `bitrix:main.include` area_id="modals" |

#### Нарезка под Битрикс

Каждая секция обёрнута HTML-комментарием с пометкой Битрикс-компонента. При миграции:
- Шапка и подвал выносятся в `bitrix:main.include` (area_id)
- Хлебные крошки заменяются на `bitrix:breadcrumb` с кастомным шаблоном
- Каждая секция контента (hero, reasons, cost, kits) становится отдельным компонентом с `.default` шаблоном
- Секции reviews и trial переиспользуют те же шаблоны, что и на главной
- Данные табов (kits) переносятся из `buy-tabs.js` в инфоблок Битрикс

### Страница «Пробный доступ» (`trial.html`)

**CSS:** `styles/pages/trial.css` (подключается только на этой странице) + `styles/pages/buy.css` (breadcrumbs)

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `bitrix:main.include` area_id="header" |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.tp-hero` | Произвольный компонент |
| Баннер «2 дня бесплатно» | `.tp-banner` | Произвольный компонент |
| Что вы успеете за 2 дня | `.tp-days` | Произвольный компонент |
| Форма заявки | `.tp-form` | Произвольный компонент с формой |
| Почему стоит выбрать | `.tp-adv` | Произвольный компонент |
| Отзывы | `.reviews` | Переиспользуется с главной |
| Подвал | `.footer` | `bitrix:main.include` area_id="footer" |
| Модальные окна | `.modal` | `bitrix:main.include` area_id="modals" |

### Страница «Линия консультаций» (`consultation.html`)

**CSS:** `styles/pages/consultation.css` (подключается только на этой странице) + `styles/pages/buy.css` (breadcrumbs)

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `bitrix:main.include` area_id="header" |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.lk-hero` | Произвольный компонент |
| Преимущества ЛК | `.lk-adv` | `bitrix:news.list` iblock="advantages_lk" |
| Что может ЛК | `.lk-services` | `bitrix:news.list` iblock="lk_services" |
| Как обратиться | `.lk-howto` | Произвольный компонент |
| Наши эксперты | `.lk-experts` | `bitrix:news.list` iblock="experts" |
| Отзывы ЛК | `.lk-reviews` | `bitrix:news.list` iblock="reviews_lk" |
| Форма «Задать вопрос» | `.lk-form` | `bitrix:form.result.new` form_id="lk_question" |
| Подвал | `.footer` | `bitrix:main.include` area_id="footer" |
| Модальные окна | `.modal` | `bitrix:main.include` area_id="modals" |

#### Слайдер экспертов

Блок «Наши эксперты» содержит 8 карточек (2 набора по 4 эксперта) в горизонтальном слайдере с кнопками навигации (`.lk-experts__nav-btn`). Фото экспертов хранятся в `public/img/expert-*.png`. Каждая карточка чередует фиолетовый/оранжевый акцент (фон фото, цвет имени).

#### Карусель отзывов

Блок «Отзывы клиентов» содержит 5 скриншотов отзывов в горизонтальной карусели. Изображения: `public/img/otz-lk-*.png`. Обводка карточек чередуется фиолетовая/оранжевая.

### Страница «Правовые сборники» (`collections.html`)

**CSS:** `styles/pages/collections.css` (подключается только на этой странице) + `styles/pages/buy.css` (breadcrumbs)

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `bitrix:main.include` area_id="header" |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.col-hero` | Произвольный компонент |
| Форма «Пробный доступ» | `.trial` | `bitrix:form.result.new` form_id="trial-collections" (разметка как на главной) |
| Каталог сборников | `.col-catalog` | `bitrix:news.list` iblock="collections" с фильтрацией по разделам |
| Карточка сборника | `.col-card` | `bitrix:news.detail` (внутри .list) |
| Подвал | `.footer` | `bitrix:main.include` area_id="footer" |
| Модальные окна | `.modal` | `bitrix:main.include` area_id="modals" |

#### Табы категорий

Блок каталога содержит табы-пилюли (`.col-catalog__tab`) для фильтрации сборников: Бухгалтеру, Юристу, Руководителю, Бюджет, Кадры, Закупки. Активный таб — фиолетовый фон. При Битрикс-интеграции фильтрация реализуется через AJAX-запрос к `bitrix:news.list` с параметром раздела.

#### Карточки сборников

6 карточек в сетке 3×2 (`.col-catalog__grid`). Каждая: обложка (200px, r:24), заголовок, описание, кнопка «Получить» (оранжевая), ссылка «Подробнее →» (жёлтая → фиолетовая при hover). Изображения: `public/img/sborniki-card-*.png`.

### Страница «Детальная сборника» (`collection-detail.html`)

**CSS:** `styles/pages/collection-detail.css` + `styles/pages/collections.css` (для .col-card стилей) + `styles/pages/buy.css` (breadcrumbs)

Это шаблон детальной страницы конкретного правового сборника. В Битрикс реализуется через `bitrix:news.detail` одного инфоблока.

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `bitrix:main.include` area_id="header" |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.cd-hero` | `bitrix:news.detail` (верхняя часть детальной) |
| Что входит в сборник | `.cd-contents` | `bitrix:news.list` iblock="collection_items" |
| Кому необходим | `.cd-audience` | `bitrix:news.list` iblock="collection_audience" |
| Форма «Получите сборник» | `.trial` | `bitrix:form.result.new` form_id="collection-get" (разметка как на главной) |
| Также могут пригодиться | `.cd-related` + `.col-card` | `bitrix:news.list` iblock="collections" (исключая текущий) |
| Подвал | `.footer` | `bitrix:main.include` area_id="footer" |
| Модальные окна | `.modal` | `bitrix:main.include` area_id="modals" |

#### Hero-блок

Фиолетовый градиент (`linear-gradient(135deg, #6263A5, #8A8CEB)`), watermark ЧДК, обложка сборника справа. Белый текст. Кнопка «Получить сборник» оранжевая.

#### Что входит в сборник

6 пунктов в 2 колонках (3+3), нумерация — квадратные плашки с чередованием фиолетовый/оранжевый цвет. Фоновый watermark ЧДК с opacity 7%.

#### Кому необходим

Фиолетовый фон, 2×2 сетка белых карточек с иконками (SVG inline). При Битрикс-интеграции — `bitrix:news.list` с привязкой к сборнику.

#### Связанные сборники

3 карточки (`.col-card` из `collections.css`) с кнопками «Получить» и «Подробнее →». При Битрикс — `bitrix:news.list` с исключением текущего.

### Страница «Персональный менеджер» (`personal-manager.html`)

**CSS:** `styles/pages/personal-manager.css` + `styles/pages/buy.css` (breadcrumbs)

#### Секции и маппинг на Битрикс-компоненты

| Секция | CSS-класс | Битрикс-компонент |
|--------|-----------|-------------------|
| Шапка | `.header` | `<?php include 'includes/header.php'; ?>` |
| Хлебные крошки | `.breadcrumbs` | `bitrix:breadcrumb` |
| Hero | `.pm-hero` | Произвольный компонент |
| Что может менеджер | `.pm-features` | `bitrix:news.list` iblock="pm_features" |
| Форма «Пробный доступ» | `.trial` | `bitrix:form.result.new` form_id="trial-pm" (разметка как на главной) |
| Подвал | `.footer` | `<?php include 'includes/footer.php'; ?>` |
| Модальные окна | `.modal` | `<?php include 'includes/modals.php'; ?>` |

#### Hero-блок

Оранжевый градиент, watermark ЧДК, MacBook с интерфейсом справа (прижат к нижнему краю). Кнопка «Обратиться» фиолетовая.

#### Что может менеджер

Фиолетовый фон, 2×2 сетка белых карточек. Формат: иконка сверху, заголовок + описание ниже (как `lk-services` на consultation.html). Иконки: `PM-komplekt.svg`, `PM-rabota.svg`, `PM-biznes.svg`, `PM-kurs.svg`.

---

## Команды

```bash
npm run dev       # Запуск dev-сервера (localhost:3000, hot reload)
npm run build     # Продакшн-сборка в dist/
npm run preview   # Превью продакшн-сборки
```

---

## Связь: Figma → CSS Variables → BEM Classes → HTML Layout

Это ключевой принцип. При добавлении нового элемента:

1. Извлеки токены из Figma (цвет, размер, тень, радиус)
2. Добавь переменную в `variables.css` (если её нет)
3. Создай BEM-класс в `ui-kit.css` (для переиспользуемых компонентов) или `blocks.css` (для секций)
4. Используй `var(--...)` — **никогда** не пиши hex/rgb напрямую в блоках
5. Добавь HTML-разметку с семантическими тегами
6. Добавь `.reveal` если элемент должен анимироваться при скролле
