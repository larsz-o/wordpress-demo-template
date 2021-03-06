<?php
    // add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
    add_theme_support( 'html5' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );

    //load in css
    function wphierarchy_enqueue_styles()
    {
        // change time() to version in production
        wp_enqueue_style( 'fonts-css', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Varela+Round',[], time(), 'all' );
        wp_enqueue_style( 'more-fonts-css', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap',[], time(), 'all' );
        wp_enqueue_style( 'branding-css', get_stylesheet_directory_uri() . '/branding/css/umn-styles.css', [], time(), 'all');
        wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', ['fonts-css', 'more-fonts-css', 'branding-css'], time(), 'all');
    }
    add_action( 'wp_enqueue_scripts','wphierarchy_enqueue_styles' );
     //load in js
     function wphierarchy_enqueue_scripts()
     {
      wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/scripts.js', [], time(), true);
     }
     add_action( 'wp_enqueue_scripts','wphierarchy_enqueue_scripts' );
    //register menu locations
    register_nav_menus( [
        'main-menu' => esc_html__('Main Menu', 'wphierachy'),
        'footer-menu' => esc_html__('Footer Menu', 'wphierarchy')
    ] );

    // set up widget areas
    function wphierarchy_widgets_init()
    {
      register_sidebar( [
        'name'        => esc_html__('Header Sidebar', 'wphierarchy'),
        'id'          => 'header-sidebar',
        'description' => esc_html__('Add widgets for header sidebar here', 'wphierarchy'),
        'before-widget' => '<section class="widget">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ]);
    register_sidebar( [
        'name'        => esc_html__('Front Page Audio', 'wphierarchy'),
        'id'          => 'front-page',
        'description' => esc_html__('Add widgets for front page here', 'wphierarchy'),
        'before-widget' => '<section class="widget">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ]);
    register_sidebar( [
        'name'        => esc_html__('Front Page Section 1', 'wphierarchy'),
        'id'          => 'front-page-section-1',
        'description' => esc_html__('Add widgets for front page section 1 here', 'wphierarchy'),
        'before-widget' => '<section class="widget">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ]);
    register_sidebar([
        'name'          => esc_html__('Audio Info Hero', 'wphierarchy'),
        'id'            => 'audio-info-hero',
        'description'   => esc_html__('Add widgets for Audio Info Hero here', 'wphierarchy'),
        'before-widget' => '<section class="widget">',
        'after-widget'  => '</section>',
        'before-title'  => '<h2 class="widget-title">',
        'after-title'   =>  '</h2>'
    ]);
    }
    add_action( 'widgets_init', 'wphierarchy_widgets_init');
    ?>
