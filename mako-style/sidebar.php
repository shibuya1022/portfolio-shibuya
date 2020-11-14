<div id="sidebar">
    <div class="blog-side">
        <div class="sp-wrap case-right">
            <?php
            /*
  ######  ########    ###    ########   ######  ##     ##
 ##    ## ##         ## ##   ##     ## ##    ## ##     ##
 ##       ##        ##   ##  ##     ## ##       ##     ##
  ######  ######   ##     ## ########  ##       #########
       ## ##       ######### ##   ##   ##       ##     ##
 ##    ## ##       ##     ## ##    ##  ##    ## ##     ##
  ######  ######## ##     ## ##     ##  ######  ##     ##
*/
            ?>
                <div class="blog-side__sec search">
                    <div class="blog-side__head">
                        <h2 class="key ta-center">キーワード検索</h2>
                    </div>
                    <div class="blog-side__list flex break">
                        <form class="blog-side__input" action="<?php echo H_URL; ?>" method="GET">
                            <input class="blog-side__input-text" type="text" name="s" id="" placeholder="">
                            <button class="blog-side__submit flex vcenter hcenter" type="submit">
                                <i class="icon-allow"></i>
                            </button>
                        </form>
                    </div>
                </div>



                <?php
        /*

          ######     ###    ########         ##       ####  ######  ########
         ##        ##   ##     ##            ##        ##  ##          ##
 ####### ##       ##     ##    ##    ####### ##        ##   ######     ##
         ##       #########    ##            ##        ##        ##    ##
          ######  ##     ##    ##            ######## ####  ######     ##

*/
        ?>
                    <div class="blog-side__sec catego-area">
                        <div class="blog-side__head">
                            <h2 class="title ta-center">カテゴリー</h2>
                        </div>
                        <div class="blog-side__list">
                            <?php
                $post_type = 'post';  //投稿タイプ
                $tax_name = 'category';  //タクソノミー名
                $tax_query = get_categories(array(
                    'type' => $post_type,  //投稿タイプ
                    'taxonomy' => $tax_name,  //対象タクソノミー
                    'parent' => 0,  //指定IDの子タームだけサーチ　0で親だけサーチ
                    'orderby' => '',
                    'order' => 'ASC',  //昇順
                    'hide_empty' => true,  //投稿がないタクソノミーを無視するか
                ));
                $count = 1;
                foreach ((array) $tax_query as $tax) {
                    $tax_link = get_term_link($tax->cat_ID, $tax_name);  //タームのリンクを取得
                    if (!$tax->parent) {
                ?>

                                <a class="blog-side__tag" href="<?php echo $tax_link; ?>">
                                    <span class="js-t8 line1">
                                        <?php echo $tax->name; ?>&nbsp;&nbsp;(
                                        <?php echo $tax->count; ?>&nbsp;)
                                    </span>
                                </a>
                                <?php ++$count;
                    }
                } ?>
                        </div>
                        <div class="blog-side__head popttl">
                            <h2 class="title ta-center">人気記事</h2>
                        </div>
                        <?php //WordPress Popular Postsが最適
            ?>
                        <div class="side-pop">
                            <?php
                if (function_exists('wpp_get_mostpopular')) {
                    wpp_get_mostpopular(array(
                        'limit' => 5,
                        'range' => 'last7days',
                        'thumbnail_width' => '100', //サムネイルの幅
                        'thumbnail_height' => '100', //サムネイルの高さ
                        'title_length' => '20', //サムネイルの高さ
                    ));
                }
                ?>
                        </div>
                        <div class="blog-side__head popttl">
                            <h2 class="title ta-center">人気なカテゴリー</h2>
                        </div>
                        <div>
                            <?php
                if (function_exists('wpp_get_mostpopular')) {
                    wpp_get_mostpopular(array(
                        'stats_category' => 1,
                        'post_html' => '<div>{category}</div>'
                    ));
                }
                ?>
                        </div>
                    </div>






                    <?php if (0) : //停止コード開始
        ?>
                    <?php
            /*
 ##     ##  #######  ##    ##         ##       ####  ######  ########
 #### #### ##     ## ####  ##         ##        ##  ##          ##
 ## ### ## ##     ## ## ## ## ####### ##        ##   ######     ##
 ##     ## ##     ## ##  ####         ##        ##        ##    ##
 ##     ##  #######  ##    ##         ######## ####  ######     ##
*/
            ?>
                        <div class="blog-side__sec tag-area">
                            <div class="blog-side__head">
                                <h2 class="sp-ta-center">タグ</h2>
                            </div>
                            <div class="blog-side__list flex break">
                                <?php
                    $post_type = 'post';  //投稿タイプ
                    $tax_name = 'post_tag';  //タクソノミー名
                    $tax_query = get_categories(array(
                        'type' => $post_type,  //投稿タイプ
                        'taxonomy' => $tax_name,  //対象タクソノミー
                        'parent' => 0,  //指定IDの子タームだけサーチ　0で親だけサーチ
                        'orderby' => '',
                        'order' => 'ASC',  //昇順
                        'hide_empty' => false,  //投稿がないタクソノミーを無視するか
                    ));
                    $count = 1;
                    foreach ((array) $tax_query as $tax) {
                        $tax_link = get_term_link($tax->cat_ID, $tax_name);  //タームのリンクを取得
                        if (!$tax->parent) {
                    ?>
                                    <a class="blog-side__tag" href="<?php echo $tax_link; ?>">
                                        <?php echo $tax->name; ?> (
                                        <?php echo $tax->count; ?>)
                                    </a>
                                    <?php ++$count;
                        }
                    } ?>
                            </div>
                        </div>
                        <?php endif; //停止コード終了
        ?>
        </div>
        <!-- blog-side -->
    </div>
</div>
