<?php
/**
 * Widget functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Override WC price filter widget
 */
function uncode_core_override_woocommerce_widgets() {
	if ( class_exists( 'WC_Widget_Price_Filter' ) ) {
		unregister_widget( 'WC_Widget_Price_Filter' );
		include_once UNCODE_CORE_PLUGIN_DIR . '/incldues/widgets/widget-price_filter.php';
		register_widget( 'Uncode_WC_Widget_Price_Filter' );
	}
}
add_action( 'widgets_init', 'uncode_core_override_woocommerce_widgets', 15 );
