/**
 * Vite dev server middleware that rewrites clean URLs to actual .html files.
 * Mimics .htaccess rewrite rules for local development.
 *
 *   /systems/bukhgalteru/  →  /systems/bukhgalteru.html
 *   /systems/              →  /systems/index.html
 *   /about/                →  /about.html
 */

import { existsSync } from 'fs';
import { join } from 'path';

export function cleanUrlsPlugin() {
  return {
    name: 'vite-plugin-clean-urls',
    configureServer(server) {
      server.middlewares.use((req, _res, next) => {
        const url = req.url.split('?')[0];

        if (url === '/' || url.includes('.')) {
          return next();
        }

        const root = server.config.root || process.cwd();
        const clean = url.endsWith('/') ? url.slice(0, -1) : url;

        const dirIndex = join(root, clean, 'index.html');
        if (existsSync(dirIndex)) {
          req.url = `${clean}/index.html`;
          return next();
        }

        const htmlFile = join(root, `${clean}.html`);
        if (existsSync(htmlFile)) {
          req.url = `${clean}.html`;
          return next();
        }

        next();
      });
    },
  };
}
