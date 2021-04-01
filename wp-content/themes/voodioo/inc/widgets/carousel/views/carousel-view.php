<?php
/**
 * Template part to display Carousel widget.
 *
 * @package Voodioo
 * @subpackage widgets
 */
?>

<div class="inner">
	<div class="content-wrapper">
		<figure class="post-thumbnail">
			<?php echo $image; ?>
		</figure>
		<header class="entry-header">
			<?php echo $terms_line; ?>
			<?php echo $title; ?>
		</header>
		<div class="entry-meta">
			<?php echo $author; ?>
			<?php echo $date; ?>
		</div>
		<div class="entry-content">
			<?php echo $content; ?>
		</div>
		<footer class="entry-footer">
			<?php echo $more_button; ?>
		</footer>
	</div>
</div>
