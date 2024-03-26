<?php

function seifelred_theme_support() {
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'seifelred_theme_support');


function seifelred_menues() {
    $locations = array (
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'seifelred_menues');

function seifelred_register_styles() {

    $version = wp_get_theme()->get ( 'Version' );
    wp_enqueue_style('seifelred-style', get_template_directory_uri() . "./style.css", array('seifelred-bootstrap'), $version, 'all');
    wp_enqueue_style('seifelred-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('seifelred-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'seifelred_register_styles');

function seifelred_register_scripts() {
    wp_enqueue_script('seifelred-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('seifelred-jsdelivr', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('seifelred-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('seifelred-custom', get_template_directory_uri()."/assets/js/main.js", '1.0', array(), true);
    

}

add_action( 'wp_enqueue_scripts', 'seifelred_register_scripts');

?>