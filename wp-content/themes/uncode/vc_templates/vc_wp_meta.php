<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $live_search
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Wp_Search
 */
$title = $el_id = $el_class = $live_search = '';
$output = '';

extract(shortcode_atts(array(
	'title' => '',
	'hide_title' => '',
	'el_id' => '',
	'el_class' => '',
), $atts));

if ( $hide_title === 'yes' ) {
	$atts['title'] = '!';
}

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

$el_class = $this->getExtraClass( $el_class );

$output = '<div class="vc_wp_meta wpb_content_element' . esc_attr( $el_class ) . '" ' . $el_id . '>';
$type = 'WP_Widget_Meta';
$args = array();
global $wp_widget_factory;
// to avoid unwanted warnings let's check before using widget
if ( is_object( $wp_widget_factory ) && isset( $wp_widget_factory->widgets, $wp_widget_factory->widgets[ $type ] ) ) {
	ob_start();
	the_widget( $type, $atts, $args );
	$output .= ob_get_clean();
	$output .= '</div>';

	echo uncode_switch_stock_string( $output );
}
