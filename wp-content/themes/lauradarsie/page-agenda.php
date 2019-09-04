<?php
/* Template Name: Event list */ 

get_header();
?>

	<div id="primary" class="content-area content-squared">
		<main id="main" class="site-main">
            
            <header class="page-header">
                <h1 class="page-title"><?php the_title();?>tt</h1>
            </header><!-- .page-header -->


        <?php
        $today = date('m/d/Y h:i:s a', time());
        echo 'aaaaaaa';
        print_r($today);
        ?>
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'DESC',
        );
        
        $args_agenda = array(
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'DESC',
            'meta_query'        => array(
                                    array(
                                    'key'     => 'evento_data_inizio',
                                    'value'   => strtotime( 'today' ),
                                    'compare' => '<'
                                    )
                                )
        );

        $args_archivio = array(
            'post_type'         => array( 'ldarsie_eventi' ),
            'post_status'       => array( 'publish' ),
            'orderby'           => 'evento_data_inizio',
            'order'             => 'DESC',
            'meta_query'        => array(
                                    array(
                                    'key'     => 'evento_data_inizio',
                                    'value'   => strtotime( 'today' ),
                                    'compare' => '>'
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
                // do something
                get_template_part( 'template-parts/archive', 'ldarsie_eventi' );
            }
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
