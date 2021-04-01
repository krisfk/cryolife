<?php
/**
 * Template part for displaying single posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php voodioo_ads_post_before_content() ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links__title">' . esc_html__( 'Pages:', 'voodioo' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span class="page-links__item">',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'voodioo' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta-container">
			<div class="entry-meta entry-meta--left"><?php
				get_template_part( 'template-parts/post/post-meta/content-meta-tags' );
			?></div>

			<div class="entry-meta entry-meta--right"><?php
				voodioo_share_buttons( 'single' );
			?></div>
		</div>
		<?php do_action( 'cherry_trend_posts_display_rating' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
