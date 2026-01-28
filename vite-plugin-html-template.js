import fs from 'fs';
import path from 'path';

export function htmlTemplatePlugin() {
  return {
    name: 'vite-plugin-html-template',
    transformIndexHtml(html) {
      // Ищем теги <load src="..." />
      return html.replace(/<load\s+src="([^"]+)"\s*\/>/g, (match, src) => {
        try {
          // Путь считается от корня папки src
          const filePath = path.resolve(process.cwd(), 'src', src);
          if (fs.existsSync(filePath)) {
            return fs.readFileSync(filePath, 'utf-8');
          } else {
            console.warn(`[Template Error] Файл не найден: ${src}`);
            return ``;
          }
        } catch (err) {
          console.error(err);
          return '';
        }
      });
    },
  };
}