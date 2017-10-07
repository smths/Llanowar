<?php
/* ---- アイキャッチサイズ追加 ---- */
/* スマホ一覧(小)表示 */
add_image_size('xxs', 100, 9999 );
/* スマホ一覧表示 */
add_image_size('xs' , 150, 9999 );
/* PC一覧表示( 横5列 ) */
add_image_size('s'  , 200, 9999 );
/* PC一覧表示( 横3列 ) */
add_image_size('m'  , 320, 9999 );
/* PC時横幅半分 */
add_image_size('l'  , 500, 9999 );
/* PC時横幅フル */
add_image_size('xl' , 1000, 9999 );
/* 全画面時など */
add_image_size('xxl', 2560, 9999 );


/* ---- サイドバー定義 ---- */
function theme_slug_widgets_init() {
    register_sidebar(
        array(
            'id' => 'common-sidebar',
            'name' => '共通サイドバー',
            'description' => '全ページ共通の右メニュー(タブレット縦ではフッタ上に表示)',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* ---- ナビメニュー定義 ---- */
// register_nav_menus( array(
// 	'sidebar_menu' => 'サイドバーメニュー',
// ) );

// function llanowar_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'llanowar_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'llanowar_content_width', 0 );



//
// require get_template_directory() . '/inc/custom-header.php';
// require get_template_directory() . '/inc/template-tags.php';
// require get_template_directory() . '/inc/template-functions.php';
// require get_template_directory() . '/inc/customizer.php';
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }


?>
