<?php

function z_portfolio_theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'z_portfolio_theme_support');

function z_portfolio_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('z-portfolio-style', get_template_directory_uri() . '/css/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'z_portfolio_register_styles');

function z_portfolio_menus(){
    $locations = array(
        'primary' => "primary",
    );

    register_nav_menus($locations);
}

add_action('init', 'z_portfolio_menus');

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'portfolio' );
};

?>