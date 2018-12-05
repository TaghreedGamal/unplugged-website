<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="left"> 
            <img class="lefti" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/home/foo_big_circle.png">
            <svg xmlns="http://www.w3.org/2000/svg" id="lefl1" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100px" height="49.917px" viewBox="0 0 132.333 49.917" enable-background="new 0 0 132.333 49.917" xml:space="preserve">
            <path opacity="1" fill="none" stroke="#3bbaee"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.5,28.257c1.546-4.939,4.89-9.221,10.539-8.812c5.301,0.383,8.156,5.381,8.115,10.268c-0.029,3.428,3.722,5.415,6.213,2.656  c2.359-2.612,4.477-5.397,6.6-8.203c1.377-1.819,3.363-5.188,5.741-5.813c3.917-1.031,8.311,9.685,10.81,12.157  c3.173,3.137,9.031,1.197,12.118-0.889c3.239-2.185,5.581-5.397,8.196-8.295c1.246,3.692,3.012,7.096,6.285,9.621  "/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="lefl2" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100px" height="49.917px" viewBox="0 0 132.333 49.917" enable-background="new 0 0 132.333 49.917" xml:space="preserve">
            <path opacity="1" fill="none" stroke="#3bbaee"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.5,28.257c1.546-4.939,4.89-9.221,10.539-8.812c5.301,0.383,8.156,5.381,8.115,10.268c-0.029,3.428,3.722,5.415,6.213,2.656  c2.359-2.612,4.477-5.397,6.6-8.203c1.377-1.819,3.363-5.188,5.741-5.813c3.917-1.031,8.311,9.685,10.81,12.157  c3.173,3.137,9.031,1.197,12.118-0.889c3.239-2.185,5.581-5.397,8.196-8.295c1.246,3.692,3.012,7.096,6.285,9.621 "/>
            </svg>
        </div> 
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
            <div class="copy-right">
             <?php create_copyright(); ?>
            </div>
        </div>
        <div class="right "> 
            <img class="righti" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/home/foo_gbig_circle.png">
            <svg xmlns="http://www.w3.org/2000/svg"  id="righl1" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100px" height="49.917px" viewBox="0 0 132.333 49.917" enable-background="new 0 0 132.333 49.917" xml:space="preserve">
            <path opacity="1" fill="none" stroke="#FF7900"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.5,28.257c1.546-4.939,4.89-9.221,10.539-8.812c5.301,0.383,8.156,5.381,8.115,10.268c-0.029,3.428,3.722,5.415,6.213,2.656  c2.359-2.612,4.477-5.397,6.6-8.203c1.377-1.819,3.363-5.188,5.741-5.813c3.917-1.031,8.311,9.685,10.81,12.157  c3.173,3.137,9.031,1.197,12.118-0.889c3.239-2.185,5.581-5.397,8.196-8.295c1.246,3.692,3.012,7.096,6.285,9.621  "/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="righl2" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100px" height="49.917px" viewBox="0 0 132.333 49.917" enable-background="new 0 0 132.333 49.917" xml:space="preserve">
            <path opacity="1" fill="none" stroke="#FF7900"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.5,28.257c1.546-4.939,4.89-9.221,10.539-8.812c5.301,0.383,8.156,5.381,8.115,10.268c-0.029,3.428,3.722,5.415,6.213,2.656  c2.359-2.612,4.477-5.397,6.6-8.203c1.377-1.819,3.363-5.188,5.741-5.813c3.917-1.031,8.311,9.685,10.81,12.157  c3.173,3.137,9.031,1.197,12.118-0.889c3.239-2.185,5.581-5.397,8.196-8.295c1.246,3.692,3.012,7.096,6.285,9.621 "/>
            </svg>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<!-- <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script> -->
</body>
</html>