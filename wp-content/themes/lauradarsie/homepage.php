<?php
/*
Template Name: Home
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="home-main">

            <section id="site-career" class="fullcol">
                <h2 class="block-title">Studio di Psicanalisi</h2>
                <div class="intro-text">
                    <p><?php echo get_the_excerpt( 242 ); ?></p>
                    <a href="<?php echo get_permalink( 242 ); ?>">
                        <small class="bio-expander">Continua a leggere</small>
                    </a>
                </div>
                <div id="intro-image">
                    <?php 
                    $post_images = get_posts(
                        array(
                            'post_type'      => 'attachment',
                            'post_mime_type' => 'image',
                            'post_parent'    => 242,
                            'posts_per_page' => 1, /* Save memory, only need one */
                        )
                    );
                    ?>
                    <a href="<?php echo get_permalink( 242 ); ?>">
                        <figure class="wp-block-video">
                            <?php echo wp_get_attachment_image( $post_images[0]->ID, 'medium' ); ?>
                        </figure>
                    </a>
                </div>
            </section>

            <section id="site-intro" class="fullcol">
                <h2 class="block-title">Introduzione alla Neuromusicologia</h2>
                <div id="intro-video">
                    <figure class="wp-block-video">
                        <video controls src="./wp-content/uploads/2019/10/laura_darsie_720p.mp4"></video>
                    </figure>
                </div>
                <div class="intro-text">
                    <a href="<?php echo get_permalink(13); ?>">
                        <p><?php echo get_the_excerpt( 13 ); ?></p>
                        <small class="bio-expander">Continua a leggere</small>
                    </a>
                </div>
            </section>

            <section id="latest-events">
                <h2>Agenda</h2>
                <?php
                $today = date('Ymd');
                $args_events = array(
                    'numberposts' => 3,
                    'offset' => 0,
                    'category' => 0,
                    'orderby'           => 'evento_data_inizio',
                    'order'             => 'ASC',
                    'meta_query'        => array(
                        array(
                        'key'     => 'evento_data_inizio',
                        'value'   => $today,
                        'compare' => '>='
                        )
                    ),
                    'post_type' => array('ldarsie_eventi'),
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $recent_events = wp_get_recent_posts( $args_events, ARRAY_A );
                ?>
                <ul class="recent-events">
                <?php
                foreach( $recent_events as $recent ){
                    //var_dump($recent);
                    $ev_date=date_create($recent["post_date"]);
                    echo '<li class="recent-item"><a href="' . get_permalink($recent["ID"]) . '">';
                    if (get_field('evento_data_inizio',$recent["ID"])){
                        echo '<h4 class="recent-item-date">' . get_field('evento_data_inizio',$recent["ID"]) . '</h4>';
                    }
                    // 
                    echo  '<p class="recent-item-title">' . $recent["post_title"] . '</p></a></li> ';
                }
                wp_reset_query();
                ?>
                </ul>
            </section>

            <section id="links-list">
                <h2>Siti di riferimento</h2>
                <?php
                $linkspage = get_page_by_path( 'links' );
                $linksList = get_post( $linkspage );
                echo $linksList->post_content;
                wp_reset_query();
                ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
