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
                            <div class="adsClass ta-center">
                                <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=293&l=ur1&category=primevideo&banner=1JAAQZZG8E813PGD5282&f=ifr&linkID=e76f7ce6cc47dbf88552988c0f8577d7&t=makoblog046-22&tracking_id=makoblog046-22"
                                    width="640" height="100" class="pc" scrolling="no" border="0" marginwidth="0" style="border:none;"
                                    frameborder="0"></iframe>
                                <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=primevideo&banner=18NKS0GQCSFJGQWKBJ02&f=ifr&linkID=3a1623cc7485d780ff52e0a9aa91202c&t=makoblog046-22&tracking_id=makoblog046-22"
                                    width="300" height="250" class="sp" scrolling="no" border="0" marginwidth="0" style="border:none;"
                                    frameborder="0"></iframe>
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
