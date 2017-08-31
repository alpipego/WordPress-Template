<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:21
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_register_script(
		'template-test-child',
		get_stylesheet_directory_uri() . '/js/template-test-child.js',
		[ 'wp-util', 'jquery' ],
		time(),
		true
	);

	if ( is_home() ) {
		wp_dequeue_script( 'template-test' );
		wp_enqueue_script( 'template-test-child' );
	}
}, 11 );
