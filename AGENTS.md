# AGENTS.md

This file provides guidance to Codex (Codex.ai/code) when working with code in this repository.

## What this repo is

Static multi-page corporate site for «СПБ Консультант» (КонсультантПлюс представитель в СПб). The HTML/CSS/JS is **the source artefact**: it gets sliced into 1С-Битрикс component templates during deploy. Every layout decision is downstream of that — see `INSTRUCTIONS.md` for the full Bitrix mapping (CRM form IDs, `bitrix:main.include` area_ids, popup ↔ `WEB_FORM_ID` table).

Stack: Vite 8 MPA + vanilla HTML/CSS (BEM) + vanilla ES6 modules + PHP `include` for shared chrome (header/footer/modals/favicons).

## Commands

```bash
npm run dev        # Vite dev server on :3000 (opens browser)
npm run build      # Production build → dist/
npm run build:gh   # GitHub Pages build with /consultant-spb/ base
npm run preview    # Preview built dist/

node build-sprite.js          # Rebuild public/img/sprite.svg from public/img/*.svg
node replace-img-to-sprite.js # One-shot codemod: <img src=*.svg> → <use href=sprite#id>
```

No test, lint, or typecheck scripts exist. There is no `.cursorrules`, `.github/copilot-instructions.md`, or other agent rules file — `INSTRUCTIONS.md` and `DEPLOY.md` are the source of truth.

## Architecture you need to load before editing

### 1. Vite MPA — every page must be registered in `vite.config.js`

`vite.config.js` enumerates every HTML entry in `rollupOptions.input`. **A new page that is not added there is excluded from `npm run build` — dev mode hides this** because Vite serves any HTML file on disk. When you create a new `.html`, add it to the input map *before* you finish.

### 2. Three custom Vite plugins, applied in order

- `vite-plugin-php-include.js` — resolves `<?php include 'includes/header.php'; ?>` directives at HTML-transform time. Supports a simple `$var='val'; include ...` preamble whose values get substituted into `<?= $var ?>` inside the included file. **This is the only PHP that runs locally** — `api/lead.php` and `.htaccess` are production-only artefacts; do not expect them to execute under Vite.
- `vite-plugin-clean-urls.js` — dev-server middleware that rewrites `/about/` → `/about.html` and `/systems/` → `/systems/index.html`. Mirrors the production `.htaccess` so local links match the URLs Bitrix will serve.
- `vite-plugin-gh-pages-links.js` — `apply: 'build'` only. Activates *only when* `build:gh` was used (it sniffs `/consultant-spb/assets/` in the built `index.html`). Then it (a) prepends `/consultant-spb` to root-absolute `href=`/`src=` and (b) restructures `foo.html` → `foo/index.html` so Pages can serve clean URLs without `.htaccess`. If you rename the repo, update both `GH_PAGES_PREFIX` in the plugin **and** the `--base` flag in `package.json#scripts.build:gh` (they must match).

### 3. CSS layering is load-bearing for the Bitrix migration

Strict order, enforced by every page's `<head>`:
```
variables.css  →  global.css  →  ui-kit.css  →  blocks.css  →  pages/<page>.css
```
- `variables.css` is the **only** place hex/rgb/font/radius/shadow values are allowed. Everywhere else, `var(--token)`. Hardcoding a colour will break the planned Bitrix theme swap and is treated as a defect, not a style nit.
- BEM (`.block__element--modifier`) is strict. The Bitrix slicing relies on selector stability — renaming a block silently breaks a future template.
- `ui-kit.css` = reusable atoms (buttons, inputs, cards). `blocks.css` = shared sections (header, hero, sk, trial, chdk, reviews, footer, modals). `styles/pages/<page>.css` = page-only sections, included only on that page.

### 4. JS entry & lazy split

`js/main.js` is the only top-level entry; it eagerly imports `modals.js`, `phone-mask.js`, `form-submit.js` and then conditionally `import('./buy-tabs.js')` when `.kits__tab` is on the page. Add new conditional modules the same way — do not import them eagerly in `main.js`.

Forms have a fixed contract enforced by `form-submit.js`: every lead form needs class `.js-lead-form`, hidden fields `website` (honeypot), `fill_time_ms`, `form_id`, `page`, and a `data-thanks` attribute. This contract is what gets re-wired to Bitrix CRM forms — see the popup ↔ `WEB_FORM_ID` table in `INSTRUCTIONS.md`. Don't ship a form without it.

### 5. SVG sprite system

Icons live in `public/img/`. `build-sprite.js` bundles them into `public/img/sprite.svg` as `<symbol id="...">` entries; pages reference them via `<use href="/img/sprite.svg#name">`. Two skip-lists in that script matter:
- `CSS_BG_ONLY` — used only as CSS `background-image`, not in sprite.
- `HAS_STYLE` — has internal `<style>`/gradients that don't survive `<symbol>` flattening; keep as standalone files.

When adding an icon, drop the SVG into `public/img/`, decide if it belongs in either skip-list, and rerun `node build-sprite.js`. `replace-img-to-sprite.js` is a one-shot codemod for converting raw `<img src=*.svg>` references — don't run it casually, it edits HTML files in place.

### 6. Shared chrome via PHP includes

`includes/header.php`, `footer.php`, `modals.php`, `favicons.php` are included from every page. Edit the include — never edit a page's local copy of the header. At Bitrix deploy time these become `bitrix:main.include` with the `area_id` values noted in HTML comments above each include site.

## Conventions that trip people up

- **URLs in markup use clean Bitrix paths** (`/systems/bukhgalteru/`, not `/systems/bukhgalteru.html`). The clean-urls dev plugin and the gh-pages plugin both handle this; production `.htaccess` does it in Apache.
- **Telegram links are removed from layouts by client decision** even though they appear in the ТЗ PDF. Don't re-add them when copying sections.
- **Four modals exist site-wide**: `#modalPrice` (Попап 1), `#modalTrial` (Попап 2), `#modalLk` (3-step A→B/C with «Ваш вопрос» field), `#modalService` (yellow submit). Triggers are class- or `data-open-modal`-based — see the trigger table in `INSTRUCTIONS.md`. Do not invent new modal IDs without updating the popup-mapping table.
- **`dist/`, `public_html/`, `bitrix-template/`, `bitrix-template.zip` are build/output artefacts** that show up in git status. Don't hand-edit them; regenerate via `npm run build` or the Bitrix packaging scripts.

## When extending the site

Adding a page:
1. Create `<page>.html` (use an existing similar page as a template — header/footer/modals via `<?php include ?>`).
2. Register it in `vite.config.js` → `rollupOptions.input`.
3. If it has page-specific styles, create `styles/pages/<page>.css` and link it only from that page.
4. Add row(s) to the page table and popup/Bitrix mapping in `INSTRUCTIONS.md` so the migration target stays accurate.

Adding a reusable component: put it in `ui-kit.css` (atoms) or `blocks.css` (sections), not in a page file. Anything reused across ≥2 pages belongs in the shared layer so Bitrix can wrap it once.
