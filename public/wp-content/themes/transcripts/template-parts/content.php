
<article class="person-post" id="post-<?php the_ID()?>">
<div class="flex-box flex-evenly">
    <div class="col-5">
        <?php the_post_thumbnail( 'medium_large');?>
        <div class="person-caption">
           <a href="<?php get_field('url')?>" class="transcripts-link">
      Watch the entire interview &rarr;</a>
</div>
</div>
            <div class="entry-content flex-column col-4">
            <header class="entry-header">
          <h2 class="person-title"> <?php the_title( ); ?></h2>
            </header>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
</div>
</article>