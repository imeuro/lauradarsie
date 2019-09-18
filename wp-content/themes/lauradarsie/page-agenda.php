<?php
/* Template Name: Event list */ 

get_header();
?>

	<div id="primary" class="content-area content-squared">
		<main id="main" class="site-main">
            
            <header class="page-header">
                <h1 class="page-title"><?php the_title();?></h1>
            </header><!-- .page-header -->

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // WP_Query arguments

        $today = date('Ymd');

        $args = array(
            'posts_per_page'    => 9,
            'paged'             => $paged,
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'DESC',
        );
        
        $args_agenda = array(
            'posts_per_page'    => 9,
            'paged'             => $paged,
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'ASC',
            'meta_query'        => array(
                                    array(
                                    'key'     => 'evento_data_inizio',
                                    'value'   => $today,
                                    'compare' => '>='
                                    )
                                )
        );

        $args_archivio = array(
            'posts_per_page'    => 9,
            'paged'             => $paged,
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'DESC',
            'meta_query'        => array(
                                    array(
                                    'key'     => 'evento_data_inizio',
                                    'value'   => $today,
                                    'compare' => '<'
                                    )
                                )
        );

        // The Query
        if (is_page('agenda')) :
            $args = $args_agenda;
        elseif (is_page('archivio-eventi')) :
            $args = $args_archivio;
        else :
            $args = $args;
        endif;
        $eventi = new WP_Query( $args );
        // The Loop
        if ( $eventi->have_posts() ) {
            while ( $eventi->have_posts() ) {
                $eventi->the_post();
                get_template_part( 'template-parts/archive', 'ldarsie_eventi' );
            }
            if (function_exists("ldarsie_pagination")) {
                ldarsie_pagination($eventi->max_num_pages);
            }
        } else {
            if (is_page('agenda')) :
                echo 'Spiacenti, al momento non sono presenti eventi in agenda.';
            endif;
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
