<?php
/**
 * Template for displaying read more button
 *
 * @package Voodioo
 */
?>
<?php
	tm_builder_core()->utility()->attributes->get_button( array(
		'text'  => esc_html__( 'Read More', 'voodioo' ),
		'class' => 'more-link btn-link',
		'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
		'echo'  => true,
	) );
