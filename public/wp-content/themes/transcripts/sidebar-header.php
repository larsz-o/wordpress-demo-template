<?php 
    if( !is_active_sidebar( 'header-sidebar' ))
    {
        return;
    }
?>
<aside class="widget-area col-10" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'header-sidebar' );?>
</aside>