const fs = require('fs');
const path = require('path');

const SKIP_SVGS = new Set([
  'logo-consultant-crop.svg',
  'logo-consultant.svg',
  'logo-chdk.svg',
  'lk-icon-big.svg',
  'hero-chdk-watermark-white.svg',
  'hero-chdk-watermark.svg',
  'hero-bg-pattern.svg',
  'icon-check-yellow.svg',
  'phone-icon.svg',
]);

const SPRITE_PATH = '/img/sprite.svg';

const imgRegex = /<img\s+([^>]*?)src="\/img\/([^"]+\.svg)"([^>]*?)\s*\/?>/g;

function extractAttr(tag, name) {
  const m = tag.match(new RegExp(`${name}="([^"]*)"`));
  return m ? m[1] : null;
}

function replaceInFile(filePath) {
  let content = fs.readFileSync(filePath, 'utf8');
  let count = 0;

  const newContent = content.replace(imgRegex, (match, before, svgFile, after) => {
    if (SKIP_SVGS.has(svgFile)) return match;

    const id = svgFile.replace('.svg', '');
    const full = before + after;
    const cls = extractAttr(match, 'class');
    const alt = extractAttr(match, 'alt');

    let classes = 'icon';
    if (cls) classes += ' ' + cls;

    const ariaLabel = alt ? ` aria-label="${alt}"` : ' aria-hidden="true"';
    const role = alt ? ' role="img"' : '';

    count++;
    return `<svg class="${classes}"${role}${ariaLabel}><use href="${SPRITE_PATH}#${id}"></use></svg>`;
  });

  if (count > 0) {
    fs.writeFileSync(filePath, newContent, 'utf8');
    console.log(`${filePath}: ${count} replacements`);
  }
  return count;
}

const htmlFiles = fs.readdirSync(__dirname)
  .filter(f => f.endsWith('.html'))
  .map(f => path.join(__dirname, f));

const phpFiles = fs.readdirSync(path.join(__dirname, 'includes'))
  .filter(f => f.endsWith('.php'))
  .map(f => path.join(__dirname, 'includes', f));

let total = 0;
for (const f of [...phpFiles, ...htmlFiles]) {
  total += replaceInFile(f);
}
console.log(`\nTotal: ${total} replacements`);
