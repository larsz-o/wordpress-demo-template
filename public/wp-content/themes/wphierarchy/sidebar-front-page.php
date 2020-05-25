<?php 
    if( !is_active_sidebar( 'front-page' ))
    {
        return;
    }
?>
<aside class="widget-area" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'front-page' );?>
</aside>