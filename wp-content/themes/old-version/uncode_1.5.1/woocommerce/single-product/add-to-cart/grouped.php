<?php
/**
 * Grouped product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $post;

$parent_product_post = $post;

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart" method="post" enctype='multipart/form-data'>
	<table cellspacing="0" class="group_table">
		<tbody>
			<?php
				$quantites_required = false;

				foreach ( $grouped_products as $grouped_product ) :
					$product_id = $grouped_product->get_id();
					$product = wc_get_product( $product_id );

					if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) && ! $product->is_in_stock() ) {
						continue;
					}

					$post = get_post( $product_id );
					$quantites_required = $quantites_required || $grouped_product->is_purchasable();

					setup_postdata( $GLOBALS['post'] =& $post );
					?>
					<tr>
						<td class="item_total">
							<?php if ( $grouped_product->is_sold_individually() || ! $grouped_product->is_purchasable() ) : ?>
								<?php woocommerce_template_loop_add_to_cart(); ?>
							<?php else : ?>
								<?php
									woocommerce_quantity_input( array( 'input_name' => 'quantity[' . $product_id . ']', 'input_value' => '0', 'min_value' => apply_filters( 'woocommerce_quantity_input_min', 0, $product ), 'max_value' => apply_filters( 'woocommerce_quantity_input_max', $grouped_product->backorders_allowed() ? '' : $grouped_product->get_stock_quantity(), $product ) ) );
								?>
							<?php endif; ?>
						</td>

						<td class="label">
							<label for="product-<?php echo esc_attr($product_id); ?>">
								<?php
								if ($grouped_product->is_visible()) echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
								else get_the_title(); ?>
							</label>
						</td>

						<?php do_action ( 'woocommerce_grouped_product_list_before_price', $product ); ?>

						<td class="price">
							<?php
								echo wp_kses_post($product->get_price_html());

								if ( $availability = $product->get_availability() ) {
									$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';
									echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
								}
							?>
						</td>
					</tr>
					<?php
				endforeach;

				// Reset to parent grouped product
				$post = $parent_product_post;
				$product = wc_get_product( $parent_product_post->ID );
				setup_postdata( $parent_product_post );
			?>
		</tbody>
	</table>

	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />

	<?php if ( $quantites_required ) : ?>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<button type="submit" class="single_add_to_cart_button btn btn-default alt"><?php echo wp_kses_post($product->single_add_to_cart_text()); ?></button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<?php endif; ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>