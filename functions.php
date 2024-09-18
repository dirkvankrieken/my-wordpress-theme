<?php

function dirk_files() {
	wp_enqueue_style('custom-google-fonts-inter', '//fonts.googleapis.com/css?family=Inter:wght@100..900');
    wp_enqueue_style('custom-google-fonts-cardo', '//fonts.googleapis.com/css?family=Cardo:ital,wght@0,400;0,700;1,400');
    wp_enqueue_style('dirk_main_styles', get_theme_file_uri('/main.css'));
    wp_enqueue_style('font-awesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Cardo:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900');
}

add_action('wp_enqueue_scripts', 'dirk_files');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
    $exclude_filters[] = 'themes/dirk-theme/node_modules';
    return $exclude_filters;
}

?>
