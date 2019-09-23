<?php
/**
 * The template for displaying "Psicanalisi della Musica"
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package darsie
 */

get_header();
?>
	<div id="primary" class="content-area content-squared">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Psicanalisi della Musica</h1>
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				echo 'gggg'.$post->ID;
				if(get_field('testo_intro',74)) {
					the_field('testo_intro');
				}

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/archive', get_post_type() );

			endwhile;

			if (function_exists("ldarsie_pagination")) :
                ldarsie_pagination($eventi->max_num_pages);
            endif;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
