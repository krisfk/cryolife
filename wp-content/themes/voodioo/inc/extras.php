<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Voodioo
 */

/**
 * Sidebar position
 */
add_filter( 'theme_mod_sidebar_position', 'voodioo_set_post_meta_value' );

/**
 * Header container type
 */
add_filter( 'theme_mod_header_container_type', 'voodioo_set_post_meta_value' );

/**
 * Content container type
 */
add_filter( 'theme_mod_content_container_type', 'voodioo_set_post_meta_value' );

/**
 * Footer container type
 */
add_filter( 'theme_mod_footer_container_type', 'voodioo_set_post_meta_value' );

/**
 * Header layout type
 */
add_filter( 'theme_mod_header_layout_type', 'voodioo_set_post_meta_value' );

/**
 * Header transparent layout
 */
add_filter( 'theme_mod_header_transparent_layout', 'voodioo_pre_set_post_meta_value' );

/**
 * Header invert color scheme
 */
add_filter( 'theme_mod_header_invert_color_scheme', 'voodioo_pre_set_post_meta_value' );

/**
 * Enable/disable breadcrumbs
 */
add_filter( 'theme_mod_breadcrumbs_visibillity', 'voodioo_pre_set_post_meta_value' );

/**
 * Enable/disable top panel
 */
add_filter( 'theme_mod_top_panel_visibility', 'voodioo_pre_set_post_meta_value' );

/**
 * Enable/disable header contact block
 */
add_filter( 'theme_mod_header_contact_block_visibility', 'voodioo_pre_set_post_meta_value' );

/**
 * Enable/disable header search
 */
add_filter( 'theme_mod_header_search', 'voodioo_pre_set_post_meta_value' );

/**
 * Footer layout type
 */
add_filter( 'theme_mod_footer_layout_type', 'voodioo_set_post_meta_value' );

/**
 * Enable/disable footer widget area
 */
add_filter( 'theme_mod_footer_widget_area_visibility', 'voodioo_pre_set_post_meta_value' );

/**
 * Enable/disable footer contact block
 */
add_filter( 'theme_mod_footer_contact_block_visibility', 'voodioo_pre_set_post_meta_value' );


/**
 * Set post meta.
 */
function voodioo_pre_set_post_meta_value( $value ) {

	$value = voodioo_set_post_meta_value( $value );

	if ( 'inherit' !== $value  ) {
		return wp_validate_boolean( $value );
	}

	return $value;
}

/**
 * Set post specific meta value.
 *
 * @param  string $value Default meta-value.
 * @return string
 */
function voodioo_set_post_meta_value( $value ) {
	$queried_obj = voodioo_get_queried_obj();

	if ( ! $queried_obj ) {
		return $value;
	}

	$meta_key   = 'voodioo_' . str_replace( 'theme_mod_', '', current_filter() );
	$meta_value = get_post_meta( $queried_obj, $meta_key, true );

	if ( ! $meta_value || 'inherit' === $meta_value ) {
		return $value;
	}

	return $meta_value;
}

/**
 * Get queried object.
 *
 * @return string|boolean
 */
function voodioo_get_queried_obj() {
	$queried_obj = apply_filters( 'voodioo_queried_object_id', false );

	if ( ! $queried_obj && ! voodioo_maybe_need_rewrite_mod() ) {
		return false;
	}

	$queried_obj = is_home() ? get_option( 'page_for_posts' ) : $queried_obj;
	$queried_obj = ! $queried_obj ? get_the_id() : $queried_obj;

	return $queried_obj;
}

/**
 * Check if we need to try rewrite theme mod or not
 *
 * @return boolean
 */
function voodioo_maybe_need_rewrite_mod() {

	if ( ( is_front_page() && 'page' !== get_option( 'show_on_front' ) ) || ! is_singular() ) {
		return false;
	}

	if ( is_home() && 'page' == get_option( 'show_on_front' ) ) {
		return true;
	}

	return true;
}

/**
 * Render existing macros in passed string.
 *
 * @since  1.0.0
 * @param  string $string String to parse.
 * @return string
 */
function voodioo_render_macros( $string ) {

	static $macros;

	if ( ! $macros ) {
		$macros = apply_filters( 'voodioo_data_macros', array(
			'/%%year%%/'      => date( 'Y' ),
			'/%%date%%/'      => date( get_option( 'date_format' ) ),
			'/%%site-name%%/' => get_bloginfo( 'name' ),
			'/%%home_url%%/'  => esc_url( home_url( '/' ) ),
			'/%%theme_url%%/' => get_stylesheet_directory_uri(),
		) );
	}

	return preg_replace( array_keys( $macros ), array_values( $macros ), $string );
}

/**
 * Render font icons in content
 *
 * @param  string $content Content to render.
 * @return string
 */
function voodioo_render_icons( $content ) {
	$icons     = voodioo_get_render_icons_set();
	$icons_set = implode( '|', array_keys( $icons ) );

	$regex = '/icon:(' . $icons_set . ')?:?([a-zA-Z0-9-_]+)/';

	return preg_replace_callback( $regex, 'voodioo_render_icons_callback', $content );
}

/**
 * Callback for icons render.
 *
 * @param  array $matches Search matches array.
 * @return string
 */
function voodioo_render_icons_callback( $matches ) {

	if ( empty( $matches[1] ) && empty( $matches[2] ) ) {
		return $matches[0];
	}

	if ( empty( $matches[1] ) ) {
		return sprintf( '<i class="fa fa-%s"></i>', $matches[2] );
	}

	$icons = voodioo_get_render_icons_set();

	if ( ! isset( $icons[ $matches[1] ] ) ) {
		return $matches[0];
	}

	return sprintf( $icons[ $matches[1] ], $matches[2] );
}

/**
 * Get list of icons to render.
 *
 * @return array
 */
function voodioo_get_render_icons_set() {
	return apply_filters( 'voodioo_render_icons_set', array(
		'fa' => '<i class="fa fa-%s"></i>',
	) );
}

/**
 * Replace %s with theme URL.
 *
 * @param  string $url Formatted URL to parse.
 * @return string
 */
function voodioo_render_theme_url( $url ) {
	$path = apply_filters( 'voodioo_render_theme_url_path', get_template_directory_uri() );
	return sprintf( $url, $path );
}

/**
 * Get image ID by URL.
 *
 * @param  string $image_src Image URL to search it in database.
 * @return int|bool false
 */
function voodioo_get_image_id_by_url( $image_src ) {
	global $wpdb;

	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid = %s";
	$id    = $wpdb->get_var( $wpdb->prepare( $query, esc_url( $image_src ) ) );

	return $id;
}

/**
 * Check if passed meta data is visible in current context.
 *
 * @since  1.0.0
 * @param  string $meta    Meta setting to check.
 * @param  string $context Current post context - 'single' or 'loop'.
 * @return bool
 */
function voodioo_is_meta_visible( $meta, $context = 'loop' ) {

	if ( ! $meta ) {
		return false;
	}

	$meta_enabled = get_theme_mod( $meta, voodioo_theme()->customizer->get_default( $meta ) );

	switch ( $context ) {

		case 'loop':

			if ( ! is_single() && $meta_enabled ) {
				return true;
			} else {
				return false;
			}

		case 'single':

			if ( is_single() && $meta_enabled ) {
				return true;
			} else {
				return false;
			}
	}

	return false;
}

/**
 * Get post thumbnail size.
 *
 * @param array $args Arguments.
 *
 * @return array
 */
function voodioo_post_thumbnail_size( $args = array() ) {
	global $wp_query;

	$sidebar_position = get_theme_mod( 'sidebar_position', voodioo_theme()->customizer->get_default( 'sidebar_position' ) );

	$args = wp_parse_args( $args, array(
		'small'        => 'post-thumbnail',
		'fullwidth'    => ( 'fullwidth' !== $sidebar_position ) ? 'voodioo--thumb-l' : 'voodioo-thumb-xl',
		'masonry'      => 'voodioo-thumb-masonry',
		'justify'      => 'voodioo-thumb-l-2',
		'class_prefix' => '',
	) );

	$layout      = get_theme_mod( 'blog_layout_type', voodioo_theme()->customizer->get_default( 'blog_layout_type' ) );
	$size_option = get_theme_mod( 'blog_featured_image', voodioo_theme()->customizer->get_default( 'blog_featured_image' ) );
	$size        = $args[ $size_option ];
	$link_class  = sanitize_html_class( $args['class_prefix'] . $size_option );
	$format      = get_post_format();

	$valid_justify_post_1 = voodioo_nth_child_post_item( 7, 2 );
	$valid_justify_post_2 = voodioo_nth_child_post_item( 7, 3 );

	if ( 'default' !== $layout || is_single() ) {
		$link_class = $args['class_prefix'] . 'fullwidth';
	}

	if ( ! in_array( $layout, array( 'default', 'default-modern' ) ) ) {
		$size = $args['small'];
	}

	if ( 'default-modern' === $layout || ( 'default' === $layout && 'gallery' === $format ) || is_single() ) {
		$size = $args['fullwidth'];
	}

	if ( 'masonry' === $layout && 'gallery' !== $format ) {
		$size = $args['masonry'];
	}

	if ( 'vertical-justify' === $layout && ! wp_is_mobile() && ( in_array( ( $wp_query->current_post + 1 ), $valid_justify_post_1 ) || in_array( ( $wp_query->current_post + 1 ), $valid_justify_post_2 ) ) ) {
		$size = $args['justify'];
	}

	return array(
		'size'  => $size,
		'class' => $link_class,
	);
}

/**
 * PHP analog css selector :nth-child( $multiplier*n + $addition).
 *
 * @param int $multiplier Multiplier.
 * @param int $addition   Addition.
 *
 * @return array
 */
function voodioo_nth_child_post_item( $multiplier, $addition ) {
	global $posts_per_page;

	$valid_item = array();

	for ( $n = 0; $n < $posts_per_page; $n ++ ) {

		$result = $multiplier * $n + $addition;

		if ( $result > $posts_per_page ) {
			break;
		}

		$valid_item[] = $result;
	}

	return $valid_item;
}

/**
 * Check color is light or dark.
 *
 * @param string $color Hex color.
 *
 * @return null|string
 */
function voodioo_hex_color_is_light_or_dark( $color ) {

	if ( false === strpos( $color, '#' ) ) {
		// Not a hex-color
		return null;
	}

	$hex = str_replace( '#', '', $color );

	if ( 3 === strlen( $hex ) ) {
		$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
	} else if ( 6 === strlen( $hex ) ) {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	} else {
		return false;
	}

	$luminance = ( $r * 0.299 ) + ( $g * 0.587 ) + ( $b * 0.114 );

	$is_light_or_dark = ( $luminance >= 128 ) ? 'light' : 'dark';

 return apply_filters( 'voodioo_hex_color_is_light_or_dark', $is_light_or_dark, $color ) ;
}

/**
 * Add custom css style.
 */
function voodioo_404_inline_css() {
	$page_404_bg_url = get_theme_mod( 'page_404_bg_image', voodioo_theme()->customizer->get_default( 'page_404_bg_image' ) );
	$page_404_bg_url = esc_url( voodioo_render_theme_url( $page_404_bg_url ) );

	$css = 'body.error404 .site-content{ background-image: url( ' . $page_404_bg_url . ' ); }';

	return $css;
}

/**
 * Get builder module template.
 */
function voodioo_get_builder_module_template( $name = null, $module = null, $default = null ) {
	$builder_templates = apply_filters( 'voodioo_builder_templates', 'template-parts/builder-templates/' );
	$template = locate_template( $builder_templates . $name );

	if ( $template ) {
		include $template;
		return;
	}

	$template = locate_template( $builder_templates . $default );

	if ( $template ) {
		include $template;
		return;
	}
}
