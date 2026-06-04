<?php

/**
 * ACF: Flexible Content > Layouts > Process Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$section_title    = $section['section_title'];
$process_items    = $section['process_items'];
?>

<?php if ($process_items && is_array($process_items) && count($process_items) > 0): ?>
    <section class="process-block" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">

            <?php if ($section_title): ?>
                <div class="process-block__header">
                    <h2 class="process-block__title" animate="fade-in"><?php echo esc_html($section_title); ?></h2>
                </div>
            <?php endif; ?>

            <div class="process-block__grid">
                <?php foreach ($process_items as $index => $item): ?>
                    <div class="process-block__card" animate="fade-in" animate-delay="<?php echo $index * 100; ?>">
                        <span class="process-block__number"><?php echo sprintf('%02d', $index + 1); ?></span>
                        <?php if ($item['item_title']): ?>
                            <h3 class="process-block__item-title"><?php echo esc_html($item['item_title']); ?></h3>
                        <?php endif; ?>
                        <?php if ($item['item_description']): ?>
                            <p class="process-block__item-desc"><?php echo esc_html($item['item_description']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
