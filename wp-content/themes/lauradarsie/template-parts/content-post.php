<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package darsie
 */

?>qqqqqqqwah
<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	<header class="entry-header">
        <?php
        if (get_field('evento_data_inizio')) {

            echo '<h4 class="ldarsie_eventdate">'.get_field('evento_data_inizio');
			
			if (get_field('evento_data_inizio_ore')) {
                echo ' dalle <time>'.get_field('evento_data_inizio_ore').'</time>';
            }
			
			if (get_field('evento_data_fine')) {
				echo ' - '.get_field('evento_data_fine');
				if (get_field('evento_data_fine_ore')) {
					echo ' <time>'.get_field('evento_data_fine_ore').'</time>';
				 }
			}
			echo '</h4>';

		}
        ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				lauradarsie_posted_on();
				lauradarsie_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php lauradarsie_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lauradarsie' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lauradarsie' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lauradarsie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
