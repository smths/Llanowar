<?php
/* テーマ設定ページの内容 */
function theme_setting_form(){
?>
<div class="wrap">
    <h2>テーマ設定</h2>
    <form method="post" action="">
        <?php wp_nonce_field( '6uEJgxYBkWjNvQHiKcqD', 'theme_setting' ); ?>
        <?php $admin_setting = get_option('theme_setting'); ?>
        <table>
            <tbody>
                <tr>
                    <th><label for="value_1">設定値1</label></th>
                    <td><input type="text" id="value_1" name="value_1" value="<?php echo esc_attr( $admin_setting['value_1'] ); ?>"></td>
                </tr>
            </tbody>
        </table>
        <p><input type="submit" class="button button-primary button-large" value="保存"></p>
    </form>
</div>
<?php
}

function theme_setting_save(){
    /* nonceチェック */
    if( ! isset($_POST['theme_setting']) ){ return ;}
    if( ! $_POST['theme_setting'] ){ return ;}
    if( ! check_admin_referer( '6uEJgxYBkWjNvQHiKcqD', 'theme_setting' ) ){ return ;}

    $theme_setting = array();

    /* 値のチェック・格納 */
    if( isset($_POST['value_1']) && $_POST['value_1'] ){
        $theme_setting['value_1'] = $_POST['value_1'];
    }else{
        $theme_setting['value_1'] = '';
    }

    /* DB保存 */
    update_option( 'theme_setting', $theme_setting );

    /* リダイレクト */
    wp_safe_redirect( menu_page_url( 'theme_setting', false ) );
}


function theme_setting_page(){
    $setting_page_title = 'テーマ設定';
    $setting_page_menu_title = 'テーマ設定';
    $setting_page_capability = 'manage_options';
    $setting_page_menu_slug = 'theme_setting';


    /* ---- サブメニュー作成 ---- */

    // /* ダッシュボードに追加 */
    // add_dashboard_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* 投稿に追加 */
    // add_posts_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* メディアに追加 */
    // add_media_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* リンクに追加 */
    // add_links_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* 固定ページに追加 */
    // add_pages_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* コメントに追加 */
    // add_comments_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* 外観に追加 */
    // add_theme_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* プラグインに追加 */
    // add_plugins_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* ユーザに追加 */
    // add_users_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );
    //
    // /* ツールに追加 */
    // add_management_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );

    /* 設定に追加 */
    add_options_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );

    // /* 特定トップレベルページに追加 */
    // $parent_menu_slug = '';
    // add_submenu_page( $parent_menu_slug, $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form' );



    /* ---- トップレベルメニュー作成 ---- */

    // $setting_page_icon = '';
    // $setting_page_position = 5;
    // add_menu_page( $setting_page_title, $setting_page_menu_title, $setting_page_capability, $setting_page_menu_slug, 'theme_setting_form', $setting_page_icon, $setting_page_position );

}


/* テーマ設定ページ作成 */
add_action( 'admin_menu', 'theme_setting_page' );

/* テーマ設定ページのデータ保存処理 */
add_action( 'admin_init', 'theme_setting_save' );

// add_action( 'admin_notices', array( $this, 'output_notices') );


?>
