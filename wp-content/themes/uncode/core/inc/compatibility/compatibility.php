<?php
/**
 * Third-party related functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Uncode Privacy plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/gdpr/class-uncode-gdpr.php';

/**
 * Gutenberg plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/gutenberg/class-uncode-gutenberg.php';
require_once get_template_directory() . '/core/inc/compatibility/gutenberg/gutenberg-helpers.php';

/**
 * Visual Composer plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/vc/class-uncode-vc.php';

/**
 * UpdraftPlus plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/updraftplus/class-uncode-updraftplus.php';

/**
 * ShortPixel plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/shortpixel/class-uncode-shortpixel.php';

/**
 * Related Posts for WordPress plugin.
 */
require_once get_template_directory() . '/core/inc/compatibility/rp4wp/class-uncode-rp4wp.php';
