<article id="post-<?php the_ID()?>" <?php post_class()?>>
           <header class="entry-header">
           <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
            </header>
            <div class="entry-content flex-box flex-between">
                <div class="col-6 col-md-6">
                    <?php the_post_thumbnail (); ?>
                </div>
              
                <div class="col-6 col-md-6">
                     <?php the_excerpt();?>
                </div>
            </div>
</article>