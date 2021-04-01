<?php
/**
 * Template part for displaying posts pagination.
 *
 * @package Voodioo
 */

the_posts_pagination(
	array(
		'prev_text' => '<i class="nc-icon-outline arrows-1_tail-triangle-left"></i>',
		'next_text' => '<i class="nc-icon-outline arrows-1_tail-triangle-right"></i>',
	)
);
