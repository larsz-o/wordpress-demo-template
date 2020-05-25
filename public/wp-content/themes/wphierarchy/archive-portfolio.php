
<?php get_header();?>
<div id="primary" class="content-area extended">
   
    <main id="main" class="site-main" role="main">
    <h1><?php wp_title(' ');?></h1>
    <div class="flex-box flex-between">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>    
        <?php get_template_part( 'template-parts/content', 'portfolio'); ?>  
<?php endwhile; endif;?>
</div> 
<?php echo paginate_links(  ) ?>
    </main>
    <p>archive-portfolio.php</p>
</div>
<?php get_footer();?>