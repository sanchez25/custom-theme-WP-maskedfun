<?php

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
	register_nav_menu( 'footer', 'Меню в подвале' );
}
add_action('after_setup_theme', 'theme_register_nav_menu');

add_theme_support( 'post-thumbnails' );

function delete_intermediate_image_sizes( $sizes ){
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

function remove_image_size_attributes( $html ) {
	return str_replace('size-full', '', $html);
}

add_filter( 'the_content', 'remove_image_size_attributes' );

function wpassist_remove_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');

add_action( 'wp_enqueue_scripts', 'style_theme' );
function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
}




