<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="page">
    <header class="site-header" role="banner">
        <a href="#content" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content', 'wphierarchy');?></a>
        <div class="header">
        <?php get_template_part( 'template-parts/umn', 'header' )?>
        </div>
        <div class="hero col-12">
            <div class="hero-overlay">
            <h1 class="hero-title hero-title-small">
                <a href="<?php echo esc_url(home_url('/'));?>" rel="home" class="hero-title-tight">
                     <?php bloginfo( 'name' );?>
                </a>
            </h1>
        </div>
     <div alt="banner" class="hero-image hero-small"></div>
</div>
        </header>
      
   
    <div id="content" class="content">
    
