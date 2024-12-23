<?php
/**
 * The header for our theme
 *
 * Displays the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package livan
 */

// SEO meta fields from ACF
$meta_title = get_field('meta_title') ?: get_the_title(); // Fallback to post/page title
$meta_description = get_field('meta_description') ?: ''; // Fallback to empty if not set
$canonical_url = get_field('canonical_url') ?: get_permalink(); // Fallback to current URL
$meta_robots = get_field('meta_robots') ?: 'index, follow'; // Default to 'index, follow'
$focus_keyword = get_field('focus_keyword') ?: ''; // Optional field

// Global settings from ACF Options Page
$site_logo = get_field('site_logo', 'option'); // Logo stored in options
$nav_cta = get_field('nav_cta', 'option'); // Call-to-action stored in options
$socials = get_field('socials', 'option'); // Social links stored in options
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- SEO Meta Tags -->
	<title><?php echo esc_html($meta_title); ?></title>
	<meta name="description" content="<?php echo esc_attr($meta_description); ?>">
	<meta name="robots" content="<?php echo esc_attr($meta_robots); ?>, max-image-preview:large">
	<link rel="canonical" href="<?php echo esc_url($canonical_url); ?>">
	<?php if ($focus_keyword): ?>
		<meta name="keywords" content="<?php echo esc_attr($focus_keyword); ?>">
	<?php endif; ?>

	<!-- JSON-LD Structured Data for WebPage -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebPage",
		"name": "<?php echo esc_js($meta_title); ?>",
		"description": "<?php echo esc_js($meta_description); ?>",
		"url": "<?php echo esc_url($canonical_url); ?>",
		"inLanguage": "en",
		"isPartOf": {
			"@type": "WebSite",
			"name": "<?php echo esc_js(get_bloginfo('name')); ?>",
			"url": "<?php echo esc_url(home_url()); ?>"
		},
		"keywords": "<?php echo esc_js($focus_keyword); ?>"
	}
	</script>

	<!-- Validation for Focus Keyword Usage -->
	<?php
	if ($focus_keyword) {
		if (stripos($meta_title, $focus_keyword) === false) {
			echo '<!-- Warning: Focus Keyword not found in Meta Title -->';
		}
		if (stripos($meta_description, $focus_keyword) === false) {
			echo '<!-- Warning: Focus Keyword not found in Meta Description -->';
		}
	}
	?>

	<!-- WordPress Head -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header class="header">
			<div class="header__container">
				<div class="header__logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php if ($site_logo): ?>
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
												<img style="padding: 6px;"
													src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp.svg"
													width="54" height="54" alt="WhatsApp">
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