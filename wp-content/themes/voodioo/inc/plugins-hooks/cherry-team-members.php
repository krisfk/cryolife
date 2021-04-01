<?php
/**
 * Cherry Team Members hooks.
 *
 * @package Voodioo
 */

// Add `Cover image` meta field.
add_filter( 'cherry_team_members_meta_args', 'voodioo_cherry_team_members_meta_args' );

// Add macros %%COVERIMAGE%% and callback function.
add_filter( 'cherry_team_data_callbacks', 'voodioo_cherry_team_data_callbacks' );

// Modify heading format.
add_filter( 'cherry_team_shortcode_heading_format', 'voodioo_modify_cherry_team_shortcode_heading_format' );

/**
 * Add `Cover image` meta field.
 *
 * @param array $args Meta args.
 *
 * @return array
 */
function voodioo_cherry_team_members_meta_args( $args = array() ) {

	$args['fields']['cherry-team-single-cover-image'] = array(
		'type'               => 'media',
		'multi_upload'       => false,
		'library_type'       => 'image',
		'upload_button_text' => esc_html__( 'Add Image', 'voodioo' ),
		'label'              => esc_html__( 'Single cover image', 'voodioo' ),
		'sanitize_callback'  => 'esc_attr',
	);

	return $args;
}

/**
 * Add macros %%COVERIMAGE%% and callback function.
 *
 * @param array $data Item data.
 *
 * @return array
 */
function voodioo_cherry_team_data_callbacks( $data = array() ) {

	$data['coverimage'] = 'voodioo_get_cherry_team_cover_image';

	return $data;
}

/**
 * Callback function for macros %%COVERIMAGE%%.
 */
function voodioo_get_cherry_team_cover_image() {

	global $post;
	$cover_image = get_post_meta( $post->ID, 'cherry-team-single-cover-image', true );

	if ( ! $cover_image ) {
		return '';
	}

	$format = apply_filters( 'voodioo_cherry_team_cover_image_format', '<div class="team-cover-image">%s</div>' );

	return sprintf( $format, wp_get_attachment_image( $cover_image, 'full' ) );
}

/**
 * Modify heading format.
 *
 * @param array $format Heading formats.
 *
 * @return array
 */
function voodioo_modify_cherry_team_shortcode_heading_format( $format = array() ) {

	$format['super_title'] = '<h6 class="team-heading_super_title">%s</h6>';
	$format['subtitle']    = '<h5 class="team-heading_subtitle">%s</h5>';

	return $format;
}
