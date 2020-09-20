<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CCSD
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="testimonial-quote">
		<?php if( get_field('quote') ):
			the_field('quote');
		endif; ?>
	</div><!-- .entry-content -->

	<footer class="testimonial-customer">
		<?php the_field('customer_name') ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
