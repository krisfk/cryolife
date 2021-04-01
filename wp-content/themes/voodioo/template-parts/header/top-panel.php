<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

// Don't show top panel if all elements are disabled.
if ( ! voodioo_is_top_panel_visible() ) {
	return;
}
?>

<div <?php echo voodioo_get_html_attr_class( array( 'top-panel' ), 'top_panel_bg' ); ?>>
	<div class="container">
		<div class="top-panel__container">
			<?php voodioo_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			<?php voodioo_contact_block( 'header' ); ?>

			<div class="top-panel__wrap-items">
				<div class="top-panel__menus">
					<?php voodioo_top_menu(); ?>
					<?php voodioo_social_list( 'header' ); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
