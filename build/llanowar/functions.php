<?php

/* ---- 初期設定 ---- */
require_once get_template_directory() . '/inc/setup-theme.php';


/* ---- 投稿 ---- */

/* "投稿"を"お知らせ"に変更 */
require_once get_template_directory() . '/inc/custom-posts-default.php';

/* カスタム投稿"ブック"作成 */
require_once get_template_directory() . '/inc/custom-posts-book.php';

/* カスタム投稿"イベント"作成 */
require_once get_template_directory() . '/inc/custom-posts-event.php';

/* カスタムタクソノミー作成 */
require_once get_template_directory() . '/inc/custom-posts-taxonomy.php';

/* ---- 管理画面 ---- */

/* テーマ設定ページ作成 */
require_once get_template_directory() . '/inc/admin-page-theme-setting.php';



/* ---- その他 ---- */

?>
