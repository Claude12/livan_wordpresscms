<?php

/**
 * ACF: Flexible Content > Layouts > Services Block
 *
 * @package WordPress
 */

$service_items = $section['service_items'];
?>

<section class="section service-block">
    <div class="service-block__grid">
        <div class="service-block__item">
            <img class="service-block__item-image"
                src="<?php echo get_template_directory_uri(); ?>/images/service-icon.png" alt="Service 1" />
            <h2 class="service-block__item-title">Service 1</h2>
            <p class="service-block__item-description">
                Description for service 1. Lorem ipsum dolor sit amet, consectetur.
            </p>
        </div>
    </div>
</section>