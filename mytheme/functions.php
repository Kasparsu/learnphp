<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
}
add_action( 'init', 'register_my_menus' );
  