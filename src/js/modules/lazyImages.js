// src/js/modules/lazyImages.js

document.addEventListener("DOMContentLoaded", () => {
  const lazyImages = document.querySelectorAll('img[data-src], source[data-srcset]');

  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        
        // Если это picture/source
        if (img.dataset.srcset) {
          img.srcset = img.dataset.srcset;
        }
        // Если это обычный img
        if (img.dataset.src) {
          img.src = img.dataset.src;
        }

        img.classList.remove('opacity-0'); // Если используешь плавное появление
        img.classList.add('opacity-100');
        
        observer.unobserve(img);
      }
    });
  });

  lazyImages.forEach((img) => {
    imageObserver.observe(img);
  });
});