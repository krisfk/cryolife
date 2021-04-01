<?php
/**
 * Template part for style-3 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

$vertical_menu_slide = ( ! is_rtl() ) ? 'left' : 'right';
?>
<div class="header-container_wrap container">
	<?php voodioo_vertical_main_menu( $vertical_menu_slide ); ?>
	<div class="header-container__flex">
		<div class="site-branding">
			<?php voodioo_header_logo() ?>
			<?php voodioo_site_description(); ?>
		</div>

		<div class="header-components"><?php
			voodioo_header_search_toggle();
			do_action( 'voodioo_header_woo_cart' );
			voodioo_vertical_menu_toggle( 'main-menu' );
		?></div>
	</div>
	<?php voodioo_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
</div>
