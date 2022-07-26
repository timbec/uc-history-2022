<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uc-history-2022
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'uc-history-2022' ); ?></a>

	<header id="masthead" class="site-header">

	<div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <?php wp_nav_menu( array( 
					'theme_location' => 'mobile',
					'container' => null,
					'menu_class' => 'navigation__list'
					 ) ); ?>
            </nav>
        </div>
		
		<div class="site-branding">
			<span class="site-branding__atomic-symbol">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/atomic-symbol.png" alt="Atomic Symbol">
			</span>
			<span class="site-branding__title-description">
				<?php
				the_custom_logo();
				
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				
				
					$uc_history_2022_description = get_bloginfo( 'description', 'display' );
					if ( $uc_history_2022_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $uc_history_2022_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
			</span>
			<span class="site-branding__headframe">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headframe.png" alt="Headframe Image">
			</span>

		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary', 'uc-history-2022' ); ?></button> -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
