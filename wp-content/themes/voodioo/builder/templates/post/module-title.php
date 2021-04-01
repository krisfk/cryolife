<?php
/**
 * Posts module title template
 *
 * @package Voodioo
 */
?>
<div class="voodiooposts_title_group">
	<?php echo $this->html( $this->_var( 'super_title' ), '<h6 class="voodiooposts_supertitle">%s</h6>' ); ?>
	<?php echo $this->html( $this->_var( 'title' ), '<h3 class="voodiooposts_title">%s</h3>' ); ?>
	<?php echo $this->html( $this->_var( 'subtitle' ), '<h5 class="voodiooposts_subtitle">%s</h5>' ); ?>
	<?php echo $this->esc_switcher( 'title_delimiter', '<div class="voodiooposts_title_divider"></div>' ); ?>
</div>
