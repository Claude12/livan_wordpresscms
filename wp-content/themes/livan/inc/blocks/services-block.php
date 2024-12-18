<?php
/**
 * ACF: Flexible Content > Layouts > Services Block
 *
 * @package WordPress
 */

$service_items = $section['service_items'];
$block_anchor = $section['block_anchor'];
$background_color = $section['background_color'];
$icon_background_color = $section['icon_background_color'];
?>

<?php if ($service_items && is_array($service_items) && count($service_items) > 0): ?>
    <section class="service-block" id="<?php echo esc_attr($block_anchor); ?>"
        style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">
            <div class="service-block__grid">
                <?php foreach ($service_items as $service_item):
                    $service_icon = $service_item['service_icon']; // Image field
                    $service_heading = $service_item['service_heading']; // Text field
                    $service_description = $service_item['service_description']; // Text field
                    $service_link = $service_item['service_link']; // Link field (ACF array)
                    ?>
                    <?php if ($service_link && isset($service_link['url'])): ?>
                        <a href="<?php echo esc_url($service_link['url']); ?>" class="service-block__item-link"
                            target="<?php echo esc_attr($service_link['target'] ?? '_self'); ?>"
                            title="<?php echo esc_attr($service_link['title'] ?? ''); ?>">
                        <?php endif; ?>

                        <div class="service-block__item">
                            <?php if ($service_icon): ?>
                                <div class="service-block__item-image"
                                    style="background-color: <?php echo esc_attr($icon_background_color); ?>;">
                                    <img src="<?php echo esc_url($service_icon['url']); ?>"
                                        alt="<?php echo esc_attr($service_icon['alt']); ?>" />
                                </div>
                            <?php endif; ?>

                            <?php if ($service_heading): ?>
                                <h3 class="service-block__item-title">
                                    <?php echo esc_html($service_heading); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if ($service_description): ?>
                                <div class="service-block__item-description">
                                    <?php echo wp_kses_post($service_description); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ($service_link && isset($service_link['url'])): ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>