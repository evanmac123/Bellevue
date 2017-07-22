<?php
/**
 * The Sidebar widget area for footer.
 *
 * @package sparkling
 */
?>
	<div class="footer-widget-area">

		<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
		<div class="col-md-4 col-md-offset-4 center-footer-widget" role="complementary">
			<?php dynamic_sidebar( 'footer-widget' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>
	</div>
