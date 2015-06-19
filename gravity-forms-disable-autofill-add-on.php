<?php

/*
* Plugin Name: Gravity Forms Disable Autofill Add-On
* Plugin URI: http://andrewmgunn.com
* Description: A Gravity Forms add-on that disables browser's form autofill ability on selected Gravity Forms.
* Version: 1.0
* Author: Andrew M. Gunn
* Author URI: http://andrewmgunn.com
* License: GPL2
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );


function register_gfdaa_scripts() {
	wp_register_script( 'gfdaa_script', plugins_url('inc/scripts.js', __FILE__), array('jquery'));
	wp_register_style( 'gfdaa_style', plugins_url('inc/styles.css', __FILE__));
	wp_enqueue_script( 'gfdaa_script' );
	wp_enqueue_style( 'gfdaa_style' );
}

add_action( 'wp_enqueue_scripts', 'register_gfdaa_scripts' );
//add_filter( 'the_content', 'disable_autofill')
?>