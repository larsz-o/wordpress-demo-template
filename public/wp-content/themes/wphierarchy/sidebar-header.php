<?php 
    if( !is_active_sidebar( 'header-sidebar' ))
    {
        return;
    }
?>
<aside class="widget-area" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'header-sidebar' );?>
</aside>