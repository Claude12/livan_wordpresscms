<?php
/**
 * Template for displaying the Case Studies category archive.
 * WordPress selects this automatically for the 'case-study' category.
 *
 * @package livan
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="breadcrumb curve-bottom"
		style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/breadcrumbs.jpg' ); ?>');">
		<div class="container">
			<h1 class="breadcrumb__title"><?php esc_html_e( 'Case Studies', 'livan' ); ?></h1>
		</div>
	</section>

	<div class="container case-studies-page">

		<?php if ( have_posts() ) : ?>

			<div class="case-studies-page__grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

</main><!-- #main -->

<?php
get_footer();
