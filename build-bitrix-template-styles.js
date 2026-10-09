/**
 * build-bitrix-template-styles.js
 * Собирает template_styles.css для Bitrix-шаблона из per-page CSS-чанков Vite (dist/assets/*.css).
 *
 * template_styles.css = конкатенация всех страничных чанков сборки (кроме main-*.css)
 * с заголовками «/* имя-чанка *​/» и переписыванием путей (/img/→images/, /fonts/→fonts/).
 * Это спутник build-bitrix-css.js (тот собирает styles.css). Запускать ПОСЛЕ `npm run build`.
 *
 * Запуск:  node build-bitrix-template-styles.js
 */
const fs = require('fs');
const path = require('path');

const ROOT = __dirname;
const DIST = path.join(ROOT, 'dist', 'assets');
const OUT_TARGETS = [
  path.join(ROOT, 'public_html/local/templates/SPBCons_New_2026/template_styles.css'),
  path.join(ROOT, 'bitrix-template/template_styles.css'),
];

function rewritePaths(css) {
  return css
    .replace(/url\((['"]?)\/fonts\//g, 'url($1fonts/')
    .replace(/url\((['"]?)\/img\//g, 'url($1images/');
}

const files = fs
  .readdirSync(DIST)
  .filter((f) => f.endsWith('.css') && !/^main-/.test(f))
  .sort();

let out = '/* Page-specific styles */\n';
for (const f of files) {
  const content = rewritePaths(fs.readFileSync(path.join(DIST, f), 'utf8')).replace(/\s+$/, '');
  out += '\n/* ' + f + ' */\n' + content + '\n\n';
}

for (const t of OUT_TARGETS) {
  fs.writeFileSync(t, out);
  console.log('Записано:', path.relative(ROOT, t), out.length, 'байт');
}
console.log(
  'Чанков:', files.length,
  '| acc-offer__title-row2:', (out.match(/acc-offer__title-row2/g) || []).length,
  '| acc-offer__row:', (out.match(/acc-offer__row/g) || []).length
);
