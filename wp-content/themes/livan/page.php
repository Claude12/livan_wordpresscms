<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livan
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="header-banner">
		<div class="header-banner__image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Header Banner Image">
		</div>
		<div class="header-banner__content">
			<h1>Innovative Digital Solutions</h1>
			<p>Web & Software Development</p>
		</div>
		<a class="button button--primary header-banner__cta">Get Started</a>
	</section>
</main><!-- #main -->

<?php
get_footer();
