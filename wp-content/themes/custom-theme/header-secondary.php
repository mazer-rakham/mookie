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



		
	
		
        <h1 class="animated fadeInUpBig text-center" id="main-intro">Mook's Market</h1>
      
        <img src="<?php echo get_bloginfo('template_url') ?>/images/city-foreground.png"/ id="cityscape-image">
