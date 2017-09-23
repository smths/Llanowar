<?php
/**
 * @package Llanowar
 */

function llanowar_scripts() {

    /* テンプレートcss読み込み */
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    /* 共通css読み込み */
    wp_enqueue_style( 'llanowar-style', get_stylesheet_directory_uri() . '/css/llanowar-style.css' );

    /* jquery読み込み */
    wp_enqueue_script( 'jquery' );

    /* 共通js読み込み */
    wp_enqueue_script( 'llanowar-script', get_stylesheet_directory_uri() .'/js/llanowar-script.js', array(),'',true);
}

add_action( 'wp_enqueue_scripts', 'llanowar_scripts' );

?>
