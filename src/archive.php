<?php $cat_id = get_query_var('cat'); ?>
<?php //先ほど取得したカテゴリーIDをget_category()に渡す
$cat_name = get_category($cat_id);
$cat_slug = $cat_name->slug; ?>
<?php get_header(); ?>
<div class="l-contents l-archive">
    <article class="l-main">
        <section class="MV">
            <div class="wrap w1200">
                <div class="MV-swiper__container swiper-container">
                    <?php
    $MV_query = array(  //クエリー初期設定
        'post_type' => 'post',          //投稿タイプ
        'post_status' => 'publish',        //公開済みの記事
        'posts_per_page' => 4,            //出力数　-1で全件
        'order' => 'DESC',          //降順ソート
        'orderby' => 'date ID',          //投稿日でソート
        'paged' => get_query_var('paged'),  //ページ番号を考慮
        'tax_query' => array(), // タクソノミークエリー
    );
    $queryArrayCount = 0;
if (!empty($cat_slug)) {
    $MV_query['tax_query'][++$queryArrayCount] = array(
        'taxonomy' => 'category', // タクソノミー名
        'field' => 'slug', // 検索種別
        // 'field'    => 'term_id', // 検索種別
        // 'field'    => 'name', // 検索種別
        'terms' => $cat_slug, // 値
        'operator' => 'IN', // 値（配列）で指定した何れかに一致
        // 'operator' => 'NOT IN', // 含めない
    );
}
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
                                                <?php the_post_thumbnail('mainthumbnail'); ?>
                                            </div>
                                            <div class="swiper-slide--wrap__Txtarea">
                                                <div class="swiper-slide--wrap__ttl">
                                                    <span class="js-t8 line2">
                                                        <?php the_title(); ?>
                                                    </span>
                                                </div>
                                                <div class="swiper-slide--wrap__txt">
                                                    <span class="js-t8 line4 pc">
                                                        <?php echo wp_trim_words(get_the_content(), 999, '…' ); ?>
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
        </section>
        <section class="Contents">
            <div class="wrap w1200 sp-wrap">
                <div class="pc-flex bet">
                    <div class="Contents-wrap">

                        <div class="Contents-padding">
                            <?php
                            if($cat_name) { ?>
                                <div class="ta-center cateName">
                                    <?php echo $cat_name->cat_name;
                                ?>の記事
                                </div>
                                <?php }  ?>
                                <div class="pc-flex bet break">
                                    <?php
                        $tax_name = 'category';  //タクソノミー名
    $index_query = array(  //クエリー初期設定
        'post_type' => 'post',          //投稿タイプ
        'post_status' => 'publish',        //公開済みの記事
        'posts_per_page' => 20,            //出力数　-1で全件
        'order' => 'DESC',          //降順ソート
        'orderby' => 'date ID',          //投稿日でソート
        'paged' => get_query_var('paged'),  //ページ番号を考慮
        'tax_query' => array(), // タクソノミークエリー
    );
    // タクソノミークエリー追加
if (is_category()) {
    $index_query['tax_query'][0] = array(

        'taxonomy' => $tax_name,  //対象タクソノミー
        'field' => 'term_id',
        'terms' => $cat_id,

    );
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
<?php get_footer();?>
