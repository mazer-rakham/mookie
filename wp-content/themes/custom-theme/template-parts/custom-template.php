<?php 
/* Template Name: IndexTemplate */ 
get_header('secondary');
?>
<div id="mookintro">
	<div>
		Mook's Market offers a large selection of online training products, services, live events and exclusive masterminds to help
		you along your business journey. Entrepreneur Owner/Operator Michael 'Mookie' Galavotti also provides free daily inspiration
		and motivation values of life and business tips through blogs and social media with a driven passion to help others succeed
		and prosper.
	</div>
	<div>
		<img src="<?php echo get_bloginfo('template_url') ?>/images/mooks.png" alt="">
	</div>
</div>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'mooks-market' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav>
<!-- #site-navigation -->
<div>

	<div>

		<?php
			while ( have_posts() ) : the_post(); 

				get_template_part( 'template-parts/content', 'page' );

			
			endwhile; // End of the loop.
			?>

	</div>
	<!-- #main -->

</div>
<!-- #primary -->




<?php
get_footer();
?>