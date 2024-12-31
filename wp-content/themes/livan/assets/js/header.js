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

  // Drropdown Menus
  $('li.menu-item.menu-item-has-children > a').click(function (e) {
    e.preventDefault();

    const parentLi = $(this).parent('li');
    const subMenu = parentLi.find('ul.sub-menu');

    // Toggle 'expanded' class and animate sub-menu
    if (parentLi.hasClass('expanded')) {
      parentLi.removeClass('expanded');
      subMenu.css({ opacity: 0, transform: 'translateY(-10px)' });
      setTimeout(() => subMenu.css({ display: 'none' }), 300); // Hide after transition
    } else {
      parentLi.addClass('expanded');
      subMenu.css({ display: 'block' });
      setTimeout(() => subMenu.css({ opacity: 1, transform: 'translateY(0)' }), 10); // Delay for smooth transition
    }

    // Close other open menus
    parentLi.siblings().removeClass('expanded').find('ul.sub-menu').css({
      opacity: 0,
      transform: 'translateY(-10px)',
      display: 'none',
    });

    e.stopPropagation(); // Prevent click from propagating
  });

  // Remove 'expanded' class when clicking anywhere else
  $(document).click(function () {
    $('li.menu-item.menu-item-has-children').removeClass('expanded');
    $('ul.sub-menu').css({ opacity: 0, transform: 'translateY(-10px)', display: 'none' });
  });

}

export default headerNav;
