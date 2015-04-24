<?php
    function my_scripts_method() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }    
    add_action('wp_enqueue_scripts', 'my_scripts_method');


    function child_functions_enqueue_scripts() {
        wp_enqueue_script( 'child_functions', get_stylesheet_directory_uri() . '/js/child-functions.js', '', '', false );
    }
    add_action( 'wp_enqueue_scripts', 'child_functions_enqueue_scripts' );