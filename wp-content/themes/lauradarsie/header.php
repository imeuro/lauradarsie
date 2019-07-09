<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package darsie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lauradarsie' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" /></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" /></a></p>
				<?php
			endif;

			// $lauradarsie_description = html_entity_decode(get_bloginfo( 'description', 'display' ));
			$lauradarsie_description = "<strong>Psicanalista</strong><br />Neuromusicologia clinica<br />Psicanalisi della musica";
			if ( $lauradarsie_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lauradarsie_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->


	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'lauradarsie' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
