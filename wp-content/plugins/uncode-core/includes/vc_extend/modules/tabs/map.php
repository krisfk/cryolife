<?php
/**
 * VC Tabs config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$tab_id_1 = time() . '-1-' . rand(0, 100);
$tab_id_2 = time() . '-2-' . rand(0, 100);
vc_map(array(
	"name" => esc_html__('Tabs', 'uncode-core') ,
	'base' => 'vc_tabs',
	'weight' => 925,
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => 'fa fa-folder',
	'category' => esc_html__('Content', 'uncode-core') ,
	'description' => esc_html__('Tabbed Contents', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('Enter text which will be used as module title. Leave blank if no title is needed.', 'uncode-core')
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Vertical tabs', 'uncode-core') ,
			'param_name' => 'vertical',
			'description' => esc_html__('Specify checkbox to allow all sections to be collapsible.', 'uncode-core') ,
			'value' => array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			)
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
		),
	) ,
	'custom_markup' => '
<div class="wpb_tabs_holder wpb_holder vc_container_for_children">
<ul class="tabs_controls">
</ul>
%content%
</div>',
	'default_content' => '
[vc_tab title="' . esc_html__('Tab 1', 'uncode-core') . '" tab_id="' . $tab_id_1 . '"][/vc_tab]
[vc_tab title="' . esc_html__('Tab 2', 'uncode-core') . '" tab_id="' . $tab_id_2 . '"][/vc_tab]
',
	'js_view' => 'VcTabsView'
));

vc_map(array(
	'name' => esc_html__('Tab', 'uncode-core') ,
	'base' => 'vc_tab',
	'allowed_container_element' => 'vc_row',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('Tab title.', 'uncode-core')
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
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Remove top margin', 'uncode-core') ,
			'param_name' => 'no_margin',
			'description' => esc_html__('Activate this to remove the top margin.', 'uncode-core') ,
			'value' => array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			)
		) ,
	) ,
	'js_view' => 'VcTabView'
));
