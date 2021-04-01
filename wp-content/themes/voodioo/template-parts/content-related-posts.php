<?php
/**
 * The template for displaying related posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Voodioo
 * @subpackage single-post
 */
?>
<div class="<?php echo esc_attr( $grid_class ); ?>">
	<article class="related-post hentry page-content">
		<figure class="post-thumbnail"><?php
			echo $image;
		?></figure>
		<div class="related-post__content">
			<header class="entry-header"><?php
				echo $category;
				echo $title;
			?></header>
			<div class="entry-content"><?php
				echo $excerpt;
			?></div>
			<footer class="entry-footer">
				<div class="entry-meta-container">
					<div class="entry-meta entry-meta--left"><?php
						echo $author;
						echo $date;
						echo $tag;
					?></div>

					<div class="entry-meta entry-meta--right"><?php
						echo $comment_count;
					?></div>
				</div>
			</footer>
		</div>
	</article><!--.related-post-->
</div>
