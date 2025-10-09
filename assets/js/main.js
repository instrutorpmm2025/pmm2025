(function () {
  // Current year in footer
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Simple client-side filter for materials/downloads
  const searchInput = document.getElementById('materialSearch');
  const cards = document.querySelectorAll('.material-card');

  function normalize(text) {
    return (text || '')
      .toString()
      .toLowerCase()
      .normalize('NFD')
      .replace(/\p{Diacritic}/gu, '');
  }

  function filterCards() {
    const q = normalize(searchInput?.value || '');
    cards.forEach((card) => {
      const title = normalize(card.getAttribute('data-title'));
      const descEl = card.querySelector('p');
      const desc = normalize(descEl ? descEl.textContent : '');
      const match = !q || title.includes(q) || desc.includes(q);
      card.parentElement.style.display = match ? '' : 'none';
    });
  }

  if (searchInput) {
    ['input', 'keyup', 'change'].forEach((evt) => searchInput.addEventListener(evt, filterCards));
  }

  // Downloads page filtering (text + category)
  const dlSearch = document.getElementById('downloadsSearch');
  const dlItems = Array.from(document.querySelectorAll('.download-item'));
  const dlFilters = Array.from(document.querySelectorAll('.btn-filter'));

  function filterDownloads() {
    const q = normalize(dlSearch?.value || '');
    const activeBtn = dlFilters.find((b) => b.classList.contains('active'));
    const cat = activeBtn ? activeBtn.getAttribute('data-category') : 'all';
    dlItems.forEach((item) => {
      const t = normalize(item.getAttribute('data-title'));
      const d = normalize(item.getAttribute('data-desc'));
      const c = item.getAttribute('data-category');
      const catOk = cat === 'all' || c === cat;
      const textOk = !q || t.includes(q) || d.includes(q);
      item.style.display = catOk && textOk ? '' : 'none';
    });
  }

  if (dlFilters.length) {
    dlFilters.forEach((btn) => btn.addEventListener('click', () => {
      dlFilters.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');
      filterDownloads();
    }));
  }

  if (dlSearch) {
    ['input','keyup','change'].forEach((evt) => dlSearch.addEventListener(evt, filterDownloads));
  }
  // initial state
  if (dlItems.length) filterDownloads();

  // Apostilas page filtering (reusing same behavior)
  const apSearch = document.getElementById('apostilasSearch');
  const apItems = Array.from(document.querySelectorAll('.apostila-item'));
  const apFilters = Array.from(document.querySelectorAll('#apostilasFilters .btn-filter'));

  function filterApostilas() {
    const q = normalize(apSearch?.value || '');
    const activeBtn = apFilters.find((b) => b.classList.contains('active'));
    const cat = activeBtn ? activeBtn.getAttribute('data-category') : 'all';
    apItems.forEach((item) => {
      const t = normalize(item.getAttribute('data-title'));
      const d = normalize(item.getAttribute('data-desc'));
      const c = item.getAttribute('data-category');
      const catOk = cat === 'all' || c === cat;
      const textOk = !q || t.includes(q) || d.includes(q);
      item.style.display = catOk && textOk ? '' : 'none';
    });
  }

  if (apFilters.length) {
    apFilters.forEach((btn) => btn.addEventListener('click', () => {
      apFilters.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');
      filterApostilas();
    }));
  }
  if (apSearch) {
    ['input','keyup','change'].forEach((evt) => apSearch.addEventListener(evt, filterApostilas));
  }
  if (apItems.length) filterApostilas();

  // HTML partials loader for header/footer
  async function loadPartial(selector, url) {
    const host = document.querySelector(selector);
    if (!host) return;
    try {
      const res = await fetch(url, { cache: 'no-cache' });
      if (!res.ok) return;
      const html = await res.text();
      host.innerHTML = html;
    } catch (e) {
      // silent
    }
  }

  loadPartial('#include-header', 'partials/header.html');
  loadPartial('#include-footer', 'partials/footer.html');
})();


