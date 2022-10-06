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
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() ?>/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() ?>/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/images/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lauradarsie' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php if ( is_front_page() || is_page('Home Page') ) : ?>
			
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" alt="Laura Darsie" /></a></h1>
				<div class="site-heroes">
					<picture id="site-hero-freud">
						<img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-hero-freud.png" alt="Sigmund Freud" />
					</picture>
					<picture id="site-hero-lacan">
						<img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-hero-lacan.png" alt="Jacques Lacan" />
					</figure>
				</div>
				<section class="bio-preview bio-expandible hidden-mobile">
					<a href="<?php echo get_permalink(2); ?>">
						<div class="bio-short"><p><?php echo get_the_excerpt( 2 ); ?></p></div>
						<small class="bio-expander">Continua a leggere</small>
					</a>
				</section>
				<div id="social-pad">
					<ul>
						<li class="IG_btn"><a href="https://www.instagram.com/laura.darsie/" target="_blank">IG</a></li>
						<li class="FB_btn"><a href="https://www.facebook.com/lauradarsiepsicanalisi" target="_blank">FB</a></li>
						<li class="IN_btn"><a href="https://it.linkedin.com/in/laura-darsi%C3%A9-22677231" target="_blank">IN</a></li>
					</ul>
				</div>

			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/lauradarsie-logo.svg" alt="Laura Darsie" /></a></p>
			<?php endif; ?>

			<?php if ( ( is_front_page() || is_page('Home Page') ) || is_page( 'contatti') || is_page('biografia') ) : ?>
				<p class="site-description"><strong>Psicologa Clinica</strong><br><strong>e Psicanalista</strong></p>
			<?php else : ?>
			<p class="site-description hidden-mobile"><strong>Psicologa Clinica</strong><br><strong>e Psicanalista</strong></p>
			<?php endif; ?>

		</div><!-- .site-branding -->

		<?php if ( is_front_page() || is_page('Home Page') ) : ?>
		<section class="bio-preview bio-expandible hidden-desktop">
					<a href="<?php echo get_permalink(2); ?>">
						<div class="bio-short"><p><?php echo get_the_excerpt( 2 ); ?></p></div>
						<small class="bio-expander">Continua a leggere</small>
					</a>
		</section>
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
