<?php
/*

 ######## ##     ##  ######  ######## ########  ########  ########
 ##         ## ##   ##       ##       ##     ## ##     ##    ##
 ######      ###    ##       ######   ########  ########     ##
 ##         ## ##   ##       ##       ##   ##   ##           ##
 ######## ##     ##  ######  ######## ##     ## ##           ##
 */
// 抜粋の長さを変更
function changeExcerptLength($length)
{
    $length = 350;
    return $length;
}
add_filter('excerpt_length', 'changeExcerptLength', 999);

// 抜粋の末尾を[...]から変更
function changeExcerptMore($more)
{
    $html = '...';
    return $html;
}
add_filter('excerpt_more', 'changeExcerptMore');


/*
 ########     ###    ########  ##     ##    ###    ##       #### ##    ## ##    ##
 ##     ##  ##   ##  ##     ## #### ####  ##   ##  ##        ##  ####  ## ##  ##
 ########  ##     ## ########  ## ### ## ##     ## ##        ##  ## ## ## #####
 ##        ######### ##   ##   ##     ## ######### ##        ##  ##  #### ##  ##
 ##        ##     ## ##     ## ##     ## ##     ## ######## #### ##    ## ##    ##
*/
if (!function_exists('get_the_permalink')) {// 旧バージョンで「get_the_permalink」が未定義なら定義する
    function get_the_permalink()
    {
        return get_permalink();
    }
}
