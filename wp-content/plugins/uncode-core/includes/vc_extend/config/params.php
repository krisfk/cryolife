<?php
/**
 * Params functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Units
 */
function uncode_core_vc_params_get_units() {
	$units = array(
		'1/12' => '1',
		'2/12' => '2',
		'3/12' => '3',
		'4/12' => '4',
		'5/12' => '5',
		'6/12' => '6',
		'7/12' => '7',
		'8/12' => '8',
		'9/12' => '9',
		'10/12' => '10',
		'11/12' => '11',
		'12/12' => '12',
	);

	return $units;
}

/**
 * Button sizes
 */
function uncode_core_vc_params_get_button_sizes() {
	$size_arr = array(
		esc_html__('Standard', 'uncode-core') => '',
		esc_html__('Small', 'uncode-core') => 'btn-sm',
		esc_html__('Large', 'uncode-core') => 'btn-lg',
		esc_html__('Extra-Large', 'uncode-core') => 'btn-xl',
		esc_html__('Button link', 'uncode-core') => 'btn-link',
		esc_html__('Standard link', 'uncode-core') => 'link',
	);

	return $size_arr;
}

/**
 * Icon sizes
 */
function uncode_core_vc_params_get_icon_sizes() {
	$icon_sizes = array(
		esc_html__('Standard', 'uncode-core') => '',
		esc_html__('2x', 'uncode-core') => 'fa-2x',
		esc_html__('3x', 'uncode-core') => 'fa-3x',
		esc_html__('4x', 'uncode-core') => 'fa-4x',
		esc_html__('5x', 'uncode-core') => 'fa-5x',
	);

	return $icon_sizes;
}

/**
 * Heading semantic values
 */
function uncode_core_vc_params_get_heading_semantic_values() {
	$heading_semantic = array(
		esc_html__('h1', 'uncode-core') => 'h1',
		esc_html__('h2', 'uncode-core') => 'h2',
		esc_html__('h3', 'uncode-core') => 'h3',
		esc_html__('h4', 'uncode-core') => 'h4',
		esc_html__('h5', 'uncode-core') => 'h5',
		esc_html__('h6', 'uncode-core') => 'h6',
		esc_html__('p', 'uncode-core') => 'p',
		esc_html__('div', 'uncode-core') => 'div'
	);

	return $heading_semantic;
}

/**
 * Heading font sizes
 */
function uncode_core_vc_params_get_heading_font_sizes() {
	$heading_size = array(
		esc_html__('Default CSS', 'uncode-core') => '',
		esc_html__('h1', 'uncode-core') => 'h1',
		esc_html__('h2', 'uncode-core') => 'h2',
		esc_html__('h3', 'uncode-core') => 'h3',
		esc_html__('h4', 'uncode-core') => 'h4',
		esc_html__('h5', 'uncode-core') => 'h5',
		esc_html__('h6', 'uncode-core') => 'h6',
	);

	$font_sizes = (function_exists('ot_get_option')) ? ot_get_option('_uncode_heading_font_sizes') : array();

	if (!empty($font_sizes)) {
		foreach ($font_sizes as $key => $value) {
			$heading_size[$value['title']] = $value['_uncode_heading_font_size_unique_id'];
		}
	}

	$heading_size[esc_html__('BigText', 'uncode-core')] = 'bigtext';

	return $heading_size;
}

/**
 * Heading font heights
 */
function uncode_core_vc_params_get_heading_font_heights() {
	$font_heights = (function_exists('ot_get_option')) ? ot_get_option('_uncode_heading_font_heights') : array();
	$heading_height = array(
		esc_html__('Default CSS', 'uncode-core') => '',
	);
	if (!empty($font_heights)) {
		foreach ($font_heights as $key => $value) {
			$heading_height[$value['title']] = $value['_uncode_heading_font_height_unique_id'];
		}
	}

	return $heading_height;
}

/**
 * Heading font weights
 */
function uncode_core_vc_params_get_heading_font_weights() {
	$heading_weight = array(
		esc_html__('Default CSS', 'uncode-core') => '',
		esc_html__('100', 'uncode-core') => 100,
		esc_html__('200', 'uncode-core') => 200,
		esc_html__('300', 'uncode-core') => 300,
		esc_html__('400', 'uncode-core') => 400,
		esc_html__('500', 'uncode-core') => 500,
		esc_html__('600', 'uncode-core') => 600,
		esc_html__('700', 'uncode-core') => 700,
		esc_html__('800', 'uncode-core') => 800,
		esc_html__('900', 'uncode-core') => 900,
	);

	return $heading_weight;
}

/**
 * Button font weights
 */
function uncode_core_vc_params_get_button_font_weights() {
	$button_weight = array(
		esc_html__('100', 'uncode-core') => 100,
		esc_html__('200', 'uncode-core') => 200,
		esc_html__('300', 'uncode-core') => 300,
		esc_html__('400', 'uncode-core') => 400,
		esc_html__('500', 'uncode-core') => 500,
		esc_html__('600', 'uncode-core') => 600,
		esc_html__('700', 'uncode-core') => 700,
		esc_html__('800', 'uncode-core') => 800,
		esc_html__('900', 'uncode-core') => 900,
	);

	return $button_weight;
}

/**
 * Get target styles
 */
function uncode_core_vc_params_get_target_styles() {
	$target_arr = array(
		esc_html__('Same window', 'uncode-core') => '_self',
		esc_html__('New window', 'uncode-core') => "_blank"
	);

	return $target_arr;
}

/**
 * Get border styles
 */
function uncode_core_vc_params_get_border_styles() {
	$border_style = array(
		esc_html__('None', 'uncode-core') => '',
		esc_html__('Solid', 'uncode-core') => 'solid',
		esc_html__('Dotted', 'uncode-core') => 'dotted',
		esc_html__('Dashed', 'uncode-core') => 'dashed',
		esc_html__('Double', 'uncode-core') => 'double',
		esc_html__('Groove', 'uncode-core') => 'groove',
		esc_html__('Ridge', 'uncode-core') => 'ridge',
		esc_html__('Inset', 'uncode-core') => 'inset',
		esc_html__('Outset', 'uncode-core') => 'outset',
		esc_html__('Initial', 'uncode-core') => 'initial',
		esc_html__('Inherit', 'uncode-core') => 'inherit',
	);

	return $border_style;
}

/**
 * Get CSS animation styles
 */
function uncode_core_vc_params_get_css_animation() {
	$add_css_animation = array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'uncode-core') ,
		'param_name' => 'css_animation',
		'admin_label' => true,
		'value' => array(
			esc_html__('No', 'uncode-core') => '',
			esc_html__('Opacity', 'uncode-core') => 'alpha-anim',
			esc_html__('Zoom in', 'uncode-core') => 'zoom-in',
			esc_html__('Zoom out', 'uncode-core') => 'zoom-out',
			esc_html__('Top to bottom', 'uncode-core') => 'top-t-bottom',
			esc_html__('Bottom to top', 'uncode-core') => 'bottom-t-top',
			esc_html__('Left to right', 'uncode-core') => 'left-t-right',
			esc_html__('Right to left', 'uncode-core') => 'right-t-left',
		) ,
		'group' => esc_html__('Animation', 'uncode-core') ,
		'description' => esc_html__('Specify the entrance animation.', 'uncode-core')
	);

	return $add_css_animation;
}

/**
 * Get CSS animation delay
 */
function uncode_core_vc_params_get_css_animation_delay() {
	$delay = array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation delay', 'uncode-core') ,
		'param_name' => 'animation_delay',
		'value' => array(
			esc_html__('None', 'uncode-core') => '',
			esc_html__('ms 100', 'uncode-core') => 100,
			esc_html__('ms 200', 'uncode-core') => 200,
			esc_html__('ms 300', 'uncode-core') => 300,
			esc_html__('ms 400', 'uncode-core') => 400,
			esc_html__('ms 500', 'uncode-core') => 500,
			esc_html__('ms 600', 'uncode-core') => 600,
			esc_html__('ms 700', 'uncode-core') => 700,
			esc_html__('ms 800', 'uncode-core') => 800,
			esc_html__('ms 900', 'uncode-core') => 900,
			esc_html__('ms 1000', 'uncode-core') => 1000,
			esc_html__('ms 1100', 'uncode-core') => 1100,
			esc_html__('ms 1200', 'uncode-core') => 1200,
			esc_html__('ms 1300', 'uncode-core') => 1300,
			esc_html__('ms 1400', 'uncode-core') => 1400,
			esc_html__('ms 1500', 'uncode-core') => 1500,
			esc_html__('ms 1600', 'uncode-core') => 1600,
			esc_html__('ms 1700', 'uncode-core') => 1700,
			esc_html__('ms 1800', 'uncode-core') => 1800,
			esc_html__('ms 1900', 'uncode-core') => 1900,
			esc_html__('ms 2000', 'uncode-core') => 2000,
		) ,
		'group' => esc_html__('Animation', 'uncode-core') ,
		'description' => esc_html__('Specify the entrance animation delay in milliseconds.', 'uncode-core') ,
		'admin_label' => true,
		'dependency' => array(
			'element' => 'css_animation',
			'not_empty' => true
		)
	);

	return $delay;
}

/**
 * Get CSS animation speed
 */
function uncode_core_vc_params_get_css_animation_speed() {
	$speed = array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation speed', 'uncode-core') ,
		'param_name' => 'animation_speed',
		'admin_label' => true,
		'value' => array(
			esc_html__('Default (400)', 'uncode-core') => '',
			esc_html__('ms 100', 'uncode-core') => 100,
			esc_html__('ms 200', 'uncode-core') => 200,
			esc_html__('ms 300', 'uncode-core') => 300,
			esc_html__('ms 400', 'uncode-core') => 400,
			esc_html__('ms 500', 'uncode-core') => 500,
			esc_html__('ms 600', 'uncode-core') => 600,
			esc_html__('ms 700', 'uncode-core') => 700,
			esc_html__('ms 800', 'uncode-core') => 800,
			esc_html__('ms 900', 'uncode-core') => 900,
			esc_html__('ms 1000', 'uncode-core') => 1000,
		) ,
		'group' => esc_html__('Animation', 'uncode-core') ,
		'description' => esc_html__('Specify the entrance animation speed in milliseconds.', 'uncode-core') ,
		'dependency' => array(
			'element' => 'css_animation',
			'not_empty' => true
		)
	);

	return $speed;
}

/**
 * Get CSS background repeat
 */
function uncode_core_vc_params_get_css_background_repeat() {
	$add_background_repeat = array(
		'type' => 'dropdown',
		"heading" => esc_html__("Background repeat", 'uncode-core') ,
		'description' => wp_kses(__('Define the background repeat. <a href=\'http://www.w3schools.com/cssref/pr_background-repeat.asp\' target=\'_blank\'>Check this for reference</a>', 'uncode-core') , array( 'a' => array( 'href' => array(),'target' => array() ) ) ),
		'param_name' => 'back_repeat',
		'param_holder_class' => 'background-image-settings',
		'value' => array(
			esc_html__('Select...', 'uncode-core') => '',
			esc_html__('No Repeat', 'uncode-core') => 'no-repeat',
			esc_html__('Repeat All', 'uncode-core') => 'repeat',
			esc_html__('Repeat Horizontally', 'uncode-core') => 'repeat-x',
			esc_html__('Repeat Vertically', 'uncode-core') => 'repeat-y',
			esc_html__('Inherit', 'uncode-core') => 'inherit'
		) ,
		'dependency' => array(
			'element' => 'back_image',
			'not_empty' => true,
		) ,
		"group" => esc_html__("Style", 'uncode-core')
	);

	return $add_background_repeat;
}

/**
 * Get CSS background attachment
 */
function uncode_core_vc_params_get_css_background_attachment() {
	$add_background_attachment = array(
		'type' => 'dropdown',
		"heading" => esc_html__("Background Attachment", 'uncode-core') ,
		"description" => wp_kses(__("Define the background attachment. <a href='http://www.w3schools.com/cssref/pr_background-attachment.asp' target='_blank'>Check this for reference</a>", 'uncode-core'), array( 'a' => array( 'href' => array(),'target' => array() ) ) ) ,
		'param_name' => 'back_attachment',
		'value' => array(
			esc_html__('Select...', 'uncode-core') => '',
			esc_html__('Fixed', 'uncode-core') => 'fixed',
			esc_html__('Scroll', 'uncode-core') => 'scroll',
			esc_html__('Inherit', 'uncode-core') => 'inherit'
		) ,
		'dependency' => array(
			'element' => 'back_image',
			'not_empty' => true,
		) ,
		"group" => esc_html__("Style", 'uncode-core')
	);

	return $add_background_attachment;
}

/**
 * Get CSS background position
 */
function uncode_core_vc_params_get_css_background_position() {
	$add_background_position = array(
		'type' => 'dropdown',
		"heading" => esc_html__("Background Position", 'uncode-core') ,
		"description" => wp_kses(__("Define the background position. <a href='http://www.w3schools.com/cssref/pr_background-position.asp' target='_blank'>Check this for reference</a>", 'uncode-core'), array( 'a' => array( 'href' => array(),'target' => array() ) ) ) ,
		'param_name' => 'back_position',
		'value' => array(
			esc_html__('Select...', 'uncode-core') => '',
			esc_html__('Left Top', 'uncode-core') => 'left top',
			esc_html__('Left Center', 'uncode-core') => 'left center',
			esc_html__('Left Bottom', 'uncode-core') => 'left bottom',
			esc_html__('Center Top', 'uncode-core') => 'center top',
			esc_html__('Center Center', 'uncode-core') => 'center center',
			esc_html__('Center Bottom', 'uncode-core') => 'center bottom',
			esc_html__('Right Top', 'uncode-core') => 'right top',
			esc_html__('Right Center', 'uncode-core') => 'right center',
			esc_html__('Right Bottom', 'uncode-core') => 'right bottom'
		) ,
		'dependency' => array(
			'element' => 'back_image',
			'not_empty' => true,
		) ,
		"group" => esc_html__("Style", 'uncode-core')
	);

	return $add_background_position;
}

/**
 * Get CSS background size
 */
function uncode_core_vc_params_get_css_background_size() {
	$add_background_size = array(
		'type' => 'textfield',
		"heading" => esc_html__("Background Size", 'uncode-core') ,
		"description" => wp_kses(__("Define the background size (Default value is 'cover'). <a href='http://www.w3schools.com/cssref/css3_pr_background-size.asp' target='_blank'>Check this for reference</a>", 'uncode-core'), array( 'a' => array( 'href' => array(),'target' => array() ) ) ) ,
		'param_name' => 'back_size',
		'dependency' => array(
			'element' => 'back_image',
			'not_empty' => true,
		) ,
		"group" => esc_html__("Style", 'uncode-core')
	);

	return $add_background_size;
}

/**
 * Get GDPR options
 */
function uncode_core_vc_params_get_gdpr_options() {
	if ( function_exists( 'uncode_privacy_has_consent' ) ) {

		$consent_types = is_array( get_option( 'uncode_privacy_consent_types' ) ) ? get_option( 'uncode_privacy_consent_types' ) : array();
		$type_select = array();
		$type_select[ esc_html__('None', 'uncode-core') ] = '';

		foreach ($consent_types as $type_id => $settings) {
			if ( isset($settings['required']) && $settings['required'] )
				continue;
			$type_select[ esc_html($settings['name']) ] = esc_attr($type_id);
		}

		$gdpr = array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Consent ID', 'uncode-core') ,
				'param_name' => 'gdpr_consent_id',
				'value' => $type_select,
				"group" => esc_html__("Consent", 'uncode-core'),
				'description' => esc_html__('Select the consent ID.', 'uncode-core')
			),
			array(
				'type' => 'dropdown',
				"heading" => esc_html__("Logic", 'uncode-core') ,
				'param_name' => 'gdpr_consent_logic',
				"description" => esc_html__("Include or exclude this row according with the consent ID.", 'uncode-core') ,
				"group" => esc_html__("Consent", 'uncode-core'),
				"value" => array(
					esc_html__('Include', 'uncode-core') => 'include',
					esc_html__('Exclude', 'uncode-core') => 'exclude'
				) ,
				"std" => 'include',
				'dependency' => array(
					'element' => 'gdpr_consent_id',
					'not_empty' => true
				)
			),
		);
	} else {
		$gdpr = array();
	}

	return $gdpr;
}

/**
 * Get fonts
 */
function uncode_core_vc_params_get_fonts() {
	$fonts = ( function_exists( 'ot_get_option' ) ) ? ot_get_option( '_uncode_font_groups' ) : array();
	return $fonts;
}

/**
 * Get heading fonts
 */
function uncode_core_vc_params_get_heading_fonts( $fonts ) {
	$heading_font = array(
		esc_html__('Default CSS', 'uncode-core') => '',
	);

	if (isset($fonts) && is_array($fonts)) {
		foreach ($fonts as $key => $value) {
			$heading_font[$value['title']] = $value['_uncode_font_group_unique_id'];
		}
	}

	return $heading_font;
}

/**
 * Get button fonts
 */
function uncode_core_vc_params_get_button_fonts( $fonts ) {
	$button_font = array();

	if (isset($fonts) && is_array($fonts)) {
		foreach ($fonts as $key => $value) {
			$button_font[$value['title']] = $value['_uncode_font_group_unique_id'];
		}
	}

	return $button_font;
}

/**
 * Get font spacing
 */
function uncode_core_vc_params_get_font_spacings() {
	$font_spacings = ( function_exists( 'ot_get_option' ) ) ? ot_get_option( '_uncode_heading_font_spacings' ) : array();
	return $font_spacings;
}

/**
 * Get heading letter spacing
 */
function uncode_core_vc_params_get_heading_spacings( $font_spacings ) {
	$heading_space = array(
		esc_html__('Default CSS', 'uncode-core') => '',
	);

	if ( ! empty( $font_spacings ) ) {
		foreach ($font_spacings as $key => $value) {
			$heading_space[$value['title']] = $value['_uncode_heading_font_spacing_unique_id'];
		}
	}

	return $heading_space;
}

/**
 * Get button letter spacing
 */
function uncode_core_vc_params_get_button_spacings( $font_spacings ) {
	$btn_letter_spacing = array(
		esc_html__('Letter Spacing 0', 'uncode-core') => 'uncode-fontspace-zero',
	);

	if ( ! empty( $font_spacings ) ) {
		foreach ($font_spacings as $key => $value) {
			$btn_letter_spacing[$value['title']] = $value['_uncode_heading_font_spacing_unique_id'];
		}
	}

	return $btn_letter_spacing;
}

/**
 * Get font heights
 */
function uncode_core_vc_params_get_font_heights() {
	$font_heights = ( function_exists( 'ot_get_option' ) ) ? ot_get_option( '_uncode_heading_font_heights' ) : array();
	return $font_heights;
}

/**
 * Get font heading heights
 */
function uncode_core_vc_params_get_font_heading_heights( $font_heights ) {
	$heading_height = array(
		esc_html__('Default CSS', 'uncode-core') => '',
	);

	if (!empty($font_heights)) {
		foreach ($font_heights as $key => $value) {
			$heading_height[$value['title']] = $value['_uncode_heading_font_height_unique_id'];
		}
	}

	return $heading_height;
}

/**
 * Get flat colors
 */
function uncode_core_vc_params_get_flat_colors( $uncode_colors ) {
	$flat_uncode_colors = array();

	if (!empty($uncode_colors)) {
		foreach ($uncode_colors as $key => $value) {
			$flat_uncode_colors[$value[1]] = $value[0];
		}
	}

	return $flat_uncode_colors;
}

/**
 * Get unCode CPTs
 */
function uncode_core_vc_params_get_cpts() {
	if ( function_exists('uncode_get_post_types') ) {
		$uncode_post_types = uncode_get_post_types();
	} else {
		$uncode_post_types = array();
	}

	return $uncode_post_types;
}
