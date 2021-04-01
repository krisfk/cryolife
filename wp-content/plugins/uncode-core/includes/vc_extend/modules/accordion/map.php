<?php
/**
 * VC Accordion config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$panel_id_1 = time() . '-1-' . rand(0, 100);
$panel_id_2 = time() . '-2-' . rand(0, 100);
vc_map(array(
	'name' => esc_html__('Accordion', 'uncode-core') ,
	'base' => 'vc_accordion',
	'weight' => 920,
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => 'fa fa-indent',
	'category' => esc_html__('Content', 'uncode-core') ,
	'description' => esc_html__('Collapsible Panels', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('Enter text which will be used as module title. Leave blank if no title is needed.', 'uncode-core')
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Active section', 'uncode-core') ,
			'param_name' => 'active_tab',
			'description' => esc_html__('Enter section number to be active on load.', 'uncode-core')
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('History (permalinks)', 'uncode-core') ,
			'param_name' => 'history',
			'description' => esc_html__('Activate this to activate url history for tabs.', 'uncode-core') ,
			'value' => array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
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
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'uncode-core'),
			"group" => esc_html__("Extra", 'uncode-core') ,
		)
	) ,
	'custom_markup' => '
<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
%content%
</div>
<div class="tab_controls">
    <a class="add_tab" title="' . esc_html__('Add section', 'uncode-core') . '"><span class="vc_icon"></span> <span class="tab-label">' . esc_html__('Add section', 'uncode-core') . '</span></a>
</div>
',
	'default_content' => '
    [vc_accordion_tab title="' . esc_html__('Section 1', 'uncode-core') . '" tab_id="' . $panel_id_1 . '"][/vc_accordion_tab]
    [vc_accordion_tab title="' . esc_html__('Section 2', 'uncode-core') . '" tab_id="' . $panel_id_2 . '"][/vc_accordion_tab]
',
	'js_view' => 'UncodePanelsView'
));
vc_map(array(
	'name' => esc_html__('Section', 'uncode-core') ,
	'base' => 'vc_accordion_tab',
	'weight' => 840,
	'allowed_container_element' => 'vc_row',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('Accordion section title.', 'uncode-core')
		) ,
		array(
			'type' => 'tab_id',
			'heading' => esc_html__('Tab ID', 'uncode-core') ,
			'param_name' => "tab_id",
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Slug', 'uncode-core') ,
			'param_name' => "slug",
			'description' => esc_html__('Custom value used for permalink. This value has to be unique.', 'uncode-core')
		),
	) ,
	'js_view' => 'VcAccordionTabView'
));
