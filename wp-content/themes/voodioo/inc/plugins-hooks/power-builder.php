<?php
/**
 * Power-builder hooks.
 *
 * @package Voodioo
 */

// Add custom icons font to builder.
add_filter( 'tm_builder_custom_font_icons', 'voodioo_builder_custom_font_icons' );

// Remove include builder grid css file.
add_filter( 'tm_builder_front_styles', 'voodioo_builder_remove_include_grid_css' );

// Customization power-builder taxonomy module.
add_filter( 'tm_pb_module_taxonomy_title_settings', 'voodioo_taxonomy_module_title_settings' );
add_filter( 'tm_pb_module_taxonomy_button_settings', 'voodioo_taxonomy_module_button_settings' );
add_filter( 'tm_pb_module_taxonomy_template_count_max', 'voodioo_taxonomy_module_template_count_max' );

// Customization power-builder carousel module.
add_filter( 'tm_pb_module_carousel_img_settings', 'voodioo_module_carousel_img_settings' );
add_filter( 'tm_pb_module_carousel_title_settings', 'voodioo_module_carousel_title_settings' );
add_filter( 'tm_pb_module_carousel_author_settings', 'voodioo_module_carousel_author_settings' );
add_filter( 'tm_pb_module_carousel_more_button_settings', 'voodioo_module_carousel_more_button_settings' );
add_filter( 'tm_pb_module_carousel_space', 'voodioo_module_carousel_space' );

// Add custom modules to power builder.
add_action( 'tm_builder_load_user_modules', 'voodioo_add_custom_modules_to_builder' );

// Modify default values.
add_filter( 'tm_set_default_values', 'voodioo_modify_default_values_builder_modules' );

// Deprecated builder modules.
add_filter( 'tm_builder_deprecated_modules', 'voodioo_builder_deprecated_modules' );

/**
 * Add custom icon fonts to builder.
 */
function voodioo_builder_custom_font_icons( $icons ) {

	$icons['nucleo-outline'] = array(
		'src'  => VOODIOO_THEME_CSS . '/nucleo-outline.css',
		'base' => 'nc-icon-outline',
	);

	return $icons;
}

/**
 * Remove include builder grid css file
 */
function voodioo_builder_remove_include_grid_css( $styles ) {
	unset( $styles['voodioobuilder-modules-grid'] );

	return $styles;
}

/**
 * Customization title settings to taxonomy module.
 *
 * @param array $title Title settings.
 *
 * @return array
 */
function voodioo_taxonomy_module_title_settings( $title ) {
	$title['class'] = 'tm_pb_taxonomy__title';
	$title['html']  = '<h5 %1$s><a href="%2$s" %3$s>%4$s</a></h5>';

	return $title;
}

/**
 * Customization button settings to taxonomy module.
 *
 * @param array $button Button settings.
 *
 * @return array
 */
function voodioo_taxonomy_module_button_settings( $button ) {
	$button['class'] = 'btn-link';
	$button['html']  = '<span class="button--holder"><a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a></span>';

	return $button;
}

/**
 * Customization template count max to taxonomy module.
 *
 * @return int
 */
function voodioo_taxonomy_module_template_count_max( $template_count_max ) {
	return 5;
}

/**
 * Customization image settings to carousel module.
 *
 * @param array $image Image settings.
 *
 * @return array
 */
function voodioo_module_carousel_img_settings( $image ) {
	$image['mobile_size']       = 'voodioo-thumb-m';
	$image['placeholder_title'] = get_bloginfo( 'name' );

	return $image;
}

/**
 * Customization title settings to carousel module.
 *
 * @param array $post_title Title settings.
 *
 * @return array
 */
function voodioo_module_carousel_title_settings( $post_title ) {

	$post_title['class'] = 'entry-title';
	$post_title['html']  = '<h4 %1$s><a href="%2$s" %3$s>%4$s</a></h4>';

	return $post_title;
}

/**
 * Customization author meta settings to carousel module.
 *
 * @param array $author Author meta settings.
 *
 * @return array
 */
function voodioo_module_carousel_author_settings( $author ) {

	$author['prefix'] = esc_html__( 'by ', 'voodioo' );

	return $author;
}

/**
 * Customization more button settings to carousel module.
 *
 * @param array $more_button More button settings.
 *
 * @return array
 */
function voodioo_module_carousel_more_button_settings( $more_button ) {

	$more_button_settings = array(
		'class' => 'carousel__more-btn btn-link',
		'html'  => '<a href="%1$s" %3$s><span class="btn-link__text">%4$s</span>%5$s</a>',
	);

	$more_button = array_merge( $more_button, $more_button_settings );

	return $more_button;
}

/**
 * Customization space between slides to carousel module.
 *
 * @return int
 */
function voodioo_module_carousel_space( $space_between_slides ) {
	return 0;
}

/**
 * Add custom modules to power builder.
 */
function voodioo_add_custom_modules_to_builder( $modules_loader ) {

	$custom_modules = apply_filters( 'voodioo_power_builder_theme_modules', array(
		'Voodioo_Builder_Module_Icon'  => trailingslashit( VOODIOO_THEME_DIR ) . 'builder/modules/class-builder-module-icon.php',
		'Voodioo_Builder_Module_Title' => trailingslashit( VOODIOO_THEME_DIR ) . 'builder/modules/class-builder-module-title.php',
	) );

	foreach ( $custom_modules as $module_class => $module_path ) {

		include_once $module_path;
		$modules_loader->add_module( $module_class, $module_path );

	}
}

/**
 * Modify default values.
 *
 * @param array $defaults Defaults values.
 *
 * @return array
 */
function voodioo_modify_default_values_builder_modules( $defaults = array() ) {

	$theme_default_values = array(
		// Testimonials module.
		'tm_pb_testimonial-portrait_border_radius' => '88',
		'tm_pb_testimonial-portrait_width'         => '88',
		'tm_pb_testimonial-portrait_height'        => '44',

		// Button module.
		'all_buttons_font_size'           => '14',
		'all_buttons_border_width'        => '1',
		'all_buttons_border_radius'       => '0',
		'all_buttons_border_radius_hover' => '0',

		// Title module.
		'tm_pb_title-title_font_size'     => '1',
		'tm_pb_title-title_line_height'   => '1em',
	);

	foreach ( $theme_default_values as $setting_name => $default_value ) {
		$defaults[ $setting_name ] = array(
			'default' => $default_value,
		);
	}

	return $defaults;
}

/**
 * Deprecated builder modules.
 *
 * @param array $deprecated_list Deprecated list.
 *
 * @return array
 */
function voodioo_builder_deprecated_modules( $deprecated_list = array() ) {

	$deprecated_list[] = 'Tm_Builder_Module_Blog';

	return $deprecated_list;
}
