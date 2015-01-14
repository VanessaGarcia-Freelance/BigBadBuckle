<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Flexy
 
 * @since Flexy 1.0
 */
?>
	<!-- </div> --><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php wp_footer(); ?>
			<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?> <?php _e( 'All Rights Reserved.', 'flexy' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- </div> --><!-- #page -->


</body>
</html>