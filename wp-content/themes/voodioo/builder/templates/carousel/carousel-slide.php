<?php
/**
 * Template part for displaying carousel item slides
 *
 * @package Voodioo
 */
?>
<div class="swiper-slide">
	<div class="content-wrapper">
		<?php echo $this->_var( 'image' ); ?>
		<header class="entry-header">
			<?php echo $this->_var( 'category' ); ?>
			<?php echo $this->_var( 'tag' ); ?>
			<?php echo $this->_var( 'post_title' ); ?>
		</header>
		<article class="entry-content">
			<?php echo $this->_var( 'excerpt' ); ?>
		</article>
		<div class="entry-meta">
			<?php echo $this->_var( 'author' ); ?>
			<?php echo $this->_var( 'date' ); ?>
			<?php echo $this->_var( 'count' ); ?>
		</div>
		<footer class="entry-footer">
			<?php echo $this->_var( 'more_button' ); ?>
		</footer>
	</div>

</div><!-- Slide-->
