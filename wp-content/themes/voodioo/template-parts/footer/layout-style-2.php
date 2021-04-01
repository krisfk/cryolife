<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package Voodioo
 */
?>

<div <?php voodioo_footer_container_class(); ?>>
	<div class="site-info container"><?php
		voodioo_footer_logo();
		voodioo_footer_menu();
		voodioo_contact_block( 'footer' );
		voodioo_social_list( 'footer' );
		voodioo_footer_copyright();
	?></div><!-- .site-info -->
</div><!-- .container -->
