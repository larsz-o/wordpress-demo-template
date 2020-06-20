<?php 
    if( !is_active_sidebar( 'audio-info-hero' ))
    {
        return;
    }
?>
<aside class="widget-area" role="complimentary" id="secondary">
    <?php dynamic_sidebar( 'audio-info-hero' );?>
</aside>