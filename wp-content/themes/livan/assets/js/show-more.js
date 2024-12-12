function showMoreLink() {
  $('.show-more-link').click(function () {
    const $rte = $(this).closest('.container-with-show-more, .study-item__content-section').find('.rte.has-show-more');
    const expandedMaxHeight = '100%';

    if ($rte.css('max-height') !== expandedMaxHeight) {
      $rte.css('max-height', expandedMaxHeight).addClass('expanded');
      $(this).hide();
    } else {
      $rte.css('max-height', '450px').removeClass('expanded');
    }
  });
}

export default showMoreLink;
