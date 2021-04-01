<?php
/**
 * Template part for displaying posts listing item
 *
 * @package Voodioo
 */
?>
<div class="<?php echo tm_builder_tools()->get_col_classes( $this ); ?>">
	<div class="tm-posts_item">
		<div class="tm-posts_item_content_wrap">
			<div class="tm-posts_item_image"><?php

				tm_builder_core()->utility()->media->get_image( array(
						'html'        => '<a href="%1$s" %2$s><img src="%3$s" alt="%4$s"></a>',
						'class'       => 'tm-posts_img',
						'size'        => esc_attr( $this->_var( 'image_size' ) ),
						'placeholder' => true,
						'echo'        => true,
				) );

				?></div>
			<div class="posts_item_content">
				<?php

				tm_builder_core()->utility()->meta_data->get_terms( array(
						'type'   => 'category',
						'before' => '<div class="post__cats post_category">',
						'after'  => '</div>',
						'echo'   => true,
				) );

				tm_builder_core()->utility()->attributes->get_title( apply_filters( 'voodioo_module_post_title_settings_layout_2', array(
						'visible'      => true,
						'trimmed_type' => 'word',
						'ending'       => '&hellip;',
						'html'         => '<h4 %1$s><a href="%2$s" %3$s rel="bookmark">%4$s</a></h4>',
						'class'        => 'tm-posts_item_title',
						'echo'         => true,
				) ) );

				tm_builder_core()->utility()->attributes->get_content( array(
						'visible'      => ($this->_var( 'excerpt' ) && 0 < $this->_var( 'excerpt' )) ? true : false,
						'content_type' => 'post_content',
						'length'       => $this->_var( 'excerpt' ),
						'trimmed_type' => 'word',
						'ending'       => '&hellip;',
						'html'         => '<div %1$s>%2$s</div>',
						'class'        => 'tm-posts_item_excerpt',
						'echo'         => true,
				) );
				?>
			</div>
			<div class="posts_item_content_footer">
				<?php
				echo $this->get_template_part( 'post/item-meta.php' );

				tm_builder_core()->utility()->attributes->get_button( apply_filters( 'voodioo_module_post_btn_settings_layout_2', array(
						'visible' => true,
						'text'    => esc_html__( 'Learn More', 'voodioo' ),
						'class'   => 'tm-posts_more-btn btn',
						'html'    => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
						'echo'    => true,
				) ) );
				?>
			</div>
		</div>
	</div>
</div>
