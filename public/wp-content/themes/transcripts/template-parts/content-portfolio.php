<article id="post-<?php the_ID()?>" class="col-4">
           <header class="entry-header">
               <?php the_title('<h2><a href="' . get_the_permalink() . '">',  '</a></h2>');?>
               </header>
       
               <a href="<?php the_permalink();?>">
                 <?php the_post_thumbnail( )?>
                 </a>
         
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
</article>