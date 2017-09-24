<?php
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

    /* 管理者 */
    // if ( !current_user_can( 'administrator' ) ) {}

    /* 編集者 */
    // if ( !current_user_can( 'editor' ) ) {}

    /* 投稿者 */
    // if ( !current_user_can( 'author' ) ) {}

    /* 寄稿者 */
    // if ( !current_user_can( 'contributor' ) ) {}

    /* 購読者 */
    // if ( !current_user_can( 'subscriber' ) ) {}

}

add_action('admin_menu', 'remove_menus');
?>
