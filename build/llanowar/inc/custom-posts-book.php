<?php
function custom_posts_book(){
    $post_label = 'ブック';
    $post_slug = 'book';

    /* カスタム投稿の定義 */
    register_post_type($post_slug, [
        'labels' => [
            'name' => $post_label,
            'singular_name' => $post_label
        ],
        'public' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
    ]);
}

/* カスタム投稿を追加 */
add_action('init', 'custom_posts_book', 1);

?>
