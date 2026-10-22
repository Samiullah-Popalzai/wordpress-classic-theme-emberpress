<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'emberpress'),
        )
    );
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'emberpress-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});
