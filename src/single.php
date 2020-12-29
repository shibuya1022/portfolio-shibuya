<?php get_header();
$id_num = get_the_ID();
?>
<div class="l-contents l-single">
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
                            <div class="Contents-wrap">
                                <div class="bgg">
                                    <div class="flex">
                                        <div class="date">
                                            <?php the_time('Y.m.d'); ?>
                                        </div>
                                        <div class="cate">
                                            <?php $cat = get_the_category(); ?>
                                            <?php $cat_name  = $cat[0]->cat_name; ?>
                                            <?php echo $cat_name; ?>
                                        </div>
                                    </div>
                                    <div class="Contents-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="sp-contents wp-post">
                                        <?php the_content(); ?>
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
require_once 'sidebar.php';
?>
                    </div>
                    <!-- blog-base -->
                </div>
            </div>
        </section>
    </article>
</div>



<?php get_footer();
