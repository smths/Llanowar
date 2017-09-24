<?php
function init_scripts() {

    /* テンプレートcss読み込み */
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    /* 共通css読み込み */
    wp_enqueue_style( 'common-style', get_stylesheet_directory_uri() . '/css/common-style.css' );

    /* jquery読み込み */
    wp_enqueue_script( 'jquery' );

    /* 共通js読み込み */
    wp_enqueue_script( 'common-script', get_stylesheet_directory_uri() .'/js/common-script.js', array(),'',true);
}

add_action( 'wp_enqueue_scripts', 'init_scripts' );

?>
