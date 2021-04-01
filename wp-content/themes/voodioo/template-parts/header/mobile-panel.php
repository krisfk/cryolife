<?php
/**
 * Template part for mobile panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */
?>
<div class="mobile-panel invert">
	<div class="mobile-panel__inner">
		<?php voodioo_menu_toggle( 'main-menu' ); ?>
		<div class="header-components">
			<?php voodioo_header_search_toggle(); ?>
			<?php do_action( 'voodioo_header_woo_cart' ) ?>
		</div>
	</div>
	<?php voodioo_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
</div>
