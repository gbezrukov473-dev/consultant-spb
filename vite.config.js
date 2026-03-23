import { defineConfig } from 'vite';
import phpIncludePlugin from './vite-plugin-php-include.js';
import { ghPagesLinksPlugin } from './vite-plugin-gh-pages-links.js';

export default defineConfig({
  publicDir: 'public',
  plugins: [phpIncludePlugin(), ghPagesLinksPlugin()],
  server: {
    open: true,
    port: 3000,
  },
  build: {
    rollupOptions: {
      input: {
        main: 'index.html',
        buy: 'buy.html',
        trial: 'trial.html',
        consultation: 'consultation.html',
        collections: 'collections.html',
        'collection-detail': 'collection-detail.html',
        'personal-manager': 'personal-manager.html',
        education: 'education.html',
        seminars: 'seminars.html',
        'tech-support': 'tech-support.html',
        'counterparty-check': 'counterparty-check.html',
        'lk-online': 'lk-online.html',
        services: 'services.html',
        'about-sps': 'about-sps.html',
        'ai-assistant': 'ai-assistant.html',
        accountant: 'accountant.html',
      },
    },
  },
});
