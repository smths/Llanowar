<?php

function custom_posts_taxonomy(){
    /* タクソノミーの登録 */
    $taxonomy_slug = 'taxonomy';
    $taxonomy_labels = 'タクソノミー';

    register_taxonomy(
        $taxonomy_slug,
        null,
        [
            'labels' => [
                'name' => $taxonomy_labels,
                'singular_name' => $taxonomy_labels
            ],
            'hierarchical' => true,
        ]
    );

    register_taxonomy_for_object_type( $taxonomy_slug, 'book' );
    register_taxonomy_for_object_type( $taxonomy_slug, 'event' );
}

/* カスタム投稿を追加 */
add_action('init', 'custom_posts_taxonomy', 1);

?>
