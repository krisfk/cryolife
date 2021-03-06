<?php
/**
 * Theme Customizer.
 *
 * @package Voodioo
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function voodioo_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'voodioo_get_customizer_options' , array(
		'prefix'     => 'voodioo',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** `Site Identity` section */
			'show_tagline' => array(
				'title'    => esc_html__( 'Show tagline after logo', 'voodioo' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => false,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility' => array(
				'title'    => esc_html__( 'Show ToTop button', 'voodioo' ),
				'section'  => 'title_tagline',
				'priority' => 61,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'voodioo' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),

			/** `General Site settings` panel */
			'general_settings' => array(
				'title'    => esc_html__( 'General Site settings', 'voodioo' ),
				'priority' => 40,
				'type'     => 'panel',
			),

			/** `Logo & Favicon` section */
			'logo_favicon' => array(
				'title'    => esc_html__( 'Logo &amp; Favicon', 'voodioo' ),
				'priority' => 25,
				'panel'    => 'general_settings',
				'type'     => 'section',
			),
			'header_logo_type' => array(
				'title'   => esc_html__( 'Logo Type', 'voodioo' ),
				'section' => 'logo_favicon',
				'default' => 'image',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'voodioo' ),
					'text'  => esc_html__( 'Text', 'voodioo' ),
				),
				'type' => 'control',
			),
			'header_logo_url' => array(
				'title'           => esc_html__( 'Logo Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload logo image', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_image',
			),
			'invert_header_logo_url' => array(
				'title'           => esc_html__( 'Invert Logo Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload logo image', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/invert-logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_image',
			),
			'retina_header_logo_url' => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'voodioo' ),
				'section'         => 'logo_favicon',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_image',
			),
			'invert_retina_header_logo_url' => array(
				'title'           => esc_html__( 'Invert Retina Logo Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => false,
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_image',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => 'Muli, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_text',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => voodioo_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_text',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => '800',
				'field'           => 'select',
				'choices'         => voodioo_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_text',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => '30',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_text',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'voodioo' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => voodioo_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_logo_text',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'voodioo' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'voodioo' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'voodioo' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'voodioo' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'voodioo' ),
				'section' => 'breadcrumbs',
				'default' => 'full',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'voodioo' ),
					'minified' => esc_html__( 'Minified', 'voodioo' ),
				),
				'type'    => 'control',
			),
			'breadcrumbs_bg_color' => array(
				'title'   => esc_html__( 'Breadcrumbs background color', 'voodioo' ),
				'section' => 'breadcrumbs',
				'default' => '#f8f8f8',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links' => array(
				'title'    => esc_html__( 'Social links', 'voodioo' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links' => array(
				'title'   => esc_html__( 'Show social links in header', 'voodioo' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links' => array(
				'title'   => esc_html__( 'Show social links in footer', 'voodioo' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'voodioo' ),
				'section' => 'social_links',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'voodioo' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'voodioo' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_container_type' => array(
				'title'   => esc_html__( 'Header type', 'voodioo' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'voodioo' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'voodioo' ),
				),
				'type' => 'control',
			),
			'content_container_type' => array(
				'title'   => esc_html__( 'Content type', 'voodioo' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'voodioo' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'voodioo' ),
				),
				'type' => 'control',
			),
			'footer_container_type' => array(
				'title'   => esc_html__( 'Footer type', 'voodioo' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'voodioo' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'voodioo' ),
				),
				'type' => 'control',
			),
			'container_width' => array(
				'title'       => esc_html__( 'Container width (px)', 'voodioo' ),
				'section'     => 'page_layout',
				'default'     => 1224,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1920,
					'step' => 1,
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'voodioo' ),
				'section' => 'page_layout',
				'default' => '1/3',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'voodioo' ),
				'description' => esc_html__( 'Configure Color Scheme', 'voodioo' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Regular scheme` section */
			'regular_scheme' => array(
				'title'       => esc_html__( 'Regular scheme', 'voodioo' ),
				'priority'    => 10,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'regular_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#c59495',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2' => array(
				'title'   => esc_html__( 'Accent color (2)', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color' => array(
				'title'   => esc_html__( 'Text color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#777777',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color' => array(
				'title'   => esc_html__( 'Link color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#c59495',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#222222',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'voodioo' ),
				'section' => 'regular_scheme',
				'default' => '#c59495',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Invert scheme` section */
			'invert_scheme' => array(
				'title'       => esc_html__( 'Invert scheme', 'voodioo' ),
				'priority'    => 20,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'invert_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Text color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color' => array(
				'title'   => esc_html__( 'Link color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#c59495',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'voodioo' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Greyscale colors` section */
			'grey_scheme' => array(
				'title'       => esc_html__( 'Greyscale colors', 'voodioo' ),
				'priority'    => 30,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),

			'grey_color_1' => array(
				'title'   => esc_html__( 'Grey color (1)', 'voodioo' ),
				'section' => 'grey_scheme',
				'default' => '#333333',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'grey_color_2' => array(
				'title'   => esc_html__( 'Grey color (2)', 'voodioo' ),
				'section' => 'grey_scheme',
				'default' => '#cccbcb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'grey_color_3' => array(
				'title'   => esc_html__( 'Grey color (3)', 'voodioo' ),
				'section' => 'grey_scheme',
				'default' => '#ececec',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'grey_color_4' => array(
				'title'   => esc_html__( 'Grey color (4)', 'voodioo' ),
				'section' => 'grey_scheme',
				'default' => '#f2f2f2',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'voodioo' ),
				'description' => esc_html__( 'Configure typography settings', 'voodioo' ),
				'priority'    => 50,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'voodioo' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'body_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'body_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'body_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'body_typography',
				'default'     => '1.9',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'    => esc_html__( 'H1 Heading', 'voodioo' ),
				'priority' => 10,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h1_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h1_typography',
				'default' => '900',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h1_typography',
				'default'     => '124',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h1_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h1_typography',
				'default'     => '0.03',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'    => esc_html__( 'H2 Heading', 'voodioo' ),
				'priority' => 15,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h2_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h2_typography',
				'default' => '800',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h2_typography',
				'default'     => '89',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h2_typography',
				'default'     => '1.3',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'    => esc_html__( 'H3 Heading', 'voodioo' ),
				'priority' => 20,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h3_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h3_typography',
				'default' => '100',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h3_typography',
				'default'     => '31',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h3_typography',
				'default'     => '1.35',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h3_typography',
				'default'     => '0.01',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'    => esc_html__( 'H4 Heading', 'voodioo' ),
				'priority' => 25,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h4_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h4_typography',
				'default' => '100',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h4_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h4_typography',
				'default'     => '1.55',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'    => esc_html__( 'H5 Heading', 'voodioo' ),
				'priority' => 30,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h5_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h5_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h5_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h5_typography',
				'default'     => '1.55',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h5_typography',
				'default'     => '0.03',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'    => esc_html__( 'H6 Heading', 'voodioo' ),
				'priority' => 35,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'h6_typography',
				'default' => 'Hind, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'h6_typography',
				'default' => '100',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'h6_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'h6_typography',
				'default'     => '1.44',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'voodioo' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => voodioo_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'voodioo' ),
				'priority' => 45,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'breadcrumbs_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Muli, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'breadcrumbs_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),

			/** `Meta` section */
			'meta_typography' => array(
				'title'       => esc_html__( 'Meta', 'voodioo' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'meta_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'voodioo' ),
				'section' => 'meta_typography',
				'default' => 'Muli, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'meta_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'voodioo' ),
				'section' => 'meta_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => voodioo_get_font_styles(),
				'type'    => 'control',
			),
			'meta_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'voodioo' ),
				'section' => 'meta_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => voodioo_get_font_weight(),
				'type'    => 'control',
			),
			'meta_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'voodioo' ),
				'section'     => 'meta_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'meta_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'voodioo' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'voodioo' ),
				'section'     => 'meta_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'meta_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, em', 'voodioo' ),
				'section'     => 'meta_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -1,
					'max'  => 1,
					'step' => 0.01,
				),
				'type' => 'control',
			),
			'meta_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'voodioo' ),
				'section' => 'meta_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => voodioo_get_character_sets(),
				'type'    => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'    => esc_html__( 'Header', 'voodioo' ),
				'priority' => 60,
				'type'     => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'    => esc_html__( 'Styles', 'voodioo' ),
				'priority' => 5,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'voodioo' ),
				'section' => 'header_styles',
				'default' => 'style-4',
				'field'   => 'select',
				'choices' => voodioo_get_header_layout_options(),
				'type'    => 'control',
			),
			'header_transparent_layout' => array(
				'title'   => esc_html__( 'Header overlay', 'voodioo' ),
				'section' => 'header_styles',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
				'active_callback' => '__return_false',
			),
			'header_invert_color_scheme' => array(
				'title'   => esc_html__( 'Enable invert color scheme', 'voodioo' ),
				'section' => 'header_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'voodioo' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => '#222222',
				'type'    => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'voodioo' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'voodioo' ),
				'section' => 'header_styles',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => voodioo_get_bg_repeat(),
				'type'    => 'control',
			),
			'header_bg_position' => array(
				'title'   => esc_html__( 'Background Position', 'voodioo' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => voodioo_get_bg_position(),
				'type'    => 'control',
			),
			'header_bg_size' => array(
				'title'   => esc_html__( 'Background Size', 'voodioo' ),
				'section' => 'header_styles',
				'default' => 'cover',
				'field'   => 'select',
				'choices' => voodioo_get_bg_size(),
				'type'    => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'voodioo' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => voodioo_get_bg_attachment(),
				'type'    => 'control',
			),
			'header_search' => array(
				'title'   => esc_html__( 'Show search', 'voodioo' ),
				'section' => 'header_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel' => array(
				'title'    => esc_html__( 'Top Panel', 'voodioo' ),
				'priority' => 10,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'top_panel_visibility' => array(
				'title'   => esc_html__( 'Enable top panel', 'voodioo' ),
				'section' => 'header_top_panel',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_text' => array(
				'title'           => esc_html__( 'Disclaimer Text', 'voodioo' ),
				'description'     => esc_html__( 'HTML formatting support', 'voodioo' ),
				'section'         => 'header_top_panel',
				'default'         => ' ',
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_top_panel_enable',
			),
			'top_panel_bg'        => array(
				'title'           => esc_html__( 'Background color', 'voodioo' ),
				'section'         => 'header_top_panel',
				'default'         => '#0d0d0d',
				'field'           => 'hex_color',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_top_panel_enable',
			),
			'top_menu_visibility' => array(
				'title'           => esc_html__( 'Show top menu', 'voodioo' ),
				'section'         => 'header_top_panel',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_top_panel_enable',
			),

			/** `Header contact block` section */
			'header_contact_block' => array(
				'title'       => esc_html__( 'Header Contact Block', 'voodioo' ),
				'description' => esc_html__( 'This block shows only if Top Panel section is enabled!', 'voodioo' ),
				'priority'    => 20,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_contact_block_visibility' => array(
				'title'   => esc_html__( 'Show Header Contact Block', 'voodioo' ),
				'section' => 'header_contact_block',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_contact_icon_1' => array(
				'title'           => esc_html__( 'Contact item 1', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'header_contact_block',
				'field'           => 'iconpicker',
				'default'         => 'ui-1_home-simple',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_label_1' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => esc_html__( 'Address:', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_text_1' => array(
				'title'           => '',
				'description'     => esc_html__( 'Description', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => voodioo_get_default_contact_information( 'address' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_icon_2' => array(
				'title'           => esc_html__( 'Contact item 2', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'header_contact_block',
				'field'           => 'iconpicker',
				'default'         => 'ui-2_phone',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_label_2' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => esc_html__( 'Phones:', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_text_2' => array(
				'title'           => '',
				'description'     => esc_html__( 'Description', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => voodioo_get_default_contact_information( 'phones' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_icon_3' => array(
				'title'           => esc_html__( 'Contact item 3', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'header_contact_block',
				'field'           => 'iconpicker',
				'default'         => ' ',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_label_3' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => ' ',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),
			'header_contact_text_3' => array(
				'title'           => '',
				'description'     => esc_html__( 'Description', 'voodioo' ),
				'section'         => 'header_contact_block',
				'default'         => ' ',
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_header_contact_block_enable',
			),

			/** `Main Menu` section */
			'header_main_menu' => array(
				'title'    => esc_html__( 'Main Menu', 'voodioo' ),
				'priority' => 20,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_menu_sticky' => array(
				'title'   => esc_html__( 'Enable sticky menu', 'voodioo' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes' => array(
				'title'   => esc_html__( 'Enable description', 'voodioo' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'more_button_type' => array(
				'title'   => esc_html__( 'More Menu Button Type', 'voodioo' ),
				'section' => 'header_main_menu',
				'default' => 'text',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'voodioo' ),
					'icon'  => esc_html__( 'Icon', 'voodioo' ),
					'text'  => esc_html__( 'Text', 'voodioo' ),
				),
				'type'    => 'control',
			),
			'more_button_text' => array(
				'title'           => esc_html__( 'More Menu Button Text', 'voodioo' ),
				'section'         => 'header_main_menu',
				'default'         => esc_html__( 'More', 'voodioo' ),
				'field'           => 'input',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_more_button_type_text',
			),
			'more_button_icon' => array(
				'title'           => esc_html__( 'More Menu Button Icon', 'voodioo' ),
				'section'         => 'header_main_menu',
				'field'           => 'iconpicker',
				'type'            => 'control',
				'default'         => 'arrows-1_minimal-down',
				'active_callback' => 'voodioo_is_more_button_type_icon',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
			),
			'more_button_image_url' => array(
				'title'           => esc_html__( 'More Button Image Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload More Button image', 'voodioo' ),
				'section'         => 'header_main_menu',
				'default'         => '',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_more_button_type_image',
			),
			'retina_more_button_image_url' => array(
				'title'           => esc_html__( 'Retina More Button Image Upload', 'voodioo' ),
				'description'     => esc_html__( 'Upload More Button image for retina-ready devices', 'voodioo' ),
				'section'         => 'header_main_menu',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_more_button_type_image',
			),

			/** `Sidebar` section */
			'sidebar_settings' => array(
				'title'    => esc_html__( 'Sidebar', 'voodioo' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar Position', 'voodioo' ),
				'section' => 'sidebar_settings',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'voodioo' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'voodioo' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'voodioo' ),
				),
				'type' => 'control',
			),

			/** `MailChimp` section */
			'mailchimp' => array(
				'title'       => esc_html__( 'MailChimp', 'voodioo' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'voodioo' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key' => array(
				'title'   => esc_html__( 'MailChimp API key', 'voodioo' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id' => array(
				'title'   => esc_html__( 'MailChimp list ID', 'voodioo' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),

			/** `Ads Management` panel */
			'ads_management' => array(
				'title'    => esc_html__( 'Ads Management', 'voodioo' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'ads_header' => array(
				'title'             => esc_html__( 'Header', 'voodioo' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_home_before_loop' => array(
				'title'             => esc_html__( 'Front Page Before Loop', 'voodioo' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_content' => array(
				'title'             => esc_html__( 'Post Before Content', 'voodioo' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_comments' => array(
				'title'             => esc_html__( 'Post Before Comments', 'voodioo' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'voodioo' ),
				'priority' => 110,
				'type'     => 'panel',
			),

			/** `Footer styles` section */
			'footer_styles' => array(
				'title'    => esc_html__( 'Footer Styles', 'voodioo' ),
				'priority' => 5,
				'panel'    => 'footer_options',
				'type'     => 'section',
			),
			'footer_logo_visibility' => array(
				'title'   => esc_html__( 'Show Footer Logo', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_logo_url' => array(
				'title'           => esc_html__( 'Logo upload', 'voodioo' ),
				'section'         => 'footer_styles',
				'field'           => 'image',
				'default'         => '%s/assets/images/footer-logo.png',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_logo_enable',
			),
			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => voodioo_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => 'style-1',
				'field'   => 'select',
				'choices' => voodioo_get_footer_layout_options(),
				'type' => 'control',
			),
			'footer_bg' => array(
				'title'   => esc_html__( 'Footer Background color', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => '#f7f7f7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_widget_area_visibility' => array(
				'title'   => esc_html__( 'Show Footer Widgets Area', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_widget_columns' => array(
				'title'           => esc_html__( 'Widget Area Columns', 'voodioo' ),
				'section'         => 'footer_styles',
				'default'         => '3',
				'field'           => 'select',
				'choices'         => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_area_enable',
			),
			'footer_widgets_bg' => array(
				'title'           => esc_html__( 'Footer Widgets Area Background color', 'voodioo' ),
				'section'         => 'footer_styles',
				'default'         => '#f7f7f7',
				'field'           => 'hex_color',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_area_enable',
			),
			'footer_menu_visibility' => array(
				'title'   => esc_html__( 'Show Footer Menu', 'voodioo' ),
				'section' => 'footer_styles',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Footer contact block` section */
			'footer_contact_block' => array(
				'title'    => esc_html__( 'Footer Contact Block', 'voodioo' ),
				'priority' => 10,
				'panel'    => 'footer_options',
				'type'     => 'section',
			),
			'footer_contact_block_visibility' => array(
				'title'   => esc_html__( 'Show Footer Contact Block', 'voodioo' ),
				'section' => 'footer_contact_block',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_contact_icon_1' => array(
				'title'           => esc_html__( 'Contact item 1', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'field'           => 'iconpicker',
				'default'         => ' ',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_label_1' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => esc_html__( 'Address:', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_text_1' => array(
				'title'           => '',
				'description'     => esc_html__( 'Value (HTML formatting support)', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => voodioo_get_default_contact_information( 'address' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_icon_2' => array(
				'title'           => esc_html__( 'Contact item 2', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'field'           => 'iconpicker',
				'default'         => ' ',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_label_2' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => esc_html__( 'Phones:', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_text_2' => array(
				'title'           => '',
				'description'     => esc_html__( 'Value (HTML formatting support)', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => voodioo_get_default_contact_information( 'phones' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_icon_3' => array(
				'title'           => esc_html__( 'Contact item 3', 'voodioo' ),
				'description'     => esc_html__( 'Choose icon', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'field'           => 'iconpicker',
				'default'         => ' ',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_label_3' => array(
				'title'           => '',
				'description'     => esc_html__( 'Label', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => esc_html__( 'E-mail:', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),
			'footer_contact_text_3' => array(
				'title'           => '',
				'description'     => esc_html__( 'Value (HTML formatting support)', 'voodioo' ),
				'section'         => 'footer_contact_block',
				'default'         => voodioo_get_default_contact_information( 'email' ),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_footer_contact_block_enable',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'    => esc_html__( 'Blog Settings', 'voodioo' ),
				'priority' => 115,
				'type'     => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'voodioo' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'voodioo' ),
				'section' => 'blog',
				'default' => 'default-modern',
				'field'   => 'select',
				'choices' => array(
					'default'          => esc_html__( 'Listing', 'voodioo' ),
					'default-modern'   => esc_html__( 'Modern Listing', 'voodioo' ),
					'grid'             => esc_html__( 'Grid', 'voodioo' ),
					'masonry'          => esc_html__( 'Masonry', 'voodioo' ),
					'vertical-justify' => esc_html__( 'Vertical Justify', 'voodioo' ),
				),
				'type' => 'control',
			),
			'blog_layout_columns' => array(
				'title'           => esc_html__( 'Columns', 'voodioo' ),
				'section'         => 'blog',
				'default'         => '3-cols',
				'field'           => 'select',
				'choices'         => array(
					'2-cols' => esc_html__( '2 columns', 'voodioo' ),
					'3-cols' => esc_html__( '3 columns', 'voodioo' ),
					'4-cols' => esc_html__( '4 columns', 'voodioo' ),
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_blog_layout_type_grid_masonry',
			),
			'blog_sticky_type' => array(
				'title'   => esc_html__( 'Sticky label type', 'voodioo' ),
				'section' => 'blog',
				'default' => 'icon',
				'field'   => 'select',
				'choices' => array(
					'label' => esc_html__( 'Text Label', 'voodioo' ),
					'icon'  => esc_html__( 'Font Icon', 'voodioo' ),
					'both'  => esc_html__( 'Text with Icon', 'voodioo' ),
				),
				'type' => 'control',
			),
			'blog_sticky_icon' => array(
				'title'           => esc_html__( 'Icon for sticky post', 'voodioo' ),
				'section'         => 'blog',
				'field'           => 'iconpicker',
				'default'         => 'ui-2_favourite-31',
				'icon_data'       => voodioo_get_nc_outline_icons_data(),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_sticky_icon',
			),
			'blog_sticky_label' => array(
				'title'           => esc_html__( 'Featured Post Label', 'voodioo' ),
				'description'     => esc_html__( 'Label for sticky post', 'voodioo' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Featured', 'voodioo' ),
				'field'           => 'text',
				'active_callback' => 'voodioo_is_sticky_text',
				'type'            => 'control',
			),
			'blog_featured_image' => array(
				'title'           => esc_html__( 'Featured image', 'voodioo' ),
				'section'         => 'blog',
				'default'         => 'fullwidth',
				'field'           => 'select',
				'choices'         => array(
					'small'     => esc_html__( 'Small', 'voodioo' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'voodioo' ),
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_blog_featured_image',
			),
			'blog_posts_content' => array(
				'title'   => esc_html__( 'Post content', 'voodioo' ),
				'section' => 'blog',
				'default' => 'none',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'voodioo' ),
					'full'    => esc_html__( 'Full content', 'voodioo' ),
					'none'    => esc_html__( 'Hide', 'voodioo' ),
				),
				'type' => 'control',
			),
			'blog_posts_content_length' => array(
				'title'           => esc_html__( 'Number of words in the excerpt', 'voodioo' ),
				'section'         => 'blog',
				'default'         => '30',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_blog_posts_content_type_excerpt',
			),
			'blog_read_more_btn' => array(
				'title'   => esc_html__( 'Show Read More button', 'voodioo' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_read_more_text' => array(
				'title'           => esc_html__( 'Read More button text', 'voodioo' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Learn more', 'voodioo' ),
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_blog_read_more_btn_enable',
			),
			'blog_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'voodioo' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'voodioo' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'voodioo' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'voodioo' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'voodioo' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'voodioo' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'voodioo' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'voodioo' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'voodioo' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'voodioo' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'voodioo' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'voodioo' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_navigation' => array(
				'title'   => esc_html__( 'Enable post navigation', 'voodioo' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title'           => esc_html__( 'Related posts block', 'voodioo' ),
				'panel'           => 'blog_settings',
				'priority'        => 30,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'related_posts_visible' => array(
				'title'   => esc_html__( 'Show related posts block', 'voodioo' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_block_title' => array(
				'title'           => esc_html__( 'Related posts block title', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => ' ',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_count' => array(
				'title'           => esc_html__( 'Number of post', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => '2',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_grid' => array(
				'title'           => esc_html__( 'Layout', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => '2',
				'field'           => 'select',
				'choices'         => array(
					'2' => esc_html__( '2 columns', 'voodioo' ),
					'3' => esc_html__( '3 columns', 'voodioo' ),
					'4' => esc_html__( '4 columns', 'voodioo' ),
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_title' => array(
				'title'           => esc_html__( 'Show post title', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_title_length' => array(
				'title'           => esc_html__( 'Number of words in the title', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => '10',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_image' => array(
				'title'           => esc_html__( 'Show post image', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_content' => array(
				'title'           => esc_html__( 'Display content', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => 'post_excerpt',
				'field'           => 'select',
				'choices'         => array(
					'hide'         => esc_html__( 'Hide', 'voodioo' ),
					'post_excerpt' => esc_html__( 'Excerpt', 'voodioo' ),
					'post_content' => esc_html__( 'Content', 'voodioo' ),
				),
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_content_length' => array(
				'title'           => esc_html__( 'Number of words in the content', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => '10',
				'field'           => 'text',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_categories' => array(
				'title'           => esc_html__( 'Show post categories', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_tags' => array(
				'title'           => esc_html__( 'Show post tags', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_author' => array(
				'title'           => esc_html__( 'Show post author', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_publish_date' => array(
				'title'           => esc_html__( 'Show post publish date', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),
			'related_posts_comment_count' => array(
				'title'           => esc_html__( 'Show post comment count', 'voodioo' ),
				'section'         => 'related_posts',
				'default'         => false,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'voodioo_is_related_posts_enable',
			),

			/** `Woocommerce Settings` panel */
			'woocommerce_settings' => array(
				'title'           => esc_html__( 'Woocommerce options', 'voodioo' ),
				'priority'        => 120,
				'type'            => 'panel',
				'active_callback' => 'voodioo_is_woocommerce_activated',
			),
			/** `Badge` section */
			'woo_badge_options' => array(
				'title'    => esc_html__( 'Woocommerce badge', 'voodioo' ),
				'panel'    => 'woocommerce_settings',
				'priority' => 10,
				'type'     => 'section',
			),
			'onsale_badge_bg' => array(
				'title'   => esc_html__( 'Onsale badge background', 'voodioo' ),
				'section' => 'woo_badge_options',
				'default' => '#ff3a4c',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'featured_badge_bg' => array(
				'title'   => esc_html__( 'Featured badge background', 'voodioo' ),
				'section' => 'woo_badge_options',
				'default' => '#fcfa06',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'new_badge_bg' => array(
				'title'   => esc_html__( 'New badge background', 'voodioo' ),
				'section' => 'woo_badge_options',
				'default' => '#04e2f6',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `404` panel */
			'page_404_options' => array(
				'title'    => esc_html__( '404 Page Style', 'voodioo' ),
				'priority' => 130,
				'type'     => 'section',
			),
			'page_404_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'voodioo' ),
				'section' => 'page_404_options',
				'field'   => 'hex_color',
				'default' => '#000000',
				'type'    => 'control',
			),
			'page_404_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'voodioo' ),
				'section' => 'page_404_options',
				'field'   => 'image',
				'default' => '%s/assets/images/bg_404.jpg',
				'type'    => 'control',
			),
			'page_404_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'voodioo' ),
				'section' => 'page_404_options',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => voodioo_get_bg_repeat(),
				'type' => 'control',
			),
			'page_404_bg_position' => array(
				'title'   => esc_html__( 'Background Position', 'voodioo' ),
				'section' => 'page_404_options',
				'default' => 'center',
				'field'   => 'select',
				'choices' => voodioo_get_bg_position(),
				'type' => 'control',
			),
			'page_404_bg_size' => array(
				'title'   => esc_html__( 'Background Size', 'voodioo' ),
				'section' => 'page_404_options',
				'default' => 'cover',
				'field'   => 'select',
				'choices' => voodioo_get_bg_size(),
				'type' => 'control',
			),
			'page_404_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'voodioo' ),
				'section' => 'page_404_options',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => voodioo_get_bg_attachment(),
				'type' => 'control',
			),
			'page_404_text_color' => array(
				'title'       => esc_html__( 'Text Color', 'voodioo' ),
				'description' => esc_html__( 'Here you can choose whether your text should be light or dark. If you are working with a dark background, then your text should be light. If your background is light, then your text should be set to dark.', 'voodioo' ),
				'section'     => 'page_404_options',
				'default'     => 'light',
				'field'       => 'select',
				'choices'     => voodioo_get_text_color(),
				'type'        => 'control',
			),
			'page_404_btn_style_preset' => array(
				'title'   => esc_html__( 'Button Style Preset', 'voodioo' ),
				'section' => 'page_404_options',
				'default' => 'accent-1',
				'field'   => 'select',
				'choices' => voodioo_get_btn_style_presets(),
				'type'    => 'control',
			),
		),
	) );
}

/**
 * Return true if setting is value. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function voodioo_is_setting( $control, $setting, $value ) {

	if ( $value == $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function voodioo_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_header_logo_image( $control ) {
	return voodioo_is_setting( $control, 'header_logo_type', 'image' );
}

/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_header_logo_text( $control ) {
	return voodioo_is_setting( $control, 'header_logo_type', 'text' );
}

/**
 * Return blog-featured-image true if blog layout type is default. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_blog_featured_image( $control ) {
	return voodioo_is_setting( $control, 'blog_layout_type', 'default' );
}

/**
 * Return true if sticky label type set to text or text with icon.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_sticky_text( $control ) {
	return voodioo_is_not_setting( $control, 'blog_sticky_type', 'icon' );
}

/**
 * Return true if sticky label type set to icon or text with icon.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_sticky_icon( $control ) {
	return voodioo_is_not_setting( $control, 'blog_sticky_type', 'label' );
}

/**
 * Return true if More button (in the main menu) has image type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_more_button_type_image( $control ) {
	return voodioo_is_setting( $control, 'more_button_type', 'image' );
}

/**
 * Return true if More button (in the main menu) has text type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_more_button_type_text( $control ) {
	return voodioo_is_setting( $control, 'more_button_type', 'text' );
}

/**
 * Return true if More button (in the main menu) has icon type. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_more_button_type_icon( $control ) {
	return voodioo_is_setting( $control, 'more_button_type', 'icon' );
}

/**
 * Return true if option Show header call to action button is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_header_btn_enable( $control ) {
	return voodioo_is_setting( $control, 'header_btn_visibility', true );
}

/**
 * Return true if option Add button icon is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_header_btn_icon_enable( $control ) {
	return voodioo_is_setting( $control, 'header_btn_visibility', true ) && voodioo_is_setting( $control, 'header_btn_add_btn_icon', true );
}

/**
 * Return true if option Show Header Contact Block is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_header_contact_block_enable( $control ) {
	return voodioo_is_setting( $control, 'header_contact_block_visibility', true );
}

/**
 * Return true if option Show Footer Contact Block is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_footer_contact_block_enable( $control ) {
	return voodioo_is_setting( $control, 'footer_contact_block_visibility', true );
}

/**
 * Return true if option Show Related Posts Block is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_related_posts_enable( $control ) {
	return voodioo_is_setting( $control, 'related_posts_visible', true );
}

/**
 * Return true if option Enable Top Panel is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_top_panel_enable( $control ) {
	return voodioo_is_setting( $control, 'top_panel_visibility', true );
}

/**
 * Return true if option Show Footer Logo is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_footer_logo_enable( $control ) {
	return voodioo_is_setting( $control, 'footer_logo_visibility', true );
}

/**
 * Return true if option Show Footer Widgets Area is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_footer_area_enable( $control ) {
	return voodioo_is_setting( $control, 'footer_widget_area_visibility', true );
}

/**
 * Return true if option Blog posts content is excerpt. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_blog_posts_content_type_excerpt( $control ) {
	return voodioo_is_setting( $control, 'blog_posts_content', 'excerpt' );
}

/**
 * Return true if option Show Read More button is enable. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_blog_read_more_btn_enable( $control ) {
	return voodioo_is_setting( $control, 'blog_read_more_btn', true );
}

/**
 * Return true if Blog layout selected Grid or Masonry. Otherwise - return false.
 *
 * @param  object $control Parent control.
 * @return bool
 */
function voodioo_is_blog_layout_type_grid_masonry( $control ) {
	if ( in_array( $control->manager->get_setting( 'blog_layout_type' )->value(), array( 'grid', 'masonry' ) ) ) {
		return true;
	}

	return false;
}

/**
 * Get default header layouts.
 *
 * @since  1.0.0
 * @return array
 */
function voodioo_get_header_layout_options() {
	return apply_filters( 'voodioo_header_layout_options', array(
		'style-1' => esc_html__( 'Style 1', 'voodioo' ),
		'style-2' => esc_html__( 'Style 2', 'voodioo' ),
		'style-3' => esc_html__( 'Style 3', 'voodioo' ),
		'style-4' => esc_html__( 'Style 4', 'voodioo' ),
		'style-5' => esc_html__( 'Style 5', 'voodioo' ),
		'style-6' => esc_html__( 'Style 6', 'voodioo' ),
		'style-7' => esc_html__( 'Style 7', 'voodioo' ),
	) );
}

/**
 * Get default footer layouts.
 *
 * @since  1.0.0
 * @return array
 */
function voodioo_get_footer_layout_options() {
	return apply_filters( 'voodioo_footer_layout_options', array(
		'style-1' => esc_html__( 'Style 1', 'voodioo' ),
		'style-2' => esc_html__( 'Style 2', 'voodioo' ),
		'style-3' => esc_html__( 'Style 3', 'voodioo' ),
	) );
}

/**
 * Get default header layouts options for Post Meta boxes
 *
 * @return array
 */
function voodioo_get_header_layout_pm_options() {
	$inherit_option = array(
		'inherit' => esc_html__( 'Inherit', 'voodioo' ),
	);

	$options = voodioo_get_header_layout_options();

	return array_merge( $inherit_option, $options );
}

/**
 * Get default footer layouts options for Post Meta boxes
 *
 * @return array
 */
function voodioo_get_footer_layout_pm_options() {
	$inherit_option = array(
		'inherit' => esc_html__( 'Inherit', 'voodioo' ),
	);

	$options = voodioo_get_footer_layout_options();

	return array_merge( $inherit_option, $options );
}

// Change native customizer control (based on WordPress core).
add_action( 'customize_register', 'voodioo_customizer_change_core_controls', 20 );

// Bind JS handlers to instantly live-preview changes.
add_action( 'customize_preview_init', 'voodioo_customize_preview_js' );

/**
 * Change native customize control (based on WordPress core).
 *
 * @since 1.0.0
 * @param  object $wp_customize Object wp_customize.
 * @return void
 */
function voodioo_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section         = 'voodioo_logo_favicon';
	$wp_customize->get_section( 'background_image' )->priority = 45;
	$wp_customize->get_control( 'background_color' )->label    = esc_html__( 'Body Background Color', 'voodioo' );

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function voodioo_customize_preview_js() {
	wp_enqueue_script( 'voodioo-customize-preview', VOODIOO_THEME_JS . '/customize-preview.js', array( 'customize-preview' ), '1.0', true );
}

// Typography utility function
/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_font_styles() {
	return apply_filters( 'voodioo_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'voodioo' ),
		'italic'  => esc_html__( 'Italic', 'voodioo' ),
		'oblique' => esc_html__( 'Oblique', 'voodioo' ),
		'inherit' => esc_html__( 'Inherit', 'voodioo' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_character_sets() {
	return apply_filters( 'voodioo_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'voodioo' ),
		'greek'        => esc_html__( 'Greek', 'voodioo' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'voodioo' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'voodioo' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'voodioo' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'voodioo' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'voodioo' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_text_aligns() {
	return apply_filters( 'voodioo_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'voodioo' ),
		'center'  => esc_html__( 'Center', 'voodioo' ),
		'justify' => esc_html__( 'Justify', 'voodioo' ),
		'left'    => esc_html__( 'Left', 'voodioo' ),
		'right'   => esc_html__( 'Right', 'voodioo' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_font_weight() {
	return apply_filters( 'voodioo_get_font_weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

// Background utility function
/**
 * Get background position
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_bg_position() {
	return apply_filters( 'voodioo_get_bg_position', array(
		'top-left'      => esc_html__( 'Top Left', 'voodioo' ),
		'top-center'    => esc_html__( 'Top Center', 'voodioo' ),
		'top-right'     => esc_html__( 'Top Right', 'voodioo' ),
		'center-left'   => esc_html__( 'Middle Left', 'voodioo' ),
		'center'        => esc_html__( 'Middle Center', 'voodioo' ),
		'center-right'  => esc_html__( 'Middle Right', 'voodioo' ),
		'bottom-left'   => esc_html__( 'Bottom Left', 'voodioo' ),
		'bottom-center' => esc_html__( 'Bottom Center', 'voodioo' ),
		'bottom-right'  => esc_html__( 'Bottom Right', 'voodioo' ),
	) );
}

/**
 * Get background size
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_bg_size() {
	return apply_filters( 'voodioo_get_bg_size', array(
		'auto'    => esc_html__( 'Auto', 'voodioo' ),
		'cover'   => esc_html__( 'Cover', 'voodioo' ),
		'contain' => esc_html__( 'Contain', 'voodioo' ),
	) );
}

/**
 * Get background repeat
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_bg_repeat() {
	return apply_filters( 'voodioo_get_bg_repeat', array(
		'no-repeat' => esc_html__( 'No Repeat', 'voodioo' ),
		'repeat'    => esc_html__( 'Tile', 'voodioo' ),
		'repeat-x'  => esc_html__( 'Tile Horizontally', 'voodioo' ),
		'repeat-y'  => esc_html__( 'Tile Vertically', 'voodioo' ),
	) );
}

/**
 * Get background attachment
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_bg_attachment() {
	return apply_filters( 'voodioo_get_bg_attachment', array(
		'scroll' => esc_html__( 'Scroll', 'voodioo' ),
		'fixed'  => esc_html__( 'Fixed', 'voodioo' ),
	) );
}

/**
 * Get text color
 *
 * @since 1.0.0
 * @return array
 */
function voodioo_get_text_color() {
	return apply_filters( 'voodioo_get_text_color', array(
		'light' => esc_html__( 'Light', 'voodioo' ),
		'dark'  => esc_html__( 'Dark', 'voodioo' ),
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function voodioo_get_dynamic_css_options() {
	return apply_filters( 'voodioo_get_dynamic_css_options', array(
		'prefix'        => 'voodioo',
		'type'          => 'theme_mod',
		'parent_handle' => 'voodioo-theme-style',
		'single'        => true,
		'css_files'     => array(
			VOODIOO_THEME_DIR . '/assets/css/dynamic.css',

			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/header.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/forms.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/social.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/menus.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/post.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/navigation.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/misc.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/site/buttons.css',

			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/taxonomy-tiles.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/image-grid.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/smart-slider.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/instagram.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/custom-posts.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/playlist-slider.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/featured-posts-block.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/news-smart-box.css',
			VOODIOO_THEME_DIR . '/assets/css/dynamic/widgets/contact-information.css',
		),
		'options' => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',

			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',

			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',

			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',

			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',

			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',

			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',

			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',

			'breadcrumbs_font_style',
			'breadcrumbs_font_weight',
			'breadcrumbs_font_size',
			'breadcrumbs_line_height',
			'breadcrumbs_font_family',
			'breadcrumbs_letter_spacing',
			'breadcrumbs_bg_color',

			'meta_font_style',
			'meta_font_weight',
			'meta_font_size',
			'meta_line_height',
			'meta_font_family',
			'meta_letter_spacing',

			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',

			'invert_accent_color_1',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',

			'grey_color_1',
			'grey_color_2',
			'grey_color_3',
			'grey_color_4',

			'header_bg_color',
			'header_bg_image',
			'header_bg_repeat',
			'header_bg_position',
			'header_bg_attachment',
			'header_bg_size',

			'page_404_bg_color',
			'page_404_bg_repeat',
			'page_404_bg_position',
			'page_404_bg_attachment',
			'page_404_bg_size',

			'top_panel_bg',

			'container_width',

			'footer_widgets_bg',
			'footer_bg',

			'onsale_badge_bg',
			'featured_badge_bg',
			'new_badge_bg',
		),
	) );
}

/**
 * Return array of arguments for Google Font loader module.
 *
 * @since  1.0.0
 * @return array
 */
function voodioo_get_fonts_options() {
	return apply_filters( 'voodioo_get_fonts_options', array(
		'prefix'  => 'voodioo',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body' => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1' => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2' => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3' => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4' => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5' => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6' => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'meta' => array(
				'family'  => 'meta_font_family',
				'style'   => 'meta_font_style',
				'weight'  => 'meta_font_weight',
				'charset' => 'meta_character_set',
			),
			'header_logo' => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'breadcrumbs' => array(
				'family'  => 'breadcrumbs_font_family',
				'style'   => 'breadcrumbs_font_style',
				'weight'  => 'breadcrumbs_font_weight',
				'charset' => 'breadcrumbs_character_set',
			),
		),
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function voodioo_get_default_footer_copyright() {
	return esc_html__( '?? %%year%% %%site-name%%. All Rights Reserved.', 'voodioo' );
}

/**
 * Get default contact information.
 *
 * @since  1.0.0
 * @return string
 */
function voodioo_get_default_contact_information( $value ) {
	$contact_information = array(
		'address' => esc_html__( '4578 Marmora Road, Glasgow, D04 89GR', 'voodioo' ),
		'phones'  => sprintf( '<a href="tel:#">%1$s</a>; <a href="tel:#">%2$s</a>', esc_html__( '(800) 123-0045', 'voodioo' ), esc_html__( '(800) 123-0046', 'voodioo' ) ),
		'email'   => sprintf( '<a href="mailto:%1$s">%1$s</a>', esc_html__( 'info@demolink.org', 'voodioo' ) ),
	);

	return $contact_information[ $value ];
}

/**
 * Get FontAwesome icons set
 *
 * @return array
 */
function voodioo_get_icons_set() {

	static $font_icons;

	if ( ! $font_icons ) {

		ob_start();

		include VOODIOO_THEME_DIR . '/assets/js/icons.json';
		$json = ob_get_clean();

		$font_icons = array();
		$icons      = json_decode( $json, true );

		foreach ( $icons['icons'] as $icon ) {
			$font_icons[] = $icon['id'];
		}
	}

	return $font_icons;
}

/**
 * Get nc-outline icons set.
 *
 * @return array
 */
function voodioo_get_nc_outline_icons_set() {

	static $nc_outline_icons;

	if ( ! $nc_outline_icons ) {
		ob_start();

		include VOODIOO_THEME_DIR . '/assets/css/nucleo-outline.css';

		$result = ob_get_clean();

		preg_match_all( '/\.([-_a-zA-Z0-9]+):before[, {]/', $result, $matches );

		if ( ! is_array( $matches ) || empty( $matches[1] ) ) {
			return;
		}

		$nc_outline_icons = $matches[1];
	}

	return $nc_outline_icons;
}

/**
 * Get nc-outline icons data for iconpicker control.
 *
 * @return array
 */
function voodioo_get_nc_outline_icons_data() {
	return apply_filters( 'voodioo_nc_outline_icons_data', array(
		'icon_set'    => 'voodiooNucleoOutlineIcons',
		'icon_css'    => VOODIOO_THEME_URI . '/assets/css/nucleo-outline.css',
		'icon_base'   => 'nc-icon-outline',
		'icon_prefix' => '',
		'icons'       => voodioo_get_nc_outline_icons_set(),
	) );
}

/**
 * Get header button style presets.
 *
 * @return array
 */
function voodioo_get_btn_style_presets() {
	return apply_filters( 'voodioo_get_btn_style_presets', array(
		'accent-1' => esc_html__( 'Accent button 1', 'voodioo' ),
		'accent-2' => esc_html__( 'Accent button 2', 'voodioo' ),
	) );
}
