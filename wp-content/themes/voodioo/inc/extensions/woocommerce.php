<?php
/**
 * Extends basic functionality for better Woocommerce compatibility
 *
 * @package Voodioo
 */

/**
 * Check if Woocommerce plugin is activated.
 */
function voodioo_is_woocommerce_activated() {
	return class_exists( 'woocommerce' );
}

add_filter( 'voodioo_queried_object_id', 'voodioo_woo_set_shop_page' );

/**
 * Allow to rewrite shop page layout from page options
 *
 * @param  int $id Current page ID.
 * @return int
 */
function voodioo_woo_set_shop_page( $id ) {

	if ( ! function_exists( 'is_shop' ) || ! function_exists( 'wc_get_page_id' ) ) {
		return $id;
	}

	if ( ! is_shop() && ! is_tax( 'product_cat' ) && ! is_tax( 'product_tag' ) ) {
		return $id;
	}

	$page_id = wc_get_page_id( 'shop' );

	return $page_id;
}
