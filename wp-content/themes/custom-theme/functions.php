<?php
/**
 * video functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Video
 */


/*********************************************************************************************************
* Basics
**********************************************************************************************************/

if ( ! function_exists( 'mooks_market_setup' ) ) :

function mooks_market_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'woocommerce' );	
	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mooks-market' ),
	) );
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mooks_market_custom_background_args', array(
		'default-color' => '',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mooks_market_setup' );
	
function mooks_market_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mooks_market_content_width', 640 );
}
add_action( 'after_setup_theme', 'mooks_market_content_width', 0 );

/**
 * Register widget area.
 */
function mooks_market_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'mooks-market' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mooks-market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
}

add_action( 'widgets_init', 'mooks_market_widgets_init' );

/************************** Includes ******************************/
		require get_template_directory() . '/kirki/kirki.php';
		require get_template_directory() . '/inc/custom-header.php';
		require get_template_directory() . '/inc/template-tags.php';
		require get_template_directory() . '/inc/extras.php';
		require get_template_directory() . '/inc/customizer.php';
		require get_template_directory() . '/inc/jetpack.php';
		require get_template_directory() . '/js/viewportchecker.php';
		require get_template_directory() . '/woocommerce/woo-cart.php';
		require get_template_directory() . '/woocommerce/woo-functions.php';
	
/**
 * Enqueue scripts and styles.
 */
function mooks_market_scripts() {
	wp_enqueue_style( 'mooks-market-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery');
	
	wp_enqueue_style( 'mooks-market-animation-menu', get_template_directory_uri() . '/css/flipInX.css');
	
	wp_enqueue_style( 'mooks-market-animata-css', get_template_directory_uri() . '/css/animate.css');
	
	wp_enqueue_style( 'seos-scroll-css', get_template_directory_uri() . '/css/scroll-effect.css');

	wp_enqueue_script( 'mooks-market-viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js');
	wp_enqueue_script( 'mooks-market-main-javascript', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'mooks-market-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_style( 'mooks-market-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'custom-font', 'https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300' );
		
	wp_enqueue_script( 'mooks-market-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'mooks-market-genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
			
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mooks_market_scripts' );


function mooks_market_admin_scripts() {

	wp_enqueue_style( 'mooks_market_admin', get_template_directory_uri() . '/css/admin.css');

}

add_action( 'admin_enqueue_scripts', 'mooks_market_admin_scripts' );


/*********************************************************************************************************
* Excerpt
**********************************************************************************************************/
	
function mooks_market_excerpt_more( $mooks_market_link ) {
	if ( is_admin() ) {
		return $mooks_market_link;
	}

	$mooks_market_link = sprintf( '<p class="link-more"><a href="%1$s" class="read-more">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read More<span class="screen-reader-text"> "%s"</span>', 'mooks-market' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $mooks_market_link;
}
add_filter( 'excerpt_more', 'mooks_market_excerpt_more' );


/*********************************************************************************************************
* Add Thumbnails in Pages 
**********************************************************************************************************/

	add_filter('manage_pages_columns', 'mooks_market_pages_columns', 5);
	add_action('manage_pages_custom_column', 'mooks_market_pages_custom_columns', 5, 2);

	function mooks_market_pages_columns($defaults){
		$defaults['mooks_market_pages_columns'] = __('Featured Image', 'mooks-market');
		return $defaults;
	}

	function mooks_market_pages_custom_columns($column_name, $id){
			if($column_name === 'mooks_market_pages_columns'){
			echo the_post_thumbnail( 'featured-thumbnail' );
		}
	}
	
/*********************************************************************************************************
* Add Thumbnails in Posts
**********************************************************************************************************/

	add_filter('manage_posts_columns', 'mooks_market_posts_columns', 5);
	add_action('manage_posts_custom_column', 'mooks_market_posts_custom_columns', 5, 2);

	function mooks_market_posts_columns($defaults){
		$defaults['mn_post_thumbs'] = __('Featured Image', 'mooks-market');
		return $defaults;
	}

	function mooks_market_posts_custom_columns($column_name, $id){
			if($column_name === 'mn_post_thumbs'){
			echo the_post_thumbnail( 'featured-thumbnail' );
		}
	}

	
/***********************************************************************************
 * SEOS Shop And Commerce Buy
***********************************************************************************/

		