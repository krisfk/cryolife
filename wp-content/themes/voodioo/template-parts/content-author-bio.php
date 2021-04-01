<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Voodioo
 */

if ( ! get_the_author_meta( 'description' ) ) {
	return;
}
?>
<div class="post-author-bio">
	<div class="post-author__holder clear">
		<div class="post-author__avatar"><?php
			echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'voodioo_author_bio_avatar_size', 181 ), '', esc_attr( get_the_author_meta( 'nickname' ) ) );
		?></div>
		<h6 class="post-author__super-title"><?php esc_html_e( 'Author', 'voodioo' ); ?></h6>
		<h3 class="post-author__title"><?php the_author_posts_link(); ?></h3>
		<div class="post-author__content"><?php
			echo get_the_author_meta( 'description' );
		?></div>
	</div>
</div><!--.post-author-bio-->
