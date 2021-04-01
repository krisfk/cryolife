<?php
/**
 * Menu Template Functions.
 *
 * @package Voodioo
 */

/**
 * Get main menu.
 *
 * @since  1.0.0
 * @return string
 */
function voodioo_get_main_menu() {
	$args = apply_filters( 'voodioo_main_menu_args', array(
		'theme_location'   => 'main',
		'container'        => '',
		'menu_id'          => 'main-menu',
		'echo'             => false,
		'fallback_cb'      => 'voodioo_set_nav_menu',
		'fallback_message' => esc_html__( 'Set main menu', 'voodioo' ),
	) );

	return wp_nav_menu( $args );
}

/**
 * Show main menu.
 * 
 * @since  1.0.0
 * @return void
 */
function voodioo_main_menu() {

	$main_menu = voodioo_get_main_menu();

	printf( '<nav id="site-navigation" class="main-navigation" role="navigation">%s</nav><!-- #site-navigation -->', $main_menu );
}

/**
 * Show vertical main menu.
 *
 * @param string $slide Slide type: left or right.
 * @param array  $args  Arguments.
 *
 * @since  1.0.0
 * @return void
 */
function voodioo_vertical_main_menu( $slide = 'left', $args = array() ) {

	$default_args = apply_filters( 'voodioo_vertical_menu_args', array(
		'container-class'         => 'vertical-menu',
		'navigation-buttons-html' => '<div class="main-navigation-buttons"><span class="navigation-button back hide">%1$s</span><span class="navigation-button close">%2$s</span></div>',
		'button-back-inner-html'  => '<i class="nc-icon-outline arrows-3_square-simple-left"></i><span class="navigation-button__text">' . esc_html__( 'Back', 'voodioo' ) . '</span>',
		'button-close-inner-html' => '<i class="nc-icon-outline ui-1_simple-remove"></i><span class="navigation-button__text">' . esc_html__( 'Close', 'voodioo' ) . '</span>',
	) );

	$args        = wp_parse_args( $args, $default_args );
	$menu        = voodioo_get_main_menu();
	$slide_class = sprintf( 'slide--%s', sanitize_html_class( $slide ) );
	$nav_btns    = sprintf( $args['navigation-buttons-html'], $args['button-back-inner-html'], $args['button-close-inner-html'] );

	printf( '<nav id="site-navigation" class="main-navigation %1$s %2$s" role="navigation">%3$s%4$s</nav>', $args['container-class'], $slide_class, $nav_btns, $menu  );
}

/**
 * Show footer menu.
 *
 * @since  1.0.0
 * @return void
 */
function voodioo_footer_menu() {
	if ( ! get_theme_mod( 'footer_menu_visibility', voodioo_theme()->customizer->get_default( 'footer_menu_visibility' ) ) ) {
		return;
	}

	$args = apply_filters( 'voodioo_footer_menu_args', array(
		'theme_location'   => 'footer',
		'container'        => '',
		'menu_id'          => 'footer-menu-items',
		'menu_class'       => 'footer-menu__items',
		'depth'            => 1,
		'echo'             => false,
		'fallback_cb'      => 'voodioo_set_nav_menu',
		'fallback_message' => esc_html__( 'Set footer menu', 'voodioo' ),
	) );

	printf('<nav id="footer-navigation" class="footer-menu" role="navigation">%s</nav><!-- #footer-navigation -->', wp_nav_menu( $args ) );
}

/**
 * Show top page menu if active.
 *
 * @since  1.0.0
 * @return void
 */
function voodioo_top_menu() {
	
	if ( ! voodioo_is_top_menu_visible() ) {
		return;
	}

	wp_nav_menu( apply_filters( 'voodioo_top_menu_args', array(
		'theme_location'  => 'top',
		'container'       => 'div',
		'container_class' => 'top-panel__menu',
		'menu_class'      => 'top-panel__menu-list inline-list',
		'depth'           => 1,
	) ) );
}

/**
 * Check visibility top menu.
 *
 * @return bool
 */
function voodioo_is_top_menu_visible() {

	$is_visible = false;

	if ( has_nav_menu( 'top' ) && get_theme_mod( 'top_menu_visibility', voodioo_theme()->customizer->get_default( 'top_menu_visibility' ) ) ) {
		$is_visible = true;
	}

	return $is_visible;
}

/**
 * Get social nav menu.
 *
 * @since  1.0.0
 * @since  1.0.0  Added new param - $item.
 * @since  1.0.1  Added arguments to the filter.
 * @param  string $context Current post context - 'single' or 'loop'.
 * @param  string $type    Content type - icon, text or both.
 * @return string
 */
function voodioo_get_social_list( $context, $type = 'icon' ) {
	static $instance = 0;
	$instance++;

	$container_class = array( 'social-list' );

	if ( ! empty( $context ) ) {
		$container_class[] = sprintf( 'social-list--%s', sanitize_html_class( $context ) );
	}

	$container_class[] = sprintf( 'social-list--%s', sanitize_html_class( $type ) );

	$args = apply_filters( 'voodioo_social_list_args', array(
		'theme_location'   => 'social',
		'container'        => 'div',
		'container_class'  => join( ' ', $container_class ),
		'menu_id'          => "social-list-{$instance}",
		'menu_class'       => 'social-list__items inline-list',
		'depth'            => 1,
		'link_before'      => ( 'icon' == $type ) ? '<span class="screen-reader-text">' : '',
		'link_after'       => ( 'icon' == $type ) ? '</span>' : '',
		'echo'             => false,
		'fallback_cb'      => 'voodioo_set_nav_menu',
		'fallback_message' => esc_html__( 'Set social menu', 'voodioo' ),
	), $context, $type );

	return wp_nav_menu( $args );
}

/**
 * Set fallback callback for nav menu.
 *
 * @param  array $args Nav menu arguments.
 * @return null|string
 */
function voodioo_set_nav_menu( $args ) {

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return null;
	}

	$format = '<div class="set-menu %3$s"><a href="%2$s" target="_blank" class="set-menu_link">%1$s</a></div>';
	$label  = $args['fallback_message'];
	$url    = esc_url( admin_url( 'nav-menus.php' ) );

	return sprintf( $format, $label, $url, $args['container_class'] );
}

/**
 * Show menu button.
 *
 * @since  1.1.0
 * @param  string $menu_id Menu ID.
 * @return void
 */
function voodioo_menu_toggle( $menu_id ) {
	$format = apply_filters(
		'voodioo_menu_toggle_html',
		'<button class="main-menu-toggle menu-toggle" aria-controls="%s" aria-expanded="false"><span class="menu-toggle-box"><span class="menu-toggle-inner"></span></span></button>'
	);

	printf( $format, $menu_id );
}

/**
 * Show vertical menu button.
 *
 * @since  1.1.0
 * @param  string $menu_id Menu ID.
 * @return void
 */
function voodioo_vertical_menu_toggle( $menu_id ) {
	$format = apply_filters(
		'voodioo_vertical_menu_toggle_html',
		'<button class="vertical-menu-toggle menu-toggle" aria-controls="%s" aria-expanded="false"><span class="menu-toggle-box"><span class="menu-toggle-inner"></span></span></button>'
	);

	printf( $format, $menu_id );
}
