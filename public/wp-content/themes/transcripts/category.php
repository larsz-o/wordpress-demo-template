
<?php get_header();?>
<div id="primary" class="content-area extended">
   
    <main id="main" class="site-main" role="main">
    <h1><?php the_archive_title()?></h1>
    <p><?php echo the_category_description()?>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php get_template_part( 'template-parts/content', 'posts'); ?>
<?php endwhile; else : ?>
        <?php get_template_part( 'template-parts/content', 'none');?>
<?php endif;?>
<?php echo paginate_links(  ) ?>
    </main>
</div>
<?php get_sidebar( 'main-sidebar' ); ?>
<?php get_footer();?>
