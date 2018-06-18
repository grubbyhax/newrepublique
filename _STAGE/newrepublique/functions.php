<?php
/**
 * NewRepublique functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage NewRepublique
 * @since 1.0
 */

add_theme_support('post-thumbnails');

add_action( 'init', function() {
    register_post_type( 'banner', [
		'public' => true,
		'label'  => 'Banners',
		'menu_icon' => 'dashicons-admin-page',
		'supports' => $supports = ['title', 'editor', 'revisions', 'page-attributes', 'thumbnail']

	]);
});

add_action( 'init', function() {
    register_post_type( 'card', [
		'public' => true,
		'label'  => 'Cards',
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => $supports = ['title', 'editor', 'revisions', 'page-attributes', 'thumbnail']
	]);
});

function newrepublique_assets() {

 	wp_enqueue_style( 'icons', get_theme_file_uri( '/assets/css/icons.css' ), array(), null );
 	wp_enqueue_style( 'materialize', get_theme_file_uri( '/assets/css/materialize.css' ), array(), null );
 	wp_enqueue_style( 'animations', get_theme_file_uri( '/assets/css/animations.css' ), array(), null );
 	wp_enqueue_style( 'slick', get_theme_file_uri( '/assets/css/slick.css' ), array(), null );
 	wp_enqueue_style( 'slick-theme', get_theme_file_uri( '/assets/css/slick-theme.css' ), array(), null );
 	wp_enqueue_style( 'main', get_theme_file_uri( '/assets/css/main.css' ), array(), null );
}

add_action( 'wp_enqueue_scripts', 'newrepublique_assets' );

function newrepublique_scripts() {

	wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-2.1.1.js' ), array(), '', true );
	wp_enqueue_script( 'materialize', get_theme_file_uri( '/assets/js/materialize.js' ), array(), '', true );
	wp_enqueue_script( 'css3-animate-it', get_theme_file_uri( '/assets/js/css3-animate-it.js' ), array(), '', true );
	wp_enqueue_script( 'slick', get_theme_file_uri( '/assets/js/slick.js' ), array(), '', true );
	wp_enqueue_script( 'init', get_theme_file_uri( '/assets/js/init.js' ), array(), '', true );
}

add_action( 'wp_print_scripts', 'newrepublique_scripts' );

