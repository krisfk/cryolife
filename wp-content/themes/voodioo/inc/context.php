<?php
/**
 * Contextual functions for the header, footer, content and sidebar classes.
 *
 * @package Voodioo
 */

/**
 * Contain utility module from Cherry framework
 *
 * @since  1.0.0
 * @return object
 */
function voodioo_utility() {
	return voodioo_theme()->get_core()->modules['cherry-utility'];
}

/**
 * Get html attribute - class.
 *
 * @param array  $classes      CSS classes.
 * @param string $color_option Customizer color option.
 *
 * @return string
 */
function voodioo_get_html_attr_class ( $classes = array(), $color_option = null ) {

	if ( $color_option ) {
		$color = get_theme_mod( $color_option, voodioo_theme()->customizer->get_default( $color_option ) );

		if ( 'dark' === voodioo_hex_color_is_light_or_dark( $color ) && $color ) {
			$classes[] = 'invert';
		}
	}

	return 'class="' . join( ' ', $classes ) . '"';
}

/**
 * Prints site header CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_header_class( $classes = array() ) {
	$classes[] = 'site-header';
	$classes[] = get_theme_mod( 'header_layout_type', voodioo_theme()->customizer->get_default( 'header_layout_type' ) );

	if ( get_theme_mod( 'header_transparent_layout', voodioo_theme()->customizer->get_default( 'header_transparent_layout' ) ) ) {
		$classes[] = 'transparent';
	}

	echo voodioo_get_container_classes( $classes, 'header' );
}

/**
 * Prints site header container CSS classes
 *
 * @since   1.0.0
 * @param   array $classes Additional classes.
 * @return  void
 */
function voodioo_header_container_class( $classes = array() ) {
	$classes[] = 'header-container';

	if ( get_theme_mod( 'header_transparent_layout', voodioo_theme()->customizer->get_default( 'header_transparent_layout' ) ) ) {
		$classes[] = 'transparent';
	}

	if ( get_theme_mod( 'header_invert_color_scheme', voodioo_theme()->customizer->get_default( 'header_invert_color_scheme' ) ) ) {
		$classes[] = 'invert';
	}

	echo 'class="' . join( ' ', $classes ) . '"';
}

/**
 * Prints site content CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_content_class( $classes = array() ) {
	$classes[] = 'site-content';

	echo 'class="' . join( ' ', $classes ) . '"';
}

/**
 * Prints site content wrap CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_content_wrap_class( $classes = array() ) {
	$classes[] = 'site-content_wrap';

	echo voodioo_get_container_classes( $classes, 'content' );
}

/**
 * Prints site footer CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_footer_class( $classes = array() ) {
	$classes[] = 'site-footer';
	$classes[] = get_theme_mod( 'footer_layout_type' );

	if ( voodioo_widget_area()->is_active_sidebar( 'after-content-full-width-area' ) ) {
		$classes[] = 'before-full-width-area';
	}

	echo voodioo_get_container_classes( $classes, 'footer' );
}

/**
 * Prints footer container CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_footer_container_class( $classes = array() ) {
	$classes[] = 'footer-container';

	$footer_bg = get_theme_mod( 'footer_bg', voodioo_theme()->customizer->get_default( 'footer_bg' ) );

	if ( 'dark' === voodioo_hex_color_is_light_or_dark( $footer_bg ) ) {
		$classes[] = 'invert';
	}

	echo 'class="' . join( ' ', $classes ) . '"';
}

/**
 * Retrieve a CSS class attribute for container based on `Page Layout Type` option.
 *
 * @since  1.0.0
 * @param  array  $classes Additional classes.
 * @param  string $target
 * @return string
 */
function voodioo_get_container_classes( $classes, $target = 'content' ) {

	$layout_type = get_theme_mod( $target . '_container_type' );

	if ( 'boxed' == $layout_type ) {
		$classes[] = 'container';
	}

	return 'class="' . join( ' ', $classes ) . '"';
}

/**
 * Prints primary content wrapper CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function voodioo_primary_content_class( $classes = array() ) {
	echo voodioo_get_layout_classes( 'content', $classes );
}

/**
 * Get CSS class attribute for passed layout context.
 *
 * @since  1.0.0
 * @param  string $layout  Layout context.
 * @param  array  $classes Additional classes.
 * @return string
 */
function voodioo_get_layout_classes( $layout = 'content', $classes = array() ) {
	$sidebar_position = get_theme_mod( 'sidebar_position' );
	$sidebar_width    = get_theme_mod( 'sidebar_width' );

	if ( 'fullwidth' === $sidebar_position ) {
		$sidebar_width = 0;
	}

	$layout_classes = ! empty( voodioo_theme()->layout[ $sidebar_position ][ $sidebar_width ][ $layout ] ) ? voodioo_theme()->layout[ $sidebar_position ][ $sidebar_width ][ $layout ] : array();

	$layout_classes = apply_filters( "voodioo_{$layout}_classes", $layout_classes );

	if ( ! empty( $classes ) ) {
		$layout_classes = array_merge( $layout_classes, $classes );
	}

	if ( empty( $layout_classes ) ) {
		return '';
	}

	return 'class="' . join( ' ', $layout_classes ) . '"';
}

/**
 * Retrieve or print `class` attribute for Post List wrapper.
 *
 * @since  1.0.0
 * @param  array   $classes Additional classes.
 * @param  boolean $echo    True for print. False - return.
 * @return string|void
 */
function voodioo_posts_list_class( $classes = array(), $echo = true ) {
	$layout_type         = get_theme_mod( 'blog_layout_type', voodioo_theme()->customizer->get_default( 'blog_layout_type' ) );
	$layout_type         = ! is_search() ? $layout_type : 'search';
	$columns             = get_theme_mod( 'blog_layout_columns', voodioo_theme()->customizer->get_default( 'blog_layout_columns' ) );
	$sidebar_position    = get_theme_mod( 'sidebar_position', voodioo_theme()->customizer->get_default( 'sidebar_position' ) );
	$blog_content        = get_theme_mod( 'blog_posts_content', voodioo_theme()->customizer->get_default( 'blog_posts_content' ) );
	$blog_featured_image = get_theme_mod( 'blog_featured_image', voodioo_theme()->customizer->get_default( 'blog_featured_image' ) );

	$classes[] = 'posts-list';
	$classes[] = 'posts-list--' . sanitize_html_class( $layout_type );
	$classes[] = 'content-' . sanitize_html_class( $blog_content );
	$classes[] = sanitize_html_class( $sidebar_position );

	if ( 'grid' === $layout_type ) {
		$classes[] = 'card-deck';
	}

	if ( 'masonry' === $layout_type ) {
		$classes[] = 'card-columns';
	}

	if ( in_array( $layout_type, array( 'grid', 'masonry' ) ) ) {
		$classes[] = sprintf( 'posts-list--%1$s-%2$s', sanitize_html_class( $layout_type ), sanitize_html_class( $columns ) );
	}

	if ( 'default' === $layout_type ) {
		$classes[] = sprintf( 'posts-list--%1$s-%2$s-image', sanitize_html_class( $layout_type ), sanitize_html_class( $blog_featured_image ) );
	}

	$sidebars = array(
		'full-width-header-area',
		'before-content-area',
		'before-loop-area',
	);

	$has_sidebars = false;

	foreach ( $sidebars as $sidebar ) {
		if ( voodioo_widget_area()->is_active_sidebar( $sidebar ) ) {
			$has_sidebars = true;
		}
	}

	if ( ! $has_sidebars && is_home() ) {
		$classes[] = 'no-sidebars-before';
	}

	$classes = apply_filters( 'voodioo_posts_list_class', $classes );

	$output = 'class="' . join( ' ', $classes ) . '"';

	if ( ! $echo ) {
		return $output;
	}

	echo $output;
}
