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
        'paged' => get_query_var('paged'),  //ページ番号を考慮
    );
    $MV_query = new WP_Query($MV_query);
?>

                            <div class="swiper-wrapper">
                                <?php if ($MV_query->have_posts()) { ?>
                                <?php  while ($MV_query->have_posts()) {
    $MV_query->the_post(); ?>


                                <div class="swiper-slide">
                                    <div class="swiper-slide--wrap">
                                        <div class="flex">
                                            <div class="swiper-slide--wrap__imgClass">
                                                <?php the_post_thumbnail('mainthumbnail'); ?>
                                            </div>
                                            <div class="swiper-slide--wrap__Txtarea">
                                                <div class="swiper-slide--wrap__ttl">
                                                    <?php the_title(); ?>
                                                </div>
                                                <div class="swiper-slide--wrap__txt">
                                                    <?php echo wp_trim_words(get_the_content(), 100, '…' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            <div class="wrap w1200">
                <div class="flex bet">
                    <div class="Contents-wrap">
                        <div class="Contents-padding flex bet break">
                            <?php
    $index_query = array(  //クエリー初期設定
        'post_type' => 'post',          //投稿タイプ
        'post_status' => 'publish',        //公開済みの記事
        'posts_per_page' => 15,            //出力数　-1で全件
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
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="article__miniTxt">
                                            <?php echo wp_trim_words(get_the_content(), 66, '…' );
                                        ?>
                                        </div>
                                    </div>
                                </a>
                                <?php }}else { ?> ねーよ
                                <?php  } ?>
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
<?php get_footer();
