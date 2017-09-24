<?php
/* デフォルトの投稿の削除 */
add_action('admin_menu', function () { remove_menu_page('edit.php'); });


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
                'slug' => $post_slug . '/category',
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
                'slug' => $post_slug . '/tag',
            ],
        ]
    );
}

/* デフォルトの投稿をカスタムポストとして再定義 */
add_action('init', 'custom_posts_default', 1);

?>
