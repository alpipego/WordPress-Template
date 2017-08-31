<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:21
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_register_script(
		'template-test',
		get_template_directory_uri() . '/js/template-test.js',
		[ 'wp-util' ],
		time(),
		true
	);

	if ( is_home() ) {
		wp_enqueue_script( 'template-test' );
	}

	if ( ! is_front_page() ) {
		wp_enqueue_script( 'hljs', get_template_directory_uri() . '/js/highlight.pack.js', [], '', true );
		wp_add_inline_script( 'hljs', 'hljs.initHighlightingOnLoad();' );

		wp_enqueue_style( 'wp', get_template_directory_uri() . '/wp.css' );
	}
} );

add_filter( 'template_include', function ( string $template ) {
	add_action( 'wp_footer', function () use ( $template ) {
		echo '<code><pre>';
		var_dump( str_replace( realpath( __DIR__ . '/../' ), '', realpath( $template ) ) );
		echo '</pre></code>';
	} );

	return $template;
} );

add_action( 'wp_ajax_wptp_switch_theme', function () {
	if ( wp_verify_nonce( $_REQUEST['_wpnonce'], sanitize_text_field( $_REQUEST['action'] ) ) ) {
		if ( is_child_theme() ) {
			switch_theme( 'wptp' );
		} else {
			switch_theme( 'wptp-child' );
		}
		wp_redirect( wp_get_referer() );
		exit();
	}

	wp_redirect( wp_get_referer() );
	exit();
} );

add_action( 'wp_ajax_wptp_one_more', 'get_one_post' );
add_action( 'wp_ajax_nopriv_wptp_one_more', 'get_one_post' );

function get_one_post() {
	if ( wp_verify_nonce( $_REQUEST['_wpnonce'], sanitize_text_field( $_REQUEST['action'] ) ) ) {
		$query = new WP_Query( [
			'posts_per_page' => 1,
			'offset'         => (int) $_REQUEST['offset'],
			'fields'         => 'ids',
		] );

		if ( $query->have_posts() ) {
			$id = $query->posts[0];
			wp_send_json_success( [
				'permalink' => get_the_permalink( $id ),
				'title'     => get_the_title( $id ),
				'published' => get_the_date( 'U', $id ),
				'excerpt'   => wp_trim_words( get_post_field( 'post_content', $id ), 55, '...' ),
				'timestamp' => time(),
			] );
		}

		wp_send_json_error( [ 'No more posts to show' ], 400 );
	}
}

