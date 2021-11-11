<?php

function z_portfolio_theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'z_portfolio_theme_support');

function z_portfolio_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('z-portfolio-style', get_template_directory_uri() . '/css/style.css', array(), $version, 'all');
    wp_enqueue_style('font-awesome', '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'z_portfolio_register_styles');

function z_portfolio_menus(){
    $locations = array(
        'primary' => "primary",
    );

    register_nav_menus($locations);
}

add_action('init', 'z_portfolio_menus');


function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'portfolio' );
};

add_action( 'init', 'gp_register_taxonomy_for_object_type' );

function my_cptui_add_post_types_to_archives( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

?>