<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
 

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  
   
    /* DET SOM SKA ÄNDRAS ÄR
     'about' = till ert permalink namn.
     'about-style' = till ert permalink namn + style
     '/style_about.css' = till namnet på er css fil som ska kopplas till den sidan ni angett i permalink. */
    
     /* add this for every different style assigned*/
    if( is_page( 63 ) ) {
         wp_enqueue_style( 'about-style', get_stylesheet_directory_uri() . '/style_about.css' );
     }
  if( is_page( 102 ) ) {
         wp_enqueue_style( 'contacts-style', get_stylesheet_directory_uri() . '/style_contacts.css' );
     }
     /* end of it*/
   if( is_page( 87 ) ) {
         wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/style_home.css' );
     }
  
  if( is_page( 73 ) ) {
         wp_enqueue_style( 'news-style', get_stylesheet_directory_uri() . '/style_newsMED.css' );
     }

     if( is_page( 70 ) ) {
         wp_enqueue_style( 'faq-style', get_stylesheet_directory_uri() . '/style_faq.css' );
     }
     if( is_page( 67 ) ) {
         wp_enqueue_style( 'donation-style', get_stylesheet_directory_uri() . '/style_donation.css' );
     }
 }

?>