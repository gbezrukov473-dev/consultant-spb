import { defineConfig } from 'vite';
import { resolve, dirname } from 'path';
import { fileURLToPath } from 'url';
import fs from 'fs';
import tailwindcss from '@tailwindcss/vite'; // Добавили Tailwind 4
import { htmlTemplatePlugin } from './vite-plugin-html-template.js'; // Твой плагин

// Эмуляция __dirname для ES Modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// Функция для поиска HTML (твоя логика)
function getHtmlEntries() {
  const pages = {};
  // Читаем корень проекта
  const files = fs.readdirSync(__dirname);
  
  files.forEach(file => {
    // Исключаем dist, node_modules и файлы в папках
    if (file.endsWith('.html')) {
      const name = file.replace('.html', '');
      pages[name] = resolve(__dirname, file);
    }
  });
  
  return pages;
}

export default defineConfig({
  plugins: [
    tailwindcss(), // Главное обновление для Tailwind 4
    htmlTemplatePlugin(), // Плагин для шапки/подвала
  ],
  resolve: {
    alias: {
      '@': resolve(__dirname, './src'), // Удобный алиас для путей
    },
  },
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: getHtmlEntries(),
    },
    cssCodeSplit: true,
    minify: 'esbuild',
    chunkSizeWarningLimit: 1000,
  },
  esbuild: {
    drop: ['console', 'debugger'],
  },
});