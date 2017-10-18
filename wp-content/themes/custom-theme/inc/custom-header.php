<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses mooks_market_header_style()
 */
function mooks_market_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'mooks_market_custom_header_args', array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',	
		'default-text-color'     => 'fff',
		'width'                  => 1300,
		'height'             => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'mooks_market_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'mooks_market_custom_header_setup' );

register_default_headers( array(
	'yourimg' => array(
	'url' => get_template_directory_uri() . '/images/header.jpg',
	'thumbnail_url' => get_template_directory_uri() . '/images/header.jpg',
	'description' => _x( 'Default Image', 'header image description', 'shop-and-commerce' )),
));


if ( ! function_exists( 'mooks_market_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see mooks_market_custom_header_setup().
 */
function mooks_market_header_style() {
	$mooks_market_header_text_color = get_header_textcolor();

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			header .site-branding .site-title a,
			.site-description, header .header-img .site-title a {
				color: #<?php echo esc_attr( $mooks_market_header_text_color ); ?> !important;
			}
		<?php endif; ?>
	</style>
	<?php
}
endif;
