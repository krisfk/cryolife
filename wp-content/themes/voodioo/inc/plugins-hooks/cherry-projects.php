<?php
/**
 * Cherry-projects hooks.
 *
 * @package Voodioo
 */

// Customization cherry-project plugin.
add_filter( 'cherry-projects-title-settings', 'voodioo_cherry_projects_title_settings' );
add_filter( 'cherry-projects-author-settings', 'voodioo_cherry_projects_author_settings' );
add_filter( 'cherry-projects-button-settings', 'voodioo_cherry_projects_button_settings' );
add_filter( 'cherry-projects-content-settings', 'voodioo_cherry_projects_content_settings' );
add_filter( 'cherry_projects_show_all_text', 'voodioo_projects_show_all_text' );
add_filter( 'cherry-projects-prev-button-text', 'voodioo_cherry_projects_prev_button_text' );
add_filter( 'cherry-projects-next-button-text', 'voodioo_cherry_projects_next_button_text' );
add_filter( 'cherry_projects_data_callbacks', 'voodioo_cherry_projects_data_callbacks', 10, 2 );
add_filter( 'cherry_projects_cascading_list_map', 'voodioo_cherry_projects_cascading_list_map' );
add_filter( 'cherry-projects-terms-list-settings', 'voodioo_modify_cherry_projects_terms_list_settings' );

/**
 * Customization title settings to cherry-project.
 *
 * @param array $settings Title settings.
 *
 * @return array
 */
function voodioo_cherry_projects_title_settings( $settings ) {

	$title_html = ( is_single() ) ? '<h3 %1$s>%4$s</h3>' : '<h5 %1$s><a href="%2$s" %3$s rel="bookmark">%4$s</a></h5>';

	$settings['html']  = $title_html;
	$settings['class'] = 'project-entry-title';

	if ( is_single() ) {
		$settings['length'] = - 1;
	}

	return $settings;
}

/**
 * Customization meta author settings to cherry-project.
 *
 * @param array $settings Author settings.
 *
 * @return array
 */
function voodioo_cherry_projects_author_settings( $settings ) {

	$settings['html'] = '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>';

	return $settings;
}

/**
 * Customization button settings to cherry-project.
 *
 * @param array $settings Button settings.
 *
 * @return array
 */
function voodioo_cherry_projects_button_settings( $settings ) {

	$new_settings = array(
		'text'  => esc_html__( 'View now!', 'voodioo' ),
		'class' => 'project-more-button btn-link',
		'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
	);

	$settings = array_merge( $settings, $new_settings );

	return $settings;
}

/**
 * Customization content settings to cherry-project.
 *
 * @param array $settings Content settings.
 *
 * @return array
 */
function voodioo_cherry_projects_content_settings( $settings ) {

	$settings['class'] = 'project-entry-content';

	return $settings;
}

/**
 * Customization show all text to cherry-project.
 *
 * @return string
 */
function voodioo_projects_show_all_text( $show_all_text ) {
	return esc_html__( 'All', 'voodioo' );
}

/**
 * Customization cherry-projects prev button text.
 *
 * @return string
 */
function voodioo_cherry_projects_prev_button_text( $prev_text ) {
	return '<i class="nc-icon-outline arrows-1_tail-triangle-left"></i>';
}

/**
 * Customization cherry-projects next button text.
 *
 * @return string
 */
function voodioo_cherry_projects_next_button_text( $next_text ) {

	return '<i class="nc-icon-outline arrows-1_tail-triangle-right"></i>';
}

/**
 * Add macros %%SHAREBUTTONS%% and callback to cherry-project.
 *
 * @return array
 */
function voodioo_cherry_projects_data_callbacks( $data, $atts ) {

	$data['sharebuttons'] = 'voodioo_get_single_share_buttons';

	return $data;
}

/**
 * Customization cherry-projects cascading list map.
 *
 * @return array
 */
function voodioo_cherry_projects_cascading_list_map( $cascading_list_map ) {
	return array( 2, 2, 3, 3, 3, 4, 4, 4, 4 );
}

/**
 * @param array $settings
 *
 * @return array
 */
function voodioo_modify_cherry_projects_terms_list_settings( $settings = array() ) {

	if ( 'projects_tag' === $settings[ 'type' ] ){
		$settings[ 'prefix' ] = esc_html__( 'Tags: ', 'voodioo' );
	}

	return $settings;
}
