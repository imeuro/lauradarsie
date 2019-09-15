<?php
/*
Template Name: Home
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="home-main">

            <section id="site-intro" class="fullcol">
                
                <h2>Introduzione alla Neuromusicologia</h2>
                <div id="intro-video">
                    <a href="<?php echo get_permalink(13); ?>">
                        <figure class="wp-block-video">
                            <video controls src="<?php echo wp_get_attachment_url( 13 ); ?>"></video>
                        </figure>
                    </a>
                </div>
                <div id="intro-text">
                    <a href="<?php echo get_permalink(13); ?>">
                        <p><?php echo get_the_excerpt( 13 ); ?></p>
                        <small class="bio-expander">Continua a leggere</small>
                    </a>
                </div>
            </section>

            <section id="latest-events">
                <h2>Agenda / Eventi recenti</h2>
                <?php
                $args_events = array(
                    'numberposts' => 3,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'ldarsie_eventi',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $recent_events = wp_get_recent_posts( $args_events, ARRAY_A );
                ?>
                <ul class="recent-posts recent-events">
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

            <section id="latest-posts">
                <h2>Psicoanalisi della musica</h2>
                <?php
                $args_posts = array(
                    'numberposts' => 3,
                    'offset' => 0,
                    // 'category' => 'pubblicazioni',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $recent_posts = wp_get_recent_posts( $args_posts, ARRAY_A );
                ?>
                <ul class="recent-posts recent-events">
                <?php
                foreach( $recent_posts as $recent ){
                    echo '<li class="recent-item"><a href="' . get_permalink($recent["ID"]) . '"><p class="recent-item-title">' . $recent["post_title"].'</p></a> </li> ';
                }
                wp_reset_query();
                ?>
                </ul>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
