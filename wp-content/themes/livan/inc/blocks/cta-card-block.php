<?php

/**
 * ACF: Flexible Content > Layouts > CTA Card Block
 *
 * @package WordPress
 */

$heading    = $section['cta_card_heading'];
$subheading = $section['cta_card_subheading'];
$cta_link   = $section['cta_card_link'];
?>

<section class="cta-card-block">
    <div class="container">
        <div class="cta-card-block__card" animate="fade-in">
            <svg class="cta-card-block__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>

            <?php if ($heading): ?>
                <h2 class="cta-card-block__heading"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if ($subheading): ?>
                <p class="cta-card-block__subheading"><?php echo esc_html($subheading); ?></p>
            <?php endif; ?>

            <?php if ($cta_link && isset($cta_link['url'], $cta_link['title'])): ?>
                <a
                    href="<?php echo esc_url($cta_link['url']); ?>"
                    class="button button--cta-card"
                    target="<?php echo esc_attr($cta_link['target'] ?? '_self'); ?>"
                >
                    <?php echo esc_html($cta_link['title']); ?> &rarr;
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
