import { defineConfig } from 'vite';
import phpIncludePlugin from './vite-plugin-php-include.js';
import { ghPagesLinksPlugin } from './vite-plugin-gh-pages-links.js';
import { cleanUrlsPlugin } from './vite-plugin-clean-urls.js';

export default defineConfig({
  publicDir: 'public',
  plugins: [phpIncludePlugin(), cleanUrlsPlugin(), ghPagesLinksPlugin()],
  server: {
    open: true,
    port: 3000,
  },
  build: {
    rollupOptions: {
      input: {
        main: 'index.html',
        buy: 'buy.html',
        consult: 'consult.html',
        about: 'about.html',
        collections: 'collections.html',
        'collection-detail': 'collection-detail.html',
        'services-lk': 'services/chto-delat-onlayn.html',
        'ai-assistant': 'ii-pomoshchnik-konsultant-plyus/index.html',
        news: 'news.html',
        'news-detail': 'news-detail.html',
        faq: 'faq.html',
        'faq-detail': 'faq-detail.html',
        contacts: 'contacts.html',

        'systems-index': 'systems/index.html',
        'systems-bukhgalteru': 'systems/bukhgalteru.html',
        'systems-yuristu': 'systems/yuristu.html',
        'systems-rukovoditelyu': 'systems/rukovoditelyu.html',
        'systems-byudzhetnoy': 'systems/byudzhetnoy-organizatsii.html',
        'systems-kadroviku': 'systems/kadroviku.html',

        'services-index': 'services/index.html',
        'services-pm': 'services/personalnyy-menedzher.html',
        'services-education': 'services/obuchenie-rabote-s-konsultantplyus.html',
        'services-seminars': 'services/seminary-i-praktikumy.html',
        'services-tech': 'services/obsluzhivanie-programmy-konsultant-plyus.html',
        'services-counterparty': 'services/proverka-kontragenta.html',

        'about-sps': 'o-sisteme-konsultantplyus/index.html',
        'trial': 'o-sisteme-konsultantplyus/dostup-konsultantplyus-na-2-dnya.html',
      },
    },
  },
});
