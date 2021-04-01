<?php
/**
 * VC CF7 config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( class_exists( 'WPCF7' ) ) {
	global $wpdb;
	$cf7 = $wpdb->get_results("
		SELECT ID, post_title
		FROM $wpdb->posts
		WHERE post_type = 'wpcf7_contact_form'
	");
	$contact_forms = array(esc_html__('Select a form…','uncode-core') => 0);
	if ($cf7) {
		foreach ($cf7 as $cform)
		{
			$contact_forms[$cform->post_title] = $cform->ID;
		}
	} else {
		$contact_forms[esc_html__('No contact forms found', 'uncode-core') ] = 0;
	}
	vc_map(array(
		'base' => 'contact-form-7',
		'name' => esc_html__('Contact Form 7', 'uncode-core') ,
		'weight' => 955,
		'icon' => 'fa fa-envelope',
		'category' => esc_html__('Content', 'uncode-core') ,
		'description' => esc_html__('Place Contact Form7', 'uncode-core') ,
		'params' => array(
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Form title', 'uncode-core') ,
				'param_name' => 'title',
				'admin_label' => true,
				'description' => esc_html__('What text use as form title. Leave blank if no title is needed.', 'uncode-core')
			) ,
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Specify contact form', 'uncode-core') ,
				'param_name' => 'id',
				'value' => $contact_forms,
				'description' => esc_html__('Choose previously created contact form from the drop down list.', 'uncode-core')
			),
			array(
				'type' => 'checkbox',
				'heading' => esc_html__('Input Text Underlined', 'uncode-core') ,
				'param_name' => 'html_class',
				'value' => array(
					esc_html__('Yes, please', 'uncode-core') => 'input-underline'
				)
			) ,
		)
	));
}
