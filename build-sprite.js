const fs = require('fs');
const path = require('path');

const IMG_DIR = path.join(__dirname, 'public', 'img');
const OUT = path.join(IMG_DIR, 'sprite.svg');

const CSS_BG_ONLY = new Set([
  'hero-chdk-watermark-white.svg',
  'hero-chdk-watermark.svg',
  'hero-bg-pattern.svg',
  'icon-check-yellow.svg',
  'phone-icon.svg',
  'logo-max.svg',
]);

const HAS_STYLE = new Set([
  'logo-consultant-crop.svg',
  'logo-consultant.svg',
  'logo-chdk.svg',
  'lk-icon-big.svg',
]);

const files = fs.readdirSync(IMG_DIR).filter(f => f.endsWith('.svg'));
const symbols = [];

for (const file of files) {
  if (CSS_BG_ONLY.has(file) || HAS_STYLE.has(file) || file === 'sprite.svg') continue;

  const raw = fs.readFileSync(path.join(IMG_DIR, file), 'utf8');
  const vbMatch = raw.match(/viewBox=["']([^"']+)["']/);
  if (!vbMatch) continue;

  const viewBox = vbMatch[1];
  const id = file.replace('.svg', '');

  const fillMatch = raw.match(/<svg[^>]+\sfill=["']([^"']+)["']/);
  const rootFill = fillMatch ? fillMatch[1] : null;

  let inner = raw
    .replace(/<\?xml[^?]*\?>\s*/g, '')
    .replace(/<!--[\s\S]*?-->/g, '')
    .replace(/<svg[^>]*>/, '')
    .replace(/<\/svg>\s*$/, '')
    .trim();

  if (raw.includes('<defs')) {
    inner = inner.replace(/id="([^"]+)"/g, (m, orig) => `id="${id}__${orig}"`);
    inner = inner.replace(/url\(#([^)]+)\)/g, (m, orig) => `url(#${id}__${orig})`);
    inner = inner.replace(/href="#([^"]+)"/g, (m, orig) => `href="#${id}__${orig}"`);
    inner = inner.replace(/xlink:href="#([^"]+)"/g, (m, orig) => `xlink:href="#${id}__${orig}"`);
  }

  const fillAttr = rootFill ? ` fill="${rootFill}"` : '';
  symbols.push(`  <symbol id="${id}" viewBox="${viewBox}"${fillAttr}>\n    ${inner}\n  </symbol>`);
}

const sprite = `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none">\n${symbols.join('\n')}\n</svg>\n`;
fs.writeFileSync(OUT, sprite, 'utf8');
console.log(`Sprite built: ${symbols.length} symbols -> ${OUT}`);
