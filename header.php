<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kollektiv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kollektiv' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
				<div class="site-branding-title-block">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php echo __(get_bloginfo( 'name', 'display' )); ?>
						</a>
					</h1>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description">
							<?php echo __( $description, 'kollektiv' ); ?>
						</p>
					<?php
					endif; ?>
				</div>

			</div><!-- .site-branding -->

			<div id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kollektiv' ); ?></button> -->
				<input type="checkbox" id="menu-toggle" />
      	<label for="menu-toggle" class="label-toggle"></label>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container' => 'nav'
					) );
				?>
			</div><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
