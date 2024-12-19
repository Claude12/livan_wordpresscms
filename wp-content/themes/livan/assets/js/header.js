function headerNav() {
  // Detect if device is mobile
  const isMobile = /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i.test(navigator.userAgent);
  document.body.classList.add(isMobile ? '_touch' : '_pc');

  // Toggle sub-menu on arrow click
  document.querySelectorAll('.menu__arrow').forEach((arrow) => {
    arrow.addEventListener('click', () => {
      arrow.parentElement.classList.toggle('_active');
    });
  });

  // Burger menu toggle
  const iconMenu = document.querySelector('.menu__icon');
  const menuBody = document.querySelector('.menu__body');
  const toggleBodyScroll = (lock) => {
    document.body.style.overflow = lock ? 'hidden' : '';
  };

  if (iconMenu && menuBody) {
    iconMenu.addEventListener('click', () => {
      const isMenuOpen = menuBody.classList.toggle('_active');
      iconMenu.classList.toggle('_active');
      document.body.classList.toggle('_lock');
      toggleBodyScroll(isMenuOpen);
    });
  }

  // Smooth scrolling and close menu
  document.querySelectorAll('.menu__link[data-goto]').forEach((link) => {
    link.addEventListener('click', (e) => {
      const target = document.querySelector(link.dataset.goto);
      if (target) {
        const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
        const scrollTo = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        // Close menu
        if (iconMenu?.classList.contains('_active')) {
          menuBody.classList.remove('_active');
          iconMenu.classList.remove('_active');
          document.body.classList.remove('_lock');
          toggleBodyScroll(false);

          // Auto-close sub-menus
          document.querySelectorAll('.menu__arrow').forEach((arrow) => {
            arrow.parentElement.classList.remove('_active');
          });
        }

        // Smooth scroll
        window.scrollTo({
          top: scrollTo,
          behavior: 'smooth',
        });

        e.preventDefault();
      }
    });
  });
}

export default headerNav;
