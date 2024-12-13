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

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header class="header">
			<div class="header__container">
				<div class="header__logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
							alt="<?php bloginfo('name'); ?>" class="header__logo-image">
						<span class="header__title"><?php bloginfo('description'); ?></span>
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
					</nav>
				</div>
			</div>
		</header>