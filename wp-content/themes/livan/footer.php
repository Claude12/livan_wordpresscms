<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package livan
 */

$site_logo = get_field('site_logo', 'option');
$socials = get_field('socials', 'option');

?>

<footer class="footer">
	<div class="footer-top curve-top">
		<div class="footer-brand">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php if ($site_logo): ?>
					<img src="<?php echo esc_url($site_logo['url']); ?>" alt="<?php bloginfo('name'); ?>"
						class="footer-brand__logo">
				<?php endif; ?>
			</a>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<h2 class="footer-brand__title"><?php bloginfo('name'); ?></h2>
			</a>
		</div>

		<!-- Social Media Links -->
		<div class="footer-socials">
			<?php if ($socials): ?>
				<ul class="social-links">
					<?php if (!empty($socials['whatsapp'])): ?>
						<li>
							<a href="https://wa.me/<?php echo esc_attr($socials['whatsapp']); ?>" target="_blank"
								rel="noopener noreferrer">
								<img style="padding: 6px;"
									src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp.svg" width="54"
									height="54" alt="WhatsApp">
							</a>
						</li>
					<?php endif; ?>
					<?php if (!empty($socials['linkedin'])): ?>
						<li>
							<a href="<?php echo esc_url($socials['linkedin']); ?>" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.svg" width="54"
									height="54" alt="LinkedIn">
							</a>
						</li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>

	<!-- Copyright Section -->
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-copyright">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
			</div>

			<!-- Footer Menu -->
			<div class="footer-menu">
				<?php
				wp_nav_menu([
					'theme_location' => 'footer-menu',
					'menu_class' => 'footer-nav',
					'container' => 'nav',
					'depth' => 1
				]);
				?>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>