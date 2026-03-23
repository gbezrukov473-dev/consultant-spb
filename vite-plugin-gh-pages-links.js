/**
 * После `vite build --base /repo-name/` часть ссылок в HTML остаётся вида href="/buy.html".
 * Для GitHub Pages нужен префикс /repo-name/. Плагин дописывает префикс к href и src.
 * При смене имени репозитория измените GH_PAGES_PREFIX и npm-скрипт build:gh.
 */
import { readFileSync, writeFileSync, readdirSync, existsSync } from 'fs';
import { join } from 'path';

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
      // Патч только если сборка с --base /consultant-spb/ (иначе сломаем обычный npm run build)
      if (!sample.includes(`${GH_PAGES_PREFIX}/assets/`)) return;

      const prefix = GH_PAGES_PREFIX.startsWith('/') ? GH_PAGES_PREFIX : `/${GH_PAGES_PREFIX}`;

      function patchText(text) {
        return text
          .replace(/href="\/(?!\/|consultant-spb)/g, `href="${prefix}/`)
          .replace(/src="\/(?!\/|consultant-spb)/g, `src="${prefix}/`);
      }

      for (const file of readdirSync(dist)) {
        if (file.endsWith('.html')) {
          const p = join(dist, file);
          writeFileSync(p, patchText(readFileSync(p, 'utf-8')), 'utf-8');
        }
      }
    },
  };
}
