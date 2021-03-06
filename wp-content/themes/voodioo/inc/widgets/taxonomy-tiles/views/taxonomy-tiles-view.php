<?php
/**
 * Template part to display Taxonomy-tiles widget.
 *
 * @package Voodioo
 * @subpackage widgets
 */
?>
<div class="widget-taxonomy-tiles__holder invert grid-item <?php echo $class; ?>">
	<figure class="widget-taxonomy-tiles__inner">
		<a href="<?php echo $permalink; ?>"><?php echo $image; ?></a>
		<figcaption class="widget-taxonomy-tiles__content">
			<?php echo $title; ?>
			<?php echo $description; ?>
			<?php echo $count; ?>
		</figcaption>
	</figure>
</div>
