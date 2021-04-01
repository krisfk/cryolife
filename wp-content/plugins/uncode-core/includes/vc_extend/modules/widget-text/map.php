<?php
/**
 * VC Widget Text config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(array(
	'name' => 'WP ' . esc_html__('Text', 'uncode-core') ,
	'base' => 'vc_wp_text',
	'icon' => 'fa fa-wordpress',
	'category' => esc_html__('WordPress Widgets', 'uncode-core') ,
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => esc_html__('Arbitrary text or HTML', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('What text use as a widget title. Leave blank to use default widget title.', 'uncode-core')
		) ,
		array(
			'type' => 'textarea',
			'heading' => esc_html__('Text', 'uncode-core') ,
			'param_name' => 'content',
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
			"group" => esc_html__("Extra", 'uncode-core') ,
		)
	)
));
