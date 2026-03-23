/**
 * Vite plugin that resolves <?php include '...' ?> directives
 * in HTML files during development and build.
 *
 * Handles:
 *   <?php include 'path/to/file.php'; ?>
 *   <?php $var = 'val'; $var2 = 'val2'; include 'path/to/file.php'; ?>
 *
 * When variables are defined before include, they are substituted
 * inside the included file:
 *   <?= $var ?>   →  val
 *   <?php ... $var ... ?>  →  evaluated with simple replacement
 */

import { readFileSync } from 'fs';
import { resolve, dirname } from 'path';

function phpIncludePlugin() {
  return {
    name: 'vite-plugin-php-include',
    enforce: 'pre',

    transformIndexHtml: {
      order: 'pre',
      handler(html, ctx) {
        const fileDir = ctx.filename ? dirname(ctx.filename) : process.cwd();

        return html.replace(
          /<\?php\s+([\s\S]*?)include\s+['"]([^'"]+)['"]\s*;\s*\?>/g,
          (_match, preamble, includePath) => {
            const absPath = resolve(fileDir, includePath);

            let content;
            try {
              content = readFileSync(absPath, 'utf-8');
            } catch {
              console.warn(`[php-include] File not found: ${absPath}`);
              return `<!-- include not found: ${includePath} -->`;
            }

            const vars = {};
            const varRegex = /\$(\w+)\s*=\s*['"]([^'"]*)['"]\s*;/g;
            let m;
            while ((m = varRegex.exec(preamble)) !== null) {
              vars[m[1]] = m[2];
            }

            content = content.replace(
              /<\?(?:=\s*|php\s+echo\s+)\$(\w+)\s*;?\s*\?>/g,
              (_m, varName) => (varName in vars ? vars[varName] : '')
            );

            content = content.replace(/<\?php[\s\S]*?\?>\s*/g, '');

            return content;
          }
        );
      },
    },
  };
}

export default phpIncludePlugin;
