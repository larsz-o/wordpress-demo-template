<div class="col-sm-12 col-md-6 col-lg-6">
<article id="post-<?php the_ID()?>" <?php post_class()?>>
           <header class="entry-header">
               <?php the_title('<h2>', '</h2>');?>
               <div class="byline">
                   <?php esc_html_e('Author: ');?> <?php the_author();?>
               </div>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
</article>
</div>