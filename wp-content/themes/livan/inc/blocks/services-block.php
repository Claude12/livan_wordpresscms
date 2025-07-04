<?php
/**
 * ACF: Flexible Content > Layouts > Services Block
 *
 * @package WordPress
 */

$service_title = $section['service_title'];
$service_items = $section['service_items'];
$block_anchor = $section['block_anchor'];
$background_color = $section['background_color'];
$icon_background_color = $section['icon_background_color'];
?>

<?php if ($service_items && is_array($service_items) && count($service_items) > 0): ?>
    <section class="service-block" id="<?php echo esc_attr($block_anchor); ?>"
        style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">
            <?php if ($service_title): ?>
                <h2><?php echo esc_html($service_title); ?></h2>
            <?php endif; ?>
            <div class="service-block__grid">
                <?php foreach ($service_items as $service_item):
                    $service_icon = $service_item['service_icon'];
                    $service_heading = $service_item['service_heading'];
                    $service_description = $service_item['service_description'];
                    $service_link = $service_item['service_link'];
                    ?>
                    <div class="service-block__item">
                        <?php if ($service_icon): ?>
                            <div class="service-block__item-image"
                                style="background-color: <?php echo esc_attr($icon_background_color); ?>;">
                                <img src="<?php echo esc_url($service_icon['url']); ?>"
                                    alt="<?php echo esc_attr($service_icon['alt']); ?>" width="56" height="56" />
                            </div>
                        <?php endif; ?>

                        <?php if ($service_heading): ?>
                            <h3 class="service-block__item-title">
                                <?php echo esc_html($service_heading); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($service_description): ?>
                            <div class="service-block__item-description rte">
                                <?php echo wp_kses_post($service_description); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($service_link && isset($service_link['url'])): ?>
                            <div class="service-block__item-link">
                                <a class="link" href="<?php echo esc_url($service_link['url']); ?>"
                                    target="<?php echo esc_attr($service_link['target'] ?? '_self'); ?>"
                                    title="<?php echo esc_attr($service_link['title'] ?? 'Learn more'); ?>">
                                    <?php echo esc_html($service_link['title'] ?? 'Learn more'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>