<?php
/**
 * Register theme scripts
 *
 * @package understrap
 */

// Add the Javascript
function d4tw_enqueue_scripts () {
   wp_enqueue_script( 'D4TW Theme JS', get_stylesheet_directory_uri() . '/js/d4tw.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'AOS JS', get_stylesheet_directory_uri() . '/aos/aos.js', array('jquery'), '1.0.0', true );

   if (is_page('contact')) {
   		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=XXXXX', array(), '3', true );
		wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/library/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
	}
}
add_action( 'wp_enqueue_scripts', 'd4tw_enqueue_scripts' );
