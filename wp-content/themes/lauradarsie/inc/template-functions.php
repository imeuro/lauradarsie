<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package darsie
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lauradarsie_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'lauradarsie_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function lauradarsie_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'lauradarsie_pingback_header' );




// Add to existing function.php file
// Disable support for comments and trackbacks in post types
function ldarsie_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'ldarsie_disable_comments_post_types_support');
// Close comments on the front-end
function ldarsie_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'ldarsie_disable_comments_status', 20, 2);
add_filter('pings_open', 'ldarsie_disable_comments_status', 20, 2);
// Hide existing comments
function ldarsie_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'ldarsie_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function ldarsie_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'ldarsie_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function ldarsie_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'ldarsie_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function ldarsie_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'ldarsie_disable_comments_dashboard');
// Remove comments links from admin bar
function ldarsie_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'ldarsie_disable_comments_admin_bar');