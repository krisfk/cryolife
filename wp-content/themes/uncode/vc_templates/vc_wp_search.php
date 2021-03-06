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
	'live_search' => '',
	'el_id' => '',
	'el_class' => '',
), $atts));

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

$el_class = $this->getExtraClass( $el_class );

$output = '<div class="vc_wp_search wpb_content_element' . esc_attr( $el_class ) . (($live_search === 'yes') ? ' uncode-live-search' : '') . '" ' . $el_id . '>';
$type = 'WP_Widget_Search';
$args = array();
global $wp_widget_factory, $use_live_search;
// to avoid unwanted warnings let's check before using widget
if ( is_object( $wp_widget_factory ) && isset( $wp_widget_factory->widgets, $wp_widget_factory->widgets[ $type ] ) ) {
	ob_start();
	if ($live_search === 'yes') {
		$use_live_search = 'yes';
	} else {
		$use_live_search = 'no';
	}
	the_widget( $type, $atts, $args );
	$output .= ob_get_clean();
	$use_live_search = '';
	$output .= '</div>';

	echo uncode_switch_stock_string( $output );
} else {
	echo esc_html( $this->debugComment( 'Widget ' . $type . 'Not found in : vc_wp_search' ) );
}
// TODO: make more informative if wp is in debug mode
