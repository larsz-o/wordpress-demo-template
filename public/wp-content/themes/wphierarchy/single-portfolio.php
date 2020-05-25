<?php get_header();?>
<div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <article id="post-<?php the_ID()?>" class="col-12">
           <header class="entry-header">
               <?php the_title('<h2><a href="' . get_the_permalink() . '">',  '</a></h2>');?>
               </header>
            <div class="entry-content">
            <?php the_post_thumbnail( )?>
                <?php the_content(); ?>
                <?php the_field('url')?>
            </div>
</article>
<?php endwhile; endif; ?>
    
    </main>
    <p>single-portfolio.php</p>
</div>
<?php get_footer();?>