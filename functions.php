<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'aldworth', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );




/**
 * Traces the quality value used for images
 * 
 * @param integer $quality expected to be between 1 and 100
 * @param string $mime_type image type
 * @return integer the image quality
 */
function aldworth_editor_set_quality( $quality, $mime_type ) {
	//bw_trace2();
	return $quality;
}
add_filter( "wp_editor_set_quality", "aldworth_editor_set_quality", 9999, 2 );



