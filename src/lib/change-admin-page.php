<?php
/*==============================
左メニュー削除
==============================*/
function remove_menu()
{
    remove_menu_page('edit-comments.php'); //コメント
}
add_action('admin_menu', 'remove_menu');

/*==============================
左メニュー並び替え
==============================*/
function custom_menu_order($menu_ord)
{
    if (!$menu_ord) {
        return true;
    }
    return array(
        'index.php', //ダッシュボード
        'edit.php', //投稿
        'edit.php?post_type=', //カスタム投稿
        'edit.php?post_type=page', //固定ページ
        'upload.php', //メディア
        'edit-comments.php', //コメント
        'separator2', //仕切り
        'themes.php', //外観
        'plugins.php', //プラグイン
        'users.php', //ユーザー
        'admin.php?page=all-in-one-seo-pack/aioseop_class.php', //All in One SEO Pack
        'tools.php', //ツール
        'options-general.php', //設定
        'separator-last', //仕切り
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

/*
  ######   #######  ##       ##     ## ##     ## ##    ##
 ##    ## ##     ## ##       ##     ## ###   ### ###   ##
 ##       ##     ## ##       ##     ## #### #### ####  ##
 ##       ##     ## ##       ##     ## ## ### ## ## ## ##
 ##       ##     ## ##       ##     ## ##     ## ##  ####
 ##    ## ##     ## ##       ##     ## ##     ## ##   ###
  ######   #######  ########  #######  ##     ## ##    ##
*/
/*
            ###    ########  ########
           ## ##   ##     ## ##     ##
          ##   ##  ##     ## ##     ##
 ####### ##     ## ##     ## ##     ##
         ######### ##     ## ##     ##
         ##     ## ##     ## ##     ##
         ##     ## ########  ########
*/
function addAdminColumnSpace($columns)
{
    $columns['slug'] = 'スラッグ';
    return $columns;
}
function addAdminColumnVal($column_name, $post_id)
{
    // カラムに値を設定
    if ($column_name === 'slug') {
        $slug = get_post($post_id) -> post_name;
        echo attribute_escape($slug);
    }
}
add_filter('manage_pages_columns', 'addAdminColumnSpace');
add_action('manage_pages_custom_column', 'addAdminColumnVal', 10, 2);


// カスタム投稿用
// function addAdminColumnSpace_○○($columns)
// {
//     $columns['slug'] = '型番';
//     return $columns;
// }

// add_filter('manage_edit-○○_columns', 'addAdminColumnSpace_○○');
// add_action('manage_posts_custom_column', 'addAdminColumnVal', 10, 2);


/*
         ########  ######## ##
         ##     ## ##       ##
         ##     ## ##       ##
 ####### ##     ## ######   ##
         ##     ## ##       ##
         ##     ## ##       ##
         ########  ######## ########
*/
// 固定ページ一覧の不要カラムを削除
function pageColumnsDel($columns)
{
    unset($columns['author'], $columns['comments'], $columns['date']);
    return $columns;
}
add_filter('manage_pages_columns', 'pageColumnsDel');


/*==============================
テーマ編集にJS追加
==============================*/
add_filter('wp_theme_editor_filetypes', function ($default_types) {
    $default_types[] = 'js';
    return $default_types;
});

/*==============================
フッター変更
==============================*/
function custom_admin_footer()
{
    echo '';
}
add_filter('admin_footer_text', 'custom_admin_footer');
