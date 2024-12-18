<?php

/**
 * ACF: Flexible Content > Layouts > Separator Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$hide_svg = $section['hide_svg'];
$curve_position = $section['curve_position'];

// Determine the class to add based on hide_svg and curve_position
$curve_class = '';
if ($hide_svg) {
    if ($curve_position === 'top') {
        $curve_class = 'curve-top';
    } elseif ($curve_position === 'bottom') {
        $curve_class = 'curve-bottom';
    }
}
?>

<section class="separator <?php echo esc_attr($curve_class); ?>"
    style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="<?php echo $hide_svg ? 'd-none' : 'd-grid'; ?>">
        <svg width="32px" height="32px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill=""
            transform="rotate(90)">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
                <path d="M2 8a1 1 0 011-1h10a1 1 0 110 2H3a1 1 0 01-1-1z" fill="" />
            </g>
        </svg>
        <svg width="32px" height="32px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill=""
            transform="rotate(90)">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
                <path d="M2 8a1 1 0 011-1h10a1 1 0 110 2H3a1 1 0 01-1-1z" fill="" />
            </g>
        </svg>
        <svg width="32px" height="32px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill=""
            transform="rotate(90)">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
                <path d="M2 8a1 1 0 011-1h10a1 1 0 110 2H3a1 1 0 01-1-1z" fill="" />
            </g>
        </svg>
    </div>
</section>