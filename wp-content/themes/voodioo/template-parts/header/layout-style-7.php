<?php
/**
 * Template part for style-7 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

$vertical_menu_slide = ( ! is_rtl() ) ? 'right' : 'left';
$search_visible      = get_theme_mod( 'header_search', voodioo_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">
	<?php voodioo_vertical_main_menu( $vertical_menu_slide ); ?>
	<div class="row row-md-center">
		<div class="col-xs-12 col-sm-3">
			<?php voodioo_vertical_menu_toggle( 'main-menu' ); ?>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="site-branding">
				<?php voodioo_header_logo() ?>
				<?php voodioo_site_description(); ?>
			</div>
		</div>
		<?php if ( $search_visible || has_action( 'voodioo_header_woo_cart' ) ) : ?>
		<div class="col-xs-12 col-sm-3">
			<div class="header-components"><?php
				voodioo_header_search_toggle();
				do_action( 'voodioo_header_woo_cart' );
			?></div>
		</div>
		<?php endif; ?>
	</div>
	<?php voodioo_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
</div>
