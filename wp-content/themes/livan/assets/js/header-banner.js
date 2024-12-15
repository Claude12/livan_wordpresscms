function headerBanner() {
    // Fade-in animation for the content
    $('.header-banner__content').hide().fadeIn(2000);

    // Slide-in animation for the image
    $('.header-banner__image img').css('transform', 'translateY(-100%)').animate(
        { transform: 'translateY(0)' },
        {
            duration: 1500,
            easing: 'easeInOutQuad',
            step: function (now, fx) {
                if (fx.prop === 'transform') {
                    $(this).css('transform', `translateY(${now}%)`);
                }
            },
        }
    );

    // Display the CTA button with a slide-up animation after other animations
    setTimeout(function () {
        $('.header-banner__cta').css({
            bottom: '170px', // Slide it into view
            opacity: 1, // Make it visible
        });
    }, 2000); // Delay to sync with other animations
}

export default headerBanner;