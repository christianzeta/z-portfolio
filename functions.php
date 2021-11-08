<?php

function z_portfolio_theme_support(){
    add_theme_support( 'title-tag');
}

add_action('after_setup_theme', 'z_portfolio_theme_support');

function z_portfolio_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('z-portfolio-style', get_template_directory_uri() . '/css/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'z_portfolio_register_styles');

?>