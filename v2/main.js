document.addEventListener('DOMContentLoaded', () => {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const header = document.querySelector('.site-header');

  document.body.classList.add('motion-ready');

  if (header) {
    const updateHeader = () => header.classList.toggle('scrolled', window.scrollY > 24);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });
  }

  const revealItems = document.querySelectorAll(
    '.section-lead, .proof-strip > div, .work-card, .role-item, .expertise-grid article, .toolbox, .contact'
  );

  if (!reducedMotion && 'IntersectionObserver' in window) {
    revealItems.forEach((item, index) => {
      item.classList.add('reveal-ready');
      item.style.setProperty('--reveal-delay', `${(index % 4) * 70}ms`);
    });

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });

    revealItems.forEach((item) => revealObserver.observe(item));
  }

  const portrait = document.querySelector('.portrait-frame');
  if (portrait && !reducedMotion && window.matchMedia('(pointer: fine)').matches) {
    portrait.addEventListener('pointermove', (event) => {
      const bounds = portrait.getBoundingClientRect();
      const x = (event.clientX - bounds.left) / bounds.width - 0.5;
      const y = (event.clientY - bounds.top) / bounds.height - 0.5;
      portrait.style.setProperty('--portrait-x', `${x * 8}deg`);
      portrait.style.setProperty('--portrait-y', `${y * -8}deg`);
    });
    portrait.addEventListener('pointerleave', () => {
      portrait.style.setProperty('--portrait-x', '0deg');
      portrait.style.setProperty('--portrait-y', '0deg');
    });
  }

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (event) => {
      const target = document.querySelector(link.getAttribute('href'));
      if (!target) return;
      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  document.querySelectorAll('details').forEach((detail) => {
    detail.addEventListener('toggle', () => {
      if (!detail.open || !detail.closest('.role-list')) return;
      detail.closest('.role-list').querySelectorAll('details[open]').forEach((other) => {
        if (other !== detail) other.open = false;
      });
    });
  });
});
