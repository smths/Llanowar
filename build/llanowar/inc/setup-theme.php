<?php
/**
 * @package Llanowar
 */

function llanowar_setup() {

    /* theme_suportの追加 */
    require get_template_directory() . '/inc/setup-theme_theme-support.php';

    /* 管理画面整理 */
    require get_template_directory() . '/inc/setup-theme_admin_menu.php';


    /* css,js読み込み */
    require get_template_directory() . '/inc/setup-theme_load-style-script.php';

    /* 不要なコード除去 */
    require get_template_directory() . '/inc/setup-theme_cleanup.php';





    /* ナビメニュー作成 */
    // register_nav_menus( array(
    // 	'menu-1' => esc_html__( 'Primary', 'llanowar' ),
    // ) );

    // function llanowar_content_width() {
    // 	$GLOBALS['content_width'] = apply_filters( 'llanowar_content_width', 640 );
    // }
    // add_action( 'after_setup_theme', 'llanowar_content_width', 0 );
    // function llanowar_widgets_init() {
    // 	register_sidebar( array(
    // 		'name'          => esc_html__( 'Sidebar', 'llanowar' ),
    // 		'id'            => 'sidebar-1',
    // 		'description'   => esc_html__( 'Add widgets here.', 'llanowar' ),
    // 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    // 		'after_widget'  => '</section>',
    // 		'before_title'  => '<h2 class="widget-title">',
    // 		'after_title'   => '</h2>',
    // 	) );
    // }
    // add_action( 'widgets_init', 'llanowar_widgets_init' );


    //
    // require get_template_directory() . '/inc/custom-header.php';
    // require get_template_directory() . '/inc/template-tags.php';
    // require get_template_directory() . '/inc/template-functions.php';
    // require get_template_directory() . '/inc/customizer.php';
    // if ( defined( 'JETPACK__VERSION' ) ) {
    // 	require get_template_directory() . '/inc/jetpack.php';
    // }
}
?>
