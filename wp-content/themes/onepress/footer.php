<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">   
          <!--Trung Starts-Add Footer Sidebar -->
        <div id="footer-sidebar" class="secondary">
            <div id="footer-sidebar1">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
                }
                ?>
            </div>
            <div id="footer-sidebar2">
                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                    dynamic_sidebar('footer-sidebar-2');
                }
                ?>
            </div>
            <div id="footer-sidebar3">
                <?php
                if(is_active_sidebar('footer-sidebar-3')){
                    dynamic_sidebar('footer-sidebar-3');
                }
                ?>
            </div>
        </div>
        <!--Trung Ends-Add Footer Sidebar -->

        

        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-top-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                <?php endif; ?>
                <?php
                /**
                 * hooked onepress_footer_site_info
                 * @see onepress_footer_site_info
                 */
                do_action('onepress_footer_site_info');
                ?>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
<?php
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
