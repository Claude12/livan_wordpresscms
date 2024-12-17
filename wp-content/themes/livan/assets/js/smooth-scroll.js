function smoothScroll() {
  $('a[href^="#"]').on("click", function (e) {
    e.preventDefault();

    var target = $(this.getAttribute("href"));
    if (target.length) {
      $("html, body").animate(
        {
          scrollTop: target.offset().top - 50, // Adjust offset if you have a sticky header
        },
        800 // Duration in milliseconds
      );
    }
  });
}

export default smoothScroll;