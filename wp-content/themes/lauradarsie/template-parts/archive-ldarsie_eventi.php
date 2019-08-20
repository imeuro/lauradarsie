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

    <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">

        <div class="entry-txt">
            <div class="entry-content">
                <?php
                $startdate = '';
                if (get_field('evento_data_inizio')) {
                    $startdate = '<span class="ldarsie_eventdate">'.get_field('evento_data_inizio');
                    echo '</span>';
                }

                the_title( '<h2 class="entry-title">'.$startdate.' - ', '</h2>' );

                echo '<p>'.wp_filter_nohtml_kses(get_the_content()).'</p>';

                ?>
            </div><!-- .entry-content -->
        </div>

        <footer class="entry-footer">
            <?php lauradarsie_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </a>
    
</article><!-- #post-<?php the_ID(); ?> -->
