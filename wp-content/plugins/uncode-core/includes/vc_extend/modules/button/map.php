<?php
/**
 * VC Button config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$icons_arr = array(
	esc_html__('None', 'uncode-core') => 'none',
	esc_html__('Address book icon', 'uncode-core') => 'wpb_address_book',
	esc_html__('Alarm clock icon', 'uncode-core') => 'wpb_alarm_clock',
	esc_html__('Anchor icon', 'uncode-core') => 'wpb_anchor',
	esc_html__('Application Image icon', 'uncode-core') => 'wpb_application_image',
	esc_html__('Arrow icon', 'uncode-core') => 'wpb_arrow',
	esc_html__('Asterisk icon', 'uncode-core') => 'wpb_asterisk',
	esc_html__('Hammer icon', 'uncode-core') => 'wpb_hammer',
	esc_html__('Balloon icon', 'uncode-core') => 'wpb_balloon',
	esc_html__('Balloon Buzz icon', 'uncode-core') => 'wpb_balloon_buzz',
	esc_html__('Balloon Facebook icon', 'uncode-core') => 'wpb_balloon_facebook',
	esc_html__('Balloon Twitter icon', 'uncode-core') => 'wpb_balloon_twitter',
	esc_html__('Battery icon', 'uncode-core') => 'wpb_battery',
	esc_html__('Binocular icon', 'uncode-core') => 'wpb_binocular',
	esc_html__('Document Excel icon', 'uncode-core') => 'wpb_document_excel',
	esc_html__('Document Image icon', 'uncode-core') => 'wpb_document_image',
	esc_html__('Document Music icon', 'uncode-core') => 'wpb_document_music',
	esc_html__('Document Office icon', 'uncode-core') => 'wpb_document_office',
	esc_html__('Document PDF icon', 'uncode-core') => 'wpb_document_pdf',
	esc_html__('Document Powerpoint icon', 'uncode-core') => 'wpb_document_powerpoint',
	esc_html__('Document Word icon', 'uncode-core') => 'wpb_document_word',
	esc_html__('Bookmark icon', 'uncode-core') => 'wpb_bookmark',
	esc_html__('Camcorder icon', 'uncode-core') => 'wpb_camcorder',
	esc_html__('Camera icon', 'uncode-core') => 'wpb_camera',
	esc_html__('Chart icon', 'uncode-core') => 'wpb_chart',
	esc_html__('Chart pie icon', 'uncode-core') => 'wpb_chart_pie',
	esc_html__('Clock icon', 'uncode-core') => 'wpb_clock',
	esc_html__('Fire icon', 'uncode-core') => 'wpb_fire',
	esc_html__('Heart icon', 'uncode-core') => 'wpb_heart',
	esc_html__('Mail icon', 'uncode-core') => 'wpb_mail',
	esc_html__('Play icon', 'uncode-core') => 'wpb_play',
	esc_html__('Shield icon', 'uncode-core') => 'wpb_shield',
	esc_html__('Video icon', 'uncode-core') => "wpb_video"
);

vc_map(array(
	'name' => esc_html__('Button', 'uncode-core') ,
	'base' => 'vc_button',
	'weight' => 965,
	'icon' => 'fa fa-external-link',
	'php_class_name' => 'uncode_generic_admin',
	'category' => esc_html__('Content', 'uncode-core') ,
	'description' => esc_html__('Button Element', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Text', 'uncode-core') ,
			'admin_label' => true,
			'param_name' => 'content',
			'value' => esc_html__('Text on the button', 'uncode-core') ,
			'description' => esc_html__('Text on the button.', 'uncode-core')
		) ,
		array(
			'type' => 'vc_link',
			'heading' => esc_html__('URL (Link)', 'uncode-core') ,
			'param_name' => 'link',
			'description' => esc_html__('Button link.', 'uncode-core')
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Button color", 'uncode-core') ,
			"param_name" => "button_color",
			"description" => esc_html__("Specify button color.", 'uncode-core') ,
			"value" => $uncode_colors,
		) ,
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Size', 'uncode-core') ,
			'param_name' => 'size',
			'value' => $size_arr,
			'admin_label' => true,
			'description' => esc_html__('Button size.', 'uncode-core') ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Text size", 'uncode-core') ,
			"param_name" => "btn_link_size",
			"description" => esc_html__("Specify text size.", 'uncode-core') ,
			'std' => '',
			"value" => $heading_size,
			'dependency' => array(
				'element' => 'size',
				'value' => 'link',
			)
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Shape", 'uncode-core') ,
			"param_name" => "radius",
			"description" => esc_html__("You can shape the button with the corners round, squared or circle.", 'uncode-core') ,
			"value" => array(
				esc_html__('Default', 'uncode-core') => '',
				esc_html__('Round', 'uncode-core') => 'btn-round',
				esc_html__('Circle', 'uncode-core') => 'btn-circle',
				esc_html__('Square', 'uncode-core') => 'btn-square'
			) ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Border animation", 'uncode-core') ,
			"param_name" => "border_animation",
			"description" => esc_html__("Specify a button border animation.", 'uncode-core') ,
			"value" => array(
				esc_html__('None', 'uncode-core') => '',
				esc_html__('Ripple Out', 'uncode-core') => 'btn-ripple-out',
				esc_html__('Ripple In', 'uncode-core') => 'btn-ripple-in',
			) ,
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Fluid', 'uncode-core') ,
			'param_name' => 'wide',
			'description' => esc_html__('Fluid buttons has 100% width.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		array(
			"type" => 'textfield',
			"heading" => esc_html__("Fixed width", 'uncode-core') ,
			"param_name" => "width",
			"description" => esc_html__("Add a fixed width in pixel.", 'uncode-core') ,
			'dependency' => array(
				'element' => 'wide',
				'is_empty' => true,
			)
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Hover effect", 'uncode-core') ,
			"param_name" => "hover_fx",
			"description" => esc_html__("Specify an effect on hover state.", 'uncode-core') ,
			"value" => array(
				'Inherit' => '',
				'Outlined' => 'outlined',
				'Flat' => 'full-colored',
			) ,
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Outlined inverse', 'uncode-core') ,
			'param_name' => 'outline',
			'description' => esc_html__("Outlined buttons don't have a full background color. NB. This option is available only with Hover Effect > Outlined.", 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Skin text', 'uncode-core') ,
			'param_name' => 'text_skin',
			'description' => esc_html__("Keep the text color as the skin. NB. This option works well with Hover Effect > Outlined.", 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			),
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Shadow', 'uncode-core') ,
			'param_name' => 'shadow',
			'description' => esc_html__('Activate this for the shadow effect.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Shadow type", 'uncode-core') ,
			"param_name" => "shadow_weight",
			"description" => esc_html__("Specify the shadow option preset.", 'uncode-core') ,
			"value" => array(
				esc_html__('Extra Small', 'uncode-core') => '',
				esc_html__('Small', 'uncode-core') => 'sm',
				esc_html__('Standard', 'uncode-core') => 'std',
				esc_html__('Large', 'uncode-core') => 'lg',
				esc_html__('Extra Large', 'uncode-core') => 'xl',
			) ,
			'dependency' => array(
				'element' => 'shadow',
				'not_empty' => true
			) ,
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Custom typography', 'uncode-core') ,
			'param_name' => 'custom_typo',
			'description' => esc_html__('Define custom font settings.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		array(
			'type' => 'dropdown',
			'param_name' => 'font_family',
			'heading' => esc_html__('Font family', 'uncode-core') ,
			'description' => esc_html__('Specify the buttons font family.', 'uncode-core') ,
			'std' => '',
			'value' => $button_font,
			'dependency' => array(
				'element' => 'custom_typo',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'dropdown',
			'param_name' => 'font_weight',
			'heading' => esc_html__('Font weight', 'uncode-core') ,
			'description' => esc_html__('Specify the buttons font weight.', 'uncode-core') ,
			'std' => '',
			'value' => $button_weight,
			'dependency' => array(
				'element' => 'custom_typo',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'dropdown',
			'param_name' => 'text_transform',
			'heading' => esc_html__('Text transform', 'uncode-core') ,
			'description' => esc_html__('Specify the buttons text transform.', 'uncode-core') ,
			'std' => '',
			'value' => array(
				array(
					'value' => '',
					'label' => esc_html__('Initial', 'uncode-core') ,
				) ,
				array(
					'value' => 'uppercase',
					'label' => esc_html__('Uppercase', 'uncode-core') ,
				) ,
				array(
					'value' => 'lowercase',
					'label' => esc_html__('Lowercase', 'uncode-core') ,
				) ,
				array(
					'value' => 'capitalize',
					'label' => esc_html__('Capitalize', 'uncode-core') ,
				) ,
			) ,
			'dependency' => array(
				'element' => 'custom_typo',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'dropdown',
			'param_name' => 'letter_spacing',
			'heading' => esc_html__('Letter spacing', 'uncode-core') ,
			'description' => esc_html__('Specify the letter spacing value.', 'uncode-core') ,
			'value' => $btn_letter_spacing,
			'dependency' => array(
				'element' => 'custom_typo',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Italic text', 'uncode-core') ,
			'param_name' => 'Italic',
			'description' => esc_html__('Button with italic text style.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		array(
			"type" => "type_numeric_slider",
			"heading" => esc_html__("Border width", 'uncode-core') ,
			"param_name" => "border_width",
			"min" => 0,
			"max" => 5,
			"step" => 1,
			"value" => 0,
			"description" => esc_html__("Specify button border width in pixels.", 'uncode-core') ,
		) ,
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__('Icon', 'uncode-core') ,
			'param_name' => 'icon',
			'description' => esc_html__('Specify icon from library.', 'uncode-core') ,
			'settings' => array(
				'emptyIcon' => true,
				 // default true, display an "EMPTY" icon?
				'iconsPerPage' => 1100,
				 // default 100, how many icons per/page to display
				'type' => 'uncode'
			) ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Icon position", 'uncode-core') ,
			"param_name" => "icon_position",
			"description" => esc_html__("Choose the position of the icon.", 'uncode-core') ,
			"value" => array(
				esc_html__('Left', 'uncode-core') => 'left',
				esc_html__('Right', 'uncode-core') => 'right',
			) ,
			'dependency' => array(
				'element' => 'icon',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Layout display', 'uncode-core') ,
			'param_name' => 'display',
			'description' => esc_html__('Specify the display mode.', 'uncode-core') ,
			"value" => array(
				esc_html__('Block', 'uncode-core') => '',
				esc_html__('Inline', 'uncode-core') => 'inline',
			) ,
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Margin top', 'uncode-core') ,
			'param_name' => 'top_margin',
			'description' => esc_html__('Activate to add the top margin.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			) ,
			'dependency' => array(
				'element' => 'display',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Rel attribute', 'uncode-core') ,
			'param_name' => 'rel',
			'description' => wp_kses(__('Here you can add value for the rel attribute.<br>Example values: <b%value>nofollow</b>, <b%value>lightbox</b>.', 'uncode-core'), array( 'br' => array( ),'b' => array( ) ) )
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('onClick', 'uncode-core') ,
			'param_name' => 'onclick',
			'description' => esc_html__('Advanced JavaScript code for onClick action.', 'uncode-core')
		) ,
		array(
			'type' => 'media_element',
			'heading' => esc_html__('Media lightbox', 'uncode-core') ,
			'param_name' => 'media_lightbox',
			'has_galleries' => true,
			'description' => esc_html__('Specify a media from the lightbox.', 'uncode-core') ,
		) ,
		$add_css_animation,
		$add_animation_speed,
		$add_animation_delay,
		array(
			'type' => 'dropdown',
			'heading' => 'Skin',
			'param_name' => 'lbox_skin',
			'value' => array(
				esc_html__('Dark', 'uncode-core') => '',
				esc_html__('Light', 'uncode-core') => 'white',
			) ,
			'description' => esc_html__('Specify the lightbox skin color.', 'uncode-core') ,
			'group' => esc_html__('Lightbox', 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			'type' => 'dropdown',
			'heading' => 'Direction',
			'param_name' => 'lbox_dir',
			'value' => array(
				esc_html__('Horizontal', 'uncode-core') => '',
				esc_html__('Vertical', 'uncode-core') => 'vertical',
			) ,
			'description' => esc_html__('Specify the lightbox sliding direction.', 'uncode-core') ,
			'group' => esc_html__('Lightbox', 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Title", 'uncode-core') ,
			"param_name" => "lbox_title",
			"description" => esc_html__("Activate this to add the media title.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Caption", 'uncode-core') ,
			"param_name" => "lbox_caption",
			"description" => esc_html__("Activate this to add the media caption.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Social", 'uncode-core') ,
			"param_name" => "lbox_social",
			"description" => esc_html__("Activate this for the social sharing buttons.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Deeplinking", 'uncode-core') ,
			"param_name" => "lbox_deep",
			"description" => esc_html__("Activate this for the deeplinking of every slide.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("No thumbnails", 'uncode-core') ,
			"param_name" => "lbox_no_tmb",
			"description" => esc_html__("Activate this for not showing the thumbnails.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("No arrows", 'uncode-core') ,
			"param_name" => "lbox_no_arrows",
			"description" => esc_html__("Activate this for not showing the navigation arrows.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Connect to other media in page", 'uncode-core') ,
			"param_name" => "lbox_connected",
			"description" => esc_html__("Activate this to connect the lightbox with other media in the same page with this option active.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("Lightbox", 'uncode-core') ,
			'dependency' => array(
				'element' => 'media_lightbox',
				'not_empty' => true,
			)
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
			'group' => esc_html__('Extra', 'uncode-core') ,
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'uncode-core')
		)
	) ,
	'js_view' => 'VcButtonView'
));
