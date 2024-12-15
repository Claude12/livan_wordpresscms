<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package livan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php
$site_logo = get_field('site_logo', 'option');
$nav_cta = get_field('nav_cta', 'option');
$socials = get_field('socials', 'option');
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header class="header">
			<div class="header__container">
				<div class="header__logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php if ($nav_cta): ?>
							<img src="<?php echo esc_url($site_logo['url']); ?>" alt="<?php bloginfo('name'); ?>"
								class="header__logo-image">
						<?php endif; ?>
						<span class="header__title"><?php bloginfo('name'); ?></span>
					</a>
				</div>
				<!-- Hamburger Toggle Button -->
				<div class="header__menu menu">
					<div class="menu__icon">
						<span></span>
					</div>

					<nav data-sub_menu_auto_close="true" class="menu__body">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
						<div class="header__menu-cta d-mobile-only">
							<?php if ($socials): ?>
								<ul class="social-links">
									<?php if (!empty($socials['whatsapp'])): ?>
										<li>
											<a href="https://wa.me/<?php echo esc_attr($socials['whatsapp']); ?>"
												target="_blank" rel="noopener noreferrer">
												<img src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp.svg"
													width="40" height="40" alt="WhatsApp">
											</a>
										</li>
									<?php endif; ?>
									<?php if (!empty($socials['linkedin'])): ?>
										<li>
											<a href="<?php echo esc_url($socials['linkedin']); ?>" target="_blank"
												rel="noopener noreferrer">
												<img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.svg"
													width="54" height="54" alt="LinkedIn">
											</a>
										</li>
									<?php endif; ?>

								</ul>
							<?php endif; ?>

						</div>
					</nav>

				</div>

				<div class="header__menu-cta d-desktop-only">
					<?php if ($nav_cta): ?>
						<a href="<?php echo esc_url($nav_cta['url']); ?>" class="button button--primary">
							<?php echo esc_html($nav_cta['title']); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</header>