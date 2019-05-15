<?php
/**
 * Extra Function
 *
 */


/**
 * Get the parent permalink
 */

function get_parent_url() {

    global $post;

    $parent = get_parent_id();

    if ($parent > 0) {
        return get_permalink($parent);
    } else {
        return false;
    }

}

/**
 * Check if date is in the future
 */

function is_future($date) {
    return strtotime($date) >= strtotime(date('Ymd'));
}


/**
 * Get page preview image (facebook)
 */

function the_preview_image() {

    global $post;

    if (has_post_thumbnail() && !is_front_page()) {
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'facebook');
        echo $thumb[0];
    } elseif (get_first_image() && !is_front_page()) {
        echo get_first_image('facebook');
    } else {
        echo get_bloginfo('template_directory') . '/assets/dist/img/facebook.jpg';
    }
}

// Custom login logo and URL
// -------------------------

function custom_login()
{
    ?><style type="text/css">
    #login {
        width: 350px !important;
    }
    #login h1 a,
    .login h1 a {
        display: block;
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/admin_logo.svg);
        background-size: 50%;
        background-position: center;
        width: 100%;
    }
    </style><?php

}
add_action('login_enqueue_scripts', 'custom_login');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
    function custom_loginlogo_url($url) {
        return esc_url(home_url('/'));
}

/**
 * Verwijderd alle onnodige en onveilige code uit de head
 */
function clean_head()
{
    global $sitepress;
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', array($sitepress, 'meta_generator_tag'));
    define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
}
add_action('init', 'clean_head');

/**
 * Verwijderd alle onnodige code uit de footer
 */
function clean_foot()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'clean_foot');


function remove_recent_comments_css()
{
    global $wp_widget_factory;
    remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_css');

/**
 * Adds a defer attribute to the google script
 */
function add_defer_async($tag, $handle)
{
    if ('google-maps' !== $handle) {
        return $tag;
    }
    return str_replace(' src', ' async defer src', $tag);
}
add_filter('script_loader_tag', 'add_defer_async', 10, 2);

/**
 *  Get menu as Object
 */

function get_menu($name) {
    $locations = get_nav_menu_locations();
    $menuId = $locations[ $name ] ;
    return wp_get_nav_menu_items($menuId);
}