<?php
if ( ! function_exists( 'lazy_days_setup' ) ) :

function lazy_days_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'lazy_days', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lazy_days' ),
        'social'  => __( 'Social Links Menu', 'lazy_days' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // lazy_days_setup

add_action( 'after_setup_theme', 'lazy_days_setup' );


if ( ! function_exists( 'lazy_days_init' ) ) :

function lazy_days_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // lazy_days_setup

add_action( 'init', 'lazy_days_init' );


if ( ! function_exists( 'lazy_days_widgets_init' ) ) :

function lazy_days_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'lazy_days_widgets_init' );
endif;// lazy_days_widgets_init



if ( ! function_exists( 'lazy_days_customize_register' ) ) :

function lazy_days_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_section( 'lazy_days_default_cs', array('title' => 'Default section'));

    $wp_customize->add_setting( 'header_image', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'header_image', array(
		'label' => __( 'Header Background Image', 'lazy_days' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'lazy_days_default_cs'
	) ) );

    $wp_customize->add_setting( 'page_title', array(
		'type' => 'theme_mod',
		'default' => __( 'Heritage', 'lazy_days' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'page_title', array(
		'label' => __( 'Page Title', 'lazy_days' ),
		'type' => 'text',
		'section' => 'lazy_days_default_cs'
	));

    $wp_customize->add_setting( 'page_image', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'page_image', array(
		'label' => __( 'Image', 'lazy_days' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'lazy_days_default_cs'
	) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'lazy_days_customize_register' );
endif;// lazy_days_customize_register


if ( ! function_exists( 'lazy_days_enqueue_scripts' ) ) :
    function lazy_days_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'lazy_days_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>