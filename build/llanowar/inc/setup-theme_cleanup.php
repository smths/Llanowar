<?php
/* サイト全体の投稿とコメントに関するRSSフィードへのリンクの非表示 */
remove_action('wp_head', 'feed_links', 2);

/*トップページ以外の場合のコメント、RSSフィードへのリンクの非表示 */
remove_action('wp_head', 'feed_links_extra', 3);

/* 外部ツールを使ってワードプレスを編集する際のリンクURLの非表示 */
remove_action('wp_head', 'rsd_link');

/* Windows Live Writerを使ってワードプレスを編集する際のリンクURLの非表示 */
remove_action('wp_head', 'wlwmanifest_link');

/* ?p=[投稿ID]という形式のデフォルトパーマリンクのURLの非表示 */
remove_action('wp_head', 'wp_shortlink_wp_head');

/* ワードプレスのバージョン出力の非表示 */
remove_action('wp_head', 'wp_generator');

/* ユニコード8.0絵文字用スクリプトの非表示 */
remove_action('wp_head', 'print_emoji_detection_script', 7);

/* ユニコード8.0絵文字用スタイルの非表示 */
remove_action('wp_print_styles', 'print_emoji_styles', 10);

/* 前後の記事URL(rel="next"、rel="prev")の非表示 */
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

/* rel="index"の非表示 */
//remove_action('wp_head', 'index_rel_link');

/* rel="up"の非表示 */
//remove_action('wp_head', 'parent_post_rel_link', 10, 0);

/* rel="strat"の非表示 */
//remove_action('wp_head', 'start_post_rel_link', 10, 0);

/* 他のウェブサイト「oEmbed」対応記事埋め込み用の非表示 */
//remove_action('wp_head', 'wp_oembed_add_discovery_links');

/* 他のウェブサイト「oEmbed」対応記事埋め込み用の非表示 */
//remove_action('wp_head', 'wp_oembed_add_host_js');

/* 他のウェブサイト「oEmbed」対応記事埋め込み用の非表示 */
//remove_action('wp_head', 'rest_output_link_wp_head');

/* URL正規化タグの非表示 */
//remove_action('wp_head', 'rel_canonical');

/* css,jsのバージョン表記を削除 */
add_filter('style_loader_src' , 'remove_ver_css_js', 9999);
add_filter('script_loader_src', 'remove_ver_css_js', 9999);
function remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) ){
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}

?>
