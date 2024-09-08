<?php
 
function my_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts','my_enqueue_scripts' );
