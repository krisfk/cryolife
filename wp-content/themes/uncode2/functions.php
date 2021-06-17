<?php

/**
 * uncode functions and definitions
 *
 * @package uncode
 */

$ok_php = true;
if ( function_exists( 'phpversion' ) ) {
	$php_version = phpversion();
	if (version_compare($php_version,'5.3.0') < 0) {
		$ok_php = false;
	}
}
if (!$ok_php && !is_admin()) {
	$title = esc_html__( 'PHP version obsolete','uncode' );
	$html = '<h2>' . esc_html__( 'Ooops, obsolete PHP version' ,'uncode' ) . '</h2>';
	$html .= '<p>' . sprintf( wp_kses( 'We have coded the Uncode theme to run with modern technology and we have decided not to support the PHP version 5.2.x just because we want to challenge our customer to adopt what\'s best for their interests.%sBy running obsolete version of PHP like 5.2 your server will be vulnerable to attacks since it\'s not longer supported and the last update was done the 06 January 2011.%sSo please ask your host to update to a newer PHP version for FREE.%sYou can also check for reference this post of WordPress.org <a href="https://wordpress.org/about/requirements/">https://wordpress.org/about/requirements/</a>' ,'uncode', array('a' => 'href') ), '</p><p>', '</p><p>', '</p><p>') . '</p>';

	wp_die( $html, $title, array('response' => 403) );
}

/**
 * Load core utilities functions.
 */
require_once get_template_directory() . '/core/inc/core-utilities.php';

/**
 * Install functions.
 */
require_once get_template_directory() . '/core/inc/install.php';

/**
 * Load the main functions.
 */
require_once get_template_directory() . '/core/inc/main.php';

/**
 * Load privacy functions
 */
require_once get_template_directory() . '/core/inc/privacy.php';

/**
 * Load API functions.
 */
require_once get_template_directory() . '/core/inc/api/loader.php';

/**
 * Load the admin functions.
 */
require_once get_template_directory() . '/core/inc/admin.php';

/**
 * Load the uncode export file.
 */
require_once get_template_directory() . '/core/inc/export/uncode_export.php';

/**
 * Load the color system.
 */
require_once get_template_directory() . '/core/inc/colors.php';

/**
 * Load TGM plugins activation.
 */
require_once get_template_directory() . '/core/plugins_activation/init.php';

/**
 * Load the media enhanced function.
 */
global $wp_version;
if ( version_compare( $wp_version, '5.3-RC', '>=' ) ) {
	require_once( ABSPATH . WPINC . '/class-wp-oembed.php' );
} else {
	require_once( ABSPATH . WPINC . '/class-oembed.php' );
}
require_once get_template_directory() . '/core/inc/media-enhanced.php';

/**
 * Load the bootstrap navwalker.
 */
require_once get_template_directory() . '/core/inc/wp-bootstrap-navwalker.php';

/**
 * Load the bootstrap navwalker.
 */
require_once get_template_directory() . '/core/inc/uncode-comment-walker.php';

/**
 * Load menu builder.
 */
if ($ok_php) {
	require_once get_template_directory() . '/partials/menus.php';
}

/**
 * Load header builder.
 */
if ($ok_php) {
	require_once get_template_directory() . '/partials/headers.php';
}

/**
 * Load elements partial.
 */
if ($ok_php) {
	require_once get_template_directory() . '/partials/elements.php';
}

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/core/inc/template-tags.php';

/**
 * Helpers functions.
 */
require_once get_template_directory() . '/core/inc/helpers.php';
require_once get_template_directory() . '/core/inc/adaptive-images.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/core/inc/customizer.php';

/**
 * Customizer WooCommerce additions.
 */
if (class_exists( 'WooCommerce' )) {
	require_once get_template_directory() . '/core/inc/customizer-woocommerce.php';
}

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/core/inc/jetpack.php';

/**
 * Load gallery functions
 */
require_once get_template_directory() . '/core/inc/galleries.php';

/**
 * Load third-party compatibility file.
 */
require_once get_template_directory() . '/core/inc/compatibility/compatibility.php';

/**
 * Related Posts functions.
 */
require_once get_template_directory() . '/core/inc/related-posts.php';

/**
 * Deprecated functions.
 */
require_once get_template_directory() . '/core/inc/deprecated-functions.php';


//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );
	
set_post_thumbnail_size(300, 300, true);



add_action( 'rest_api_init', function () {
	register_rest_route( 'api', '/abandon_sf', array(
	  'methods' => 'POST',
	  'callback' => 'abandon_sf_func',
	) );
  } );
  
  function abandon_sf_func($request)
  {

	// insert the post and set the category
$post_id = wp_insert_post(array (
    'post_type' => 'abandoned-users',
    'post_title' => 'abandoned-users',
    'post_status' => 'publish',
    'comment_status' => 'closed',   // if you prefer
    'ping_status' => 'closed',      // if you prefer
));

if ($post_id) {
    // add_post_meta($post_id, 'loan_type', $request->get_param( 'loan_type' ));
    // add_post_meta($post_id, 'customer_name', $request->get_param( 'customer_name' ));
    // add_post_meta($post_id, 'customer_tel', $request->get_param( 'customer_tel' ));
	// add_post_meta($post_id, 'customer_hkid', $request->get_param( 'customer_id_full' ));
	// add_post_meta($post_id, 'customer_dob', $request->get_param( 'customer_dob' ));
	// add_post_meta($post_id, 'where_from', $request->get_param( 'where_from' ));
	// add_post_meta($post_id, 'submission_date_time',current_time( 'mysql' )  );


	# PHP7+
	// $clientIP = $_SERVER['HTTP_CLIENT_IP'] 
	// ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
	// ?? $_SERVER['HTTP_X_FORWARDED'] 
	// ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
	// ?? $_SERVER['HTTP_FORWARDED'] 
	// ?? $_SERVER['HTTP_FORWARDED_FOR'] 
	// ?? $_SERVER['REMOTE_ADDR'] 
	// ?? '0.0.0.0';

	// # Earlier than PHP7
	// $clientIP = '0.0.0.0';

	// if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	// $clientIP = $_SERVER['HTTP_CLIENT_IP'];
	// } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	// # when behind cloudflare
	// $clientIP = $_SERVER['HTTP_CF_CONNECTING_IP']; 
	// } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	// $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
	// } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
	// $clientIP = $_SERVER['HTTP_X_FORWARDED'];
	// } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
	// $clientIP = $_SERVER['HTTP_FORWARDED_FOR'];
	// } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
	// $clientIP = $_SERVER['HTTP_FORWARDED'];
	// } elseif (isset($_SERVER['REMOTE_ADDR'])) {
	// $clientIP = $_SERVER['REMOTE_ADDR'];
	// }

	// add_post_meta($post_id, 'customer_ip', $clientIP);

	echo json_encode(array("status"=>"1", "msg"=>"Record was added"));

	
  }
}
  
  

// }