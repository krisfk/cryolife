<?php
/**
 * Cherry-testi hooks.
 *
 * @package Voodioo
 */

// Customization cherry-testimonials pagination args.
add_filter( 'tm_testimonials_pagination_args', 'voodioo_tm_testimonials_pagination_args', 10, 2 );

// Add template to voodiootestimonials templates list.
add_filter( 'tm_testimonials_templates_list', 'voodioo_add_template_to_tm_testimonials_templates_list' );

// Change testimonials archive page template.
add_filter( 'tm_testimonials_archive_template_args', 'voodioo_tm_testimonials_archive_template_args' );

/**
 * Customization cherry-testimonials pagination args.
 *
 * @return array
 */
function voodioo_tm_testimonials_pagination_args( $pagination_args, $args ) {

	$pagination_args = array(
		'prev_text' => '<i class="nc-icon-outline arrows-1_tail-triangle-left"></i>',
		'next_text' => '<i class="nc-icon-outline arrows-1_tail-triangle-right"></i>',
	);

	return $pagination_args;
}

/**
 * Add template to voodiootestimonials templates list.
 *
 * @param array $tmpl_list Templates list.
 *
 * @return array
 */
function voodioo_add_template_to_tm_testimonials_templates_list( $tmpl_list ) {
	$tmpl_list['default-without-icon.tmpl'] = 'default-without-icon.tmpl';

	return $tmpl_list;
}

/**
 * Change testimonials archive page template.
 *
 * @param array $args Testimonials archive template args.
 *
 * @return array
 */
function voodioo_tm_testimonials_archive_template_args ( $args = array() ) {

	$args['template'] = 'default-without-icon.tmpl';

	return $args;
}
