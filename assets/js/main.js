document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', () => {
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Scroll reveal, staggered within each parent
  const reveals = document.querySelectorAll('.reveal');
  reveals.forEach((el) => {
    const siblings = [...el.parentElement.children].filter((c) => c.classList.contains('reveal'));
    el.style.setProperty('--d', `${Math.min(siblings.indexOf(el), 5) * 0.08}s`);
  });
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('in');
      revealObserver.unobserve(entry.target);
    });
  }, { rootMargin: '0px 0px -8% 0px' });
  reveals.forEach((el) => revealObserver.observe(el));

  // Count-up numbers
  const countObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      countObserver.unobserve(entry.target);
      const el = entry.target;
      const end = Number(el.dataset.count);
      if (reduced) return;
      const start = performance.now();
      const duration = 1400;
      const tick = (now) => {
        const t = Math.min((now - start) / duration, 1);
        el.textContent = Math.round(end * (1 - Math.pow(1 - t, 3)));
        if (t < 1) requestAnimationFrame(tick);
      };
      el.textContent = '0';
      requestAnimationFrame(tick);
    });
  }, { threshold: 0.6 });
  document.querySelectorAll('[data-count]').forEach((el) => countObserver.observe(el));

  // Typewriter word in the headline: type, pause, backspace, next word
  const typer = document.querySelector('.typer');
  if (typer && !reduced) {
    const out = typer.querySelector('.typed');
    const words = typer.dataset.words.split(',');
    const wait = (ms) => new Promise((r) => setTimeout(r, ms));
    (async () => {
      let i = 0;
      await wait(1800);
      for (;;) {
        typer.classList.add('busy');
        for (let n = out.textContent.length; n > 0; n--) { out.textContent = out.textContent.slice(0, -1); await wait(70); }
        await wait(300);
        i = (i + 1) % words.length;
        for (const ch of words[i]) { out.textContent += ch; await wait(110 + Math.random() * 60); }
        typer.classList.remove('busy');
        await wait(1800);
      }
    })();
  }

  // Header state, progress bar, parallax portrait, timeline fill, active nav
  const header = document.querySelector('.site-header');
  const progress = document.querySelector('.progress');
  const portrait = document.querySelector('.portrait-frame img');
  const timeline = document.querySelector('.timeline');
  const roles = [...document.querySelectorAll('.role')];
  const navLinks = [...document.querySelectorAll('nav a')];
  const sections = navLinks.map((a) => document.querySelector(a.getAttribute('href')));
  let ticking = false;
  const onScroll = () => {
    const y = window.scrollY;
    const max = document.documentElement.scrollHeight - innerHeight;
    header.classList.toggle('scrolled', y > 20);
    progress.style.transform = `scaleX(${max > 0 ? y / max : 0})`;
    if (portrait && !reduced) portrait.style.transform = `translateY(${Math.min(y, 800) * -0.08}px)`;
    if (timeline) {
      const r = timeline.getBoundingClientRect();
      const marker = innerHeight * 0.6;
      timeline.style.setProperty('--fill', Math.max(0, Math.min(1, (marker - r.top) / r.height)));
      roles.forEach((role) => role.classList.toggle('lit', role.getBoundingClientRect().top < marker));
    }
    let active = -1;
    sections.forEach((s, i) => { if (s && s.getBoundingClientRect().top < innerHeight * 0.4) active = i; });
    navLinks.forEach((a, i) => a.classList.toggle('current', i === active));
    ticking = false;
  };
  window.addEventListener('scroll', () => {
    if (!ticking) { requestAnimationFrame(onScroll); ticking = true; }
  }, { passive: true });
  onScroll();

  // Project tabs with auto-advance (pauses on hover/focus or after a manual pick)
  const work = document.querySelector('[data-work]');
  if (work) {
    const tabs = [...work.querySelectorAll('[role=tab]')];
    const panels = [...work.querySelectorAll('[role=tabpanel]')];
    const panelBox = work.querySelector('.work-panels');
    let index = 0;
    let auto = !reduced;
    let timer;
    const select = (i, focus) => {
      index = (i + tabs.length) % tabs.length;
      tabs.forEach((t, n) => {
        const on = n === index;
        t.setAttribute('aria-selected', on);
        t.tabIndex = on ? 0 : -1;
        panels[n].hidden = !on;
        panels[n].classList.toggle('active', on);
      });
      if (focus) tabs[index].focus();
      schedule();
    };
    const schedule = () => {
      clearTimeout(timer);
      if (auto) timer = setTimeout(() => select(index + 1), 7000);
    };
    tabs.forEach((tab, i) => {
      tab.addEventListener('click', () => { auto = false; work.classList.add('paused'); select(i); });
      tab.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowDown' || e.key === 'ArrowRight') { e.preventDefault(); auto = false; select(index + 1, true); }
        if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') { e.preventDefault(); auto = false; select(index - 1, true); }
      });
    });
    work.addEventListener('mouseenter', () => { clearTimeout(timer); work.classList.add('paused'); });
    work.addEventListener('mouseleave', () => { if (auto) { work.classList.remove('paused'); select(index); } });
    panelBox.addEventListener('mousemove', (e) => {
      const r = panelBox.getBoundingClientRect();
      panelBox.style.setProperty('--mx', `${(e.clientX - r.left - r.width) * 0.25}px`);
      panelBox.style.setProperty('--my', `${(e.clientY - r.top) * 0.25}px`);
    });
    // Only start auto-advancing once the section is on screen
    new IntersectionObserver(([entry], obs) => {
      if (entry.isIntersecting) { select(0); obs.disconnect(); }
    }, { threshold: 0.4 }).observe(work);
  }

  // Skill chips
  const chips = [...document.querySelectorAll('[data-skill]')];
  const sets = [...document.querySelectorAll('[data-set]')];
  chips.forEach((chip) => chip.addEventListener('click', () => {
    chips.forEach((c) => c.setAttribute('aria-selected', c === chip));
    sets.forEach((s) => {
      const on = s.dataset.set === chip.dataset.skill;
      s.hidden = !on;
      s.classList.toggle('active', on);
    });
  }));

  // Copy email
  const copy = document.querySelector('[data-copy]');
  if (copy) copy.addEventListener('click', async () => {
    const label = copy.querySelector('span');
    try {
      await navigator.clipboard.writeText(copy.dataset.copy);
      label.textContent = 'Copied';
    } catch {
      label.textContent = 'Press Ctrl+C';
    }
    setTimeout(() => { label.textContent = 'Copy'; }, 1800);
  });
});
