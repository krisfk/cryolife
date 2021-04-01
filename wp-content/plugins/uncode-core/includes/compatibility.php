<?php
/**
 * Third-party related functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Translate content for qTranslate.
 */
function uncode_core_qtranslate_support( $content ) {
	if ( function_exists( 'qtranxf_getLanguage' ) ) {
		return __( $content );
	} else {
		return $content;
	}
}
add_filter( 'uncode_filter_for_translation', 'uncode_core_qtranslate_support' );

/**
 * Remove Jetpack related posts from content.
 */
function jetpackme_remove_rp() {
	if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
		$jprp = Jetpack_RelatedPosts::init();
		$callback = array( $jprp, 'filter_add_target_to_dom' );
		remove_filter( 'the_content', $callback, 40 );
	}
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );
