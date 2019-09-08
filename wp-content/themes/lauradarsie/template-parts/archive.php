<?php
/**
 * Template part for displaying ldarsie_events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package darsie
 */


$pthumb = get_the_post_thumbnail_url();
$pclass = 'wpic';
if (!$pthumb) {
    $pthumb = get_template_directory_uri().'/images/lauradarsie-logo.svg';
    $pclass = 'nopic';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('archive '.$pclass); ?> style="background-image:url('<?php echo $pthumb ?>');">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
        <div class="entry-txt">

            <div class="entry-content">
                <?php
                $startdate = '';
                if (get_field('evento_data_inizio')) {
                    $startdate = '<span class="ldarsie_eventdate">'.get_field('evento_data_inizio').'</span>';
                }

                the_title( '<h2 class="entry-title">'.$startdate.'<span class="tit-txt">', '</span></h2>' );

                echo '<p>'.wp_filter_nohtml_kses(get_the_content()).'</p>';

                ?>
            </div><!-- .entry-content -->
        </div>
</a>
</article><!-- #post-<?php the_ID(); ?> -->
