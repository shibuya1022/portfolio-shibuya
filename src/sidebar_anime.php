<div id="sidebar">
    <div class="blog-side animeVer">
        <div class="sp-wrap case-right">


            <div class="blog-side__head popttl">
                <h2 class="title ta-center animeVer">人気記事</h2>
            </div>
            <?php //WordPress Popular Postsが最適
            ?>
            <div class="side-pop">
                <?php
                if (function_exists('wpp_get_mostpopular')) {
                    wpp_get_mostpopular(array(
                        'post_type' => "makoani",  //投稿タイプ
                        'limit' => 30,
                        'range' => 'all',
                        'thumbnail_width' => '100', //サムネイルの幅
                        'thumbnail_height' => '100', //サムネイルの高さ
                        'title_length' => '100', //サムネイルの高さ
                        'post_html' => '<li class="animeVer"><div class="thumbimg">{thumb}</div><div class="js-t8 line3">{title}</div><a href="{url}" class="viewTxt">詳しく見る →</a></li>'
                    ));
                }
                ?>
            </div>

        </div>
        <div class="adsClass ta-center">
            <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=14&l=ur1&category=primevideo&banner=159G7XECNT6V0W7AXR02&f=ifr&linkID=7dd72383ab13ddfacb18aa9b9e8fe942&t=makoblog046-22&tracking_id=makoblog046-22"
                width="160" height="600" class="pc" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
            <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=primevideo&banner=0N84Z260P2YWJ45V2G82&f=ifr&linkID=291c177fd56b96f87872ff08020c6e97&t=makoblog046-22&tracking_id=makoblog046-22"
                width="300" height="250" class="sp" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
        </div>
    </div>
    <!-- blog-side -->
</div>
</div>
