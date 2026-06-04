<?php

/**
 * ACF: Flexible Content > Layouts > Form Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$form_title       = $section['form_title'];
$standalone       = $section['standalone'];
$form_shortcode   = $section['form_shortcode'];
?>

<section class="form<?php echo $standalone ? ' form--standalone curve-bottom curve-top' : ''; ?>" animate="slide-in-up" style="background-color: <?php echo esc_attr($background_color); ?>;"><?php // form--standalone class added when standalone is true ?>
    <div class="container">
        <?php if ($form_title): ?>
            <h2><?php echo esc_html($form_title); ?></h2>
        <?php endif; ?>
        <?php if ($form_shortcode) { ?>
            <?php echo do_shortcode($form_shortcode); ?>
        <?php } else { ?>
            <p>No form shortcode provided.</p>
        <?php } ?>
    </div>
</section>