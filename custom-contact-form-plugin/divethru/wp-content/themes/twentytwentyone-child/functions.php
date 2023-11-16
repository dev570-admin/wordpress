<?php

/* Loads parent stylesheet */

function wpchild_enqueue_styles(){
  wp_enqueue_style( 'parent-stylesheet', get_stylesheet_directory_uri() . '/style.css' );

  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/style.css',array(), '0.1.0', 'all' );
  wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css' ,array(), '0.1.0', 'all');

// enque cdn style/script
  wp_enqueue_style( 'slick-carousal', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
  wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' );


  wp_register_script( 'responsive-css', 'https://code.jquery.com/jquery-3.0.0.min.js' );
  wp_register_script( 'responsive-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' );

//----//


 wp_enqueue_script('asidebar-script', get_stylesheet_directory_uri() . '/js/asidebar.jquery.js',  array( 'jquery' ),'1', true );
wp_enqueue_script('custom-jq', get_stylesheet_directory_uri() . '/js/jquery/asidebar.jquery.js',  array( 'jquery' ),'1.0', true );




}
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );


/* Registering multiple menue*/
register_nav_menus( 

 array(

 	'top-nav'  => ' Header  Menu',
 	'footer-nav'  => 'Footer 1  Menu',
 	'footer-nav2'  => 'Footer 2  Menu'


    )
 );

/* end menu part  */
//=================================================================
// Acf Theame Settings
//=================================================================

 
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}


