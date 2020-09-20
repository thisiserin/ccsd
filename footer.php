<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCSD
 */

?>
</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<div class="footer-widget footer-widget-1">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
							<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>
				</div><!-- .footer-widget-1 -->
				<div class="footer-widget footer-widget-2">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php endif; ?>
				</div><!-- .footer-widget-2 -->
				<div class="footer-widget footer-widget-3">
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
							<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php endif; ?>
				</div><!-- .footer-widget-3 -->
			</div><!-- .footer-widgets -->
		</div><!-- .container -->
		<div class="footer-bottom">
			<div class="container">
				<div class="site-info">
					<span>Commercial Cleaning of San Diego &copy; <?php echo date("Y"); ?>. All rights reserved. Site built by <a href="https://thisiserin.com">Erin Ralph</a>.</span>
				</div><!-- .site-info -->
			</div><!-- .container -->
		</div><!-- .footer-bottom -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
