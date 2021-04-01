<?php
$output = $title = $interval = $el_id = $el_class = '';

global $history_tab, $first_tab_active;

$first_tab_active = true;

extract( shortcode_atts( array(
	'title' => '',
	'vertical' => '',
	'history' => '',
	'el_id' => '',
	'el_class' => ''
), $atts ) );

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

$history_tab = $history;

$el_class = $this->getExtraClass( $el_class );

$element = 'uncode-tabs';

// Extract tab titles
preg_match_all( '/vc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();

if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}
$tabs_nav = '<div class="vc_tta-tabs-container';
if ($vertical === 'yes') {
	$tabs_nav .= ' vertical-tab-menu';
}
$tabs_nav .= '"><ul class="nav nav-tabs wpb_tabs_nav ui-tabs-nav vc_tta-tabs-list'.(($vertical === 'yes') ? ' tabs-left' : '').'">';
$counter = 0;
foreach ( $tab_titles as $tab ) {
	$tab_atts = shortcode_parse_atts($tab[0]);
	if(isset($tab_atts['title'])) {
		if ( isset( $tab_atts['slug'] ) && $tab_atts['slug'] !== '' ) {
			$hash = sanitize_title( $tab_atts['slug'] );
		} else {
			$hash = 'tab-';
			if ( isset( $tab_atts['tab_id'] ) ) {
				$hash .= $tab_atts['tab_id'];
			} else {
				$hash .= sanitize_title( $tab_atts['title'] );
			}
		}
		$history_rend = $history !== '' ? ' data-tab-history="true" data-tab-history-changer="push" data-tab-history-update-url="true"' : '';
		$tabs_nav .= '<li data-tab-id="' . esc_attr( $hash ) . '" class="vc_tta-tab'.(($counter === 0) ? ' active' : '').'"><a href="#' . esc_attr( $hash ) . '" data-toggle="tab"' . $history_rend . '><span>' . $tab_atts['title'] . '</span></a></li>';
	}
	$counter++;
}
$tabs_nav .= '</ul>';
$tabs_nav .= '</div>';

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim( $element . ' wpb_content_element ' . $el_class ), $this->settings['base'], $atts );

$output .= '<div class="' . esc_attr($css_class) . '" data-interval="' . esc_attr($interval) . '" ' . $el_id . '>';
$output .= '<div class="uncode-wrapper tab-container">';
$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => $element . '_heading' ) );
$output .= $tabs_nav;
if ($vertical === 'yes') {
	$output .= '<div class="vertical-tab-contents">';
}
$output .= '<div class="tab-content'.(($vertical === 'yes') ? ' vertical' : '').'">';
$output .= $content;
$output .= '</div>';
if ($vertical === 'yes') {
	$output .= '</div>';
}
$output .= '</div>';
$output .= '</div>';

echo uncode_remove_p_tag($output);
$history_tab = '';
