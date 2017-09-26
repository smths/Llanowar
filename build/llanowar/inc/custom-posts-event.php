<?php
function custom_posts_event(){
    $post_label = 'イベント';
    $post_slug = 'event';

    /* カスタム投稿の定義 */
    register_post_type($post_slug, [

        /* 管理画面ラベル */
        'labels' => [
            'name' => $post_label,
            'singular_name' => $post_label
        ],

        /* 投稿タイプの管理画面、フロントエンドでの使用可否 */
        'public' => true,

        /* 権限 */
        'capability_type' => 'post',

        /* アーカイブの可否 */
        'has_archive' => true,

        /* 階層保持の可否(trueの場合固定ページと同様親を持てる※supportsでpage-attributesを設定する必要あり) */
        'hierarchical' => true,

        /* URL書き換え */
        // 'rewrite' => [
        //     'slug' => 'books/book',
        // ],

        /* 表示・非表示および表示箇所 */
        // 'show_in_menu' => 'edit.php?post_type=page',

        /* 管理バーへの表示・非表示 */
        // 'show_in_admin_bar' => false,

        /* アイコン */
        // 'menu_icon' => get_stylesheet_directory_uri() . '/img/icon/book.png',

        /* 表示位置 */
        // 'menu_position' => 5,

        /* 編集画面表示項目 */
        // 'supports' => array(
        //     'title',
        //     'editor',
        //     'author',
        //     'thumbnail',
        //     'excerpt',
        //     'trackbacks',
        //     'custom-fields',
        //     'comments',
        //     'revisions',
        //     'page-attributes',
        //     'post-formats'
        // )
    ]);
}

/* カスタム投稿を追加 */
add_action('init', 'custom_posts_event', 1);

?>
