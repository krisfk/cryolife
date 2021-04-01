<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Voodioo
 */
?>

<div <?php voodioo_footer_container_class(); ?>>
	<div class="site-info container">
		<div class="site-info-wrap">
			<div class="site-info-block"><?php
				voodioo_footer_logo();
				voodioo_footer_copyright();
			?></div>
			<?php voodioo_footer_menu(); ?>
			<div class="site-info-block"><?php
				voodioo_contact_block( 'footer' );
				voodioo_social_list( 'footer' );
			?></div>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
