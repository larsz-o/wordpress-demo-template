<?php wp_footer();?>
</div> <!-- ends .content -->
<footer id="colophon" class="site-footer" role="contentinfo">
<?php get_sidebar( 'footer' )?>
<nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( [ 'theme_location' => 'main-menu'] );?>
        </nav>
</footer>
</div> <!-- ends .page -->
</body>
</html>