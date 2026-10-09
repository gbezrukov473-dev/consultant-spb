/**
 * build-bitrix-css.js
 * Собирает единый styles.css для Bitrix-шаблона из исходных styles/*.css.
 *
 * Рецепт (восстановлен по существующему артефакту):
 *   1. Склейка в порядке подключения из <head>:
 *        variables.css → global.css → ui-kit.css → blocks.css → pages/*.css
 *      (global.css импортит variables.css через @import — строку @import убираем,
 *       а variables.css вставляем явно первым.)
 *   2. Переписывание абсолютных путей в относительные под структуру шаблона:
 *        url(/fonts/...) → url(fonts/...)
 *        url(/img/...)   → url(images/...)
 *   3. Минификация через lightningcss (тот же минификатор, что у Vite 8).
 *
 * Результат пишется в обе синхронные копии:
 *   public_html/local/templates/SPBCons_New_2026/styles.css
 *   bitrix-template/styles.css
 *
 * Запуск:  node build-bitrix-css.js
 *          node build-bitrix-css.js --check   (только проверка, без записи)
 */
const fs = require('fs');
const path = require('path');
const lightningcss = require('lightningcss');

const ROOT = __dirname;
const STYLES = path.join(ROOT, 'styles');
const PAGES = path.join(STYLES, 'pages');

const OUT_TARGETS = [
  path.join(ROOT, 'public_html/local/templates/SPBCons_New_2026/styles.css'),
  path.join(ROOT, 'bitrix-template/styles.css'),
];

// Порядок корневых файлов = порядок подключения в <head>.
const ROOT_FILES = ['variables.css', 'global.css', 'ui-kit.css', 'blocks.css'];

function read(file) {
  return fs.readFileSync(file, 'utf8');
}

function concatSource() {
  let css = '';
  for (const name of ROOT_FILES) {
    let part = read(path.join(STYLES, name));
    // variables.css уже подключаем явно — убираем его @import из global.css
    part = part.replace(/@import\s+url\(['"]?variables\.css['"]?\);?\s*/g, '');
    css += `\n/* ${name} */\n` + part;
  }
  // pages в алфавитном порядке имён файлов
  const pages = fs.readdirSync(PAGES).filter((f) => f.endsWith('.css')).sort();
  for (const name of pages) {
    css += `\n/* pages/${name} */\n` + read(path.join(PAGES, name));
  }
  return css;
}

function rewritePaths(css) {
  return css
    .replace(/url\((['"]?)\/fonts\//g, 'url($1fonts/')
    .replace(/url\((['"]?)\/img\//g, 'url($1images/');
}

function build() {
  const raw = rewritePaths(concatSource());
  const { code } = lightningcss.transform({
    filename: 'styles.css',
    code: Buffer.from(raw),
    minify: true,
  });
  return code.toString();
}

// --- Сравнение наборов правил (для валидации рецепта) ---
function ruleSet(min) {
  // грубое разбиение минифицированного CSS на «куски» по '}'
  return min.split('}').map((s) => s.trim()).filter(Boolean).sort();
}

function diffRules(oldMin, newMin) {
  const a = new Set(ruleSet(oldMin));
  const b = new Set(ruleSet(newMin));
  const removed = [...a].filter((x) => !b.has(x));
  const added = [...b].filter((x) => !a.has(x));
  return { removed, added };
}

const result = build();
const check = process.argv.includes('--check');

const existing = fs.existsSync(OUT_TARGETS[0]) ? read(OUT_TARGETS[0]) : '';
if (existing) {
  const { removed, added } = diffRules(existing, result);
  console.log(`Изменений по правилам: -${removed.length} / +${added.length}`);
  const show = (label, arr) => {
    console.log(`\n${label}:`);
    arr.slice(0, 60).forEach((r) => console.log('  ' + r + '}'));
    if (arr.length > 60) console.log(`  …ещё ${arr.length - 60}`);
  };
  if (removed.length) show('УБРАНО', removed);
  if (added.length) show('ДОБАВЛЕНО', added);
}

if (!check) {
  for (const target of OUT_TARGETS) {
    fs.writeFileSync(target, result, 'utf8');
    console.log('Записано: ' + path.relative(ROOT, target));
  }
} else {
  console.log('\n(--check: файлы не перезаписаны)');
}
