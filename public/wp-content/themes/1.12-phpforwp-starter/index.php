<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if(is_front_page() && !is_home()):?>
        <h1>Static front page</h1>
      <?php endif;?>
      <!-- Blog Home -->
      <?php if(is_home()):?>
      <h1>blog</h1>
      <?php endif;?>
      <!-- Page (Not Front Page) -->
      <?php if(is_page() && !is_front_page() && !is_home()):?>
        <h1>Page</h1>
      <?php endif; ?>
      <!-- Single Post -->
      <?php if(is_single() && !is_attachment()):?>
        <h1>Single Post</h1>
      <?php endif; ?>
      <!-- Single Attachment (Media) -->
      <?php if(is_attachment() && is_singular() ); ?>
      <!-- Category Archive -->
      <?php if(is_category() && is_archive());?>
      <!-- Tag Archive -->
      <?php if(is_tag() && is_archive());?>
      <!-- Author Archive -->
      <?php if(is_author() && is_archive());?>
      <!-- Date Archive -->
      <?php if(is_date() && is_archive());?>
      <!-- 404 Page -->
      <?php if(is_404())?>
    </div>

<?php get_footer(); ?>
