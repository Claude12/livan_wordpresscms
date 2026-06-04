<?php

/**
 * ACF: Flexible Content > Layouts > Form Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$form_shortcode = $section['form_shortcode'];
?>

<section class="form" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="container">
        <?php if ($form_shortcode) { ?>
            <?php echo do_shortcode($form_shortcode); ?>
        <?php } else { ?>
            <p>No form shortcode provided.</p>
        <?php } ?>
    </div>
</section>