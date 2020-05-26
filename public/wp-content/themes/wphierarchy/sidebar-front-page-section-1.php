<?php 
    if( !is_active_sidebar( 'front-page-section-1' ))
    {
        return;
    }
?>
<aside class="widget-area front-section top-section" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page-section-1' );?>
</aside>
<aside class="widget-area front-section" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page-section-2' );?>
</aside>
<aside class="widget-area front-section" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page-section-3' );?>
</aside>