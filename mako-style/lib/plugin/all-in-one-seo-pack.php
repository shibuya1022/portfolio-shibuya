<?php
// All in One SEO Packの出力書き換え
// プラグインがサポートしていないアーカイブページの対応や、特定ページのみ独自処理でメタ情報を生成したい場合に使用
/*
 ######## #### ######## ##       ########
    ##     ##     ##    ##       ##
    ##     ##     ##    ##       ######
    ##     ##     ##    ##       ##
    ##    ####    ##    ######## ########
*/

// function aioseopChangeTitle($title)
// {
//     if (is_page('hoge')) {
//         $title = 'hogehoge | ' .  SITE_NAME;
//     }
//     if (is_singular('hoge')) {
//         $title = 'hogehoge | ' .  SITE_NAME;
//     }
//     return $title;
// }
// add_filter('aioseop_title', 'aioseopChangeTitle');

/*
 ########  ########  ######   ######
 ##     ## ##       ##       ##
 ##     ## ######    ######  ##
 ##     ## ##             ## ##
 ########  ########  ######   ######
*/
// function aioseopChangeDescription($description)
// {
//     if (is_category()) {
//         $description = '';
//     } elseif (is_date()) {
//         $description = '';
//     } elseif (is_archive()) {
//         $description = '';
//     }
//     return $description;
// }
// add_filter('aioseop_description', 'aioseopChangeDescription');

/*
  #######   ######
 ##     ## ##
 ##     ## ##   ####
 ##     ## ##    ##
  #######   ######
*/
/**
 * $value 値
 * $type twitterもしくはog titleなどのフィールドは名前が被っているので、それを区別したい場合使用する
 * $field card,description,thumbnail,site_name,title,url
 */
// function aioseopChangeOG($value, $type, $field)
// {
//     if (IS_HOME && $type === 'twitter' && $field === 'title') {
//         $value = 'TOPページでTwitterカードのタイトルだけ変える例';
//     }
//     return $value;
// }
// add_filter('aiosp_opengraph_meta', 'aioseopChangeOG', 10, 5);
