<?php

/**
 * ACF: Flexible Content > Layouts > Inner Banner Block
 *
 * @package WordPress
 */

$bg_image    = $section['banner_bg_image'];
$bg_color    = $section['banner_bg_color'];
$label       = $section['banner_label'];
$title       = $section['banner_title'] ?: get_the_title();
$subtitle    = $section['banner_subtitle'];
$show_meta   = $section['show_meta'];

$has_image   = !empty($bg_image['url']);
$section_class = 'inner-banner' . ($has_image ? ' inner-banner--has-image' : '');

// Read time from post content
$word_count  = str_word_count(strip_tags(get_the_content()));
$read_time   = max(1, ceil($word_count / 200));

$inline_style = $has_image
    ? 'background-image: url(' . esc_url($bg_image['url']) . ');'
    : ($bg_color ? 'background-color: ' . esc_attr($bg_color) . ';' : '');
?>

<section class="<?php echo esc_attr($section_class); ?>" style="<?php echo $inline_style; ?>">
    <div class="container">
        <div class="inner-banner__content" animate="fade-in">

            <?php if ($label): ?>
                <span class="inner-banner__label"><?php echo esc_html($label); ?></span>
            <?php endif; ?>

            <h1 class="inner-banner__title"><?php echo esc_html($title); ?></h1>

            <?php if ($subtitle): ?>
                <p class="inner-banner__subtitle"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>

            <?php if ($show_meta): ?>
                <div class="inner-banner__meta">
                    <span class="inner-banner__date">
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="inner-banner__read-time">
                        <?php echo $read_time; ?> min read
                    </span>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php if (function_exists('rank_math_the_breadcrumbs')): ?>
    <div class="breadcrumb-bar">
        <div class="container">
            <?php rank_math_the_breadcrumbs(); ?>
        </div>
    </div>
<?php endif; ?>
