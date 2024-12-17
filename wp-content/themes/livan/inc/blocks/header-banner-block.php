<?php
/**
 * ACF: Flexible Content > Layouts > Header Banner Block
 *
 * @package WordPress
 */

$banner_image = $section['banner_image'];
$banner_heading = $section['banner_heading'];
$banner_description = $section['banner_descprition'];
$banner_cta = $section['banner_cta'];
?>

<section class="header-banner curve-bottom">
    <?php if ($banner_image): ?>
        <div class="header-banner__image">
            <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
        </div>
    <?php endif; ?>

    <div class="header-banner__content">
        <?php if ($banner_heading): ?>
            <h1><?php echo esc_html($banner_heading); ?></h1>
        <?php endif; ?>

        <?php if ($banner_description): ?>
            <p><?php echo esc_html($banner_description); ?></p>
        <?php endif; ?>
    </div>

    <?php if ($banner_cta && isset($banner_cta['url'], $banner_cta['title'])): ?>
        <a href="<?php echo esc_url($banner_cta['url']); ?>" class="button button--primary header-banner__cta"
            target="<?php echo esc_attr($banner_cta['target'] ?? '_self'); ?>">
            <?php echo esc_html($banner_cta['title']); ?>
        </a>
    <?php endif; ?>
    <button class="header-banner__scroll" id="scrollButton" aria-label="Scroll Down">
        <svg width="40" height="60" viewBox="0 0 40 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M37 20V40C37 49.3888 29.3888 57 20 57C10.6112 57 3 49.3888 3 40V20C3 10.6112 10.6112 3 20 3C29.3888 3 37 10.6112 37 20ZM0 20C0 8.9543 8.95431 0 20 0C31.0457 0 40 8.95431 40 20V40C40 51.0457 31.0457 60 20 60C8.95431 60 0 51.0457 0 40V20ZM22 15C22 13.8954 21.1046 13 20 13C18.8954 13 18 13.8954 18 15V25C18 26.1046 18.8954 27 20 27C21.1046 27 22 26.1046 22 25V15Z">
            </path>
        </svg>
    </button>
</section>