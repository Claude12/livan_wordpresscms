<?php

/**
 * ACF: Flexible Content > Layouts > Spacer Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$spacer_height = $section['spacer_height'];
?>

<div class="spacer"
    style="background-color: <?php echo esc_attr($background_color); ?>; height: <?php echo esc_attr($spacer_height); ?>px;">
</div>