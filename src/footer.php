<footer id="footer" class="footer <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>" itemscope
    itemtype="http://schema.org/WPFooter">

    <div class="wrap w1200">
        <div class="data-area pc-flex bet break">
            <div class="left">
                <div class="logo <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>">
                    <a href="<?php echo H_URL; ?><?php if(is_page('mako-anime') || is_singular('makoani')){ ?>mako-anime/<?php } ?>">
                        <div class="logo-part pc-flex vcenter">
                            <?php if(is_page('mako-anime')){ ?>MAKO-ANIME
                            <?php }else { ?>MAKO-BLOG
                            <?php   } ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="right">

                <ul class="link flex hend sp-break">
                    <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>
                    <li class="right--Txt animeVer">
                        <a href="<?php echo H_URL; ?>" target="" class="animeVer">
                            <i class="icon-arrow animeVer"></i>
                            <div class="Bigtxt ta-center">PROGRAMMING</div>
                            <div class="Minitxt ta-center">プログラミングサイト</div>
                        </a>
                    </li>
                    <?php }else { ?>
                    <li class="right--Txt">
                        <a href="<?php echo H_URL; ?>hobby/" target="">
                            <i class="icon-arrow"></i>
                            <div class="Bigtxt ta-center">HOBBY</div>
                            <div class="Minitxt ta-center">シュミ</div>
                        </a>
                    </li>
                    <li class="right--Txt">
                        <a href="<?php echo H_URL; ?>skill/" target="">
                            <i class="icon-arrow"></i>
                            <div class="Bigtxt ta-center">SKILL</div>
                            <div class="Minitxt ta-center">スキル</div>
                        </a>
                    </li>
                    <li class="right--Txt">
                        <a href="<?php echo H_URL; ?>profile/" target="">
                            <i class="icon-arrow"></i>
                            <div class="Bigtxt ta-center">Profile</div>
                            <div class="Minitxt ta-center">プロフィール</div>
                        </a>
                    </li>
                    <li class="right--Txt">
                        <a href="<?php echo H_URL; ?>mako-anime/" target="">
                            <i class="icon-arrow"></i>
                            <div class="Bigtxt ta-center">ANIME</div>
                            <div class="Minitxt ta-center">アニメサイト</div>
                        </a>
                    </li>
                    <?php   } ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <div class="wrap w1200 sp-wrap">
            Copyright&copy;
            <span itemprop="copyrightYear">2020</span>
            <span class="footer__copy--Sitename">マコブログ</span>
            <span itemprop="copyrightHolder name"> All Rights Reserved.</span>
        </div>
    </div>
</footer>
<script>
    {
        var tUrl = '<?php echo T_URL; ?>'
    }
</script>
<script src="<?php echo T_URL; ?>js/lib.min.js?v=<?php echo filemtime(T_PATH . 'js/lib.min.js'); ?>"></script>
<script src="<?php echo T_URL; ?>js/main.min.js?v=<?php echo filemtime(T_PATH . 'js/main.min.js'); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>
