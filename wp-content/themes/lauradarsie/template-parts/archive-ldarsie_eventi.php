<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package darsie
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('archive'); ?> style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
    <!-- <figure class="entry-figure">
        <?php // lauradarsie_post_thumbnail(); ?>
    </figure> -->

    <div class="entry-txt">
        <header class="entry-header">        
            <?php
            if (get_field('evento_data_inizio')) {
                echo '<h3 class="ldarsie_eventdate">'.get_field('evento_data_inizio');
                echo '</h3>';
            }
            ?>
        </header><!-- .entry-header -->


        <div class="entry-content">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

                        
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
    </div>

	<footer class="entry-footer">
		<?php lauradarsie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
