<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://apphub.appmobi.com/', 'twentytwelve' ) ); ?>"><?php printf( __( 'AppHub', 'twentytwelve' ), 'AppHub' ); ?></a>
			<span class="site-info-spacer">|</span>
			<a href="<?php echo esc_url( __( 'http://docs.appmobi.com/', 'twentytwelve' ) ); ?>"><?php printf( __( 'Documentation', 'twentytwelve' ), 'Documentation' ); ?></a>
			<span class="site-info-spacer">|</span>
			<a href="<?php echo esc_url( __( 'http://apphub.appmobi.com/', 'twentytwelve' ) ); ?>"><?php printf( __( 'Login / SignUp', 'twentytwelve' ), 'Login / SignUp' ); ?></a>
		</div><!-- .site-info -->
		<div class="site-info-contact">
			<a id="contactuslink" class="site-info-contact-anchor" href="#">contact</a>
		</div>
	</footer><!-- #colophon -->
	<div id="appMobi_lightbox" style="display: none; overflow: hidden; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1000; background-color: rgba(0,0,0, 0.5);">
		<div style="color: #fff; position: fixed; top: 50%; margin-top: -250px; height: 500px; width: 100%; background-color: rgba(0,0,0, 0.85);">
			<div id="contactusbox" style="text-align: left; width: 340px; margin: 25px auto 0 auto;">
				<p style="color: #97c93e; font-size: 24px;">Contact Us</p>
				<?php echo do_shortcode( '[contact-form-7 id="39" title="contact us"]' ); ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		jQuery('#contactuslink').click(function(){
			jQuery('#appMobi_lightbox').fadeIn();
		});
		jQuery(document).bind('mailsent.wpcf7', function() {
			setTimeout(function(){
				jQuery('#appMobi_lightbox').fadeOut();
			}, 2000);
		});
	</script>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
