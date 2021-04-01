<?php
/**
 * TM-Wizard configuration.
 *
 * @var array
 *
 * @package Voodioo
 */
$plugins = array(
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'voodioo' ),
		'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		'access' => 'base',
	),
	'cherry-ld-mods-switcher' => array(
		'name'   => esc_html__( 'Cherry Live Demo Mods Switcher', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/cherry-ld-mods-switcher.zip',
		'access' => 'base',
	),
	'cherry-projects' => array(
		'name'   => esc_html__( 'Cherry Projects', 'voodioo' ),
		'access' => 'skins',
	),
	'cherry-team-members' => array(
		'name'   => esc_html__( 'Cherry Team Members', 'voodioo' ),
		'access' => 'skins',
	),
	'cherry-testi' => array(
		'name'   => esc_html__( 'Cherry Testimonials', 'voodioo' ),
		'access' => 'skins',
	),
	'cherry-services-list' => array(
		'name'   => esc_html__( 'Cherry Services List', 'voodioo' ),
		'access' => 'skins',
	),
	'cherry-sidebars' => array(
		'name'   => esc_html__( 'Cherry Sidebars', 'voodioo' ),
		'access' => 'skins',
	),
	'cherry-trending-posts' => array(
		'name'   => esc_html__( 'Cherry Trending Posts', 'voodioo' ),
		'access' => 'skins',
	),
	'power-builder' => array(
		'name'   => esc_html__( 'Power Builder', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/power-builder.zip',
		'access' => 'skins',
	),
	'power-builder-integrator' => array(
		'name'   => esc_html__( 'Power Builder Integrator', 'voodioo' ),
		'source' => 'remote',
		'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/power-builder-integrator.zip',
		'access' => 'skins',
	),
	'voodioomega-menu' => array(
		'name'   => esc_html__( 'TM Mega Menu', 'voodioo' ),
		'source' => 'remote',
		'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/voodioomega-menu.zip',
		'access' => 'skins',
	),
	'voodioostyle-switcher' => array(
		'name'   => esc_html__( 'TM Style Switcher', 'voodioo' ),
		'access' => 'skins',
	),
	'voodioophoto-gallery' => array(
		'name'   => esc_html__( 'TM Photo Gallery', 'voodioo' ),
		'access' => 'skins',
	),
	'voodiootimeline' => array(
		'name'   => esc_html__( 'TM Timeline', 'voodioo' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'voodioo' ),
		'access' => 'skins',
	),
	'rev-slider' => array(
		'name'   => esc_html__( 'Revolution Slider', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/revslider.zip',
		'access' => 'skins',
	),
	'revslider-filmstrip-addon' => array(
		'name'   => esc_html__( 'Revolution Slider Filmstrip Addon', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/revslider-filmstrip-addon.zip',
		'access' => 'skins',
	),
	'revslider-slicey-addon' => array(
		'name'   => esc_html__( 'Revolution Slider Slicey Addon', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/revslider-slicey-addon.zip',
		'access' => 'skins',
	),
	'woocommerce' => array(
		'name'   => esc_html__( 'Woocommerce', 'voodioo' ),
		'access' => 'skins',
	),
	'voodioowoocommerce-ajax-filters' => array(
		'name'   => esc_html__( 'TM Woocommerce Ajax Filters', 'voodioo' ),
		'source' => 'local',
		'path'   => VOODIOO_THEME_DIR . '/assets/includes/plugins/voodioowoocommerce-ajax-filters.zip',
		'access' => 'skins',
	),
	'voodioowoocommerce-compare-wishlist' => array(
		'name'   => esc_html__( 'TM Woocommerce Compare Wishlist', 'voodioo' ),
		'access' => 'skins',
	),
	'voodioowoocommerce-package' => array(
		'name'   => esc_html__( 'TM Woocommerce Package', 'voodioo' ),
		'access' => 'skins',
	),
	'woocommerce-social-media-share-buttons' => array(
		'name'   => esc_html__( 'Woocommerce Social Media Share Buttons', 'voodioo' ),
		'access' => 'skins',
	),
	'voodioodashboard' => array(
		'name'   => esc_html__( 'TM Dashboard', 'voodioo' ),
		'source' => 'remote',
		'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/voodioodashboard.zip',
		'access' => 'base',
	),
);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
		'cherry-ld-mods-switcher',
		'voodioodashboard',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'cherry-projects',
				'cherry-team-members',
				'cherry-testi',
				'cherry-services-list',
				'cherry-sidebars',
				'cherry-trending-posts',
				'power-builder',
				'power-builder-integrator',
				'voodioomega-menu',
				'voodioostyle-switcher',
				'voodioophoto-gallery',
				'voodiootimeline',
				'rev-slider',
				'revslider-slicey-addon',
				'revslider-filmstrip-addon',
				'woocommerce',
				'voodioowoocommerce-ajax-filters',
				'voodioowoocommerce-compare-wishlist',
				'voodioowoocommerce-package',
				'woocommerce-social-media-share-buttons',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_63333_default/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'name'  => esc_html__( 'Default', 'voodioo' ),
		),

		'skin-1' => array(
			'full'  => array(
				'cherry-projects',
				'cherry-team-members',
				'cherry-testi',
				'cherry-services-list',
				'cherry-sidebars',
				'cherry-trending-posts',
				'power-builder',
				'power-builder-integrator',
				'voodioomega-menu',
				'voodioostyle-switcher',
				'voodioophoto-gallery',
				'voodiootimeline',
				'rev-slider',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_63333_hueblue/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/hueblue/hueblue-thumb.png',
			'name'  => esc_html__( 'Hueblue', 'voodioo' ),
		),

		'skin-2' => array(
			'full'  => array(
				'cherry-projects',
				'cherry-team-members',
				'cherry-testi',
				'cherry-services-list',
				'cherry-sidebars',
				'cherry-trending-posts',
				'power-builder',
				'power-builder-integrator',
				'voodioomega-menu',
				'voodioostyle-switcher',
				'voodioophoto-gallery',
				'voodiootimeline',
				'rev-slider',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_63333_captorum/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/captorum/captorum-thumb.png',
			'name'  => esc_html__( 'Captorum', 'voodioo' ),
		),

		'skin-3' => array(
			'full'  => array(
				'cherry-testi',
				'cherry-trending-posts',
				'power-builder',
				'power-builder-integrator',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_63333_wintex/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/wintex/wintex-thumb.png',
			'name'  => esc_html__( 'Wintex', 'voodioo' ),
		),

		'skin-4' => array(
			'full'  => array(
				'contact-form-7',
				'cherry-trending-posts',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_63333_monagham/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/monaghan/monaghan-thumb.png',
			'name'  => esc_html__( 'Monaghan', 'voodioo' ),
		),
	),
);

$texts = array(
	'theme-name' => esc_html__( 'Voodioo', 'voodioo' ),
);
