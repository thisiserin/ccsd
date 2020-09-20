<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCSD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ccsd' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="topbar">
			<div class="container">
				<nav class="topbar-navigation">
					<?php if ( is_active_sidebar( 'topbar' ) ) : ?>
							<?php dynamic_sidebar( 'topbar' ); ?>
					<?php endif; ?>
				</nav>
			</div>
		</div>

		<div class="container">
			<div class="header-wrap">

				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$ccsd_description = get_bloginfo( 'description', 'display' );
					if ( $ccsd_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $ccsd_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ccsd' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->

			</div><!-- .header-wrap -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<?php
	while ( have_posts() ) :
		the_post();

		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

			<div class="page-header" style="background-image: url('https://commercialcleaningsd.com/wp-content/themes/ccsd/img/divider.png'), url('https://commercialcleaningsd.com/wp-content/uploads/bg-blue-water.jpg');">
				<div class="container">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
				</div>
			</div><!-- .entry-header -->

	<?php endwhile; // End of the loop.
	?>

	<div id="content" class="site-content">
