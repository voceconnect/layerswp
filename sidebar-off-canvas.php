<section class="wrapper invert off-canvas-right" id="off-canvas-right">
    <a class="close-canvas l-close" data-toggle="#off-canvas-right" data-toggle-class="open"></a>
    <div class="row content nav-mobile">
        <?php wp_nav_menu( array( 'theme_location' => LAYERS_THEME_SLUG . '-primary' ,'container' => 'nav', 'container_class' => 'nav nav-vertical', 'fallback_cb' => create_function('', 'echo "&nbsp";') ) ); ?>
    </div>
    <?php dynamic_sidebar( LAYERS_THEME_SLUG . '-off-canvas-sidebar' ); ?>
</section>