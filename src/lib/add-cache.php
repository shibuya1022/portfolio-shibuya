<?php
/*
 ######  #####   ###### ##   ## #######
##      ##   ## ##      ##   ## ##
##      ####### ##      ####### #####
##      ##   ## ##      ##   ## ##
 ###### ##   ##  ###### ##   ## #######
*/
/*
$cache_name = '';  //キャッシュ名
$save_time  = 60 * 60 * 24;                 //保存期間（秒） 0で永続
$cache      = get_transient($cache_name);   //キャッシュ取得

if (false === $cache){  //キャッシュがなければ取得処理
    ob_start();  //出力結果を取得開始
    ?>

<?php
    $cache = ob_get_clean();  //出力結果を格納
    set_transient($cache_name, $cache, $save_time);  //キャッシュ生成　キャッシュ名,データ,保存時間
}
*/
