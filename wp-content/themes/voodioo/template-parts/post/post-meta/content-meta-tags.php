<?php
/**
 * Template part for displaying post tags.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

$utility = voodioo_utility()->utility;

if ( 'post' === get_post_type() ) :

	$tags_visible = ( is_single() ) ? voodioo_is_meta_visible( 'single_post_tags', 'single' ) : voodioo_is_meta_visible( 'blog_post_tags', 'loop' );

	$utility->meta_data->get_terms( array(
		'visible'   => $tags_visible,
		'type'      => 'post_tag',
		'delimiter' => '<span class="post__tags-delimiter">, </span>',
		'prefix'    => esc_html__( 'Tags: ', 'voodioo' ),
		'before'    => '<span class="post__tags">',
		'after'     => '</span>',
		'echo'      => true,
	) );

endif;
