<?php



    // Enable custom menus
    add_theme_support( 'menus' );

    // Enables post thumbnails
    add_theme_support( 'post-thumbnails' ); 


    // Adds CSS
    function theme_styles() {

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'josefin', 'http://fonts.googleapis.com/css?family=Josefin+Sans:400,700' );   
    }

        add_action( 'wp_enqueue_scripts', 'theme_styles');


    //Adds JS
    function theme_js() {
        wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);   
    }

    add_action( 'wp_enqueue_scripts', 'theme_js');



?>