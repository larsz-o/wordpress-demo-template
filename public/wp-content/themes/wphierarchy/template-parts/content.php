<article id="post-<?php the_ID()?>">
           <header class="entry-header">
           <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
            </header>
            <div class="entry-content flex-box flex-between">
                <div class="col-6 col-md-6">
                    <?php the_content(); ?>
                </div>
              
                <div class="flex-end">
                     <?php get_sidebar( 'main-sidebar' );?>
                </div>
            </div>
</article>