
<article class="person-post" id="post-<?php the_ID()?>">
<div class="flex-box flex-between">
    <div class="col-5">
        <?php the_post_thumbnail( 'medium_large');?>
       <p class="person-caption"> <a href="<?php get_field('url')?>">Watch the entire interview</a></p>
</div>
            <div class="entry-content flex-column col-6">
            <header class="entry-header">
          <h2 class="person-title"> <?php the_title( ); ?></h2>
            </header>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
</div>
</article>