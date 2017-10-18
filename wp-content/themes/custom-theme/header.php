<?php


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mooks-market' ); ?></a>

	<?php if (get_theme_mod('seos_display_menu')) { ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'mooks-market' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	<?php } ?>
		
	<header id="masthead" class="site-header" role="banner">

	<?php if (( is_front_page() or is_home() and get_theme_mod('front_page_image')) and !get_theme_mod('hide_home_image')) : ?>
	
		<div class="site-branding" 
		
		style="background-image: url('<?php if (get_theme_mod('front_page_image')) { echo esc_url(get_theme_mod('front_page_image')); } else { echo get_template_directory_uri() . '/images/home-page.jpg'; } ?>'); min-height: 850px">
		
			<div class="dotted">			
				<div class="sp-top-center">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						
				<?php $mooks_market_description = get_bloginfo( 'description', 'display' );
				if ( $mooks_market_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $mooks_market_description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
				
				
					<div class="sp-button2">
						<a href="#site-navigation">Read More</a>		
					</div>
						

				</div>
			</div>
		
		</div><!-- .site-branding -->
		
		<?php  else : ?>
		
		<div class="header-img" style="background-image: url('<?php header_image(); ?>'); min-height:<?php echo esc_attr(get_custom_header()->height); ?>%">
			<div class="dotted">	
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

					<?php $mooks_market_description = get_bloginfo( 'description', 'display' );
					if ( $mooks_market_description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $mooks_market_description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
		
			</div>
		</div><!-- .site-branding -->
		
		<?php endif; ?>
		
		<?php if (!get_theme_mod('seos_display_menu')) { ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'mooks-market' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php } ?>
		
	<?php if ( get_theme_mod('seos_display_woo_cart') and  function_exists( 'woocommerce_get_page_id' ) ) {  mooks_market_woo_cart(); } ?>					
	</header><!-- #masthead -->
	<div class="clear"></div>

	<div id="content" class="site-content">
