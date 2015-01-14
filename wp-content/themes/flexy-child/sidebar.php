<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 * @package Flexy
 * @since Flexy 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( get_header_image() ) : ?>
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			</div>
			<?php endif; ?>
			
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->

	</div><!-- #main .wrapper -->

</div><!-- #page -->
	<?php endif; ?>