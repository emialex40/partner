<?php

show_admin_bar(false);
remove_action('wp_head', 'rss_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wpautop');



function partner_styles() {
	wp_enqueue_style('style', get_stylesheet_uri() );

	wp_enqueue_style('my-bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');


	wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-theme.min.css');

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css');

	wp_enqueue_style('slick', get_template_directory_uri() . '/libs/slick/slick.css');

	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css');

	wp_enqueue_style('fotorama', get_template_directory_uri() . '/libs/fotorama-4.6.4/fotorama.css');
}
add_action( 'wp_enqueue_scripts', 'partner_styles' );

function partner_scripts () {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/libs/jquery-1.8.3.min.js');
	wp_enqueue_script('jquery');

	wp_register_script('fotorama', get_template_directory_uri() . '/libs/fotorama-4.6.4/fotorama.js', array(jquery), null, true);
	wp_enqueue_script('fotorama');

	wp_register_script('main', get_template_directory_uri() . '/libs/main.js', array(jquery), null, true);
	wp_enqueue_script('main');

	wp_register_script('slick', get_template_directory_uri() . '/libs/slick/slick.js', array(jquery), null, true);
	wp_enqueue_script('slick');

	wp_register_script('bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(jquery), null, true);
	wp_enqueue_script('bootstrap');

}
add_action( 'wp_enqueue_scripts', 'partner_scripts' );

add_theme_support( 'post-thumbnails' );