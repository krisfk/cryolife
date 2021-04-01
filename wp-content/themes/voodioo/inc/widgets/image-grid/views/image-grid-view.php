<?php
/**
 * Template part to display Image grid widget.
 *
 * @package Voodioo
 * @subpackage widgets
 */
?>
<div class="widget-image-grid__holder invert <?php echo $columns_class; ?>">
	<figure class="widget-image-grid__inner">
		<?php echo $image; ?>
		<figcaption class="widget-image-grid__content">
			<?php echo $terms; ?>
			<?php echo $title; ?>
			<div class="entry-meta">
				<?php echo $author; ?>
				<?php echo $date; ?>
			</div>
		</figcaption>
	</figure>
</div>
