<footer id="footer" class="footer" itemscope itemtype="http://schema.org/WPFooter">

    <div class="wrap w1200">
        <div class="data-area pc-flex bet break">
            <div class="left">
                <div class="logo">
                    <a href="<?php echo H_URL; ?>">
                        <div class="logo-part pc-flex vcenter">
                            MAKO-STYLE
                        </div>
                    </a>
                </div>
            </div>
            <div class="right">

                <ul class="link flex hend sp-break">
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
                    <li class="right--Txt v-none">
                        <a href="" target="">
                            <i class="icon-arrow"></i>
                            <div class="Bigtxt ta-center">Contact</div>
                            <div class="Minitxt ta-center">お問い合わせ</div>
                        </a>
                    </li>
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
