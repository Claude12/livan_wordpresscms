function headerBanner() {
    // Fade-in animation for the content
    $('.header-banner__content').hide().fadeIn(2000);

    // Display the CTA button with a slide-up animation after other animations
    setTimeout(function () {
        $('.header-banner__cta').css({
            bottom: '200px', // Slide it into view
            opacity: 1, // Make it visible
        });
    }, 2000); // Delay to sync with other animations

    $("#scrollButton").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior

        // Animate the scroll 600px down from the current position
        $("html, body").animate(
            { scrollTop: $(window).scrollTop() + 800 },
            300 // Duration in milliseconds for smooth scroll
        );
    });
}

export default headerBanner;