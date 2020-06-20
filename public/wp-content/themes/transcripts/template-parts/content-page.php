<article id="post-<?php the_ID()?>" <?php post_class()?>>
<div class="entry-container flex-box flex-center">
    <div class="flex-box flex-column">
           <header class="entry-header flex-box">
           <?php the_post_thumbnail( 'thumbnail');?> <?php the_title('<h2 class="page-title tracking-in-expand">', '</h2>');?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
</div>
 </div>
</article>