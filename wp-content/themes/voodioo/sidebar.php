<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voodioo
 */
$sidebar_position = get_theme_mod( 'sidebar_position' );

if ( ! is_active_sidebar( 'sidebar' ) || 'fullwidth' === $sidebar_position ) {
	return;
}
?>

<?php do_action( 'voodioo_render_widget_area', 'sidebar' );
