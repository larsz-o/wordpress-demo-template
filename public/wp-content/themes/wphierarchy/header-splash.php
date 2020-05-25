<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="page">
<nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( [ 'theme_location' => 'main-menu'] );?>
        </nav>
    <header id="masthead" class="site-header splash" role="banner">
        <a href="#content" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content', 'wphierarchy');?></a>
        <div class="site-branding">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/'));?>" rel="home">
                     <?php bloginfo( 'name' );?>
                </a>
            </h1>
        </div>
        <p class="call-to-action">
            Listen to the full episode
        </p>
    </header>
    <div id="content" class="site-content">