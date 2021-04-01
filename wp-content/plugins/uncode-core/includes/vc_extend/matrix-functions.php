<?php
/**
 * Matrix related functions (Posts Module)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Alter query hiding current post. And show only published and privated posts
 */
function uncode_hide_posts_not_published($query) {
	$query->set('post_status', array(
		'publish',
		'private'
	));

	if (isset($query->query['post__not_in'])) {
		$get_array_not_in = $query->query['post__not_in'];
		$get_array_not_in[] = $_POST['postid'];
		$query->set('post__not_in', $get_array_not_in);
	}

	return $query;
}

/**
 * Get all posts
 */
function uncode_all_posts($query) {
	$query->set( 'posts_per_page', -1 );

	return;
}

/**
 * Post module matrix query
 */
function uncode_index_get_query() {
	$post_types = array();
	if (function_exists('uncode_get_post_types')) $post_types = uncode_get_post_types(true);
		$loop = vc_post_param('content');
		$allItems = vc_post_param('allItems');
		$matrix_amount = vc_post_param('matrix_amount');
		$template_single = vc_post_param('templateSingle');
		$templatePostArray = array();
		foreach ($post_types as $key => $value) {
	    $templatePostArray[$value] = vc_post_param('template' . ucfirst($value));
	}
	$exclude_current = vc_post_param('postid');
	if (empty($loop)) return;
	require_once vc_path_dir('PARAMS_DIR', 'loop/loop.php');
	add_filter('pre_get_posts', 'uncode_hide_posts_not_published');
	if ($allItems === 'true') add_filter('pre_get_posts', 'uncode_all_posts');

	global $uncode_index_map;
	$u_index = new uncode_index($uncode_index_map);
	list($args, $my_query) = $u_index->vc_build_loop_query($loop, get_the_ID());

	if(vc_post_param('custom_order') === 'true') {
		if (vc_post_param('order_ids') !== '') {
			$ordered = array();
			$post_list = explode(',', vc_post_param('order_ids'));
			foreach($post_list as $key) {
			    foreach($my_query->posts as $skey => $spost) {
			        if($key == $spost->ID) {
			            $ordered[] = $spost;
			            unset($my_query->posts[$skey]);
			        }
			    }
			}
			$my_query->posts = array_merge($my_query->posts, $ordered);
		}
	}

	if ( floatval( $matrix_amount ) != 0 ) {
		$my_query->set('posts_per_page', $matrix_amount);
		$my_query->query($my_query->query_vars);
	}

	$html = '';

	if ( floatval( $matrix_amount ) != 0 ) {

		$template_cat = '';
		$matrix_post_types = $my_query->get('post_type');
		foreach ($matrix_post_types as $key => $matrix_post_type) {
			$template_cat .= $templatePostArray[$matrix_post_type];
		}

		for ($i = 0; $i < $matrix_amount; $i++) {

			//Create matrix loop
			$html.= '<li class="list-list-item" data-id="' . esc_attr( $i ) . '">
						<div class="option-tree-setting">
							<div class="open"><span class="post-title">' . sprintf(__('Item no. %s', 'uncode-core'), '<span class="matrix-item-no">' . esc_attr($i + 1) . '</span>' ) . '</span><span class="grey size">width: <span class="single_width_factor"></span>, height: <span class="single_height_factor"></span></span></div>
							<div class="button-section">
								<a href="javascript:void(0);" class="option-tree-setting-edit option-tree-ui-button button left-item" title="Edit">
									<span class="icon fa fa-pencil3"></span>Edit
								</a>
								<a href="javascript:void(0);" class="option-tree-setting-reset option-tree-ui-button button left-item hidden" title="Reset">
									<span class="icon fa fa-reload"></span>
								</a>
							</div>
							<div class="option-tree-setting-body">' . $template_single . $template_cat . '</div>
						</div>
					</li>';

		}


	} else {

		while ($my_query->have_posts()) {

			$my_query->the_post();

				// Get post from query
				$post = new stdClass();

				// Creating post object.
				$post->id = get_the_ID();
				$post->link = get_permalink($post->id);
				$post->type = get_post_type($post->id);
				$template_cat = $templatePostArray[$post->type];
				$html.= '<li class="list-list-item" data-id="' . esc_attr( $post->id ) . '">
								<div class="option-tree-setting">
									<div class="open"><span class="post-title">' . esc_html( get_the_title() ) . '</span> <span class="grey">' . esc_html( $post->type ) . '</span><span class="grey size">width: <span class="single_width_factor"></span>, height: <span class="single_height_factor"></span></span></div>
									<div class="button-section">
										<a href="javascript:void(0);" class="option-tree-setting-edit option-tree-ui-button button left-item" title="Edit">
											<span class="icon fa fa-pencil3"></span>Edit
										</a>
										<a href="javascript:void(0);" class="option-tree-setting-reset option-tree-ui-button button left-item hidden" title="Reset">
											<span class="icon fa fa-reload"></span>
										</a>
									</div>
									<div class="option-tree-setting-body">' . $template_single . $template_cat . '</div>
								</div>
							</li>';
		}

	}

	$html = str_replace('\"', '"', $html);
	echo do_shortcode( shortcode_unautop( $html ) );

	die();
}
add_action('wp_ajax_uncode_get_query','uncode_index_get_query');

/**
 * Post module matrix media
 */
function uncode_get_medias() {
	$loop = vc_post_param('content');
	$template_single = vc_post_param('templateSingle');
	$template_media = vc_post_param('templateMedia');

	$html = '';

	foreach ($loop as $key => $value) {
		$post = get_post($value);

		if (isset($post) && !empty($post)) {
			$html.= 	'<li class="list-list-item" data-id="' . esc_attr( $post->ID ) . '">
							<div class="option-tree-setting">
								<div class="open"><span class="post-title">' . ( isset($post->post_title) ? esc_html( $post->post_title ) : esc_html( $post->post_name ) ) . '</span> <span class="grey">' . esc_html( $post->post_mime_type ) . '</span><span class="grey size">width: <span class="single_width_factor"></span>, height: <span class="single_height_factor"></span></span></div>
								<div class="button-section">
									<a href="javascript:void(0);" class="option-tree-setting-edit option-tree-ui-button button left-item" title="Edit">
										<span class="icon fa fa-pencil3"></span>Edit
									</a>
									<a href="javascript:void(0);" class="option-tree-setting-reset option-tree-ui-button button left-item hidden" title="Reset">
										<span class="icon fa fa-reload"></span>
									</a>
								</div>
								<div class="option-tree-setting-body">' . $template_single . $template_media . '</div>
							</div>
						</li>';
		}
	}

	$html = str_replace('\"', '"', $html);
	echo do_shortcode( shortcode_unautop( $html ) );

	die();
}

add_action('wp_ajax_uncode_get_medias', 'uncode_get_medias');
