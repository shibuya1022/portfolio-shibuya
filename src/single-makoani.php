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
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+T69F6+4MD6+614CX" rel="nofollow">
                                                    <img border="0" width="300" height="250" alt="" src="https://www24.a8.net/svt/bgt?aid=210129984049&wid=001&eno=01&mid=s00000021561001013000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=3H3TC0+T69F6+4MD6+614CX" alt="">
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
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+APTO2+4IOO+601S1" rel="nofollow">
                                                    <img border="0" width="300" height="250" alt="" src="https://www28.a8.net/svt/bgt?aid=210129984018&wid=001&eno=01&mid=s00000021084001008000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3H3TC0+APTO2+4IOO+601S1" alt="">
                                            </div>
                                            <div class="sp">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=3H3TC0+APTO2+4IOO+5ZEMP" rel="nofollow">
                                                    <img border="0" width="120" height="60" alt="" src="https://www22.a8.net/svt/bgt?aid=210129984018&wid=001&eno=01&mid=s00000021084001005000&mc=1">
                                                </a>
                                                <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3H3TC0+APTO2+4IOO+5ZEMP" alt="">
                                            </div>
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
