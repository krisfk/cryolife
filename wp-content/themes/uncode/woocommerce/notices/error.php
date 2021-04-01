<?php
/**
 * Show error messages
 *
 * @package 	WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

$class = is_product() ? ' limit-width double-top-padding no-bottom-padding' : ' no-h-padding no-top-padding double-bottom-padding';

?>
<div class="woocommerce-error row-container row-message">
	<div class="row-parent<?php echo esc_attr($class); ?>">
		<ul class="woocommerce-error-list woocommerce-error" role="alert">
			<?php foreach ( $messages as $message ) : ?>
				<li<?php echo function_exists( 'wc_get_notice_data_attr' ) ? wc_get_notice_data_attr( $message ) : ''; ?>><?php echo wp_kses_post( $message ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
