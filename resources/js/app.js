import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);

/** Home hero “Featured Company” — matches HomePage.tsx AnimatePresence mode="wait" (exit then enter, 500ms). */
document.addEventListener('alpine:init', () => {
  /** Careers — matches Careers.tsx useInView(once, margin -100px); skip animation if reduced motion. */
  Alpine.data('careersPage', () => ({
    careersInView: false,
    init() {
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        this.careersInView = true;
      }
    },
  }));

  Alpine.data('heroSpotlight', (items) => ({
    items,
    idx: 0,
    visible: true,
    _interval: null,
    init() {
      if (!Array.isArray(items) || items.length === 0) {
        return;
      }
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
      }
      this._interval = window.setInterval(() => this.cycle(), 3000);
    },
    destroy() {
      if (this._interval) {
        window.clearInterval(this._interval);
      }
    },
    cycle() {
      this.visible = false;
      window.setTimeout(() => {
        this.idx = (this.idx + 1) % this.items.length;
        this.visible = true;
      }, 500);
    },
  }));
});

window.Alpine = Alpine;
Alpine.start();
