<?php

/**
 * ACF: Flexible Content > Layouts > RTE Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$rte = $section['rte_content'];
?>

<section style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="container">
        <div class="rte">
            <?php if ($rte) { ?>
                <?php echo $rte; ?>
            <?php } ?>
        </div>
    </div>
</section>