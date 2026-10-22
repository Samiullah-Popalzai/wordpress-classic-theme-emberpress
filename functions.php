
<?php

/**
 * Theme setup and asset loading.
 *
 * @package EmberPress
 */

function emberpress_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'emberpress' ),
        )
    );
}
add_action( 'after_setup_theme', 'emberpress_setup' );

/**
 * Enqueue the theme stylesheet.
 */
function emberpress_enqueue_styles() {
    wp_enqueue_style(
        'emberpress-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'emberpress_enqueue_styles' );
