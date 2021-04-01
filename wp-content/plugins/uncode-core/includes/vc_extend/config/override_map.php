<?php

require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/config/params.php';

global $uncode_colors, $uncode_colors_flat, $uncode_colors_w_transp;

$flat_uncode_colors        = uncode_core_vc_params_get_flat_colors( $uncode_colors );
$units                     = uncode_core_vc_params_get_units();
$size_arr                  = uncode_core_vc_params_get_button_sizes();
$icon_sizes                = uncode_core_vc_params_get_icon_sizes();
$heading_semantic          = uncode_core_vc_params_get_heading_semantic_values();
$heading_size              = uncode_core_vc_params_get_heading_font_sizes();
$heading_height            = uncode_core_vc_params_get_heading_font_heights();
$font_spacings             = uncode_core_vc_params_get_font_spacings();
$fonts                     = uncode_core_vc_params_get_fonts();
$heading_space             = uncode_core_vc_params_get_heading_spacings( $font_spacings );
$btn_letter_spacing        = uncode_core_vc_params_get_button_spacings( $font_spacings );
$heading_font              = uncode_core_vc_params_get_heading_fonts( $fonts );
$button_font               = uncode_core_vc_params_get_button_fonts( $fonts );
$heading_weight            = uncode_core_vc_params_get_heading_font_weights();
$button_weight             = uncode_core_vc_params_get_button_font_weights();
$font_heights              = uncode_core_vc_params_get_font_heights();
$heading_height            = uncode_core_vc_params_get_font_heading_heights( $font_heights );
$target_arr                = uncode_core_vc_params_get_target_styles();
$border_style              = uncode_core_vc_params_get_border_styles();
$add_css_animation         = uncode_core_vc_params_get_css_animation();
$add_animation_delay       = uncode_core_vc_params_get_css_animation_delay();
$add_animation_speed       = uncode_core_vc_params_get_css_animation_speed();
$add_background_repeat     = uncode_core_vc_params_get_css_background_repeat();
$add_background_attachment = uncode_core_vc_params_get_css_background_attachment();
$add_background_position   = uncode_core_vc_params_get_css_background_position();
$add_background_size       = uncode_core_vc_params_get_css_background_size();
$gdpr                      = uncode_core_vc_params_get_gdpr_options();
$uncode_post_types         = uncode_core_vc_params_get_cpts();

// Overrides
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/section/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/row/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/row-inner/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/column/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/column-inner/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/media-gallery/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/text-column/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/divider/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/divider/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/message-box/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/single-media/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/tabs/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/accordion/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/accordion/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widgetised-sidebar/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/button/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/gmaps/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/raw-html/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/raw-js/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/flickr/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/pie-chart/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/progress-bar/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/cf7/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-search/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-meta/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-recent-comments/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-calendar/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-pages/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-tag-cloud/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-menu/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-text/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-recent-posts/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-links/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-categories/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-archives/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/widget-rss/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/empty-space/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/heading/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/icon-box/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/gutenberg/map.php';

// Custom modules

require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/uncode-index/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/slider/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/counter/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/countdown/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/list/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/pricing/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/share/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/twentytwenty/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/author-profile/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/consent-notice/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/socials/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/copyright/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/content-block/map.php';
require_once UNCODE_CORE_PLUGIN_DIR . '/includes/vc_extend/modules/info-box/map.php';
