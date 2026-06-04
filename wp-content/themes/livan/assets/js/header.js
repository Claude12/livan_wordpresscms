function headerNav() {
  // Detect if device is mobile
  const isMobile = /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i.test(navigator.userAgent);
  document.body.classList.add(isMobile ? '_touch' : '_pc');

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

  //Remove active class on anchor links
  $('a[href*="#"]').each(function () {
    // Check if the href contains a '#' and remove the class from the parent <li>
    var href = $(this).attr('href');
    if (href.includes('#')) {
      $(this).closest('li').removeClass('current-menu-item');
    }
  });

  // Dropdown Menus
  // Use window.innerWidth (not UA sniffing) so hamburger/desktop
  // behaviour is always in sync with the CSS breakpoint (768px).
  let hideTimeout;

  // Desktop hover (≥768px)
  $('li.menu-item-has-children').on('mouseenter', function () {
    if (window.innerWidth < 768) return;
    clearTimeout(hideTimeout);
    $(this).siblings().removeClass('expanded');
    $(this).addClass('expanded');
  }).on('mouseleave', function () {
    if (window.innerWidth < 768) return;
    const $item = $(this);
    hideTimeout = setTimeout(function () {
      $item.removeClass('expanded');
    }, 1000);
  });

  // Mobile/tablet click — hamburger menu context (<768px)
  $('li.menu-item.menu-item-has-children > a').click(function (e) {
    if (window.innerWidth >= 768) return;
    e.preventDefault();

    const parentLi = $(this).parent('li');
    const subMenu = parentLi.find('ul.sub-menu');

    if (parentLi.hasClass('expanded')) {
      parentLi.removeClass('expanded');
      subMenu.css({ opacity: 0, transform: 'translateY(-10px)' });
      setTimeout(() => subMenu.css({ display: 'none' }), 300);
    } else {
      parentLi.addClass('expanded');
      subMenu.css({ display: 'block' });
      setTimeout(() => subMenu.css({ opacity: 1, transform: 'translateY(0)' }), 10);
    }

    parentLi.siblings().removeClass('expanded').find('ul.sub-menu').css({
      opacity: 0,
      transform: 'translateY(-10px)',
      display: 'none',
    });

    e.stopPropagation();
  });

  // Close on outside click
  $(document).click(function () {
    $('li.menu-item-has-children').removeClass('expanded');
    if (window.innerWidth < 768) {
      $('ul.sub-menu').css({ opacity: 0, transform: 'translateY(-10px)', display: 'none' });
    }
  });

}

export default headerNav;
