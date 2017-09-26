<?php
/* ---- 管理画面メニュー整理 ---- */
function remove_menus () {

    /* ---- 確認用 ---- */

    // global $submenu;
    // var_dump($submenu);


    /* ---- 不要項目の非表示 ---- */

    /* ダッシュボード */
    // remove_menu_page( 'index.php' );

    /* 投稿 */
    // remove_menu_page( 'edit.php' );

    /* カスタム投稿(インフォメーション) */
    // remove_menu_page( 'edit.php?post_type=info' );

    /* メディア */
    // remove_menu_page( 'upload.php' );

    /* 固定ページ */
    // remove_menu_page( 'edit.php?post_type=page' );

    /* コメント */
    remove_menu_page( 'edit-comments.php' );

    /* 外観 */
    // remove_menu_page( 'themes.php' );

    /* プラグイン */
    // remove_menu_page( 'plugins.php' );

    /* ユーザー */
    // remove_menu_page( 'users.php' );

    /* ツール */
    // remove_menu_page( 'tools.php' );

    /* 設定 */
    // remove_menu_page( 'options-general.php' );


    /* ---- 条件分岐 ---- */

    /* 管理者以外 */
    if ( !current_user_can( 'administrator' ) ) {

        /* ツール */
        remove_menu_page( 'tools.php' );

        /* contact form 7 */
        remove_menu_page( 'wpcf7' );

    }

    /* 編集者以外 */
    // if ( !current_user_can( 'editor' ) ) {}

    /* 投稿者以外 */
    // if ( !current_user_can( 'author' ) ) {}

    /* 寄稿者以外 */
    // if ( !current_user_can( 'contributor' ) ) {}

    /* 購読者以外 */
    // if ( !current_user_can( 'subscriber' ) ) {}

}

add_action( 'admin_menu', 'remove_menus' );



/* ---- 管理画面ヘッダバー整理 ---- */
function remove_admin_bar_menu( $wp_admin_bar ) {

    /* WordPressロゴ */
    // $wp_admin_bar->remove_menu('wp-logo');

    /* WordPressロゴ -> Wordpressについて */
    // $wp_admin_bar->remove_menu('about');

    /* WordPressロゴ -> Wordpress.org */
    // $wp_admin_bar->remove_menu('wporg');

    /* WordPressロゴ -> ドキュメンテーション */
    // $wp_admin_bar->remove_menu('documentation');

    /* WordPressロゴ -> サポートフォーラム */
    // $wp_admin_bar->remove_menu('support-forums');

    /* WordPressロゴ -> フィードバック */
    // $wp_admin_bar->remove_menu('feedback');


    /* サイト名 */
	// $wp_admin_bar->remove_menu('site-name');

    /* サイト名 -> サイトを表示 */
	// $wp_admin_bar->remove_menu('view-site');


    /* 更新 */
	// $wp_admin_bar->remove_menu('updates');


    /* コメント */
	$wp_admin_bar->remove_menu('comments');


    /* 新規 */
	// $wp_admin_bar->remove_menu('new-content');

    /* 新規 -> 投稿 */
	// $wp_admin_bar->remove_menu('new-post');

    /* 新規 -> メディア */
	// $wp_admin_bar->remove_menu('new-media');

    /* 新規 -> 固定ページ */
	// $wp_admin_bar->remove_menu('new-page');

    /* 新規 -> ユーザー */
	// $wp_admin_bar->remove_menu('new-user');


    /* マイアカウント */
	// $wp_admin_bar->remove_menu('my-account');

    /* マイアカウント -> プロフィール */
	// $wp_admin_bar->remove_menu('user-info');

    /* マイアカウント -> プロフィール編集 */
	// $wp_admin_bar->remove_menu('edit-profile');

    /* マイアカウント -> ログアウト */
	// $wp_admin_bar->remove_menu('logout');

}

add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 201 );

?>
