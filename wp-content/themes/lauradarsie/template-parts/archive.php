<?php
/**
 * Template part for displaying posts
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
<a href="<?php echo esc_url( get_permalink() ); ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class('archive '.$pclass); ?> style="background-image:url('<?php echo $pthumb ?>');">

    <div class="entry-txt">
    
        <div class="entry-content">
            <?php
            the_title( '<h2 class="entry-title">', '</h2>' );
            echo '<p>'.wp_filter_nohtml_kses(get_the_content()).'</p>';
            ?>
        </div><!-- .entry-content -->
    </div>

	<footer class="entry-footer">
		<?php // lauradarsie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</a>