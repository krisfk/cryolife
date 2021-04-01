<?php
/**
 * Menus configuration.
 *
 * @package Voodioo
 */

add_action( 'after_setup_theme', 'voodioo_register_menus', 5 );
/**
 * Register menus.
 */
function voodioo_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'voodioo' ),
		'main'         => esc_html__( 'Main', 'voodioo' ),
		'main_landing' => esc_html__( 'Landing Main', 'voodioo' ),
		'footer'       => esc_html__( 'Footer', 'voodioo' ),
		'social'       => esc_html__( 'Social', 'voodioo' ),
	) );
}
