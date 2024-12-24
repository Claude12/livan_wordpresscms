<?php

/**
 * ACF: Flexible Content > Layouts > Image Text Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$block_image = $section['block_image'];
$block_text = $section['block_text'];
$image_left = $section['image_left'];

// Ensure fields are available
if ($block_image && $block_text):
    ?>

    <section class="image-text-block <?php echo $image_left ? 'image-text-block--left' : 'image-text-block--right'; ?>"
        style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">
            <div class="image-text-block__content">
                <?php if ($image_left): ?>
                    <div class="image-text-block__image">
                        <img src="<?php echo esc_url($block_image['url']); ?>"
                            alt="<?php echo esc_attr($block_image['alt']); ?>" loading="lazy" />
                    </div>
                    <div class="image-text-block__text rte">
                        <?php echo wp_kses_post($block_text); ?>
                    </div>
                <?php else: ?>
                    <div class="image-text-block__text rte">
                        <?php echo wp_kses_post($block_text); ?>
                    </div>
                    <div class="image-text-block__image">
                        <img src="<?php echo esc_url($block_image['url']); ?>"
                            alt="<?php echo esc_attr($block_image['alt']); ?>" loading="lazy" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
endif;
?>