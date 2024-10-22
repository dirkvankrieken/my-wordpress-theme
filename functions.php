<?php

function dirk_files() {
	wp_enqueue_style('custom-google-fonts-inter', '//fonts.googleapis.com/css?family=Inter:wght@100..900');
    wp_enqueue_style('custom-google-fonts-cardo', '//fonts.googleapis.com/css?family=Cardo:ital,wght@0,400;0,700;1,400');
    wp_enqueue_style('dirk_main_styles', get_theme_file_uri('/main.css'));
    wp_enqueue_style('font-awesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.css');
}

add_action('wp_enqueue_scripts', 'dirk_files');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
    $exclude_filters[] = 'themes/dirk-theme/node_modules';
    return $exclude_filters;
}

function create_portfolio_post_type() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Portfolio Item',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Portfolio Item',
        'add_new'            => 'Voeg nieuw item toe',
        'add_new_item'       => 'Voeg nieuw portfolio item toe',
        'new_item'           => 'Nieuw item',
        'edit_item'          => 'Bewerk item',
        'view_item'          => 'Bekijk item',
        'all_items'          => 'Alle portfolio items',
        'search_items'       => 'Zoek portfolio items',
        'not_found'          => 'Geen items gevonden',
        'not_found_in_trash' => 'Geen items in de prullenbak gevonden'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => false, // veroorzaakt mogelijk het probleem
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'create_portfolio_post_type' );

function register_my_menu() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'theme-text-domain' ),
    ));
}
add_action( 'after_setup_theme', 'register_my_menu' );


?>
