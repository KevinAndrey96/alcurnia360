<?php
/**
 * Plugin Name: Disable comments (site-wide, protocol mu-plugin)
 * Description: Comments, pingbacks and trackbacks are switched off for the whole site: no form, no REST endpoint, no comment feeds, no admin menu. Generic for every WordPress site (scripts/disable-comments.php).
 * Version: 1.0
 * WooCommerce product reviews are blocked too (owner's rule). The DISABLE_COMMENTS_EXEMPT constant exists only for a decision of the owner for a specific site; it is NOT used by default.
 */
defined( 'ABSPATH' ) || exit;

function dc_exempt( $type ) { return defined( 'DISABLE_COMMENTS_EXEMPT' ) && in_array( $type, (array) DISABLE_COMMENTS_EXEMPT, true ); }

// 1) No post type supports comments or trackbacks.
add_action( 'init', function () {
	foreach ( get_post_types() as $t ) {
		if ( dc_exempt( $t ) ) { continue; }
		if ( post_type_supports( $t, 'comments' ) ) { remove_post_type_support( $t, 'comments' ); remove_post_type_support( $t, 'trackbacks' ); }
	}
}, 100 );

// 2) Always closed, and nothing is shown for existing comments.
add_filter( 'comments_open', function ( $open, $post_id ) { $p = get_post( $post_id ); return ( $p && dc_exempt( $p->post_type ) ) ? $open : false; }, 20, 2 );
add_filter( 'pings_open', '__return_false', 20 );
add_filter( 'comments_array', function ( $c, $post_id ) { $p = get_post( $post_id ); return ( $p && dc_exempt( $p->post_type ) ) ? $c : array(); }, 20, 2 );
add_filter( 'get_comments_number', function ( $n, $post_id ) { $p = get_post( $post_id ); return ( $p && dc_exempt( $p->post_type ) ) ? $n : 0; }, 20, 2 );

// 3) A direct POST to wp-comments-post.php is refused (the file is also denied in .htaccess).
add_action( 'pre_comment_on_post', function ( $post_id ) { $p = get_post( $post_id ); if ( ! ( $p && dc_exempt( $p->post_type ) ) ) { wp_die( 'Comments are closed.', 'Comments closed', array( 'response' => 403 ) ); } } );

// 4) REST API and XML-RPC: no comment endpoints / methods.
add_filter( 'rest_endpoints', function ( $e ) { foreach ( array_keys( $e ) as $r ) { if ( 0 === strpos( $r, '/wp/v2/comments' ) ) { unset( $e[ $r ] ); } } return $e; } );
add_filter( 'xmlrpc_methods', function ( $m ) { unset( $m['wp.newComment'], $m['wp.getCommentCount'], $m['pingback.ping'], $m['pingback.extensions.getPingbacks'] ); return $m; } );
add_filter( 'wp_headers', function ( $h ) { unset( $h['X-Pingback'] ); return $h; } );

// 5) Comment feeds redirect to the home page; no discussion screens in the admin.
add_action( 'template_redirect', function () { if ( is_comment_feed() ) { wp_safe_redirect( home_url( '/' ), 301 ); exit; } } );
add_action( 'admin_menu', function () { remove_menu_page( 'edit-comments.php' ); remove_submenu_page( 'options-general.php', 'options-discussion.php' ); }, 999 );
add_action( 'admin_init', function () {
	global $pagenow;
	if ( in_array( $pagenow, array( 'edit-comments.php', 'options-discussion.php' ), true ) ) { wp_safe_redirect( admin_url() ); exit; }
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
} );
add_action( 'admin_bar_menu', function ( $bar ) { $bar->remove_node( 'comments' ); }, 999 );
add_action( 'wp_before_admin_bar_render', function () { global $wp_admin_bar; if ( $wp_admin_bar ) { $wp_admin_bar->remove_menu( 'comments' ); } } );
