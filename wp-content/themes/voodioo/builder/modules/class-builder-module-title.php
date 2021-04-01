<?php
/**
 * Class Tm_Builder_Module_Title.
 */
class Classico_Builder_Module_Title extends Tm_Builder_Module {

	public $function_name;

	public function init() {
		$this->name = esc_html__( 'Title', 'classico' );
		$this->icon = 'f034';
		$this->slug = 'tm_pb_title';
		$this->main_css_element = '%%order_class%%.' . $this->slug;

		$this->whitelisted_fields = array(
			'suptitle',
			'title',
			'display_number',
			'title_number',
			'align',
			'admin_label',
			'module_id',
			'module_class',
		);

		$this->fields_defaults = array(
			'display_number'      => array( 'on' ),
			'title_number'        => array( 1 ),
			'align'               => array( 'left' )
		);
	}

	public function get_fields() {

		$fields = array(
			'suptitle' => array(
				'label'       => esc_html__( 'Supertitle', 'classico' ),
				'type'        => 'text',
				'description' => esc_html__( 'Enter your supertitle.', 'classico' ),
			),
			'title' => array(
				'label'       => esc_html__( 'Title', 'classico' ),
				'type'        => 'text',
				'description' => esc_html__( 'Enter your title.', 'classico' ),
			),
			'display_number' => array(
				'label'           => esc_html__( 'Display title number?', 'classico' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'classico' ),
					'on'  => esc_html__( 'Yes', 'classico' ),
				),
				'affects'         => array(
					'#tm_pb_title_number',
				),
				'description'     => esc_html__( 'Display number above title?', 'classico' ),
			),
			'title_number' => array(
				'label'           => esc_html__( 'Title number', 'classico' ),
				'type'            => 'range',
				'default'         => '1',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '100',
					'step' => '1',
				),
				'mobile_options'  => false,
				'depends_default' => false,
			),
			'align' => array(
				'label'           => esc_html__( 'Title align', 'classico' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'left'   => esc_html__( 'Left', 'classico' ),
					'center' => esc_html__( 'Center', 'classico' ),
					'right'  => esc_html__( 'Right', 'classico' ),
				),
				'description'     => esc_html__( 'Title align?', 'classico' ),
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'classico' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'classico' ),
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'classico' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'classico' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
		);

		return $fields;
	}

	public function shortcode_callback( $atts, $content = null, $function_name ) {
		$module_id             = $this->shortcode_atts['module_id'];
		$module_class          = $this->shortcode_atts['module_class'];

		wp_enqueue_script( 'scrollmonitor' );
		wp_enqueue_script( 'anime' );
		wp_enqueue_script( 'revealfx' );

		$this->set_vars(
			array(
				'title',
				'suptitle',
				'display_number',
				'title_number',
				'align'
			)
		);

		$this->function_name = $function_name;

		$title_number = zeroise( $this->_var( 'title_number' ), 2 );

		$align = $this->_var( 'align' );

		if ( '' !== $this->_var( 'title' ) ) {
			$content = sprintf(
				'<div class="tm_pb_title_wrapper%6$s%4$s"%5$s><div class="h2-wrapp"><div class="h2-style small">%3$s</div></div><div class="wrap-title"><h6>%1$s</h6><h2 class="h2-style">%2$s</h2></div></div>',
				$this->_var( 'suptitle' ),
				$this->_var( 'title' ),
				( 'on' === $this->_var( 'display_number' ) ? $title_number : '' ),
				esc_attr( ' tm_pb_title_align_' . $align ),
				( '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : '' ),
				( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' )
			);
		}

		$classes = '';

		$output = $this->wrap_module( $content, $classes, $function_name );

		return $output;
	}
}

new Classico_Builder_Module_Title;
