<?php
/*
* Plugin Name: Gravity Forms Disable Autofill Add-On
* Plugin URI: http://andrewmgunn.com/gravity-forms-disable-autofill-add-on/
* Description: Disable the browser's ability to autofill forms and input fields on selected Gravity Forms. Ideal for forms with sensitive information and provides extra level of form submission security.
* Version: 1.1
* Author: Andrew M. Gunn
* Author URI: http://andrewmgunn.com
* Text Domain: gravity-forms-disable-autofill-add-on
* License: GPL2
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

add_action( 'wp_enqueue_scripts', 'register_gfdaa_scripts' );

function register_gfdaa_scripts() {
	wp_register_script( 'gfdaa_script', plugins_url('inc/scripts.js', __FILE__), array('jquery'));
	wp_register_style( 'gfdaa_style', plugins_url('inc/styles.css', __FILE__));
	wp_enqueue_script( 'gfdaa_script' );
	wp_enqueue_style( 'gfdaa_style' );
}
