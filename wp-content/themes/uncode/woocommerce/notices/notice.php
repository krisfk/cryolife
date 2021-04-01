<?php
/**
 * Show messages
 *
 * @package 	WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ) {
	return;
}

$class = is_product() ? ' limit-width double-top-padding no-bottom-padding' : ' no-h-padding no-top-padding double-bottom-padding';

?>

<?php foreach ( $messages as $message ) : ?>
	<div class="row-container row-message">
		<div class="row-parent<?php echo esc_attr($class); ?>">
			<div class="woocommerce-info border-accent-color"<?php echo function_exists( 'wc_get_notice_data_attr' ) ? wc_get_notice_data_attr( $message ) : ''; ?>><?php echo wp_kses_post( $message ); ?></div>
		</div>
	</div>
<?php endforeach; ?>
