<?php
/*
Plugin Name: cubo
Plugin URI: https://akismet.com/
Description: cubo 3d para elementor
Author: Marcos Castro
Author URI: 
Text Domain: cubo
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function cubo( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/cubo-widget.php' );  // include the widget file

    $widgets_manager->register( new \Cubo() );  // register the widget

}
add_action( 'elementor/widgets/register', 'cubo' );