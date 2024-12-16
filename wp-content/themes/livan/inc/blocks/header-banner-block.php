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

<section class="header-banner">
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
</section>