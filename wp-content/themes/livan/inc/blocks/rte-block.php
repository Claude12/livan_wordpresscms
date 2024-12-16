<?php

/**
 * ACF: Flexible Content > Layouts > RTE Block
 *
 * @package WordPress
 */

$rte = $section['rte_content'];
?>

<section class="section">
    <div class="rte">
        <?php if ($rte) { ?>
            <?php echo $rte; ?>
        <?php } ?>
    </div>
</section>