<?php 
    if( !is_active_sidebar( 'footer-sidebar' ))
    {
        return;
    }
?>
<aside class="widget-area" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'footer-sidebar' );?>
</aside>