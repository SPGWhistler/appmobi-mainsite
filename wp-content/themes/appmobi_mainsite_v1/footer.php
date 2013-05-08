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
			<a class="site-info-contact-anchor" href="#">contact</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
