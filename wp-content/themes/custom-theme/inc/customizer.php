<?php
/**
 * Theme Customizer.
 *
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mooks_market_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	function mooks_market_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/kirki/' );
}
add_filter( 'kirki/config', 'mooks_market_kirki_configuration' );

/***********************************************************************************
 * Home Page Image
***********************************************************************************/	

		
		
/********** Home Page Image **********/
		
		$wp_customize->add_section( 'mooks_market_front_page_image' , array(
			'title'       => __( 'Home Page Image', 'mooks-market' ),
			'description' => __( 'Select IMG. The image will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 2,
		) );

		$wp_customize->add_setting( 'hide_home_image', array(
		'default'        => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_home_image', array(
			'section'   => 'mooks_market_front_page_image',
			'label'     => 'Hide Home Page Image',
			'type'      => 'checkbox'
			 )
		);	
	 
		$wp_customize->add_setting( 'front_page_image', array (
			'default' => get_template_directory_uri() .'/images/home-page.jpg',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'front_page_image', 
			array(
					'default-image' => get_template_directory_uri() . '/images/home-page.jpg',	
				'label'      => __( 'Image:', 'mooks-market' ),
				'description' => __( 'Load IMG from your media:', 'mooks-market' ),
				'section'    => 'mooks_market_front_page_image',
				'settings'   => 'front_page_image',
			) ) );

		$wp_customize->add_setting( 'activate_custom_height', array(
		'default'        => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'activate_custom_height', array(
			'section'   => 'mooks_market_front_page_image',
			'label'     => 'Activate Custom Height',
			'type'      => 'checkbox'
			 )
		);	
		
		$wp_customize->add_setting( 'custom_height', array(
		'default'        => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'custom_height', array(
			'type' => 'range',
			'priority' => 10,
			'section' => 'mooks_market_front_page_image',
			'label' => __( 'Custom Height', 'mooks-market' ),
			'description' => '',
			'input_attrs' => array(
				'min' => 45,
				'max' => 100,
				'step' => 1,
			),
		) );
	
/***********************************************************************************
 * Home Page Buttons
***********************************************************************************/	

		
		$wp_customize->add_panel( 'mooks_market_buttons' , array(
			'title'       => __( 'Home Page Buttons', 'mooks-market' ),
			'priority'		=> 3,
		) );
		
/********** Button 1 **********/

		$wp_customize->add_setting( 'hide_buttn_1', array(
		'default'        => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_buttn_1', array(
			'section'   => 'mooks_market_section_buttons',
			'label'     => 'Hide Button 1',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_section( 'mooks_market_section_buttons' , array(
			'title'       => __( 'Home Page Button 1', 'mooks-market' ),
			'panel' => 'mooks_market_buttons',
			'priority'		=> 3,
		) );
		
		$wp_customize->add_setting( 'mooks_market_button_text1', array (
			'default' => 'Read More',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_button_text1', array(
			'label'    => __( 'Button Text 1:', 'mooks-market' ),
			'section'  => 'mooks_market_section_buttons',
			'description' => __( 'Add Text. The buttons will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_button_text1',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_button_url1', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_button_url1', array(
			'label'    => __( 'Button URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_buttons',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_button_url1',
		) ) );
				
/********** Button 2 **********/

		$wp_customize->add_setting( 'hide_buttn_2', array(
		'default'        => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_buttn_2', array(
			'section'   => 'mooks_market_section_buttons2',
			'label'     => 'Hide Button 1',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_section( 'mooks_market_section_buttons2' , array(
			'title'       => __( 'Home Page Button 2', 'mooks-market' ),
			'panel' => 'mooks_market_buttons',
			'priority'		=> 3,
		) );
		
		$wp_customize->add_setting( 'mooks_market_button_text2', array (
			'default' => 'Read More',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_button_text2', array(
			'label'    => __( 'Button Text 2:', 'mooks-market' ),
			'section'  => 'mooks_market_section_buttons2',
			'description' => __( 'Add Text. The buttons will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_button_text2',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_button_url2', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_button_url2', array(
			'label'    => __( 'Button URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_buttons2',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_button_url2',
		) ) );
		
/***********************************************************************************
 * Home Page Products
***********************************************************************************/	
		
		$wp_customize->add_panel( 'mooks_market_homa_image_panel' , array(
			'title'       => __( 'Home Page Products', 'mooks-market' ),
			'description' => __( 'Select IMG and Recent News will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 3,
		) );
		
		
/********** Products 1 **********/
		 
		$wp_customize->add_section( 'mooks_market_section_1' , array(
			'title'       => __( 'Products 1', 'mooks-market' ),
			'panel' => 'mooks_market_homa_image_panel',
			'description' => __( 'Select IMG. The image will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 3,
		) );

		$wp_customize->add_setting( 'hide_img_1', array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_img_1', array(
			'section'   => 'mooks_market_section_1',
			'label'     => 'Hide Default Image 1',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_setting( 'mooks_market_img1', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() .'/images/product1.jpg',
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'mooks_market_img1', 
			array(
				'label'      => __( 'Image:', 'mooks-market' ),
				'description' => __( 'Load IMG from your media:', 'mooks-market' ),
				'section'    => 'mooks_market_section_1',
				'settings'   => 'mooks_market_img1',
			) ) );
			
		$wp_customize->add_setting( 'mooks_market_title1', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_title1', array(
			'label'    => __( 'Image Title:', 'mooks-market' ),
			'section'  => 'mooks_market_section_1',
			'description' => __( 'The title of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_title1',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_text1', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_text1', array(
			'label'    => __( 'Price:', 'mooks-market' ),
			'section'  => 'mooks_market_section_1',
			'description' => __( 'Content of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_text1',
			'type' => 'text',
		) ) );
			
		$wp_customize->add_setting( 'mooks_market_url1', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_url1', array(
			'label'    => __( 'Image URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_1',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_url1',
		) ) );
			
		
/********** Products 2 **********/
		
		$wp_customize->add_section( 'mooks_market_section_2' , array(
			'title'       => __( 'Products 2', 'mooks-market' ),
			'panel' => 'mooks_market_homa_image_panel',
			'description' => __( 'Select IMG. The image will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 3,
		) );

		$wp_customize->add_setting( 'hide_img_2', array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_img_2', array(
			'section'   => 'mooks_market_section_2',
			'label'     => 'Hide Default Image 2',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_setting( 'mooks_market_img2', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() .'/images/product2.jpg',			
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'mooks_market_img2', 
			array(
				'label'      => __( 'Image:', 'mooks-market' ),
				'description' => __( 'Load IMG from your media:', 'mooks-market' ),
				'section'    => 'mooks_market_section_2',
				'settings'   => 'mooks_market_img2',
			) ) );
			
		$wp_customize->add_setting( 'mooks_market_title2', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_title2', array(
			'label'    => __( 'Image Title:', 'mooks-market' ),
			'section'  => 'mooks_market_section_2',
			'description' => __( 'The title of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_title2',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_text2', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_text2', array(
			'label'    => __( 'Price:', 'mooks-market' ),
			'section'  => 'mooks_market_section_2',
			'description' => __( 'Content of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_text2',
			'type' => 'text',
		) ) );
			
		$wp_customize->add_setting( 'mooks_market_url2', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_url2', array(
			'label'    => __( 'Image URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_2',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_url2',
		) ) );
		
/********** Products 3 **********/
		
		$wp_customize->add_section( 'mooks_market_section_3' , array(
			'title'       => __( 'Products 3', 'mooks-market' ),
			'panel' => 'mooks_market_homa_image_panel',
			'description' => __( 'Select IMG. The image will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 3,
		) );

		$wp_customize->add_setting( 'hide_img_3', array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_img_3', array(
			'section'   => 'mooks_market_section_3',
			'label'     => 'Hide Default Image 3',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_setting( 'mooks_market_img3', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() .'/images/product3.jpg',			
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'mooks_market_img3', 
			array(
				'label'      => __( 'Image:', 'mooks-market' ),
				'description' => __( 'Load IMG from your media:', 'mooks-market' ),
				'section'    => 'mooks_market_section_3',
				'settings'   => 'mooks_market_img3',
			) ) );
			
		$wp_customize->add_setting( 'mooks_market_title3', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_title3', array(
			'label'    => __( 'Image Title:', 'mooks-market' ),
			'section'  => 'mooks_market_section_3',
			'description' => __( 'The title of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_title3',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_text3', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_text3', array(
			'label'    => __( 'Price:', 'mooks-market' ),
			'section'  => 'mooks_market_section_3',
			'description' => __( 'Content of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_text3',
			'type' => 'text',
		) ) );
			
		$wp_customize->add_setting( 'mooks_market_url3', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_url3', array(
			'label'    => __( 'Image URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_3',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_url3',
		) ) );


/********** Products 4 **********/
		
		$wp_customize->add_section( 'mooks_market_section_4' , array(
			'title'       => __( 'Products 4', 'mooks-market' ),
			'panel' => 'mooks_market_homa_image_panel',
			'description' => __( 'Select IMG. The image will be activated in your home page.', 'mooks-market' ),
			'priority'		=> 3,
		) );

		$wp_customize->add_setting( 'hide_img_4', array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'hide_img_4', array(
			'section'   => 'mooks_market_section_4',
			'label'     => 'Hide Default Image 34',
			'type'      => 'checkbox'
			 )
		 );	
		 
		$wp_customize->add_setting( 'mooks_market_img4', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() .'/images/product4.jpg',			
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'mooks_market_img4', 
			array(
				'label'      => __( 'Image:', 'mooks-market' ),
				'description' => __( 'Load IMG from your media:', 'mooks-market' ),
				'section'    => 'mooks_market_section_4',
				'settings'   => 'mooks_market_img4',
			) ) );
			
		$wp_customize->add_setting( 'mooks_market_title4', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_title4', array(
			'label'    => __( 'Image Title:', 'mooks-market' ),
			'section'  => 'mooks_market_section_4',
			'description' => __( 'The title of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_title4',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'mooks_market_text4', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_text4', array(
			'label'    => __( 'Price:', 'mooks-market' ),
			'section'  => 'mooks_market_section_4',
			'description' => __( 'Content of your Image. Will be activated in your home page:', 'mooks-market' ),
			'settings' => 'mooks_market_text4',
			'type' => 'text',
		) ) );
			
		$wp_customize->add_setting( 'mooks_market_url4', array (
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mooks_market_url4', array(
			'label'    => __( 'Image URL:', 'mooks-market' ),
			'section'  => 'mooks_market_section_4',
			'description' => __( 'Copy and paste the URL from your media:', 'mooks-market' ),			
			'settings' => 'mooks_market_url4',
		) ) );

/********** Other Products **********/

	for($pro=5;$pro<=60;$pro++) {

		 
		$wp_customize->add_setting( 'demo1'.$pro, array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'demo1'.$pro, array(
			'section'   => 'mooks_market_section_'.$pro,
			'label'     => 'Products '.$pro,
			'type'      => 'radio'
			 )
		 );	
	}

/********** Product Slider **********/	
	
		
		$wp_customize->add_setting( 'demo2', array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		 ) );

		$wp_customize->add_control( 'demo2', array(
			'section'   => 'mooks_market_slider_section',
			'label'     => 'Products ',
			'type'      => 'radio'
			 )
		 );	
}
add_action( 'customize_register', 'mooks_market_customize_register' );



/***********************************************
Theme Options
************************************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_1'
) );

Kirki::add_field( 'options_1', array(
	'type'        => 'radio',
	'settings'    => 'options_1',
	'section'     => 'sectio_1',
) );

/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_2'
) );

Kirki::add_field( 'options_2', array(
	'type'        => 'radio',
	'settings'    => 'options_2',
	'section'     => 'sectio_2',
) );


/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_3'
) );

Kirki::add_field( 'options_3', array(
	'type'        => 'radio',
	'settings'    => 'options_3',
	'section'     => 'sectio_3',
) );


/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_4'
) );

Kirki::add_field( 'options_4', array(
	'type'        => 'radio',
	'settings'    => 'options_4',
	'section'     => 'sectio_4',
) );


/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_5'
) );

Kirki::add_field( 'options_5', array(
	'type'        => 'radio',
	'settings'    => 'options_5',
	'section'     => 'sectio_5',
) );


/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_6'
) );

Kirki::add_field( 'options_6', array(
	'type'        => 'radio',
	'settings'    => 'options_6',
	'section'     => 'sectio_5',
) );



/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_7'
) );

Kirki::add_field( 'options_7', array(
	'type'        => 'radio',
	'settings'    => 'options_7',
	'section'     => 'sectio_7',
) );




/*******************************/



Kirki::add_config( 'theme_opion', array(
	'capability'	=> 'options_7'
) );

Kirki::add_field( 'options_7', array(
	'type'        => 'radio',
	'settings'    => 'options_7',
	'section'     => 'sectio_7',
) );


/***********************************************
WooCommerce Cart Options
************************************************/

Kirki::add_panel( 'woocommerce', array(
    'priority'    => 10,
    'title'       => __( 'WooCommerce', 'mooks-market' ),
    'description' => __( 'WooCommerce', 'mooks-market' ),
) );

Kirki::add_section( 'mooks_market_section_animations_8', array(
    'title'          => __( 'WooCommerce Cart Options', 'mooks-market' ),
	'panel'          => 'woocommerce',
    'priority'       => 7,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'seos_display_woo_cart', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'seos_display_woo_cart', array(
	'type'        => 'switch',
	'settings'    => 'seos_display_woo_cart',
	'label'       => __( 'Activate Cart in Header', 'mooks-market' ),
	'description'       => __( 'WooCommerce is a free eCommerce plugin that allows you to sell anything, beautifully. Built to integrate seamlessly with WordPress, WooCommerce is the world’s favorite eCommerce solution that gives both store owners and developers complete control. Before using woocommerce options you need install WooCommerce. <a target="_blank" href="https://wordpress.org/plugins/woocommerce/">Download here.</a><br />', 'mooks-market' ),
	'section'     => 'mooks_market_section_animations_8',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'mooks-market' ),
		'' => esc_attr__( 'off', 'mooks-market' ),
	),
) );

Kirki::add_config( 'display_woo_cart_text_item', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'display_woo_cart_text_item', array(
	'type'     => 'text',
	'settings' => 'display_woo_cart_text_item',
	'label'    => __( 'Custom Item Text', 'mooks-market' ),
	'section'  => 'mooks_market_section_animations_8',
 
	'priority' => 10,
) );

Kirki::add_config( 'display_woo_cart_text_items', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'display_woo_cart_text_items', array(
	'type'     => 'text',
	'settings' => 'display_woo_cart_text_items',
	'label'    => __( 'Custom Items Text', 'mooks-market' ),
	'section'  => 'mooks_market_section_animations_8',
 
	'priority' => 10,
) );


Kirki::add_config( 'display_woo_cart_text_empty_cart', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'display_woo_cart_text_empty_cart', array(
	'type'     => 'text',
	'settings' => 'display_woo_cart_text_empty_cart',
	'label'    => __( 'Custom Empty Cart Text', 'mooks-market' ),
	'section'  => 'mooks_market_section_animations_8',
 
	'priority' => 10,
) );


Kirki::add_config( 'mooks_market_woo_cart_color', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mooks_market_woo_cart_color', array(
	'type'        => 'color',
	'settings'    => 'mooks_market_woo_cart_color',
	'label'       => __( 'Cart Color', 'mooks-market' ),
	'section'     => 'mooks_market_section_animations_8',
	'default'     => '#683B60',
	'priority'    => 10,
) );	

Kirki::add_config( 'mooks_market_woo_cart_hover_color', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mooks_market_woo_cart_hover_color', array(
	'type'        => 'color',
	'settings'    => 'mooks_market_woo_cart_hover_color',
	'label'       => __( 'Cart Hover Color', 'mooks-market' ),
	'section'     => 'mooks_market_section_animations_8',
	'default'     => '#97568b',
	'priority'    => 10,
) );	

Kirki::add_config( 'mooks_market_woo_cart_background', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mooks_market_woo_cart_background', array(
	'type'        => 'color',
	'settings'    => 'mooks_market_woo_cart_background',
	'label'       => __( 'Cart Background Color', 'mooks-market' ),
	'section'     => 'mooks_market_section_animations_8',
	'default'     => '#f1f1f1',
	'priority'    => 10,
) );	

Kirki::add_config( 'mooks_market_woo_cart_background_hover', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mooks_market_woo_cart_background_hover', array(
	'type'        => 'color',
	'settings'    => 'mooks_market_woo_cart_background_hover',
	'label'       => __( 'Cart Background Hover Color', 'mooks-market' ),
	'section'     => 'mooks_market_section_animations_8',
	'default'     => '#f1f1f1',
	'priority'    => 10,
) );	

/*******************************/



Kirki::add_config( 'woo_opion', array(
	'capability'	=> 'options_21'
) );

Kirki::add_field( 'options_21', array(
	'type'        => 'radio',
	'settings'    => 'options_21',
	'section'     => 'sectio_21',
) );


/*******************************/



Kirki::add_config( 'woo_opion', array(
	'capability'	=> 'options_22'
) );

Kirki::add_field( 'options_22', array(
	'type'        => 'radio',
	'settings'    => 'options_22',
	'section'     => 'sectio_22',
) );


/*******************************/



Kirki::add_config( 'woo_opion', array(
	'capability'	=> 'options_23'
) );

Kirki::add_field( 'options_23', array(
	'type'        => 'radio',
	'settings'    => 'options_23',
	'section'     => 'sectio_23',
) );


/*******************************/



Kirki::add_config( 'woo_opion', array(
	'capability'	=> 'options_24'
) );

Kirki::add_field( 'options_24', array(
	'type'        => 'radio',
	'settings'    => 'options_24',
	'section'     => 'sectio_24',
) );



/***********************************************
Animations
************************************************/





Kirki::add_config( 'animations', array(
	'capability'	=> 'options_8'
) );

Kirki::add_field( 'options_8', array(
	'type'        => 'radio',
	'settings'    => 'options_8',
	'section'     => 'sectio_8',
) );



Kirki::add_config( 'animations', array(
	'capability'	=> 'options_9'
) );

Kirki::add_field( 'options_9', array(
	'type'        => 'radio',
	'settings'    => 'options_9',
	'section'     => 'sectio_9',
) );

/*****************************************/


Kirki::add_config( 'animations', array(
	'capability'	=> 'options_10'
) );

Kirki::add_field( 'options_10', array(
	'type'        => 'radio',
	'settings'    => 'options_10',
	'section'     => 'sectio_10',
) );

/*****************************************/



Kirki::add_config( 'animations', array(
	'capability'	=> 'options_11'
) );

Kirki::add_field( 'options_11', array(
	'type'        => 'radio',
	'settings'    => 'options_11',
	'section'     => 'sectio_11',
) );

/*****************************************/


Kirki::add_config( 'animations', array(
	'capability'	=> 'options_12'
) );

Kirki::add_field( 'options_12', array(
	'type'        => 'radio',
	'settings'    => 'options_12',
	'section'     => 'sectio_12',
) );

/*****************************************/


Kirki::add_config( 'animations', array(
	'capability'	=> 'options_13'
) );

Kirki::add_field( 'options_13', array(
	'type'        => 'radio',
	'settings'    => 'options_13',
	'section'     => 'sectio_13',
) );


/*****************************************/


Kirki::add_config( 'animations', array(
	'capability'	=> 'options_14'
) );

Kirki::add_field( 'options_14', array(
	'type'        => 'radio',
	'settings'    => 'options_14',
	'section'     => 'sectio_14',
) );

/*****************************************/



Kirki::add_config( 'animations', array(
	'capability'	=> 'options_15'
) );

Kirki::add_field( 'options_15', array(
	'type'        => 'radio',
	'settings'    => 'options_15',
	'section'     => 'sectio_15',
) );

/*****************************************/



Kirki::add_config( 'animations', array(
	'capability'	=> 'options_16'
) );

Kirki::add_field( 'options_16', array(
	'type'        => 'radio',
	'settings'    => 'options_16',
	'section'     => 'sectio_16',
) );

/***********************************************
Header Options
************************************************/



Kirki::add_config( 'seos_display_woo_cart', array(
	'capability'	=> 'options_17'
) );

Kirki::add_field( 'options_17', array(
	'type'        => 'radio',
	'settings'    => 'options_17',
	'section'     => 'sectio_17',
) );

/***********************************************
Social Icons
************************************************/

Kirki::add_config( 'seos_display_woo_cart', array(
	'capability'	=> 'options_18'
) );

Kirki::add_field( 'options_18', array(
	'type'        => 'radio',
	'settings'    => 'options_18',
	'section'     => 'sectio_18',
) );

/***********************************************
Menu Options
************************************************/

Kirki::add_panel( 'menu', array(
    'priority'    => 10,
    'title'       => __( 'Menu Options', 'mooks-market' ),
    'description' => __( 'Menu Options', 'mooks-market' ),
) );

Kirki::add_section( 'mooks_market_menu_position', array(
    'title'          => __( 'Menu Position', 'mooks-market' ),
	'panel'          => 'menu',
    'priority'       => 7,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'seos_display_menu', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'seos_display_menu', array(
	'type'        => 'switch',
	'settings'    => 'seos_display_menu',
	'label'       => __( 'Show the menu before header', 'mooks-market' ),
	'section'     => 'mooks_market_menu_position',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'mooks-market' ),
		'' => esc_attr__( 'off', 'mooks-market' ),
	),
) );

/*******************************/



Kirki::add_config( 'menu_25', array(
	'capability'	=> 'options_25'
) );

Kirki::add_field( 'options_25', array(
	'type'        => 'radio',
	'settings'    => 'options_25',
	'section'     => 'sectio_25',
) );

/*******************************/



Kirki::add_config( 'about', array(
	'capability'	=> 'options_26'
) );

Kirki::add_field( 'options_26', array(
	'type'        => 'radio',
	'settings'    => 'options_26',
	'section'     => 'sectio_26',
) );

/*******************************/



Kirki::add_config( 'sidebar', array(
	'capability'	=> 'options_27'
) );

Kirki::add_field( 'options_27', array(
	'type'        => 'radio',
	'settings'    => 'options_27',
	'section'     => 'sectio_27',
) );

/*******************************/



Kirki::add_config( 'sidebar', array(
	'capability'	=> 'options_28'
) );

Kirki::add_field( 'options_28', array(
	'type'        => 'radio',
	'settings'    => 'options_28',
	'section'     => 'sectio_28',
) );


/*******************************/



Kirki::add_config( 'footer', array(
	'capability'	=> 'options_29'
) );

Kirki::add_field( 'options_29', array(
	'type'        => 'radio',
	'settings'    => 'options_29',
	'section'     => 'sectio_29',
) );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mooks_market_customize_preview_js() {
	wp_enqueue_script( 'mooks_market_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mooks_market_customize_preview_js' );




/**************************************
Styles
**************************************/	
	
	function mooks_market_css_styles () { ?>
	<style>
			<?php if(get_theme_mod('mooks_market_woo_cart_color')) { ?> .sp-cart a { color: <?php echo get_theme_mod('mooks_market_woo_cart_color'); ?> !important;} <?php } ?>
			<?php if(get_theme_mod('mooks_market_woo_cart_hover_color')) { ?> .sp-cart a:hover { color: <?php echo get_theme_mod('mooks_market_woo_cart_hover_color'); ?> !important;} <?php } ?>
			<?php if(get_theme_mod('mooks_market_woo_cart_background')) { ?> .sp-cart a { background: <?php echo get_theme_mod('mooks_market_woo_cart_background'); ?> !important;} <?php } ?>
			<?php if(get_theme_mod('mooks_market_woo_cart_background_hover')) { ?> .sp-cart a:hover { background: <?php echo get_theme_mod('mooks_market_woo_cart_background_hover'); ?> !important;} <?php } ?>
	
			<?php if (get_theme_mod ('activate_custom_height')) { ?>
				header .site-branding {
						min-height: <?php echo get_theme_mod ('custom_height'); ?>vw !important;
						background-attachment: inherit !important;
				}

				@media screen and (max-width: 76.5em) {
							
					.site-title img {
						max-height: 80px;
					}

					header .site-branding .site-title {
						margin-top: 0;
						font-size: 5vw;					
					}
							
					.sp-button2 a, .sp-button1 a {
						font-size: 2vw;
						padding: 1vw;
					}
					.sp-button1, .sp-button2 {
						margin-top: 3vw;
					}
				}

				<?php } ?>		
	</style>
	<?php }
	add_action('wp_head','mooks_market_css_styles');
	
/*********************************************************************************************************
* Excerpt
**********************************************************************************************************/
	if (get_theme_mod('mooks_market_read_more_activate')) {
		function seos_photography_excerpt_more( $more ) {
			return '<p class="link-more"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . seos_photography_return_read_more_text (). '</a></p>';
		}
			add_filter( 'excerpt_more', 'seos_photography_excerpt_more' );

		function seos_photography_custom_excerpt_length( $length ) {
			if (get_theme_mod('seos_photography_read_more_lenght')) {
				return get_theme_mod('seos_photography_read_more_lenght');
			}
			else return 42;
		}
		add_filter( 'excerpt_length', 'seos_photography_custom_excerpt_length', 999 );
	}
	
	function seos_photography_return_read_more_text () {
		if (get_theme_mod('seos_photography_read_more_text')) {	 
			return get_theme_mod('mooks_market_read_more_text');
		} 
		return "Read More";
		
	}	