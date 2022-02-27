<?php

/**
 * GroundCTRL Framework 
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

if ( ! function_exists( 'grnd_styles_scripts' ) ) {

	function grnd_styles_scripts() {

		// CSS
		wp_enqueue_style( 'grnd-styles', get_template_directory_uri() . '/assets/build/app.min.css', false, $theme_version, 'all' );

	}
}

add_action( 'wp_enqueue_scripts', 'grnd_styles_scripts' );
// Disable this action if not loading Google Fonts from their external server
// function grnd_google_fonts_preconnect() {
// 	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
// 	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
// }
// add_action( 'wp_head', 'grnd_google_fonts_preconnect', 7 );
