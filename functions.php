<?php

add_action('init', 'theme_support');
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css');
    wp_enqueue_style('fawesome', get_template_directory_uri() . '/assets/css/vendor/font.awesome.min.css');
    wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/vendor/linearicons.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap');

    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/plugins/swiper-bundle.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/plugins/animate.min.css');
    wp_enqueue_style('j-query-ui-css', get_template_directory_uri() . '/assets/css/plugins/jquery-ui.min.css');
    wp_enqueue_style('nice-css', get_template_directory_uri() . '/assets/css/plugins/nice-select.min.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/plugins/magnific-popup.css');

    wp_enqueue_style('init-css', get_template_directory_uri() . '/assets/css/style.css');
}

function scripts_theme()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('modern', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.7.1.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js');
    wp_enqueue_script('nice', get_template_directory_uri() . '/assets/js/plugins/nice-select.min.js');

    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/plugins/jquery.ajaxchimp.min.js');
    wp_enqueue_script('j-query-ui', get_template_directory_uri() . '/assets/js/plugins/jquery-ui.min.js');
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/plugins/jquery.countdown.min.js');
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup.min.js');

    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/main.js');
}

function theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
}


add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    if ($dosvg) {
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }

    return $data;
}