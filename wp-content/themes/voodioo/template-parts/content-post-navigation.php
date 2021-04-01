<?php
/**
 * Template part for single post navigation.
 *
 * @package Voodioo
 */

if ( ! get_theme_mod( 'single_post_navigation', voodioo_theme()->customizer->get_default( 'single_post_navigation' ) ) ) {
	return;
}

the_post_navigation( array(
	'prev_text' => sprintf( '%1$s <span class="nav-text">%2$s</span>', '%title', esc_html__( 'Prev Post', 'voodioo' ) ),
	'next_text' => sprintf( '%1$s <span class="nav-text">%2$s</span>', '%title', esc_html__( 'Next Post', 'voodioo' ) ),
) );
