<?php
/**
 * Template part to display mini-view news-smart-box widget.
 *
 * @package Voodioo
 * @subpackage widgets
 */
?>
<div class="news-smart-box__item-inner">
	<div class="news-smart-box__item-header">
		<?php echo $image; ?>
	</div>
	<div class="news-smart-box__item-content">
		<?php echo $category; ?>
		<?php echo $title; ?>
		<div class="entry-meta">
			<?php echo $author; ?>
			<?php echo $date; ?>
			<?php echo $tags; ?>
			<?php echo $comments; ?>
		</div>
	</div>
</div>
