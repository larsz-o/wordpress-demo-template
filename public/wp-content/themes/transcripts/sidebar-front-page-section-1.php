<?php 
    if( !is_active_sidebar( 'front-page-section-1' ))
    {
        return;
    }
?>
<aside class="widget-area " role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page-section-1' );?>
</aside>

