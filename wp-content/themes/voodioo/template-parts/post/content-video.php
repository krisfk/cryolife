<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>

	<?php $blog_layout_type = get_theme_mod( 'blog_layout_type', voodioo_theme()->customizer->get_default( 'blog_layout_type' ) ); ?>

	<?php if ( ! in_array( $blog_layout_type, array( 'grid', 'vertical-justify' ) ) ) : ?>

		<div class="post-featured-content"><?php
			do_action( 'cherry_post_format_video', array(
				'width' => 886,
				'height' => 508,
			) );
		?></div><!-- .post-featured-content -->

	<?php else : ?>

		<figure class="post-thumbnail"><?php
			get_template_part( 'template-parts/post/post-components/post-image' );
		?></figure><!-- .post-thumbnail -->

	<?php endif; ?>

	<div class="posts-list__item-content">

		<header class="entry-header"><?php
			get_template_part( 'template-parts/post/post-meta/content-meta-categories' );
			get_template_part( 'template-parts/post/post-components/post-title' );
		?></header><!-- .entry-header -->

		<div class="entry-content"><?php
			get_template_part( 'template-parts/post/post-components/post-content' );
		?></div><!-- .entry-content -->

		<footer class="entry-footer">
			<div class="entry-meta-container">
				<div class="entry-meta entry-meta--left"><?php
					get_template_part( 'template-parts/post/post-meta/content-meta-author' );
					get_template_part( 'template-parts/post/post-meta/content-meta-date' );
					get_template_part( 'template-parts/post/post-meta/content-meta-tags' );
				?></div>

				<div class="entry-meta entry-meta--right"><?php
					voodioo_share_buttons( 'loop' );
					get_template_part( 'template-parts/post/post-meta/content-meta-comments' );
				?></div>
			</div>

			<?php get_template_part( 'template-parts/post/post-components/post-button' ); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .posts-list__item-content -->

</article><!-- #post-## -->
