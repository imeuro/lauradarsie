<?php
/*
Template Name: Home
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="home-main">

            <section id="latest-events">
                <h3>Prossimi Eventi</h3>
                <?php
                $args_events = array(
                    'numberposts' => 3,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'tribe_events',
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
                    // echo '<h4 class="recent-item-date">' . tribe_get_start_date($recent["ID"],false,'j F Y') . '</h4>';
                    echo  '<p class="recent-item-title">' . $recent["post_title"] . '</p></a></li> ';
                }
                wp_reset_query();
                ?>
                </ul>
            </section>

            <section id="latest-posts">
                <h3>Pubblicazioni Recenti</h3>
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
