<?php
/**
 * Template part for displaying post title.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */

$utility          = voodioo_utility()->utility;
$sticky           = voodioo_sticky_label( false );
$blog_layout_type = get_theme_mod( 'blog_layout_type', voodioo_theme()->customizer->get_default( 'blog_layout_type' ) );

if ( is_single() ) :

	$title_html = '<h2 %1$s>%4$s</h2>';

elseif ( 'default-modern' === $blog_layout_type ) :

	$title_html = '<h3 %1$s>' . $sticky . '<a href="%2$s" rel="bookmark">%4$s</a></h3>';

else :

	$title_html = '<h4 %1$s>' . $sticky . '<a href="%2$s" rel="bookmark">%4$s</a></h4>';

endif;

$utility->attributes->get_title( array(
	'class' => 'entry-title',
	'html'  => $title_html,
	'echo'  => true,
) );
