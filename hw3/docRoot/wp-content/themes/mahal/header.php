<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Mahal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header"<?php if ( get_header_image() ) : ?> style="background:url(<?php header_image(); ?>) fixed;"<?php endif; ?> role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="grid w960"><div class="row">
			<div class="c12"><span class="menu-toggle"><span class="dashicons dashicons-menu"></span></span></div>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mahal' ); ?></a>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<?php wp_nav_menu( array(
	 			'theme_location' => 'primary',
				'container'       => 'div',
				'container_class' => 'c12'
 			) ); ?>
 			<?php else : ?>
 				<div class="main-navigation-not-set">
 					<p><?php printf( __( 'Please go to <a href="%1$s">Menus</a> to set this area.', 'mahal' ), esc_url( admin_url( 'nav-menus.php' ) ) ); ?></p>
 				</div>
 			<?php endif; ?>
			</div></div>
		</nav><!-- #site-navigation -->
		<?php if ( is_home() ) : ?>
		<div class="site-branding grid"><div class="row"><div class="c12">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div></div></div>
		<?php echo get_avatar( get_bloginfo( 'admin_email' ), 150 ); ?>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">