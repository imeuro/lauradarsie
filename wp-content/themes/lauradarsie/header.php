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
			<?php if ( is_page('home') ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" /></a></h1>
				<div class="site-heroes">
					<picture id="site-hero-freud">
						<img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-hero-freud.png" alt="Sigmund Freud" />
					</picture>
					<picture id="site-hero-lacan">
						<img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-hero-lacan.png" alt="Jacques Lacan" />
					</figure>
				</div>
				<section id="bio-preview" class="bio-expandible">
					<a href="<?php echo get_permalink(2); ?>">
						<div class="bio-short"><p><?php echo get_the_excerpt( 2 ); ?></p></div>
						<small class="bio-expander">Continua a leggere</small>
					</a>
				</section>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" /></a></p>
			<?php endif; ?>

			<?php if ( ( is_page('home') ) || is_page( 'contatti') || is_page('biografia') ) : ?>
				<p class="site-description"><strong>Psicanalista</strong><br />Neuromusicologia clinica<br />Psicanalisi della musica</p>
			<?php else : ?>
			<p class="site-description hidden-mobile"><strong>Psicanalista</strong><br />Neuromusicologia clinica<br />Psicanalisi della musica</p>
			<?php endif; ?>

		</div><!-- .site-branding -->

		<?php if ( is_page('home') ) : ?>
		<?php endif; ?>

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
