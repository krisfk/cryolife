<?php
/**
 * VC Text Column config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(array(
	'name' => esc_html__('Text Block', 'uncode-core') ,
	'base' => 'vc_column_text',
	'weight' => 975,
	'icon' => 'fa fa-font',
	'wrapper_class' => 'clearfix',
	'php_class_name' => 'uncode_generic_admin',
	'category' => esc_html__('Content', 'uncode-core') ,
	'description' => esc_html__('Basic Block of Text', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => esc_html__('Text', 'uncode-core') ,
			'param_name' => 'content',
			'value' => wp_kses(__('<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>', 'uncode-core'), array( 'p' => array()))
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Text large", 'uncode-core') ,
			"param_name" => "text_lead",
			"description" => esc_html__("Activate if you want to enlarge the font size.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		$add_css_animation,
		$add_animation_speed,
		$add_animation_delay,
		array(
			'type' => 'css_editor',
			'heading' => esc_html__('CSS', 'uncode-core') ,
			'param_name' => 'css',
			'group' => esc_html__('Custom', 'uncode-core')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Border color", 'uncode-core') ,
			"param_name" => "border_color",
			"description" => esc_html__("Specify a border color.", 'uncode-core') ,
			"group" => esc_html__("Custom", 'uncode-core') ,
			"value" => $uncode_colors_w_transp,
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Border style", 'uncode-core') ,
			"param_name" => "border_style",
			"description" => esc_html__("Specify a border style.", 'uncode-core') ,
			"group" => esc_html__("Custom", 'uncode-core') ,
			"value" => $border_style,
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
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'uncode-core'),
			"group" => esc_html__("Extra", 'uncode-core') ,
		) ,
	) ,
	'js_view' => 'UncodeTextView'
));
