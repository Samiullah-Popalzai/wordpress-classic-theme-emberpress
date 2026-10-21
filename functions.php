<?php


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'emberpress-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});
