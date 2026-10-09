# SEO-аудит spbcons.ru — серверные задачи и сниппеты

Документ сопровождает правки в репозитории и описывает работы, которые надо выполнить на проде
(nginx 1.28.3, Bitrix Site Manager). Каталог шаблона: `local/templates/SPBCons_New_2026/`.

Что **уже сделано в репозитории** (видно в `git diff` ветки):

| Пункт | Файл / коммит | Состояние |
| --- | --- | --- |
| 1.1 description — расширены ключевые страницы | `index.html`, `buy.html`, `o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya.html` | в `<head>` HTML каждой страницы есть уникальный `description`. **Нужно прокинуть в Bitrix** (см. §1.1 ниже) |
| 3.1 alt — все пустые `alt=""` заполнены | 16 HTML-файлов | повторяющиеся иконки секций `.trial` и `.sk`, плитки `.kits__tab-img` |
| 5.1 FAQ-аккордеон на главной | `index.html` + `styles/blocks.css` (.faq-home) | нативный `<details>/<summary>`, индикатор `+/−`, FAQPage микроразметка |
| 5.1 пункт меню «Вопрос-ответ» | `includes/header.php` | вынесен из dropdown «Новости» как отдельный top-level пункт |
| 5.2 sticky-header | `styles/blocks.css` (.header) | `position: sticky` + сжатие высот (120→96, 64→56), белый фон nav |
| ~~5.3 exit-intent popup~~ | — | **удалён 11.06.2026 по решению клиента** (раздражал посетителей); вычищен из `includes/modals.php`, `js/main.js`, обоих Bitrix-шаблонов; `js/exit-intent.js` удалён |
| 5.4 сквозная форма перед футером | `includes/lead-form-pre-footer.php` + 8 страниц (systems/*, faq.html, faq-detail.html) | новый компактный лид-форма блок |
| 2.1 Organization JSON-LD | `index.html`, `contacts.html` | реальный адрес: 191167, наб. Обводного канала, 23 |
| 2.2 SiteNavigationElement | `includes/header.php` | разметка на каждом пункте десктопного меню |

---

## Перенесено в БОЕВОЙ шаблон `public_html/` (07.06.2026)

Ранее правки лежали только в Vite-исходниках (`index.html`, `includes/*`). Теперь они портированы
в реальные файлы боевого Bitrix-шаблона и страниц — **осталось только выгрузить `public_html/` на прод**.

| Пункт | Файл в `public_html/` | Что добавлено |
| --- | --- | --- |
| 1.1 description (главная) | `index.php` | `$APPLICATION->SetPageProperty("description", …)` — `ShowHead()` уже выводит meta |
| 1.1 description (/systems/) | `systems/index.php` | то же |
| 2.1 Organization+PostalAddress | `local/templates/SPBCons_New_2026/footer.php` | JSON-LD (site-wide). Адрес: 191167, наб. Обводного канала, 23; email info@spbcons.ru |
| 2.4 SiteNavigationElement | `local/templates/SPBCons_New_2026/footer.php` | JSON-LD `ItemList` из 9 пунктов меню (компонент `bitrix:menu` не трогали) |
| 4.1 FAQ на главной | `index.php` | секция `.faq-home` (`<details>/<summary>`, +/−) + FAQPage JSON-LD |
| ~~4.4 exit-intent~~ | — | **удалён 11.06.2026** из `footer.php` обоих шаблонов (модалка `#modalExit` + inline-скрипт) |
| 4.5 сквозная форма | `include/lead-pre-footer.php` (+ `index.php`, `systems/{bukhgalteru,yuristu,rukovoditelyu,byudzhetnoy-organizatsii,kadroviku}/index.php`) | секция `.lead-pre-footer` на форме 68 |

CSS `.faq-home`, `.lead-pre-footer` уже присутствуют в `styles.css` (синхронизирован с источником,
`node build-bitrix-css.js --check` → `-0/+0`). `modal--exit` использует базовый `.modal`.

> **Зеркало:** site-wide правка `footer.php` продублирована в `bitrix-template/footer.php`.
> При деплое через ZIP-пакет — пересобрать `bitrix-template.zip`.

**Остаётся вручную (нельзя из репозитория):**
- **1.2 / 1.3** — серверные правки (см. §1.2, §1.3 ниже): `init.php` + nginx-редирект слешей.
- **2.3 `/infobanki/`** — страница и ошибка `Cannot find 'template1' template with page 'news'`
  правятся **в админке Bitrix** (битый вызов компонента в теле страницы; в репозитории файла нет).
  Либо наполнить страницу контентом, либо закрыть `<meta name="robots" content="noindex">`.

---

## 1. Технические правки

### 1.1 description в Bitrix

**Проблема:** `<meta name="description">` в исходных HTML есть на всех 27 страницах, но Bitrix-шаблон
их не подхватывает — на проде тег пустой. SEO-аудит видел отсутствие description именно по этой
причине, не из-за репозитория.

**Что сделать в Bitrix (любой из вариантов):**

1. **Самый чистый — задать свойство страницы/раздела** в админке:
   `Контент → Структура сайта → Файлы и папки → редактирование страницы → вкладка "Заголовки и метаданные" → description`.
   Свойство страницы переопределяет свойство раздела. Шаблон должен в `<head>` выводить:
   ```php
   <meta name="description" content="<?$APPLICATION->ShowMeta('description')?>" />
   ```

2. **Программно из шаблона страницы** — добавить в начало `header.php` шаблона *до* `<head>`:
   ```php
   <?
   if (CSite::InDir('/systems/bukhgalteru/')) {
       $APPLICATION->SetPageProperty('description',
           'КонсультантПлюс для бухгалтера — актуальные законы, готовые решения, путеводители и калькуляторы. Официальный представитель в Санкт-Петербурге.');
   }
   // …и так далее по страницам
   ?>
   ```
   Но это плохо масштабируется — используйте этот вариант только для разовых исключений.

3. **Для типовых разделов (новости, FAQ, инфобанки)** — генерировать description из анонса элемента
   в шаблоне `bitrix:news.detail`:
   ```php
   <?
   if (!empty($arResult['PREVIEW_TEXT'])) {
       $desc = strip_tags($arResult['PREVIEW_TEXT']);
       $desc = mb_substr($desc, 0, 160);
       $APPLICATION->SetPageProperty('description', $desc);
   }
   ?>
   ```

**Эталонные description по страницам** (брать из исходных HTML репо — см. `<meta name="description">`
в каждом файле; ниже сводка для удобства копирования в админку Bitrix):

| URL Bitrix | description |
| --- | --- |
| `/` | СПБ Консультант — официальный представитель КонсультантПлюс в Санкт-Петербурге и Ленобласти. Готовые комплекты для бухгалтера, юриста, руководителя и бюджетных организаций. Бесплатный пробный доступ на 2 дня. |
| `/about/` | О компании ЧДК-Право — официальный представитель КонсультантПлюс в Санкт-Петербурге с 1996 года |
| `/contacts/` | Контакты ООО «ЧДК-Право» — официальный партнёр КонсультантПлюс в Санкт-Петербурге. Телефон, адрес, e-mail, схема проезда. |
| `/consult/` | Линия консультаций КонсультантПлюс — экспертные ответы по бухучету, налогам и праву от ЧДК-Право |
| `/news/` | Новости и статьи КонсультантПлюс от ЧДК-Право — актуальные изменения законодательства для бухгалтеров, юристов и руководителей |
| `/faq/` | Вопрос-ответ: частые вопросы по бухгалтерии, налогам, кадрам и праву — ответы экспертов КонсультантПлюс |
| `/systems/` | Комплекты КонсультантПлюс для бухгалтера, юриста, руководителя и бюджетных организаций — выберите свой профиль |
| `/systems/bukhgalteru/` | КонсультантПлюс для бухгалтера — актуальные законы, готовые решения, путеводители и калькуляторы. Официальный представитель в Санкт-Петербурге. |
| `/systems/yuristu/` | КонсультантПлюс для юриста — законодательство, судебная практика, экспертные комментарии. Официальный представитель в Санкт-Петербурге. |
| `/systems/rukovoditelyu/` | КонсультантПлюс для руководителя — риски, изменения законов, защита бизнеса. Официальный представитель в Санкт-Петербурге. |
| `/systems/byudzhetnoy-organizatsii/` | КонсультантПлюс для бюджетной организации — 44-ФЗ, 223-ФЗ, отчётность, госзаказ. Официальный представитель в Санкт-Петербурге. |
| `/systems/kadroviku/` | КонсультантПлюс для кадрового специалиста — трудовое право, документы, проверки ГИТ. Официальный представитель в Санкт-Петербурге. |
| `/services/` | Сервис ЧДК-Право — полное техническое сопровождение, экспертная поддержка и обучение для клиентов КонсультантПлюс в Санкт-Петербурге. |
| `/services/personalnyy-menedzher/` | Персональный менеджер КонсультантПлюс — индивидуальное сопровождение клиентов ЧДК-Право в Санкт-Петербурге. |
| `/services/obuchenie-rabote-s-konsultantplyus/` | Обучение работе с КонсультантПлюс — бесплатные курсы для клиентов ЧДК-Право в Санкт-Петербурге. |
| `/services/seminary-i-praktikumy/` | Семинары-тренинги по КонсультантПлюс — бесплатные мастер-классы и лекции для клиентов ЧДК-Право в Санкт-Петербурге. |
| `/services/obsluzhivanie-programmy-konsultant-plyus/` | Техническая поддержка КонсультантПлюс — установка, настройка и обслуживание для клиентов ЧДК-Право в Санкт-Петербурге. |
| `/services/proverka-kontragenta/` | Проверка контрагента — оцените риски сотрудничества с компанией или ИП через сервис ЧДК-Право для клиентов КонсультантПлюс. |
| `/services/chto-delat-onlayn/` | Личный кабинет ЧДК-Онлайн — эксклюзивный сервис для пользователей КонсультантПлюс, клиентов ЧДК-Право в Санкт-Петербурге. |
| `/o-sisteme-konsultantplyus/` | О справочно-правовой системе КонсультантПлюс — более 360 миллионов документов, 9 профессиональных профилей, интеллектуальные сервисы. |
| `/o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya/` | Бесплатный пробный доступ к КонсультантПлюс на 2 дня для организаций и ИП Санкт-Петербурга. Полный функционал системы, эксперты на связи, оформление за 5 минут. |
| `/o-sisteme-konsultantplyus/ii-pomoshchnik-konsultant-plyus/` | ИИ-помощник КонсультантПлюс — интеллектуальный сервис для быстрого решения правовых вопросов. |
| `/buy/` (или `/o-sisteme-konsultantplyus/buy/`) | Купить КонсультантПлюс в Санкт-Петербурге у официального представителя ЧДК-Право. Готовые комплекты для любых задач, индивидуальный подбор, обучение и техподдержка в подарок. |
| `/collections/` | Правовые сборники от ЧДК-Право — ключевые изменения в законодательстве, алгоритмы действий и ссылки на материалы КонсультантПлюс |

**Критерий готовности:**
```bash
curl -sI https://spbcons.ru/ | grep -i description   # должно вернуть тег
curl -s  https://spbcons.ru/ | grep -i 'name="description"' | head -1
```

---

### 1.2 Last-Modified + 304 на If-Modified-Since

**Проблема:** заголовок `Last-Modified` отсутствует, `If-Modified-Since` не обрабатывается.

**Решение в Bitrix (рекомендуемый путь):**
1. Подключить штатный модуль `\Bitrix\Main\Page\Asset` уже подключён по умолчанию; нужный класс — `\Bitrix\Main\Composite\Helper` или ручной вывод `LastModified`. Простейшее — добавить в `local/php_interface/init.php`:
   ```php
   <?
   use Bitrix\Main\EventManager;

   EventManager::getInstance()->addEventHandler(
       'main', 'OnEpilog',
       function () {
           global $APPLICATION;
           // последний апдейт страницы
           $lastModified = filemtime($_SERVER['SCRIPT_FILENAME']);
           if ($lastModified) {
               $lastModifiedStr = gmdate('D, d M Y H:i:s', $lastModified) . ' GMT';
               header('Last-Modified: ' . $lastModifiedStr);

               if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE'])
                   && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $lastModified
               ) {
                   header('HTTP/1.1 304 Not Modified');
                   exit;
               }
           }
       }
   );
   ?>
   ```
   Это даст корректный `Last-Modified` от `mtime` исполняемого файла страницы. Для **детальных
   страниц инфоблоков** лучше брать `TIMESTAMP_X` элемента и устанавливать в шаблоне `news.detail`
   через `$APPLICATION->SetPageProperty('LAST_MODIFIED', $arResult['TIMESTAMP_X'])`, а handler выше
   читать сначала это свойство, и только потом `filemtime`.

2. **Через nginx (только статика).** Для статических ресурсов nginx сам выставляет `Last-Modified`.
   Убедитесь, что `if_modified_since exact;` стоит в `nginx.conf` (по умолчанию `exact`).

**Критерий готовности:**
```bash
curl -sI https://spbcons.ru/ | grep -i last-modified
# затем
curl -sI -H "If-Modified-Since: $(date -uR -d '+1 day')" https://spbcons.ru/ | head -1
# должен прийти HTTP/1.1 304
```

---

### 1.3 Редирект URL с несколькими слешами

**Проблема:** `https://spbcons.ru//////news/` отдаёт 200 (полный дубль `/news/`).

**Решение в nginx — добавить в `server { ... }` блок до основных `location`:**
```nginx
# Схлопывание повторяющихся слешей и 301-редирект
if ($request_uri ~ "^[^?]*//") {
    rewrite ^/(.*?)/{2,}(.*)$ /$1/$2 permanent;
}
```
Альтернатива на уровне http/server — директива `merge_slashes on;` (включена по умолчанию, но **не
делает редиректа** — она просто склеивает слеши при матчинге). Для SEO нужен именно 301-редирект,
поэтому используем `rewrite ... permanent` (правило выше может потребоваться повторить, если
слешей более двух подряд — `rewrite` срабатывает один раз за фазу; ниже более универсальный
вариант):

```nginx
location ~* "//" {
    rewrite ^ $scheme://$host$uri permanent;
}
```
(nginx нормализует `$uri` без повторяющихся слешей.)

**Критерий готовности:**
```bash
curl -sI "https://spbcons.ru//////news/" | head -1
# HTTP/1.1 301 Moved Permanently
curl -sI "https://spbcons.ru//////news/" | grep -i ^location
# Location: https://spbcons.ru/news/
```

---

## 2. Микроразметка (Schema.org)

> **В репозитории применено** — см. `index.html`, `contacts.html`, `includes/header.php`.
> На прод они попадают вместе с шаблоном; ниже оставлены как справка и проверочные ссылки.
>
> **Внимание по адресу:** в `contacts.html` указан реальный адрес офиса — **191167, наб. Обводного
> канала, д. 23, лит. Б, пом. 1-Н**. В исходном брифе аудита был «Шпалерная, 36, м. Чернышевская»
> — мы взяли актуальный из вёрстки. Если фактический адрес другой — поправить в:
> `index.html` (JSON-LD), `contacts.html` (JSON-LD + видимый блок `.contacts-info`),
> и в скрипте Яндекс-карты (`contacts.html` строка ~123, координаты).

### 2.1 Organization + PostalAddress + ContactPoint

Вставить **один раз** на `/contacts/` и в блок «Контакты» на главной (или подключить через
`bitrix:main.include` для всех страниц):

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ЧДК-Право",
  "alternateName": "СПБ Консультант",
  "url": "https://spbcons.ru/",
  "logo": "https://spbcons.ru/local/templates/SPBCons_New_2026/images/logo-chdk.svg",
  "telephone": "+7-812-334-44-81",
  "email": "info@spbcons.ru",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Шпалерная, 36",
    "addressLocality": "Санкт-Петербург",
    "postalCode": "191123",
    "addressCountry": "RU"
  },
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+7-812-334-44-81",
    "contactType": "sales",
    "areaServed": "RU",
    "availableLanguage": ["ru"],
    "hoursAvailable": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "09:00",
      "closes": "19:00"
    }
  }],
  "sameAs": [
    "https://vk.com/consultantspb"
  ]
}
</script>
```

**Проверка:** https://search.google.com/test/rich-results + https://webmaster.yandex.ru/tools/microtest/

### 2.2 SiteNavigationElement в шапке

Вставить в `local/templates/SPBCons_New_2026/header.php` рядом с разметкой `<nav class="header-nav">`.
Microdata-обёртка добавляется поверх существующих `<a>`:

```html
<nav class="header-nav" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <div class="header-nav__inner">
    <ul class="header-nav__list" itemprop="about" itemscope itemtype="https://schema.org/ItemList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ItemList">
        <a href="https://spbcons.ru/systems/bukhgalteru/" itemprop="url" class="header-nav__link">Бухгалтеру</a>
        <meta itemprop="name" content="Бухгалтеру" />
      </li>
      <!-- повторить для каждого пункта верхнего меню -->
    </ul>
  </div>
</nav>
```

Полный список пунктов меню — в `includes/header.php` репо.

---

## 3. Контент / Bitrix

### 3.3 Ошибка «Cannot find 'template1' template with page 'news'»

**Где искать:**
1. В админке Bitrix найти компонент, выводящий новости: `Контент → Структура сайта → /news/`,
   открыть страницу, посмотреть подключённые компоненты (обычно `bitrix:news` или `bitrix:news.list`).
2. В свойствах компонента проверить параметр **«Шаблон компонента»** — там указано `template1`,
   которого нет на сайте. Варианты:
   - Заменить на существующий шаблон (`.default` или ваш кастомный).
   - Создать кастомный шаблон по пути
     `local/templates/SPBCons_New_2026/components/bitrix/news.list/template1/template.php`
     (или `bitrix:news`, в зависимости от того, какой компонент).
3. **Поиск по коду** — выполнить в SSH:
   ```bash
   grep -r "'template1'" /var/www/spbcons/local/ /var/www/spbcons/bitrix/templates/SPBCons_New_2026/
   grep -r '"TEMPLATE" => "template1"' /var/www/spbcons/local/
   ```
   Найдётся `IncludeComponent("bitrix:news", "template1", [...])` — это место и нужно править.

---

## 4. Скорость загрузки

### 4.1 lazy-loading

В исходных HTML репозитория `loading="lazy"` уже стоит на изображениях ниже первого экрана
(карточки `.sk-card__icon`, `.kits__tab-img`, `.reviews__card-img` и др.).
**На проде** проверьте, что Bitrix не вырезает атрибут при выводе через `bitrix:news.list`
(штатные шаблоны иногда теряют атрибуты картинок) — если теряет, добавьте в шаблон вручную:
```php
<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
     alt="<?=$arItem['NAME']?>"
     loading="lazy"
     width="<?=$arItem['PREVIEW_PICTURE']['WIDTH']?>"
     height="<?=$arItem['PREVIEW_PICTURE']['HEIGHT']?>" />
```
Атрибуты `width`/`height` нужны, чтобы убрать Cumulative Layout Shift (CLS).

### 4.2 gzip / brotli

В nginx, в блоке `server { ... }` (или `http { ... }`):

```nginx
# gzip
gzip on;
gzip_vary on;
gzip_comp_level 6;
gzip_min_length 1024;
gzip_proxied any;
gzip_types
    text/plain
    text/css
    text/xml
    text/javascript
    application/javascript
    application/x-javascript
    application/json
    application/xml
    application/xml+rss
    application/rss+xml
    application/atom+xml
    application/ld+json
    application/manifest+json
    application/wasm
    image/svg+xml
    font/ttf
    font/otf;

# brotli (если собран ngx_brotli)
brotli on;
brotli_comp_level 5;
brotli_types
    text/plain text/css text/xml text/javascript
    application/javascript application/json application/xml
    application/ld+json application/manifest+json image/svg+xml
    font/ttf font/otf;
```

**Критерий готовности:**
```bash
curl -sI -H "Accept-Encoding: gzip, br" https://spbcons.ru/ | grep -i content-encoding
# Content-Encoding: br   (или gzip)
```

### 4.3 Изображения

- **WebP уже частично используется** через модуль `dev2fun.imagecompress`. Убедитесь, что модуль
  включён и для оставшихся PNG/JPG.
- **`width`/`height` на каждом `<img>`** — нужны для CLS. Шаблоны `bitrix:news.list/detail`
  должны выводить `WIDTH`/`HEIGHT` из массива `PREVIEW_PICTURE`/`DETAIL_PICTURE`.
- **`srcset`/`sizes` для адаптивности** — для hero-картинок можно отдать 1x/2x вариант через
  `bitrix:resize_image_get` и `srcset="… 1x, … 2x"`.

---

## 5. Юзабилити (5.2–5.4) — **сделано в репо**

- **5.2** `.header { position: sticky; top: 0; z-index: 100; background: #fff }` + сжатие высот
  (`.header-top__inner` 120→96px, `.header-nav__list` 64→56px). Модалки z-index 1000+ всегда поверх.
- **5.3** ~~exit-intent попап~~ — **удалён 11.06.2026 по решению клиента**. Код вычищен из
  `includes/modals.php`, `js/main.js` (файл `js/exit-intent.js` удалён) и из `footer.php`
  обоих Bitrix-шаблонов (`bitrix-template/`, `public_html/`).
- **5.4** `includes/lead-form-pre-footer.php` подключён на: `/systems/` (все 6), `/faq/`, `/faq/{slug}/`.
  Принимает `$form_id` и `$page`. На страницах с уже существующим `.trial` форма не добавлена
  (чтобы не дублировать конверсию). В Битриксе каждый `form_id` → отдельный лид-форм префикс,
  чтобы аналитика различала точки конверсии.

---

## Сводный чек-лист для применения на проде

- [ ] Применить `Last-Modified` handler в `local/php_interface/init.php` (§1.2)
- [ ] Прописать nginx-редирект слешей (§1.3)
- [ ] Включить gzip/brotli в nginx (§4.2)
- [ ] Найти и починить `template1` в компоненте новостей (§3.3)
- [ ] Прописать description страницам/разделам через свойства Bitrix или через `SetPageProperty` (§1.1, таблица)
- [ ] Сверить адрес организации с реальным — в репо стоит «Обводного канала, 23», в брифе был «Шпалерная, 36» (§2.1)
- [x] Вставить Organization JSON-LD на главной и `/contacts/` (§2.1) — сделано в репо
- [x] Обернуть `<nav>` в SiteNavigationElement (§2.2) — сделано в репо
- [ ] Проверить, что Bitrix-шаблоны не теряют `loading="lazy"` и `width/height` у `<img>` (§4.1)
- [ ] Прогнать https://search.google.com/test/rich-results на главной + /contacts/ + /
- [ ] Прогнать PageSpeed Insights, зафиксировать дельту
