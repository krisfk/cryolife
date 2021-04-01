<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Voodioo
 */

$btn_style_preset = get_theme_mod( 'page_404_btn_style_preset', voodioo_theme()->customizer->get_default( 'page_404_btn_style_preset' ) );
$text_color       = get_theme_mod( 'page_404_text_color', voodioo_theme()->customizer->get_default( 'page_404_text_color' ) );
$additional_class = ( 'light' === $text_color ) ? 'invert' : 'regular';
?>
<section class="error-404 not-found <?php echo $additional_class; ?>">
	<header class="page-header">
		<h1 class="page-title screen-reader-text"><?php esc_html_e( '404', 'voodioo' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<h2><?php esc_html_e( 'Page Not Found.', 'voodioo' ); ?></h2>
		<p><?php esc_html_e( 'Unfortunately the page you were looking for could not be found.', 'voodioo' ); ?></p>
		<p><a class="btn btn-<?php echo sanitize_html_class( $btn_style_preset ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go home!', 'voodioo' ); ?></a></p>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
