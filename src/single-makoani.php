<?php get_header();
$id_num = get_the_ID();
?>
<div class="l-contents l-single animeVer">
    <article class="l-main">
        <section>
            <div class="wrap w1200 sp-wrap">
                <div class="Contents">
                    <div class="pc-flex bet">
                        <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $postTitle = get_the_title(); ?>
                            <div class="Contents-wrap animeVer">
                                <div class="bgg">
                                    <div class="flex">
                                        <div class="date">
                                            <?php the_time('Y.m.d'); ?>
                                        </div>
                                        <div class="cate">
                                            マコアニ！
                                        </div>
                                    </div>
                                    <div class="Contents-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="Contents-title">
                                        <?php the_post_thumbnail("mainthumbnail"); ?>
                                    </div>
                                    <div class="sp-contents wp-post">
                                        <?php the_content(); ?>
                                    </div>

                                    <?php

  //#####  ##    ##  ######
 //#    ## ###   ## ##    ##
 //#       ####  ## ##
  //#####  ## ## ##  ######
       //# ##  ####       ##
 //#    ## ##   ### ##    ##
  //#####  ##    ##  ######
?>
                                        <?php
if (IS_HOME) {
    $sns_text = urlencode(get_bloginfo('name'));  //シェアテキスト　サイトタイトル
  $sns_url = H_URL;  //シェアURL　サイトURL
} else {
    $sns_text = urlencode(get_the_title() . '｜' . get_bloginfo('name'));  //シェアテキスト　個別記事タイトル
  $sns_url = get_the_permalink();  //シェアURL　個別記事
}
        $sns_hash = '';  //Twitterハッシュタグ?>
                                            <div class="sns-area ">
                                                <div class="flex bet">
                                                    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $sns_url; ?>&t=<?php echo $sns_text; ?>" class="sns facebook img"
                                                        target="_blank">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                    <a href="//twitter.com/intent/tweet?text=<?php echo $sns_text; ?>&url=<?php echo $sns_url; ?>&hashtags=<?php echo $sns_hash; ?>"
                                                        class="sns twitter img" target="_blank">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                    <a href="//lineit.line.me/share/ui?url=<?php echo $sns_url; ?>" class="sns line img" target="_blank">
                                                        <i class="icon-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <?php
    }
} wp_reset_postdata();
?>
                                <?php
require_once 'sidebar_anime.php';
?>
                    </div>
                    <!-- blog-base -->
                </div>
            </div>
        </section>
    </article>
</div>



<?php get_footer();
