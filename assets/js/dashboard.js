// assets/js/dashboard.js

document.addEventListener('DOMContentLoaded', () => {

  /* ── Animate stat cards on load ── */
  const cards = document.querySelectorAll('.stat-card');
  cards.forEach((card, i) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(14px)';
    card.style.transition = `opacity .4s ease ${i * 80}ms, transform .4s ease ${i * 80}ms`;
    setTimeout(() => {
      card.style.opacity = '1';
      card.style.transform = 'translateY(0)';
    }, 50);
  });

  /* ── Count-up animation for stat values ── */
  function countUp(el, target, duration) {
    let start = 0;
    const step = Math.ceil(target / (duration / 16));
    const timer = setInterval(() => {
      start += step;
      if (start >= target) {
        el.textContent = target.toLocaleString();
        clearInterval(timer);
      } else {
        el.textContent = start.toLocaleString();
      }
    }, 16);
  }

  document.querySelectorAll('.stat-value[data-count]').forEach(el => {
    const target = parseInt(el.dataset.count, 10);
    countUp(el, target, 900);
  });

  /* ── Animate category progress bars ── */
  setTimeout(() => {
    document.querySelectorAll('.cat-bar').forEach(bar => {
      const pct = bar.style.width;
      bar.style.width = '0';
      requestAnimationFrame(() => {
        requestAnimationFrame(() => { bar.style.width = pct; });
      });
    });
  }, 300);

  /* ── Dismiss / Remove button handlers ── */
  document.querySelectorAll('.btn-dismiss').forEach(btn => {
    btn.addEventListener('click', () => {
      const row = btn.closest('tr');
      if (row) {
        row.style.transition = 'opacity .3s';
        row.style.opacity = '0';
        setTimeout(() => row.remove(), 300);
      }
    });
  });

  document.querySelectorAll('.btn-remove').forEach(btn => {
    btn.addEventListener('click', () => {
      const row = btn.closest('tr');
      if (row && confirm('Remove this review permanently?')) {
        row.style.transition = 'opacity .3s';
        row.style.opacity = '0';
        setTimeout(() => row.remove(), 300);
      }
    });
  });

});