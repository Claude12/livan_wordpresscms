<?php
/**
 * ACF: Flexible Content > Layouts > Works Block
 *
 * @package WordPress
 */

$works_title = $section['works_title'];
$works_intro = $section['works_intro'];
$works_items = $section['works_items']; // each item: link, image, title, description
$block_anchor = $section['block_anchor'];
$background_color = $section['background_color'];
?>

<?php if ($works_items && is_array($works_items) && count($works_items) > 0): ?>
    <section class="works-block" id="<?php echo esc_attr($block_anchor); ?>"
        style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">
            <?php if ($works_title): ?>
                <h2 class="works-block__title"><?php echo esc_html($works_title); ?></h2>
            <?php endif; ?>

            <?php if ($works_intro): ?>
                <p class="works-block__intro"><?php echo esc_html($works_intro); ?></p>
            <?php endif; ?>

            <div class="works-block__grid">
                <?php foreach ($works_items as $item):
                    $link = $item['link'];
                    $link_url = $link['url'] ?? '';
                    $link_target = $link['target'] ?? '_self';
                    $link_title = $link['title'] ?? 'Read more';
                    $image = $item['image'];
                    $title = $item['title'];
                    $desc = $item['description'];
                    ?>
                    <div class="card card--works">
                        <?php if ($image): ?>
                            <div class="works-block__image">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: $title); ?>" />
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <?php if ($title): ?>
                                <h3 class="works-block__project"><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>

                            <?php if ($desc): ?>
                                <div class="works-block__desc">
                                    <?php echo wp_kses_post($desc); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($link_url)): ?>
                                <a class="card-body__cta" href="<?php echo esc_url($link_url); ?>"
                                    target="<?php echo esc_attr($link_target); ?>" title="<?php echo esc_attr($link_title); ?>"
                                    rel="noopener bookmark">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>