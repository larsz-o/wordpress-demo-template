<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="page">
    <header id="masthead" class="site-header hero" role="banner">
        <a href="#content" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content', 'wphierarchy');?></a>
        <div class="site-branding hero-overlay">
            <h1 class="hero-title">
                <a href="<?php echo esc_url(home_url('/'));?>" rel="home" class="hero-title-tight">
                     <?php bloginfo( 'name' );?>
                </a>
            </h1>   
        </div>
        <?php get_sidebar('header')?>

        </header>
        <?php get_sidebar('front-page')?>
    <div id="content" class="site-content">