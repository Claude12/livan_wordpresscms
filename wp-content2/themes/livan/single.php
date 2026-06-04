<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package livan
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post();

		// ACF - Flexible Content fields.
		$sections = get_field('content_sections');

		if ($sections):
			foreach ($sections as $section):

				$template = str_replace('_', '-', $section['acf_fc_layout']);
				set_query_var('section', $section);
				get_template_part('inc/blocks/' . $template);
			endforeach;
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
