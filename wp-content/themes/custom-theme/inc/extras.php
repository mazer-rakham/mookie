<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $mooks_market_classes Classes for the body element.
 * @return array
 */
function mooks_market_body_classes( $mooks_market_classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$mooks_market_classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$mooks_market_classes[] = 'hfeed';
	}

	return $mooks_market_classes;
}
add_filter( 'body_class', 'mooks_market_body_classes' );
