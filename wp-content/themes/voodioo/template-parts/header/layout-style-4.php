<?php
/**
 * Template part for style-4 header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

$search_visible = get_theme_mod( 'header_search', voodioo_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php voodioo_header_logo() ?>
			<?php voodioo_site_description(); ?>
		</div>

		<div class="header-nav-wrapper">
			<?php voodioo_main_menu(); ?>

			<?php if ( $search_visible || has_action( 'voodioo_header_woo_cart' ) ) : ?>
			<div class="header-components"><?php
				voodioo_header_search_toggle();
				do_action( 'voodioo_header_woo_cart' );
			?></div>
			<?php endif; ?>
		</div>
	</div>
	<?php voodioo_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
</div>
