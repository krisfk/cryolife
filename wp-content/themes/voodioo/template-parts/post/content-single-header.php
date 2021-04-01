<?php
/**
 * Template part for displaying full-width section into single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voodioo
 */
?>
<?php $additional_classes = has_post_thumbnail() ? 'has-thumb invert' : 'no-thumb'; ?>
<section class="single-post__full-width-section <?php echo $additional_classes; ?>">

	<?php $utility = voodioo_utility()->utility; ?>

	<figure class="post-thumbnail"><?php
		$utility->media->get_image( array(
			'size'        => 'voodioo-thumb-2x',
			'mobile_size' => 'voodioo-thumb-2x',
			'html'        => '<img class="wp-post-image" src="%3$s" alt="%4$s">',
			'placeholder' => false,
			'echo'        => true,
		) );
	?></figure><!-- .post-thumbnail -->

	<div class="container">

		<header class="entry-header"><?php
			get_template_part( 'template-parts/post/post-meta/content-meta-categories' );
			get_template_part( 'template-parts/post/post-components/post-title' );
		?></header><!-- .entry-header -->

		<div class="entry-meta"><?php
			get_template_part( 'template-parts/post/post-meta/content-meta-author' );
			get_template_part( 'template-parts/post/post-meta/content-meta-date' );
			get_template_part( 'template-parts/post/post-meta/content-meta-comments' );
			do_action( 'cherry_trend_posts_display_views' );
		?></div>

	</div>

</section><!-- .single-post__full-width-section -->
