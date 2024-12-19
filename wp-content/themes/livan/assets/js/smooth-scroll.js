function smoothScroll() {
  const OFFSET = 123;
  const $scrollToTop = $('#scroll-to-top');


  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    const target = $(this.hash);
    if (target.length) {
      const targetOffset = target.offset().top - OFFSET;

      $('html, body').animate({
        scrollTop: targetOffset
      }, 300);
    }
  });

  // Show or hide the button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $scrollToTop.addClass('show');
    } else {
      $scrollToTop.removeClass('show');
    }
  });

  // Smooth scroll to top
  $scrollToTop.on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });
}

export default smoothScroll;