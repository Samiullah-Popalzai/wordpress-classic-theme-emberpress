<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('title'); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body class="<?php body_class() ?>">
    <?php wp_body_open() ?>
    <header class="site-header">
        <a href="<?php home_url('/') ?>"> <?php bloginfo('name') ?> </a>
<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'emberpress' ); ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
            )
        );
        ?>
    </nav>
    
    <div class="site-search">
        <?php get_search_form(); ?>
    </div>

    </header>