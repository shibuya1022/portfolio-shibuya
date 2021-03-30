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
                                        <div class="pc-flex bet singleV">
                                            <div class="btn pc">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CR186Q+3GWO+614CX" rel="nofollow">
                                                    <img border="0" width="300" height="250" alt="" src="https://www25.a8.net/svt/bgt?aid=210120848771&wid=001&eno=01&mid=s00000016188001013000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3H3MA8+CR186Q+3GWO+614CX" alt="">
                                            </div>
                                            <div class="btn pc">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA6+CR186Q+0K+10YDIP" rel="nofollow">
                                                    <img border="0" width="300" height="250" alt="" src="https://www20.a8.net/svt/bgt?aid=210120846771&wid=001&eno=01&mid=s00000000002006207000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3H3MA6+CR186Q+0K+10YDIP" alt="">
                                            </div>
                                            <div class="sp">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3MA8+CR186Q+3GWO+61JSH" rel="nofollow">
                                                    <img border="0" width="250" height="250" alt="" src="https://www27.a8.net/svt/bgt?aid=210120848771&wid=001&eno=01&mid=s00000016188001015000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3H3MA8+CR186Q+3GWO+61JSH" alt="">
                                            </div>
                                        </div>
                                        <div class="singleVrakuten pc">

                                            <a href="https://rpx.a8.net/svt/ejp?a8mat=3H3MA6+CRMNSI+2HOM+631SX&rakuten=y&a8ejpredirect=http%3A%2F%2Fhb.afl.rakuten.co.jp%2Fhgc%2F0ea62065.34400275.0ea62066.204f04c0%2Fa21012035155_3H3MA6_CRMNSI_2HOM_631SX%3Fpc%3Dhttp%253A%252F%252Fwww.rakuten.co.jp%252F%26m%3Dhttp%253A%252F%252Fm.rakuten.co.jp%252F"
                                                rel="nofollow">
                                                <img src="http://hbb.afl.rakuten.co.jp/hsb/0eb4bbdc.be4daa89.0eb4bbaa.95151395/" border="0">
                                            </a>
                                            <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3H3MA6+CRMNSI+2HOM+631SX" alt="">

                                        </div>
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
