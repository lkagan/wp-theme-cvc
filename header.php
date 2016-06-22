<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class( ! is_front_page() ? 'inner' : '' ); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() || is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		<div class="phone">
			<a href="tel:+1-800-000-0000"><i class="fa fa-phone"></i> 1-800-000-0000</a>
			<div class="tip"><i class="fa fa-hand-pointer-o"></i> tap to call</div>
		</div>

		<div class="logo-container">
			<a href="/">
				<div class="logo-container-inner">
					<img src="<?php echo get_template_directory_uri() ?>/images/logo-160.png"
								 srcset="<?php echo get_template_directory_uri() ?>/images/logo-75.png 75w,
										 <?php echo get_template_directory_uri() ?>/images/logo-110.png 110w,
										 <?php echo get_template_directory_uri() ?>/images/logo-150.png 150w,
										<?php echo get_template_directory_uri() ?>/images/logo-175.png 175w"
								 sizes="(max-width: 499px) 75px, (max-width: 1399px) 110px, 175px"
								 alt="CVC Hospitality Logo"class="logo">
					<div class="logo-sub">Hospitality, Inc.</div>
					<div class="logo-phone"><i class="fa fa-phone"></i> 1-800-000-0000</div>
				</div><!-- .logo-container-inner -->
			</a>
		</div><!-- .logo-container -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-open" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
			<div class="main-nav-wrapper">
				<a href="#" class="menu-close"><i class="fa fa-close"></i> close</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div><!-- .main-nav-wrapper -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class='hero-container-wrapper'>
			<div class="hero-container" id="hero-container">
				<section class="hero">
				</section>
			</div><!-- .hero-container -->
		</div><!-- .hero-conteiner-wrapper -->
		<div class="cta">
			<div class="content">
				<div class="copy">Save money and reduce stress by partnering with the leader in nationwide turnkey hospitality renovations.</div>
				<div class="phone"><a href="tel:+1-800-000-0000"><i class="fa fa-phone"></i> (800) 000-0000</a></div>
			</div>
		</div>
