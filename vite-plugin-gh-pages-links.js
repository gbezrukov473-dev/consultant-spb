/**
 * После `vite build --base /repo-name/` часть ссылок в HTML остаётся вида href="/buy.html".
 * Для GitHub Pages нужен префикс /repo-name/. Плагин дописывает префикс к href и src.
 *
 * Также GitHub Pages не поддерживает .htaccess, поэтому clean URLs вида /about/
 * работают только если в dist есть about/index.html.
 * Плагин перемещает about.html → about/index.html для всех страниц.
 *
 * При смене имени репозитория измените GH_PAGES_PREFIX и npm-скрипт build:gh.
 */
import { readFileSync, writeFileSync, readdirSync, existsSync, mkdirSync, renameSync, unlinkSync } from 'fs';
import { join, relative } from 'path';

/** Без завершающего / */
const GH_PAGES_PREFIX = '/consultant-spb';

export function ghPagesLinksPlugin() {
  return {
    name: 'gh-pages-links',
    apply: 'build',
    closeBundle() {
      const dist = join(process.cwd(), 'dist');
      if (!existsSync(dist)) return;

      const indexPath = join(dist, 'index.html');
      if (!existsSync(indexPath)) return;
      const sample = readFileSync(indexPath, 'utf-8');
      if (!sample.includes(`${GH_PAGES_PREFIX}/assets/`)) return;

      const prefix = GH_PAGES_PREFIX.startsWith('/') ? GH_PAGES_PREFIX : `/${GH_PAGES_PREFIX}`;

      function patchText(text) {
        return text
          .replace(/href="\/(?!\/|consultant-spb)/g, `href="${prefix}/`)
          .replace(/src="\/(?!\/|consultant-spb)/g, `src="${prefix}/`);
      }

      // Phase 1: patch link prefixes in all HTML files
      function walkAndPatch(dir) {
        for (const entry of readdirSync(dir, { withFileTypes: true })) {
          const full = join(dir, entry.name);
          if (entry.isDirectory()) {
            walkAndPatch(full);
          } else if (entry.name.endsWith('.html')) {
            writeFileSync(full, patchText(readFileSync(full, 'utf-8')), 'utf-8');
          }
        }
      }
      walkAndPatch(dist);

      // Phase 2: restructure for clean URLs (foo.html → foo/index.html)
      function restructureDir(dir) {
        for (const entry of readdirSync(dir, { withFileTypes: true })) {
          const full = join(dir, entry.name);
          if (entry.isDirectory()) {
            restructureDir(full);
          } else if (entry.name.endsWith('.html') && entry.name !== 'index.html') {
            const baseName = entry.name.replace(/\.html$/, '');
            const newDir = join(dir, baseName);
            if (!existsSync(newDir)) {
              mkdirSync(newDir, { recursive: true });
            }
            const newPath = join(newDir, 'index.html');
            if (!existsSync(newPath)) {
              renameSync(full, newPath);
            }
          }
        }
      }
      restructureDir(dist);
    },
  };
}
