<?php

// Helper Functions
// -------------------------

require_once('includes/functions/extras.php');


// Template Tags
// -------------------------

require_once('includes/functions/template-tags.php');

// Post Types & Taxonomies
// -------------------------

require_once('includes/functions/post-types.php');
require_once('includes/functions/taxonomies.php');

// Shortcodes
// -------------------------

require_once('includes/functions/shortcodes.php');

// Pagination
// -------------------------

require_once('includes/functions/pagination-function.php');

// Theme
// -------------------------

	
function base_scripts() {

	wp_enqueue_style(
		'site', 
		get_template_directory_uri() . '/assets/dist/css/site.min.css', 
		false, 
		filemtime(get_stylesheet_directory() . '/assets/dist/css/site.min.css')
	);

	// jQuery
	wp_enqueue_script(
		'jquery'
	);


	//First Register the Script
	wp_register_script(
		'site-js', 
		get_template_directory_uri() . '/assets/dist/js/bundle.js',
		'jquery', 
		filemtime( get_stylesheet_directory().'/assets/dist/js/bundle.js' ), 
		true);
	//Then Enqueue It
	wp_enqueue_script('site-js');



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'base_scripts' );



// Theme Settings
// -------------------------

register_nav_menus( array(
	'primary' => 'Site Navigation'
) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array('search-form', 'gallery') );

add_editor_style('assets/css/editor.css');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Site Options');
}

// Image Sizes
// -------------------------

// add_image_size('small-feature', 270, 180, TRUE);
// add_image_size('med-feature', 470, 215, TRUE);
// add_image_size('cropped-thumbnail', 250, 250, TRUE);


// Add title to wp_head
// -------------------------

add_theme_support( 'title-tag' );

// MCE Buttons
// -------------------------

function mce_editor_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'mce_buttons_2', 'mce_editor_buttons' );

function mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'button button-primary'
        )
    );

    $settings['style_formats'] = json_encode($style_formats);

    return $settings;

}

add_filter('tiny_mce_before_init', 'mce_before_init');


// Responsive Embeds
// -------------------------

function base_responsive_embeds($html, $url, $attr, $post_id) {

  return '<div class="embed-container">' . $html . '</div>';

}
add_filter('embed_oembed_html', 'base_responsive_embeds', 99, 4);



// Yoast to Bottom
// -------------------------

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


// Disable jQuery-Migrate
// -------------------------

function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );


// Disable jQuery on Frontend
// -------------------------

add_filter( 'wp_default_scripts', 'remove_default_jquery' );

function remove_default_jquery( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
    }
}

// blog type check
// -------------------------

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

