<?php get_header(); ?>

<div class="l-contents l-top">
    <article class="l-main">
        <section class="MV">
            <div class="wrap w1200">
                <div class="MV__swiper">
                    <div class="MV-swiper__container swiper-container">
                        <?php
    $MV_query = array(  //クエリー初期設定
        'post_type' => 'post',          //投稿タイプ
        'post_status' => 'publish',        //公開済みの記事
        'posts_per_page' => 4,            //出力数　-1で全件
        'order' => 'DESC',          //降順ソート
        'orderby' => 'date ID',          //投稿日でソート
    );
    $MV_query = new WP_Query($MV_query);
?>

                            <div class="swiper-wrapper">
                                <?php if ($MV_query->have_posts()) { ?>
                                <?php  while ($MV_query->have_posts()) {
    $MV_query->the_post(); ?>


                                <div class="swiper-slide">
                                    <a class="article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="swiper-slide--wrap">
                                            <div class="pc-flex">
                                                <div class="swiper-slide--wrap__imgClass">
                                                    <?php $imgBox = get_the_post_thumbnail();
                                                if($imgBox){
                                                    the_post_thumbnail('mainthumbnail');
                                                }else { ?>
                                                    <img width="400" height="280" src="<?php echo T_URL; ?>img/empty-ver.png" alt="">
                                                    <?php  }
                                                ?>
                                                </div>
                                                <div class="swiper-slide--wrap__Txtarea">
                                                    <div class="swiper-slide--wrap__ttl">
                                                        <span class="js-t8 line2">
                                                            <?php the_title(); ?>
                                                        </span>
                                                    </div>
                                                    <div class="swiper-slide--wrap__txt">
                                                        <span class="js-t8 line4 pc">
                                                            <?php echo wp_trim_words(get_the_content(), 150, '…' ); ?>
                                                        </span>
                                                        <span class="js-t8 line3 sp">
                                                            <?php echo wp_trim_words(get_the_content(), 150, '…' ); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php }} ?>
                            </div>


                            <div class="wrap w1200">
                                <div class="nav__area">
                                    <div class="MV-swiper-button-next swiper-button-next">
                                        <i class="icon icon-next"></i>
                                    </div>
                                    <div class="MV-fra flex vcenter hcenter">
                                        <div class="MV-swiper-pagination swiper-pagination"></div>
                                    </div>
                                    <div class="MV-swiper-button-prev swiper-button-prev">
                                        <i class="icon icon-prev"></i>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Contents">
            <div class="wrap w1200 sp-wrap">
                <div class="pc-flex bet">
                    <div class="Contents-wrap">
                        <div class="Contents-padding">
                            <div class="pc-flex bet break">
                                <div class="article TOPver">
                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA6+CS83EA+50+2HP601" rel="nofollow">
                                        <div class="article-down">
                                            <div class="article__imgClass">
                                                <img border="0" width="336" height="280" alt="" src="https://www27.a8.net/svt/bgt?aid=210120846773&wid=001&eno=01&mid=s00000000018015066000&mc=1">
                                            </div>
                                            <div class="article__txtClass">
                                                <span class="js-t8 line2">
                                                    ブログを始めるなら、まずはドメインの取得から!!
                                                </span>
                                            </div>
                                            <div class="article__miniTxt">
                                                <span class="js-t8 line2">
                                                    ドメイン登録料金が国内最安値!!ドメインは早い者勝ち!!お好きなドメインを取得しましょう!!
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=3H3MA6+CS83EA+50+2HP601" alt="">
                                </div>
                                <div class="article TOPver pc">
                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA6+CR186Q+0K+118NW1" rel="nofollow">
                                        <div class="article-down">
                                            <div class="article__imgClass">
                                                <img border="0" width="336" height="280" alt="" src="https://www27.a8.net/svt/bgt?aid=210120846771&wid=001&eno=01&mid=s00000000002006255000&mc=1">
                                            </div>
                                            <div class="article__txtClass">
                                                <span class="js-t8 line2">
                                                    審査なしアフィリエイトで収入を得るならA8.net！(登録無料)
                                                </span>
                                            </div>
                                            <div class="article__miniTxt">
                                                <span class="js-t8 line2">
                                                    広告主・登録サイト数が日本最大級のアフィリエイトを始めてみませんか？
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <img border="0" width="1" height="1" src="https://www15.a8.net/0.gif?a8mat=3H3MA6+CR186Q+0K+118NW1" alt="">
                                </div>
                                <?php
    $index_query = array(  //クエリー初期設定
        'post_type' => 'post',          //投稿タイプ
        'post_status' => 'publish',        //公開済みの記事
        'posts_per_page' => 20,            //出力数　-1で全件
        'order' => 'DESC',          //降順ソート
        'orderby' => 'date ID',          //投稿日でソート
        'paged' => get_query_var('paged'),  //ページ番号を考慮
    );
    if (is_search()) {
        $index_query['s'] = htmlspecialchars($_GET['s']); // タクソノミークエリー
    }
    $index_query = new WP_Query($index_query);
?>
                                    <?php if ($index_query->have_posts()) { ?>
                                    <?php  while ($index_query->have_posts()) {
    $index_query->the_post(); ?>
                                    <a class="article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="article-down">
                                            <div class="article__imgClass">
                                                <?php the_post_thumbnail('mainthumbnail'); ?>
                                            </div>
                                            <div class="article__txtClass">
                                                <span class="js-t8 line2">
                                                    <?php the_title(); ?>
                                                </span>
                                            </div>
                                            <div class="article__miniTxt">
                                                <span class="js-t8 line2">
                                                    <?php echo wp_trim_words(get_the_content(), 66, '…' );
                                        ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <?php }}else { ?>
                                    <div class="sorryTxt">申し訳ありません。
                                        <br>ご希望の記事が見つかりませんでした。</div>
                                    <?php  } ?>
                                    <div class="article sp">
                                        <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA6+CR186Q+0K+118NW1" rel="nofollow">
                                            <div class="article-down">
                                                <div class="article__imgClass">
                                                    <img border="0" width="336" height="280" alt="" src="https://www27.a8.net/svt/bgt?aid=210120846771&wid=001&eno=01&mid=s00000000002006255000&mc=1">
                                                </div>
                                                <div class="article__txtClass">
                                                    <span class="js-t8 line2">
                                                        審査なしアフィリエイトで収入を得るならA8.net！(登録無料)
                                                    </span>
                                                </div>
                                                <div class="article__miniTxt">
                                                    <span class="js-t8 line2">
                                                        広告主・登録サイト数が日本最大級のアフィリエイトを始めてみませんか？
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <img border="0" width="1" height="1" src="https://www15.a8.net/0.gif?a8mat=3H3MA6+CR186Q+0K+118NW1" alt="">
                                    </div>
                            </div>
                            <?php
/*
 ########     ###     ######   ######## ########
 ##     ##   ## ##   ##    ##  ##       ##     ##
 ##     ##  ##   ##  ##        ##       ##     ##
 ########  ##     ## ##   #### ######   ########
 ##        ######### ##    ##  ##       ##   ##
 ##        ##     ## ##    ##  ##       ##    ##
 ##        ##     ##  ######   ######## ##     ##
*/
?>
                                <?php
                    flex_pager(array(
                        'query' => $index_query, //使用クエリー
                        'range' => 1, //カレントからのページボタン数　指定数*2+1が総数
                        'current_format' => '<span class="active flex vcenter hcenter minib">%d</span>',  //カレントボタンのレイアウト
                        'prev_next' => false, //戻る/進むボタン
                        'edge_pn' => false, //ページ末端側の戻る/進むボタンを表示するか
                        'prev_label' => '≪', //戻るボタンテキスト
                        'next_label' => '≫', //進むボタンテキスト
                        'first_last' => false, //最初/最後ボタン
                        'first_last_no' => true, //最初/最後ナンバー
                        'edge_fl' => true, //ページ末端側の最初/最後ボタンを表示するか
                        'first_label' => '<i class="icon icon-double-left" ></i>',  //最初ボタンテキスト
                        'last_label' => '<i class="icon icon-double-right"></i>',  //最後ボタンテキスト
                        'op_left' => '', //左側オプション　%d（現ページ）%d（総ページ）
                        'op_right' => '', //右側オプション　%d（現ページ）%d（総ページ）
                        'navi_class' => 'flex-pager flex vcenter hcenter oswald', //ナビのクラス スペース区切りで複数指定
                        'navi_id' => '', //ナビのID
                        'child_class' => 'flex vcenter hcenter minib', //子要素のクラス
                        'navi_type' => 'div', //ナビのタイプ
                        'child_wrap' => '', //子要素を括る要素
                        'cw_class' => '', //child_wrapのクラス
                        'cw_cu_class' => '', //child_wrapのカレントボタンクラス
                        'off_class' => 'off', //edgeオプションで表示している要素のクラス wrap有効時はそちらに付加
                        'echo' => true, //出力するか、値で返すか
                        'attr' => '', // Aタグに任意の属性を追加
                    )); ?>

                        </div>
                    </div>

                    <?php
require_once 'sidebar.php';
?>

                </div>
            </div>

        </section>
    </article>
</div>
<?php get_footer(); ?>
