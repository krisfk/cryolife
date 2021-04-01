<?php
/**
 * Thumbnails configuration.
 *
 * @package Voodioo
 */

add_action( 'after_setup_theme', 'voodioo_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function voodioo_register_image_sizes() {
	set_post_thumbnail_size( 418, 315, true );

	// Registers a new image sizes.
	add_image_size( 'voodioo-thumb-s', 150, 150, true );
	add_image_size( 'voodioo-thumb-s-2', 184, 141, true );
	add_image_size( 'voodioo-thumb-m', 400, 400, true );
	add_image_size( 'voodioo-thumb-m-2', 650, 490, true );
	add_image_size( 'voodioo-thumb-l', 886, 508, true );
	add_image_size( 'voodioo-thumb-l-2', 886, 315, true );
	add_image_size( 'voodioo-thumb-xl', 1354, 508, true );
	add_image_size( 'voodioo-thumb-2x', 1920, 720, true );

	add_image_size( 'voodioo-thumb-masonry', 418, 9999 );
	add_image_size( 'voodioo-thumb-masonry-project',520, 9999 );

	add_image_size( 'voodioo-slider-thumb', 158, 88, true );
	add_image_size( 'voodioo-author-avatar', 512, 512, true );
	add_image_size( 'voodioo-team-photo', 448, 448, true ); // use in Cherry Team Settings.


	add_image_size( 'voodioo-woo-cart-product-thumb', 141, 188, true );
	add_image_size( 'voodioo-thumb-listing-line-product', 418, 560, true );

	add_image_size( 'voodioo-thumb-301-226', 301, 226, true );
	add_image_size( 'voodioo-thumb-480-362', 480, 362, true );
	add_image_size( 'voodioo-thumb-1355-1020', 1355, 1020, true );
}
