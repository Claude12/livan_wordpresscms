function smoothScroll() {
  const OFFSET = 123;

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    const target = $(this.hash);
    if (target.length) {
      const targetOffset = target.offset().top - OFFSET;

      $('html, body').animate({
        scrollTop: targetOffset
      }, 800);
    }
  });
}

export default smoothScroll;