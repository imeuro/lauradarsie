<?php

// Register Custom Post Type(s)
function ldarsie_CPT() {

	$labels = array(
		'name'                  => _x( 'Eventi', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Eventi', 'text_domain' ),
		'name_admin_bar'        => __( 'Eventi', 'text_domain' ),
		'archives'              => __( 'Archivio Eventi', 'text_domain' ),
		'attributes'            => __( 'Attributi Evento', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Evento', 'text_domain' ),
		'description'           => __( 'Calendario eventi', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'ldarsie_tipo_evento' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_rest'       => true, // To use Gutenberg editor.
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => array(
            'slug'                  => 'eventi',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        ),
	);
	register_post_type( 'ldarsie_eventi', $args );

}
add_action( 'init', 'ldarsie_CPT', 0 );



function rename_posts() {
    global $menu;
     
	$menu[5][0] = 'Psicanalisi della musica'; // Change Posts to Psicanalisi della musica
	$submenu['edit.php'][5][0] = 'Tutte gli Articoli';
    $submenu['edit.php'][10][0] = 'Aggiungi Articolo';
}
add_action( 'admin_menu', 'rename_posts' );









function ldarsie_pre_get_posts( $query ) {
	// do not modify queries in the admin
	if( is_admin() ) {	
		return $query;
	}
	// only modify queries for 'event' post type
	if( ( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'ldarsie_eventi' ) || ($query->is_main_query() && is_page('psicanalisi-della-musica') ) ) {	
		$currentdate = date('Y-m-d H:i:s');
		$query->set('orderby', 'meta_value');	
		$query->set('meta_key', 'evento_data_inizio');	 
		$query->set('order', 'DESC'); 	
		$query->set('type', 'DATETIME');
	}
	// return
	return $query;

}

add_action('pre_get_posts', 'ldarsie_pre_get_posts');




// Register Custom Taxonomy
function ldarsie_CT() {

	$labels = array(
		'name'                       => _x( 'Tipi evento', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipo evento', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tipo evento', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'ldarsie_tipo_evento', array( 'ldarsie_eventi' ), $args );

}
add_action( 'init', 'ldarsie_CT', 0 );




?>