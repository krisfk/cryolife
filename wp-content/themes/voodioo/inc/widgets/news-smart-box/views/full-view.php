<?php
/**
 * Template part to display full-view news-smart-box widget.
 *
 * @package Voodioo
 * @subpackage widgets
 */

$additional_class = ( 'layout_type_2' === $this->instance['layout_type'] ) ? ' invert' : '';
?>
<div class="news-smart-box__item-inner<?php echo $additional_class; ?>">
	<div class="news-smart-box__item-header">
		<?php echo $image; ?>
	</div>
	<div class="news-smart-box__item-content">
		<?php echo $category; ?>
		<?php echo $title; ?>
		<?php echo $excerpt; ?>
		<div class="entry-meta"><?php
			echo $author;
			echo $date;
			echo $tags;
			echo $comments;
		?></div>
		<?php echo $more_btn; ?>
	</div>
</div>
