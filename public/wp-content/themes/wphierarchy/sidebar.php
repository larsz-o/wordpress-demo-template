
<?php 
    if( !is_active_sidebar( 'main-sidebar' ))
    {
        return;
    }
?>
<aside class="widget-area" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'main-sidebar' );?>
</aside>