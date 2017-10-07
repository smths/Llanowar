<?php
if ( ! function_exists( 'setup_theme' ) ) {

    function setup_theme() {

        /* theme_suportの追加 */
        require_once get_template_directory() . '/inc/setup-theme_theme-support.php';

        /* 管理画面整理 */
        require_once get_template_directory() . '/inc/setup-theme_admin_menu.php';

        /* css,js読み込み */
        require_once get_template_directory() . '/inc/setup-theme_load-style-script.php';

        /* 不要なコード除去 */
        require_once get_template_directory() . '/inc/setup-theme_cleanup.php';

        /* その他設定 */
        require_once get_template_directory() . '/inc/setup-theme_other.php';

    }

    add_action( 'after_setup_theme', 'setup_theme' );
}


?>
