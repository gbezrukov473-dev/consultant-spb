# Деплой на GitHub Pages

Сайт собирается с базовым путём **`/consultant-spb/`**, потому что адрес будет:

**https://gbezrukov473-dev.github.io/consultant-spb/**

Репозиторий: [gbezrukov473-dev/consultant-spb](https://github.com/gbezrukov473-dev/consultant-spb)

## 1. Очистить репозиторий и залить этот проект

Локально в папке проекта:

```bash
git init
git add .
git commit -m "Статическая вёрстка КонсультантПлюс СПБ"
git branch -M main
git remote add origin https://github.com/gbezrukov473-dev/consultant-spb.git
git push -u origin main --force
```

`--force` перезапишет историю на GitHub (удалит старые коммиты и файлы в `main`). Используйте только если уверены.

## 2. Включить GitHub Pages

1. Репозиторий на GitHub → **Settings** → **Pages**.
2. **Build and deployment** → **Source**: **GitHub Actions** (не «Deploy from a branch» со старой веткой `gh-pages`, если она была).

После первого успешного запуска workflow сайт откроется по ссылке выше (может занять 1–2 минуты).

## 3. Локальная проверка сборки под Pages

```bash
npm ci
npm run build:gh
npx vite preview --base /consultant-spb/
```

Откройте в браузере адрес, который покажет preview (часто `http://localhost:4173/consultant-spb/`).

## 4. Обычная сборка без префикса (локально / свой сервер)

```bash
npm run build
```

Плагин в `vite-plugin-gh-pages-links.js` **не** меняет ссылки, если не использовался `--base /consultant-spb/`.

## 5. Смена имени репозитория

Если репозиторий переименуют, нужно:

- в `package.json` скрипт `build:gh` заменить `--base /новое-имя/`;
- в `vite-plugin-gh-pages-links.js` константу `GH_PAGES_PREFIX`;
- в regex заменить строку `consultant-spb` в negative lookahead на новое имя **или** вынести в одну константу (сейчас совпадает с префиксом).

---

**Замечание:** правила из `.htaccess` на GitHub Pages **не** работают (это не Apache). «Красивые» URL без `.html` на Pages по умолчанию недоступны; для продакшена на Битрикс оставьте свой `.htaccess`.
