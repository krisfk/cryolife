<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="page-wrapper">
 *
 * @package uncode
 */

global $is_redirect, $redirect_page;

if ($redirect_page) {
	$post_id = $redirect_page;
} else {
	if (isset(get_queried_object()->ID) && !is_home()) {
		$post_id = get_queried_object()->ID;
	} else {
		$post_id = null;
	}
}

if (wp_is_mobile()) {
	$html_class = 'touch';
} else {
	$html_class = 'no-touch';
}

if (is_admin_bar_showing()) {
	$html_class .= ' admin-mode';
}

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr($html_class); ?>" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>"> -->
    <?php if (wp_is_mobile()) : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php else : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/library/css/style-custom.css' ?>"
        type="text/css" media="screen" charset="utf-8" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/library/css/prettyPhoto.css' ?>"
        type="text/css" media="screen" charset="utf-8" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/library/js/jquery.prettyPhoto.js' ?>">
    </script>

    <script type="text/javascript"
        src="<?php echo get_template_directory_uri().'/library/js/jquery.are-you-sure.js' ?>">
    </script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <script type="text/javascript">
    var $ = jQuery;
    $(function() {

        var h = $(window).height() * 0.8;
        var w = $(window).width() * 0.8;

        $(".ask-us-anything-a").prettyPhoto({
            show_title: false,
            social_tools: '',
            allow_resize: false,
            default_height: h,
            default_width: w
        });



        $('.salesforce-form').areYouSure({
            'silent': true
        });
        $(window).on('beforeunload', function() {


            if ($('.salesforce-form').hasClass('dirty')) {

                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var mobile = $('#mobile').val();
                var topic = $('.salesforce-form select').val();
                var description = $('.salesforce-form textarea').val();

                $.ajax({
                    type: "POST",
                    url: '/wp-json/api/abandon_sf',
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        email: email,
                        mobile: mobile,
                        topic: topic,
                        description: description
                    },
                    dataType: "json",
                }).done(function(response) {


                }).fail(function(Response) {});


                return "good bye";



            }
            // return "Good bye";


        })



        $(window).scroll(function() {
            if ($(window).scrollTop() >= 18) {
                // alert(70);
                $('.marquee-a').css({
                    'position': 'fixed',
                    'left': '0px',
                    'top': '0px',
                    'height': '30px',
                    'width': '100%',

                    'z-index': '10000',


                });



            } else {
                $('.marquee-a').css({
                    'position': 'relative'
                })

            }
        })
    })

    // window.addEventListener('hashchange', function() {
    //     console.log('The hash has changed!')
    // }, false);
    </script>
</head>
<?php
	global $LOGO, $metabox_data, $onepage, $fontsizes, $is_redirect, $menutype;

	if ($post_id !== null) {
		$metabox_data = get_post_custom($post_id);
		$metabox_data['post_id'] = $post_id;
	} else {
		$metabox_data = array();
	}

	$onepage = false;
	$background_div = $background_style = $background_color_css = '';

	if (isset($metabox_data['_uncode_page_scroll'][0]) && $metabox_data['_uncode_page_scroll'][0] == 'on') {
		$onepage = true;
	}

	$boxed = ot_get_option( '_uncode_boxed');
	$vmenu_position = ot_get_option('_uncode_vmenu_position');
	$fontsizes = ot_get_option( '_uncode_heading_font_sizes');
	$background = ot_get_option( '_uncode_body_background');
    $background['background-color']='light';

	if (isset($metabox_data['_uncode_specific_body_background'])) {
		$specific_background = unserialize($metabox_data['_uncode_specific_body_background'][0]);
		if ( is_array( $specific_background ) && ( $specific_background['background-color'] != '' || $specific_background['background-image'] != '' ) ) {
			$background = $specific_background;
		}
	}

	$back_class = '';
	if (!empty($background) && ($background['background-color'] != '' || $background['background-image'] != '')) {
		if ($background['background-color'] !== '') {
			$background_color_css = ' style-'. $background['background-color'] . '-bg';
		}
		$back_result_array = uncode_get_back_html($background, '', '', '', '', 'div');

		if ((strpos($back_result_array['mime'], 'image') !== false)) {
			$background_style .= (strpos($back_result_array['back_url'], 'background-image') !== false) ? $back_result_array['back_url'] : 'background-image: url(' . $back_result_array['back_url'] . ');';
			if ( isset( $background['background-repeat'] ) && $background['background-repeat'] !== '' ) {
				$background_style .= 'background-repeat: '. $background['background-repeat'] . ';';
			}
			if ( isset( $background['background-position'] ) && $background['background-position'] !== '' ) {
				$background_style .= 'background-position: '. $background['background-position'] . ';';
			}
			if ( isset( $background['background-size'] ) && $background['background-size'] !== '' ) {
				$background_style .= 'background-size: '. ($background['background-attachment'] === 'fixed' ? 'cover' : $background['background-size']) . ';';
			}
			if ( isset( $background['background-attachment'] ) && $background['background-attachment'] !== '' ) {
				$background_style .= 'background-attachment: '. $background['background-attachment'] . ';';
			}
		} else {
			$background_div = $back_result_array['back_html'];
		}
		if ($background_style !== '') {
			$background_style = ' style="'.$background_style.'"';
		}
		if (isset($back_result_array['async_class']) && $back_result_array['async_class'] !== '') {
			$back_class = $back_result_array['async_class'];
			$background_style .= $back_result_array['async_data'];
		}
	}

	$body_attr = '';
	if ($boxed === 'on') {
		$boxed_width = ' limit-width';
	} else {
		$boxed_width = '';
		$body_border = ot_get_option('_uncode_body_border');
		if ($body_border !== '' && $body_border !== 0) {
			$body_attr = ' data-border="' . esc_attr($body_border) . '"';
		}
	}

	if ( uncode_is_full_page(true) ) {
		if ( isset($metabox_data['_uncode_scroll_additional_padding'][0]) && $metabox_data['_uncode_scroll_additional_padding'][0] != '' ) {
			$fp_add_padding = $metabox_data['_uncode_scroll_additional_padding'][0];
		} else {
			$fp_add_padding = 0;
		}

		$body_attr .= ' data-additional-padding="' . floatval($fp_add_padding) . '"';
	}


?>

<body <?php body_class($background_color_css); echo wp_kses_post( $body_attr ); ?>>
    <?php echo uncode_remove_p_tag( $background_div ) ; ?>
    <?php do_action( 'before' );

	$body_border = ot_get_option('_uncode_body_border');
	if ($body_border !== '' && $body_border !== 0) {
		$general_style = ot_get_option('_uncode_general_style');
		$body_border_color = ot_get_option('_uncode_body_border_color');
		if ($body_border_color === '') {
			$body_border_color = ' style-' . $general_style . '-bg';
		} else {
			$body_border_color = ' style-' . $body_border_color . '-bg';
		}
		$body_border_frame ='<div class="body-borders" data-border="'.$body_border.'"><div class="top-border body-border-shadow"></div><div class="right-border body-border-shadow"></div><div class="bottom-border body-border-shadow"></div><div class="left-border body-border-shadow"></div><div class="top-border'.$body_border_color.'"></div><div class="right-border'.$body_border_color.'"></div><div class="bottom-border'.$body_border_color.'"></div><div class="left-border'.$body_border_color.'"></div></div>';
		echo wp_kses_post( $body_border_frame );
	}

	?>
    <?php
    
    $args = array(
        'p'         => 3976, // ID of a page, post, or custom type
        'post_type' => 'page'
      );
      $marquee = new WP_Query($args);
      
      $marquee -> the_post();


      if (get_field('hide_marquee') === NULL || get_field('hide_marquee')) {
          ?>

    <script type="text/javascript">
    $('body').addClass('no-marquee');
    </script>
    <?php
        // true
      } else {
          ?>
    <a href="<?php echo get_field('marquee_link')?>" target="_blank" class="marquee-a">
        <marquee width="100%" direction="left" height="100px">
            <?php
              echo get_the_content();
              wp_reset_postdata();
            ?>
        </marquee>
    </a>


    <?php
      }


?>



    <div class="box-wrapper<?php echo esc_html($back_class); ?>" <?php echo wp_kses_post($background_style); ?>>
        <div class="box-container<?php echo esc_attr($boxed_width); ?>">
            <script type="text/javascript">
            UNCODE.initBox();
            </script>

            <style type="text/css">
            html,
            body,
            div,
            span,
            applet,
            object,
            iframe,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            blockquote,
            pre,
            a,
            abbr,
            acronym,
            address,
            big,
            cite,
            code,
            del,
            dfn,
            em,
            img,
            ins,
            kbd,
            q,
            s,
            samp,
            small,
            strike,
            strong,
            sub,
            sup,
            tt,
            var,
            b,
            u,
            i,
            center,
            dl,
            dt,
            dd,
            ol,
            ul,
            li,
            fieldset,
            form,
            label,
            legend,
            table,
            caption,
            tbody,
            tfoot,
            thead,
            tr,
            th,
            td,
            article,
            aside,
            canvas,
            details,
            embed,
            figure,
            figcaption,
            footer,
            header,
            hgroup,
            menu,
            nav,
            output,
            ruby,
            section,
            summary,
            time,
            mark,
            audio,
            video {
                /* font-family: 'BemboStd' !important; */
                font-size: 15px;
                font-family: 'Open Sans', sans-serif;
                line-height: 1.5;


            }

            p:lang(en),
            .table th:lang(en),
            .table td:lang(en),
            ul li:lang(en),
            ol li:lang(en) {
                font-size: 15px;
                line-height: 1.5;

            }

            .font-size-submenu,
            .menu-horizontal ul ul a,
            .vmenu-container ul ul a,
            .uncode-cart .cart-desc {
                font-size: 18px;
            }
            </style>
            <?php
			$remove_menu = (isset($metabox_data['_uncode_specific_menu_remove'][0]) && $metabox_data['_uncode_specific_menu_remove'][0] === 'on') ? true : false;
			if ( ! $remove_menu ) {
				if ($is_redirect !== true) {
					if ($menutype === 'vmenu-offcanvas' || $menutype === 'menu-overlay' || $menutype === 'menu-overlay-center') {
						$mainmenu = new unmenu('offcanvas_head', $menutype);
						echo uncode_remove_p_tag( $mainmenu->html );
					}
					if ( !($menutype === 'vmenu' && $vmenu_position === 'right') || (wp_is_mobile() && ($menutype === 'vmenu' && $vmenu_position === 'right') ) ) {
						$mainmenu = new unmenu($menutype, $menutype);
						echo uncode_remove_p_tag( $mainmenu->html );
					}
				}
			}
			?>
            <script type="text/javascript">
            UNCODE.fixMenuHeight();
            </script>
            <div class="main-wrapper">
                <div class="main-container">
                    <div class="page-wrapper<?php if ($onepage) { echo ' main-onepage'; } ?>">
                        <div class="sections-container">