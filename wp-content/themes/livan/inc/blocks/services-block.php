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
                                <div class="service-block__item-cta">
                                    <svg fill="#00bea3" width="64px" height="64px" viewBox="0 0 256 256" id="Flat"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M128,28A100,100,0,1,0,228,128,100.11332,100.11332,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.10416,92.10416,0,0,1,128,220Zm30.67578-94.97314a3.99976,3.99976,0,0,1,0,5.94628l-40,36a3.99992,3.99992,0,0,1-5.35156-5.94628L150.02051,128,113.32422,94.97314a3.99992,3.99992,0,0,1,5.35156-5.94628Z" />
                                        </g>

                                    </svg>
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