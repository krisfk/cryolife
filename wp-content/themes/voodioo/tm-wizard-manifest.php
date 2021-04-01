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
	'cherry-search' => array(
		'name'   => esc_html__( 'Cherry Search', 'voodioo' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'voodioo' ),
		'access' => 'skins',
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
				'contact-form-7',
				'cherry-search',
			),
			'lite'  => false,
			'demo'  => 'https://ld-wp.template-help.com/wordpress_64520/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'name'  => esc_html__( 'MagicTouch', 'voodioo' ),
		),
	),
);

$texts = array(
	'theme-name' => esc_html__( 'MagicTouch', 'voodioo' ),
);
