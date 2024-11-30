<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<!-- FACEBOOK AND TWITTER SOCIAL SHARE IMAGES -->
	<meta property="og:image" content="/wp-content/themes/THEME-NAME/img/social_share_image.png">
	<meta name="twitter:image" content="/wp-content/themes/THEME-NAME/img/social_share_image.png">

	<!-- FAVICONS -->
	<!-- DON'T FORGET ME! -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<!-- ******************* The Navbar Area ******************* -->
<header id="wrapper-navbar">

	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

	<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
		<h2 id="main-nav-label" class="screen-reader-text"><?php esc_html_e( 'Main Navigation', 'understrap' ); ?></h2>

		<div class="container">
			<a id = "logoLink" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<?php $logo = get_field('logo', 'options'); ?>
				<img id = "headerLogo" class = "img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo( 'name'); ?>"></a>

				<button class="navbar-toggler d-block d-lg-none mx-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigation" aria-controls="offcanvasNavigation">
						<div id="navIcon">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
						<span>Menu</span>
				</button>	

			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ms-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>

		</div><!-- .container -->
	</nav><!-- .site-navigation -->
</header><!-- #wrapper-navbar end -->

<!-- MODAL NAV -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavigation" aria-labelledby="offcanvasExampleLabel">

	<div id = "modalTop">
		<img id = "logo" class = "d-block" src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo( 'name'); ?>">
		<button type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fa fa-times-thin fa-3x ms-2" aria-hidden="true"></i>
		</button>
	</div><!-- #modalTop -->
  <div class="offcanvas-body">
	<?php wp_nav_menu(
	array(
		'theme_location'  => 'primary',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'navbar-nav',
		'fallback_cb'     => '',
		'menu_id'         => 'mobileMenu',
		'depth'           => 2,
		'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
	)
); ?>
  </div>
</div>