<?php
/*━━━━━━━━━━━━━━━
Smart Custom Fields フィールド定義
━━━━━━━━━━━━━━━*/
function scf_meta_box($settings, $post_type, $post_id)
{
    $slug = get_post($post_id)->post_name;	//スラッグ取得
    /*
        if (in_array($post_type, array('post')) && $slug === 'hoge') {  //メタボックスを追加する投稿タイプやスラッグの条件
            $Setting = SCF::add_setting('shop', 'カスタムフィールド');
            $Setting->add_group('shop', false, array(
                array('type'      => 'text', //テキスト
                    'name'        => 'shop',
                    'instruction' => '店舗名', //説明文
                    'notes'       => '', //注釈
                    'label'       => '', //nameの代替文字
                    'default'     => '',	//初期値
                ),
            ));
            $settings[] = $Setting;
        }
    */
    return $settings;
}
add_filter('smart-cf-register-fields', 'scf_meta_box', 10, 3);


/*
######  ## #######       ####### ######  ## ########  ######  ######
##   ## ## ##            ##      ##   ## ##    ##    ##    ## ##   ##
##   ## ## ####### ##### #####   ##   ## ##    ##    ##    ## ######
##   ## ##      ##       ##      ##   ## ##    ##    ##    ## ##   ##
######  ## #######       ####### ######  ##    ##     ######  ##   ##
*/

add_action('admin_enqueue_scripts', 'CSF_RemovePageEditor');	//指定固定ページの本文エディタ削除
function CSF_RemovePageEditor()
{
    $slug = get_post(get_the_ID())->post_name;
    if (strpos($slug, 'parts-') !== false) {	//本文エディタを削除するページ
        remove_post_type_support('page', 'editor');
    }
}

/*

    ###    ########  ########                ##  ######
  ##   ##  ##     ## ##     ##               ## ##
 ##     ## ##     ## ##     ## #######       ##  ######
 ######### ##     ## ##     ##         ##    ##       ##
 ##     ## ########  ########           ######   ######

*/
// add_action('admin_footer','SCF_JSPlus');	//入力改善用のJS追記　コメントアウトを外して有効化
function SCF_JSPlus()
{
    echo <<< 'EOF'
    <script type="text/javascript">
    jQuery(function($){
        $('[name="smart-custom-fields[hogehoge][0]"]').attr('type','number') // 指定フィールドをナンバー型に変換
    })
    </script>
EOF;
}



/*
####### ########  #####  ######## ##  ######
##         ##    ##   ##    ##    ## ##
#######    ##    #######    ##    ## ##
     ##    ##    ##   ##    ##    ## ##
#######    ##    ##   ##    ##    ##  ######
*/
/*━━━━━━━━━━━━━━━━━━━━━
基本編集不要エリア
━━━━━━━━━━━━━━━━━━━━━*/

/*
 ###### ####### #######
##      ##      ##
##      ####### #######
##           ##      ##
 ###### ####### #######
*/
add_action('admin_enqueue_scripts', 'SCF_CSSPlus');	//入力改善用のCSS/JS追記
function SCF_CSSPlus()
{
    echo <<<'STYLE'
<style>
.smart-cf-meta-box-table th{
    width: 5rem;
}
.mce-edit-area iframe{
}
.smart-cf-meta-box .smart-cf-upload-image img, .smart-cf-meta-box .smart-cf-upload-file img{
    max-width:30vw;
}
.smart-cf-meta-box .smart-cf-meta-box-table .smart-cf-relation-right
,.smart-cf-meta-box .smart-cf-meta-box-table .smart-cf-relation-left {
    width:auto;
    max-height:150px;
}
.smart-cf-meta-box .smart-cf-meta-box-table .smart-cf-relation-left .smart-cf-relation-children-select{
    height:260px;
}

.smart-cf-meta-box-repeat-tables{
    counter-reset:count-number;
}
.smart-cf-meta-box-repeat-tables .smart-cf-meta-box-table:before {
    counter-increment: count-number;
    content: counters(count-number,".") " ";
    display: inline-block;
}

.smart-cf-meta-box-table td:not(:hover) .smart-cf-upload-image img{
    background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAIElEQVQoU2NkYGDwZcAEm9GFGIeIQix+wfQgyDODXSEArboGjIsZJ6IAAAAASUVORK5CYII=);
}

input[value="hidden-dummy"]{
    display:none!important;
}
</style>
STYLE;
}
