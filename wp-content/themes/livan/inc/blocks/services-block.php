<?php
/**
 * ACF: Flexible Content > Layouts > Services Block
 *
 * @package WordPress
 */

// Retrieve the repeater field 'service_items'
$service_items = $section['service_items']; // ACF repeater field
?>

<?php if ($service_items && is_array($service_items) && count($service_items) > 0): ?>
    <section class="section service-block" id="services">
        <div class="service-block__grid">
            <?php foreach ($service_items as $service_item):
                $service_image = $service_item['service_image']; // Image field
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
                        <?php if ($service_image): ?>
                            <img class="service-block__item-image" src="<?php echo esc_url($service_image['url']); ?>"
                                alt="<?php echo esc_attr($service_image['alt']); ?>" />
                        <?php endif; ?>

                        <?php if ($service_heading): ?>
                            <h3 class="service-block__item-title">
                                <?php echo esc_html($service_heading); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($service_description): ?>
                            <p class="service-block__item-description">
                                <?php echo esc_html($service_description); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php if ($service_link && isset($service_link['url'])): ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>