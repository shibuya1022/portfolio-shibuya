<footer id="footer" class="footer" itemscope itemtype="http://schema.org/WPFooter">


    <div class="wrap w1200 sp-wrap">
        <div class="data-area flex bet sp-break">
            <div class="left">
                <div class="logo">
                    <a href="<?php echo H_URL; ?>">
                        <div class="logo-part flex vcenter">
                            MAKO-STYLE
                        </div>
                    </a>
                </div>
                <div class="pc tel">
                    <p class="text">お電話でのお問合わせ</p>
                    <p class="no">0000000000</p>
                    <p class="note">(土日・祝日も面接可能)</p>
                </div>
            </div>
            <div class="right">

                <ul class="link flex hend">
                    <li>
                        <a href="" target="">会社概要</a>
                    </li>
                    <li>
                        <a href="" target="">個人情報保護法について</a>
                    </li>
                    <li>
                        <a href="" target="_blank">コーポレートサイト</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <div class="wrap w1200 sp-wrap">
            &copy;
            <span itemprop="copyrightYear">2020</span>
            <span itemprop="copyrightHolder name">会社名会社名会社名会社名</span>
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
