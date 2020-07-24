<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

/**
 * Enqueue scripts and styles.
 */
function triangle_scripts() {

    // wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string );
    
    // Enqueue CSS files
    wp_enqueue_style( "bootstrap", get_template_directory_uri() .'/css/bootstrap.min.css', array(),"1.0", 'all' );
    wp_enqueue_style( "font-awesome", get_template_directory_uri() .'/css/font-awesome.min.css', array(),"1.0", 'all' );
    wp_enqueue_style( "animate", get_template_directory_uri() .'/css/animate.min.css', array(),"1.0", 'all' );
    wp_enqueue_style( "lightbox", get_template_directory_uri() .'/css/lightbox.css', array(),"1.0", 'all' );
    wp_enqueue_style( "main", get_template_directory_uri() .'/css/main.css', array(),"1.0", 'all' );
    wp_enqueue_style( "responsive", get_template_directory_uri() .'/css/responsive.css', array(),"1.0", 'all' );

    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )

    // Enqueue JS files
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js"', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'triangle_scripts' );