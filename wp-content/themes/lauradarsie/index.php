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

		<?php
		$curPage = get_post( 74 );
		$title = $curPage->post_title;

		 if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php echo $title; ?></h1>
			</header><!-- .page-header -->

			<?php 
				if (has_post_thumbnail( $curPage->ID ) ):
					echo '<div class="post-thumbnail">';
					echo get_the_post_thumbnail( 74 );
					echo '</div>';
				endif;
			?>

			<?php
				global $paged;
				if(get_field('testo_intro',$curPage->ID) && (empty($paged) || $paged === 1)):
					echo '<div class="simil-entry-content">';
					echo get_field('testo_intro',$curPage->ID);
					echo '</div>';
				endif;
			?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

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
