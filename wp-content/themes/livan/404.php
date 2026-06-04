<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * Renders ACF flexible content blocks from a page with slug '404-error'.
 * Falls back to a simple message if that page doesn't exist or has no blocks.
 *
 * @package livan
 */

get_header();

$error_page = get_page_by_path( '404-error' );
$sections   = $error_page ? get_field( 'content_sections', $error_page->ID ) : null;
?>

<main id="primary" class="site-main">

	<?php if ( $sections ) : ?>

		<?php foreach ( $sections as $section ) : ?>
			<?php
			$template = str_replace( '_', '-', $section['acf_fc_layout'] );
			set_query_var( 'section', $section );
			get_template_part( 'inc/blocks/' . $template );
			?>
		<?php endforeach; ?>

	<?php else : ?>

		<section class="error-404-fallback">
			<div class="container">
				<h1><?php esc_html_e( 'Page Not Found', 'livan' ); ?></h1>
				<p><?php esc_html_e( "It looks like nothing was found at this location. Let's get you back on track.", 'livan' ); ?></p>
				<a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Go Home', 'livan' ); ?>
				</a>
			</div>
		</section>

	<?php endif; ?>

</main><!-- #main -->

<?php
get_footer();
