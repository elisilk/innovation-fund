import '../css/app.css';

/* Sticky header */

const siteHeader = document.querySelector('.site-header');

if (siteHeader) {
  document.addEventListener('scroll', (e) => {
    if (window.scrollY > 0) {
      if (!siteHeader.classList.contains('shadow'))
        siteHeader.classList.add('shadow');
      if (!siteHeader.classList.contains('site-header--small'))
        siteHeader.classList.add('site-header--small');
    } else {
      if (siteHeader.classList.contains('shadow'))
        siteHeader.classList.remove('shadow');
      if (siteHeader.classList.contains('site-header--small'))
        siteHeader.classList.remove('site-header--small');
    }
  });
}

/* Mobile navigation menu */

const navToggle = document.querySelector('[aria-controls="primary-nav"]');

if (navToggle) {
  navToggle.addEventListener('click', () => {
    const navOpened = navToggle.getAttribute('aria-expanded');
    if (navOpened === 'false') {
      navToggle.setAttribute('aria-expanded', 'true');
    } else {
      navToggle.setAttribute('aria-expanded', 'false');
    }
  });
}

/* Card (Inclsuive Components) - https://inclusive-components.design/cards/ */

const cards = document.querySelectorAll('.card');

Array.prototype.forEach.call(cards, (card) => {
  let down,
    up,
    link = card.querySelector('.card__title a');
  card.onmousedown = () => {
    down = +new Date();
  };
  card.onmouseup = () => {
    up = +new Date();
    if (up - down < 200) {
      link.click();
    }
  };
});

/* List filtering */

function updateActiveButton(filterControls, newButton) {
  filterControls.querySelector('.active').classList.remove('active');
  newButton.classList.add('active');
}

function filterItems(items, filter) {
  items.forEach((item) => {
    const itemType = item.getAttribute('data-type');
    if (filter === 'all' || filter === itemType) {
      item.removeAttribute('hidden');
    } else {
      item.setAttribute('hidden', '');
    }
  });
}

const filterControls = document.querySelector('.filter-controls');

if (filterControls !== null) {
  const filterButtons = filterControls.querySelectorAll('.filter-btn');
  const filterListItems = document.querySelectorAll('.filterable-list-item');

  filterListItems.forEach(
    (item, index) =>
      (item.style.viewTransitionName = `filterable-item-${index}`),
  );

  filterButtons.forEach((button) =>
    button.addEventListener('click', (e) => {
      const filterValue = button.getAttribute('data-filter');
      if (!document.startViewTransition) {
        updateActiveButton(filterControls, button);
        filterItems(filterListItems, filterValue);
      }
      document.startViewTransition(() => {
        updateActiveButton(filterControls, button);
        filterItems(filterListItems, filterValue);
      });
    }),
  );
}
