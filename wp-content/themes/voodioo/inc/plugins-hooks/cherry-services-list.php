<?php
/**
 * Cherry-services-list hooks.
 *
 * @package Voodioo
 */

// Customization cherry-services-list plugin.
add_filter( 'cherry_services_list_meta_options_args', 'voodioo_modify_services_list_meta_options' );
add_filter( 'cherry_services_default_icon_format', 'voodioo_cherry_services_default_icon_format' );
add_filter( 'cherry_services_listing_templates_list', 'voodioo_cherry_services_listing_templates_list' );
add_filter( 'cherry_services_features_title_format', 'voodioo_cherry_services_features_title_format' );
add_filter( 'cherry_services_styles', 'voodioo_dequeue_cherry_services_grid_style' );
add_filter( 'cherry_services_cta_link_format', 'voodioo_cherry_services_cta_link_format' );
add_filter( 'cherry_services_cta_submit_format', 'voodioo_cherry_services_cta_submit_format' );
add_filter( 'cherry_services_shortcode_heading_format', 'voodioo_modify_cherry_services_shortcode_heading_format' );

/**
 * Modify cherry-services-list meta options.
 */
function voodioo_modify_services_list_meta_options( $fields ) {

	// Change icon data.
	$fields['fields']['cherry-services-icon']['icon_data'] = voodioo_get_nc_outline_icons_data();

	// Add `Button style presets` option.
	$fields['fields']['cherry-services-cta-btn-style-presets'] = array(
		'type'              => 'select',
		'element'           => 'control',
		'parent'            => 'styling',
		'value'             => 'accent-2',
		'options'           => voodioo_get_btn_style_presets(),
		'label'             => esc_html__( 'Call to action button style preset', 'voodioo' ),
		'sanitize_callback' => 'esc_attr',
	);

	return $fields;
}

/**
 * Change cherry-services-list icon format
 *
 * @return string
 */
function voodioo_cherry_services_default_icon_format( $icon_format ) {
	return '<i class="nc-icon-outline %s"></i>';
}

/**
 *  Add template to cherry services-list templates list;
 */
function voodioo_cherry_services_listing_templates_list( $tmpl_list ) {

	$tmpl_list['media-icon-background']   = 'media-icon-bg.tmpl';
	$tmpl_list['media-icon-background-2'] = 'media-icon-bg-2.tmpl';

	return $tmpl_list;
}

/**
 * Change cherry-services features title format.
 */
function voodioo_cherry_services_features_title_format( $title_format ) {
	return '<h4 class="service-features_title">%s</h4>';
}

/**
 * Dequeue cherry-services grid style.
 *
 * @param array $styles Cherry services list styles.
 *
 * @return array
 */
function voodioo_dequeue_cherry_services_grid_style ( $styles = array() ) {

	unset( $styles['cherry-services-grid'] );

	return $styles;
}

/**
 * Modify cta link format.
 *
 * @param string $link_format Default cta link format.
 *
 * @return string
 */
function voodioo_cherry_services_cta_link_format( $link_format ) {

	global $post;
	$btn_preset       = get_post_meta( $post->ID, 'cherry-services-cta-btn-style-presets', true );
	$additional_class = $btn_preset ? sprintf( 'btn-%s', sanitize_html_class( $btn_preset ) ) : '';

	$link_format = '<div class="cta-button-wrap"><a href="%s" class="cta-button btn btn-large ' . $additional_class . '">%s</a></div>';

	return $link_format;
}

/**
 * Modify cta submit button format.
 *
 * @param string $submit_format Default submit format.
 *
 * @return string
 */
function voodioo_cherry_services_cta_submit_format( $submit_format ) {
	global $post;
	$btn_preset       = get_post_meta( $post->ID, 'cherry-services-cta-btn-style-presets', true );
	$additional_class = $btn_preset ? sprintf( 'btn-%s', sanitize_html_class( $btn_preset ) ) : '';

	$submit_format = '<button type="submit" class="cta-form_submit btn ' . $additional_class . '">%s</button>';

	return $submit_format;
}

/**
 * Modify heading format.
 *
 * @param array $heading_format Default heading format.
 *
 * @return array
 */
function voodioo_modify_cherry_services_shortcode_heading_format( $heading_format = array() ) {

	$heading_format['super_title'] = '<h6 class="services-heading_super_title">%s</h6>';
	$heading_format['subtitle']    = '<h5 class="services-heading_subtitle">%s</h5>';

	return $heading_format;
}
