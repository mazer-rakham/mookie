<?php

/*********************************************************************************************************
* Woocommerce
**********************************************************************************************************/

if(get_theme_mod('mooks_market_woo_add_to_cart')) {
	function remove_loop_button(){
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
	add_action('init','remove_loop_button');
}

if(!get_theme_mod('mooks_market_woo_view_product')) {
	add_action('woocommerce_after_shop_loop_item','mooks_market_replace_add_to_cart');
	function mooks_market_replace_add_to_cart() {
		global $product;
		$link = $product->get_permalink();
		echo do_shortcode('<a href="'.$link.'" class="button addtocartbutton">'. __( "View Product", "shop-and-commerce" ) .'</a>');
	}
}	
/*******************************
* WooCommerce Pagination
********************************/

remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);

function woocommerce_pagination() { ?>

			<div class="nextpage">
			
				<div class="pagination">
				
					<?php echo paginate_links(); ?>
					
				</div> 
				
			</div>   

  <?php  }

add_action( 'woocommerce_pagination', 'seos_pagination', 10);	