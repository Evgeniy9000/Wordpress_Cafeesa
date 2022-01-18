<?php

add_action( 'wp_enqueue_scripts', 'cafeesa_add_scripts' );
function cafeesa_add_scripts() {
	// подключаем файл стилей темы

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// подключаем js файл темы


    
        wp_deregister_script( 'jquery-core' );
        wp_register_script( 'jquery-core', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
        wp_enqueue_script( 'jquery' );
    


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0', true );

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );

}

add_theme_support( 'title-tag' );