<?php
/**
 * VC Heading config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$new_css_animation =  array (
	esc_html__('Lines curtain', 'uncode-core') => 'curtain',
	esc_html__('Words curtain', 'uncode-core') => 'curtain-words',
	esc_html__('Words sliding', 'uncode-core') => 'single-slide',
	esc_html__('Words sliding reverse', 'uncode-core') => 'single-slide-opposite',
	esc_html__('Letters curtain', 'uncode-core') => 'single-curtain',
	esc_html__('Letters typewriter', 'uncode-core') => 'typewriter',
);
$old_css_animation = $add_css_animation['value'];
$add_text_css_animation = $add_css_animation;
$add_text_css_animation['value'] = array_merge($old_css_animation, $new_css_animation);

vc_map(array(
	'name' => esc_html__('Heading', 'uncode-core') ,
	'base' => 'vc_custom_heading',
	'icon' => 'fa fa-header',
	'php_class_name' => 'uncode_generic_admin',
	'weight' => 980,
	'show_settings_on_create' => true,
	'category' => esc_html__('Content', 'uncode-core') ,
	'shortcode' => true,
	'description' => esc_html__('Text Heading', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__('Heading text', 'uncode-core') ,
			'param_name' => 'content',
			'admin_label' => true,
			'value' => esc_html__('This is a custom heading element.', 'uncode-core') ,
			//'description' => esc_html__('Enter your content. If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'uncode-core') ,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Dynamic heading text", 'uncode-core') ,
			"param_name" => "auto_text",
			"description" => esc_html__("Activate this to pull dynamic text content (title or excerpt).", 'uncode-core') ,
			'group' => esc_html__('General', 'uncode-core') ,
			"value" => array(
				esc_html__('No', 'uncode-core') => '',
				esc_html__('Get the title', 'uncode-core') => 'yes',
				esc_html__('Get the excerpt', 'uncode-core') => 'excerpt',
			) ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Element semantic", 'uncode-core') ,
			"param_name" => "heading_semantic",
			"description" => esc_html__("Specify element tag.", 'uncode-core') ,
			"value" => $heading_semantic,
			'std' => 'h2',
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text font family", 'uncode-core') ,
			"param_name" => "text_font",
			"description" => esc_html__("Specify text font family.", 'uncode-core') ,
			"value" => $heading_font,
			'std' => '',
			"group" => esc_html__("General", 'uncode-core') ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text size", 'uncode-core') ,
			"param_name" => "text_size",
			"description" => esc_html__("Specify text size.", 'uncode-core') ,
			'std' => 'h2',
			"value" => $heading_size,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text weight", 'uncode-core') ,
			"param_name" => "text_weight",
			"description" => esc_html__("Specify text weight.", 'uncode-core') ,
			"value" => $heading_weight,
			'std' => '',
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text transform", 'uncode-core') ,
			"param_name" => "text_transform",
			"description" => esc_html__("Specify the heading text transformation.", 'uncode-core') ,
			"value" => array(
				esc_html__('Default CSS', 'uncode-core') => '',
				esc_html__('Uppercase', 'uncode-core') => 'uppercase',
				esc_html__('Lowercase', 'uncode-core') => 'lowercase',
				esc_html__('Capitalize', 'uncode-core') => 'capitalize'
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text line height", 'uncode-core') ,
			"param_name" => "text_height",
			"description" => esc_html__("Specify text line height.", 'uncode-core') ,
			"value" => $heading_height,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text letter spacing", 'uncode-core') ,
			"param_name" => "text_space",
			"description" => esc_html__("Specify letter spacing.", 'uncode-core') ,
			"value" => $heading_space,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text italic", 'uncode-core') ,
			"param_name" => "text_italic",
			"description" => esc_html__("Transform the text to italic.", 'uncode-core') ,
			"value" => array(
				esc_html__('Normal', 'uncode-core') => '',
				esc_html__('Italic', 'uncode-core') => 'yes',
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Text color", 'uncode-core') ,
			"param_name" => "text_color",
			"description" => esc_html__("Specify text color.", 'uncode-core') ,
			"value" => $uncode_colors,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Separator", 'uncode-core') ,
			"param_name" => "separator",
			"description" => esc_html__("Activate the separator. This will appear under the text.", 'uncode-core') ,
			"value" => array(
				esc_html__('None', 'uncode-core') => '',
				esc_html__('Under Heading', 'uncode-core') => 'yes',
				esc_html__('Under Subheading', 'uncode-core') => 'under',
				esc_html__('Over Heading', 'uncode-core') => 'over'
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Separator colored", 'uncode-core') ,
			"param_name" => "separator_color",
			"description" => esc_html__("Color the separator with the accent color.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
			'dependency' => array(
				'element' => 'separator',
				'not_empty' => true,
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Separator double space", 'uncode-core') ,
			"param_name" => "separator_double",
			"description" => esc_html__("Activate to increase the separator space.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
			'dependency' => array(
				'element' => 'separator',
				'not_empty' => true,
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			'type' => 'textarea',
			'heading' => esc_html__('Subheading', 'uncode-core') ,
			"param_name" => "subheading",
			"description" => esc_html__("Add a subheading text.", 'uncode-core') ,
			"group" => esc_html__("General", 'uncode-core') ,
			'admin_label' => true,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Subheading Text large", 'uncode-core') ,
			"param_name" => "sub_lead",
			"description" => esc_html__("Activate if you want to enlarge the font size.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Subheading reduced space", 'uncode-core') ,
			"param_name" => "sub_reduced",
			"description" => esc_html__("Activate this to reduce the subheading top margin.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("General", 'uncode-core') ,
		) ,
		$add_text_css_animation,
		$add_animation_speed,
		$add_animation_delay,
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Animation interval', 'uncode-core') ,
			'param_name' => 'interval_animation',
			'admin_label' => true,
			'value' => array(
				esc_html__('Default (ms 0)', 'uncode-core') => '',
				esc_html__('ms 20', 'uncode-core') => 20,
				esc_html__('ms 40', 'uncode-core') => 40,
				esc_html__('ms 60', 'uncode-core') => 60,
				esc_html__('ms 80', 'uncode-core') => 80,
				esc_html__('ms 100', 'uncode-core') => 100,
				esc_html__('ms 120', 'uncode-core') => 120,
				esc_html__('ms 140', 'uncode-core') => 140,
				esc_html__('ms 160', 'uncode-core') => 160,
				esc_html__('ms 180', 'uncode-core') => 180,
				esc_html__('ms 200', 'uncode-core') => 200,
				esc_html__('ms 250', 'uncode-core') => 250,
				esc_html__('ms 300', 'uncode-core') => 300,
				esc_html__('ms 350', 'uncode-core') => 350,
				esc_html__('ms 400', 'uncode-core') => 400,
				esc_html__('ms 450', 'uncode-core') => 450,
				esc_html__('ms 500', 'uncode-core') => 500,
			) ,
			'dependency' => array(
				'element' => 'css_animation',
				'value' => array(
					'curtain',
					'curtain-words',
					'single-curtain',
					'single-slide',
					'single-slide-opposite',
					'typewriter',
				),
			) ,
			'group' => esc_html__('Animation', 'uncode-core') ,
			'description' => esc_html__('Specify the interval between animations.', 'uncode-core')
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Desktop", 'uncode-core') ,
			"param_name" => "desktop_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in desktop layout mode (960px >).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Tablet", 'uncode-core') ,
			"param_name" => "medium_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in tablet layout mode (570px > < 960px).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Mobile", 'uncode-core') ,
			"param_name" => "mobile_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in mobile layout mode (< 570px).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Element ID', 'uncode-core') ,
			'param_name' => 'el_id',
			'description' => esc_html__('This value has to be unique. Change it in case it\'s needed.', 'uncode-core') ,
			"group" => esc_html__("Extra", 'uncode-core') ,
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra class name', 'uncode-core') ,
			'param_name' => 'el_class',
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'uncode-core') ,
			'group' => esc_html__('Extra', 'uncode-core')
		) ,
	) ,
));
