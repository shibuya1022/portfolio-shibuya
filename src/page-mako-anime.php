<?php get_header(); ?>

<div class="l-contents l-anime">
    <article class="l-main">
        <section class="MV">
            <div class="wrap w1200">
                <div class="MV__swiper">
                    <div class="MV-swiper__container swiper-container">
                        <?php
    $MV_query = array(  //クエリー初期設定
        'post_type' => 'makoani',          //投稿タイプ
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
                                                            <?php echo get_post_type_archive_link( 'anime' ); ?>
                                                        </span>
                                                    </div>
                                                    <div class="swiper-slide--wrap__txt">
                                                        <span class="js-t8 line4 pc">
                                                            <?php echo wp_trim_words(get_the_content(), 150, '…' ); ?>
                                                        </span>
                                                        <span class="js-t8 line2 sp">
                                                            <?php echo wp_trim_words(get_the_content(), 100, '…' ); ?>
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
                            <div class="ta-center adsTOP1">
                                <div class="pc">
                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CULTTE+4ADS+5Z6WX" rel="nofollow">
                                        <img border="0" width="728" height="90" alt="" src="https://www20.a8.net/svt/bgt?aid=210120848777&wid=001&eno=01&mid=s00000020008001004000&mc=1">
                                    </a>
                                    <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3H3MA8+CULTTE+4ADS+5Z6WX" alt="">
                                </div>
                                <div class="sp">
                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CULTTE+4ADS+61JSH" rel="nofollow">
                                        <img border="0" width="300" height="250" alt="" src="https://www25.a8.net/svt/bgt?aid=210120848777&wid=001&eno=01&mid=s00000020008001015000&mc=1">
                                    </a>
                                    <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3H3MA8+CULTTE+4ADS+61JSH" alt="">
                                </div>
                            </div>
                            <div class="flex hcenter adsTOP2">
                                <div>
                                    <div class="pc">
                                        <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CWZK8I+2GMK+ZT0BL" rel="nofollow">
                                            <img border="0" width="468" height="60" alt="" src="https://www28.a8.net/svt/bgt?aid=210120848781&wid=001&eno=01&mid=s00000011486006014000&mc=1">
                                        </a>
                                        <img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3H3MA8+CWZK8I+2GMK+ZT0BL" alt="">
                                    </div>
                                    <div class="sp">
                                        <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CWZK8I+2GMK+ZTNGX" rel="nofollow">
                                            <img border="0" width="120" height="60" alt="" src="https://www21.a8.net/svt/bgt?aid=210120848781&wid=001&eno=01&mid=s00000011486006017000&mc=1">
                                        </a>
                                        <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3H3MA8+CWZK8I+2GMK+ZTNGX" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="pc">
                                        <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+APTO2+4IOO+609HT" rel="nofollow">
                                            <img border="0" width="234" height="60" alt="" src="https://www25.a8.net/svt/bgt?aid=210129984018&wid=001&eno=01&mid=s00000021084001009000&mc=1">
                                        </a>
                                        <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3H3TC0+APTO2+4IOO+609HT" alt="">
                                    </div>
                                    <div class="sp">
                                        <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+APTO2+4IOO+5ZEMP" rel="nofollow">
                                            <img border="0" width="120" height="60" alt="" src="https://www22.a8.net/svt/bgt?aid=210129984018&wid=001&eno=01&mid=s00000021084001005000&mc=1">
                                        </a>
                                        <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3H3TC0+APTO2+4IOO+5ZEMP" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pc-flex bet break">
                                <?php
    $index_query = array(  //クエリー初期設定
        'post_type' => 'makoani',          //投稿タイプ
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
                        'prev_label' => '≪前へ', //戻るボタンテキスト
                        'next_label' => '次へ≫', //進むボタンテキスト
                        'first_last' => false, //最初/最後ボタン
                        'first_last_no' => true, //最初/最後ナンバー
                        'edge_fl' => false, //ページ末端側の最初/最後ボタンを表示するか
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
                                    <div class="adsClass ta-center">
                                        <div class="adsTOP3">
                                            <div class="pc">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+VJZUA+2D8M+NVWSH" rel="nofollow">
                                                    <img border="0" width="793" height="140" alt="" src="https://www21.a8.net/svt/bgt?aid=210129984053&wid=001&eno=01&mid=s00000011047004012000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3H3TC0+VJZUA+2D8M+NVWSH" alt="">
                                            </div>
                                            <div class="sp">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+VJZUA+2D8M+NV1XD" rel="nofollow">
                                                    <img border="0" width="300" height="250" alt="" src="https://www29.a8.net/svt/bgt?aid=210129984053&wid=001&eno=01&mid=s00000011047004008000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3H3TC0+VJZUA+2D8M+NV1XD" alt="">
                                            </div>
                                        </div>


                                        <div class="flex hcenter">
                                            <div>
                                                <div class="pc">
                                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+UYK8I+279M+C6YGX" rel="nofollow">
                                                        <img border="0" width="468" height="60" alt="" src="https://www27.a8.net/svt/bgt?aid=210129984052&wid=001&eno=01&mid=s00000010273002048000&mc=1">
                                                    </a>
                                                    <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3H3TC0+UYK8I+279M+C6YGX" alt="">
                                                </div>
                                                <div class="sp">
                                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+UYK8I+279M+C7LM9" rel="nofollow">
                                                        <img border="0" width="120" height="60" alt="" src="https://www26.a8.net/svt/bgt?aid=210129984052&wid=001&eno=01&mid=s00000010273002051000&mc=1">
                                                    </a>
                                                    <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3H3TC0+UYK8I+279M+C7LM9" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="pc">
                                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+T69F6+4MD6+62MDD" rel="nofollow">
                                                        <img border="0" width="234" height="60" alt="" src="https://www23.a8.net/svt/bgt?aid=210129984049&wid=001&eno=01&mid=s00000021561001020000&mc=1">
                                                    </a>
                                                    <img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3H3TC0+T69F6+4MD6+62MDD" alt="">
                                                </div>
                                                <div class="sp">
                                                    <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+T69F6+4MD6+62ENL" rel="nofollow">
                                                        <img border="0" width="120" height="60" alt="" src="https://www20.a8.net/svt/bgt?aid=210129984049&wid=001&eno=01&mid=s00000021561001019000&mc=1">
                                                    </a>
                                                    <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3H3TC0+T69F6+4MD6+62ENL" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    <?php
require_once 'sidebar_anime.php';
?>

                </div>
            </div>

        </section>
    </article>
</div>
<?php get_footer(); ?>
