<?php
/**
 * Extends basic functionality for better TM Mega Menu compatibility
 *
 * @package Voodioo
 */

/**
 * Check if Mega Menu plugin is activated.
 *
 * @return bool
 */
function voodioo_is_mega_menu_active() {
	return class_exists( 'tm_mega_menu' );
}

add_filter( 'voodioo_theme_script_variables', 'voodioo_pass_mega_menu_vars' );

/**
 * Pass Mega Menu variables.
 *
 * @param  array  $vars Variables array.
 * @return array
 */
function voodioo_pass_mega_menu_vars( $vars = array() ) {

	if ( ! voodioo_is_mega_menu_active() ) {
		return $vars;
	}

	$vars['megaMenu'] = array(
		'isActive' => true,
		'location' => get_option( 'tm-mega-menu-location' ),
	);

	return $vars;
}
