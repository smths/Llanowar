<?php
/* ---- デフォルトの投稿の削除 ---- */
add_action( 'admin_menu', function () { remove_menu_page('edit.php'); } );

/* ---- デフォルトの投稿をカスタムポストとして再定義 ---- */
function custom_posts_default(){
    $post_label = 'お知らせ';
    $post_slug = 'infomation';

    /* カスタムポストの定義 */
    register_post_type('post', [
        'labels' => [
            'name' => $post_label,
            'singular_name' => $post_label
        ],
        'public' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => $post_slug,
        ],
    ]);

    /* categoryの定義 */
    register_taxonomy(
        'category',
        'post',
        [
            'hierarchical' => true,
            'rewrite' => [
                'slug' => $post_slug . 's' . '/category',
            ],
        ]
    );

    /* tagの定義 */
    register_taxonomy(
        'post_tag',
        'post',
        [
            'hierarchical' => false,
            'query_var' => 'tag',
            'rewrite' => [
                'slug' => $post_slug . 's' . '/tag',
            ],
        ]
    );
}

add_action( 'init', 'custom_posts_default', 1 );



/* ---- メインループ変更 ---- */
// function pre_get_posts_default( $query ) {
//
//     if ( is_admin() || ! $query->is_main_query() ){ return; }
//
//     /* アーカイブページ */
//     if ( $query->is_archive() ) {
//
//         /* 取得する記事のタイプを投稿のみにする(固定ページやカスタム投稿タイプを除外する) */
//         $query->set( 'post_type','post' );
//
//         /* 件数の制限 */
//         $query->set( 'posts_per_page', 15 );
//
//     }
//
//
//     /* ---- 条件分岐タグ ---- */
//
//     // /* TOPページ */
//     // $query->is_home()
//
//     // /* 固定ページ */
//     // $query->is_page()
//
//     // /* 詳細ページ */
//     // $query->is_single()
//
//     // /* アーカイブページ */
//     // $query->is_archive()
//
//     // /* カスタム投稿タイプアーカイブページ カスタム投稿タイプを入れてください */
//     // $query->is_post_type_archive( 'post_type' )
//
//     // /* 日付アーカイブページ */
//     // $query->is_date()
//
//     // /* 年別アーカイブページ */
//     // $query->is_year()
//
//     // /* 月別アーカイブページ */
//     // $query->is_month()
//
//     // /* 制作者アーカイブページ */
//     // $query->is_author()
//
//     // /* カテゴリーページ */
//     // $query->is_category()
//
//     // /* カテゴリーページ 配列での指定(カテゴリID3,カテゴリスラッグfoo,カテゴリ名Bar barのいずれか) */
//     // $query->is_category( array(3,'foo','Bar bar') )
//
//     // /* タグページ */
//     // $query->is_tag()
//
//     // /* タクソノミーページ */
//     // $query->is_tax()
//
//     // /* タクソノミーページ fooというスラッグのタクソノミーアーカイブが表示された時*/
//     // $query->is_tax( 'foo' )
//
//     // /* タクソノミーページ bar1,bar2のスラッグがfooタクソノミーアーカイブで表示された時 */
//     // $query->is_tax( 'foo', array('bar1','bar2') )
//
//     // /* 検索結果ページ */
//     // $query->is_search()
//
//     // /* フィードページ */
//     // $query->is_feed()
//
//     // /* 404ページ */
//     // $query->is_404()
//
// }
//
// add_action( 'pre_get_posts', 'pre_get_posts_default' );

?>
