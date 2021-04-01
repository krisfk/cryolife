<?php
/**
 * Template part for Testimonial module displaying
 *
 * @package Voodioo
 */
?>
<?php echo $this->_var( 'portrait_image' ); ?>
<div class="tm_pb_testimonial_description">
	<div class="tm_pb_testimonial_description_inner">
		<blockquote class="tm_pb_testimonial_content">
			<?php echo $this->shortcode_content; ?>
		</blockquote>

		<div class="tm_pb_testimonial_meta">
			<span class="tm_pb_testimonial_author">
				<?php echo $this->_var( 'author' ); ?>
			</span><?php
			if ( $this->_var( 'job_title' ) ) {
				printf( ' — %s', $this->_var( 'job_title' ) );
			}
			if ( $this->_var( 'company_name' ) ) {
				printf( ', %s', $this->_var( 'company_name' ) );
			}
			if ( $this->_var( 'testi_date' ) ) {
				printf( ' - %s', $this->_var( 'testi_date' ) );
			}
		?></div>
	</div><!-- .tm_pb_testimonial_description_inner -->
</div><!-- .tm_pb_testimonial_description -->
