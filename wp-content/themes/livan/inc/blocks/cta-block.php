<?php

/**
 * ACF: Flexible Content > Layouts > CTA Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$heading          = $section['cta_heading'];
$cta_link         = $section['cta_link'];
?>

<section class="cta-block" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="container">
        <div class="cta-block__inner">
            <?php if ($heading): ?>
                <h2 class="cta-block__heading" animate="fade-in"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if ($cta_link && isset($cta_link['url'], $cta_link['title'])): ?>
                <a
                    href="<?php echo esc_url($cta_link['url']); ?>"
                    class="button button--primary"
                    target="<?php echo esc_attr($cta_link['target'] ?? '_self'); ?>"
                >
                    <?php echo esc_html($cta_link['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
