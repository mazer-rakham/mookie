<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('animate-article'); ?>>
	<header class="entry-header">
		<?php   if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<?php if ( is_front_page() || is_home() || is_category() ) { ?>	
		
		<?php if ( has_post_thumbnail() ) { ?>	
			<p class="cont-img"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?> </a>	</p>
		<?php } } ?>
		
		<div class="entry-meta">
			<?php mooks_market_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		
	
	</header><!-- .entry-header -->
	
	<?php $mooks_market = get_post_meta($post->ID, 'my_mooks_market_name', true); 
		if ($mooks_market) {
			echo '<div class="seos-video">' . esc_html($mooks_market) . '</div>';
	} ?>
	
		<?php if ( is_front_page() or is_home() or is_category() ) : ?>

		<div class="ex-right"><?php the_excerpt(); ?> </div>
		
		<?php else : ?>

	<div class="entry-content">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shop-and-commerce' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shop-and-commerce' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php endif; ?>
	
	<footer class="entry-footer">
		<?php mooks_market_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
