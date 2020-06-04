<?php 
    if( !is_active_sidebar( 'front-page-section-footer' ))
    {
        return;
    }
?>

<aside class="widget-area front-section" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page-section-footer' );?>
</aside>