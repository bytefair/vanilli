<?php
/*
enqueue.php

Includes the style and script defnitions.
 */

add_action( 'wp_enqueue_scripts', 'v_site_enqueues', 999 );
function v_site_enqueues() {

	/*** REGISTER ***/

	// I'm using the Bower version, you should customize this for production by
	// going to http://modernizr.com/download/ and only checking the things you
	// will actually need.
	wp_register_script(
		$handle    = 'modernizr',
		$src       = THEME_URL . '/components/modernizr/modernizr.js',
		$deps      = array(),
		$ver       = '2.6.2',
		$in_footer = false );

	// This file calls all the JS used in Vanilli. You can place JS here or any
	// place you want to register, really.
	wp_register_script(
		$handle    = 'vanilli-scripts',
		$src       = THEME_URL . '/javascript/vanilli-scripts.js',
		$deps      = array('jquery'),
		$ver       = VERSION,
		$in_footer = true );

	/*** QUEUE ***/

	// Let's use Sass and compile into one stylsheet. Compress for production.
	wp_enqueue_style(
		$handle = 'main',
		$src    = THEME_URL . '/css/main.css',
		$deps   = array(),
		$ver    = VERSION,
		$media  = 'all' );

	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'vanilli-scripts' );
}

?>
