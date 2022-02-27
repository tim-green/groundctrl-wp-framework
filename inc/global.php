<?php

/**
 * GroundCTRL Framework
 * Custom global functions.
 */

// Enable SVG support
function grnd_svg_upload( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'grnd_svg_upload' );

function grnd_svg_mimetype( $data = null, $file = null, $filename = null, $mimes = null ) {
	$ext = isset( $data['ext'] ) ? $data['ext'] : '';
	if ( strlen( $ext ) < 1 ) {
		$exploded = explode( '.', $filename );
		$ext      = strtolower( end( $exploded ) );
	}
	if ( 'svg' === $ext ) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svg';
	} elseif ( 'svgz' === $ext ) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svgz';
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'grnd_svg_mimetype', 10, 4 );


// Excerpt length
function grnd_excerpt_length( $length ) {
	return 40;
}
// add_filter( 'excerpt_length', 'grnd_excerpt_length', 999 );


