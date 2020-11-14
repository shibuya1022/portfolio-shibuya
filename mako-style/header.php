<!DOCTYPE html>
<html lang="ja" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php global $aioseop_options; //All In One SEO Packのホーム設定取得?>
    <?php if (!get_post_meta($post->ID, '_aioseop_description', true)) { //ページディスクリプションがない場合はホームディスクリプション出力?>
    <meta name="description" itemprop="description" content="<?php echo $aioseop_options['aiosp_home_description']; ?>">
    <?php } ?>
    <?php if (!get_post_meta($post->ID, '_aioseop_keywords', true)) { //ページキーワードがない場合はホームキーワード出力?>
    <meta name="keywords" itemprop="keywords" content="<?php echo $aioseop_options['aiosp_home_keywords']; ?>">
    <?php } ?>
    <?php if (is_archive()) { // アーカイブの場合はOGPタグを自力で生成 画像はAll in One SEO Pack のデフォルト画像を要設定?>
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>" />
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); echo SITE_NAME; ?>" />
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); echo SITE_NAME; ?>" />
    <meta name="twitter:domain" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
    <meta property="og:url" content="<?php echo(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"
    />
    <meta property="og:image" content="<?php echo $aioseop_options['modules']['aiosp_opengraph_options']['aiosp_opengraph_dimg']; ?>"
    />
    <meta name="twitter:image" content="<?php echo $aioseop_options['modules']['aiosp_opengraph_options']['aiosp_opengraph_dimg']; ?>"
    />
    <meta itemprop="image" content="<?php echo $aioseop_options['modules']['aiosp_opengraph_options']['aiosp_opengraph_dimg']; ?>"
    />
    <meta property="og:type" content="article" />
    <meta name="twitter:card" content="summary_large_image" />
    <?php } ?>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php wp_title('|', true, 'right'); echo SITE_NAME; ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo T_URL; ?>css/common.css?v<?php echo filemtime(T_PATH . 'css/common.css'); ?>"
    />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap" rel="stylesheet" media="print"
        onload="this.media='all'">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#000000">
</head>

<body <?php body_class(); ?>>
    <div id="overlay" class="md-overlay"></div>
    <header id="header" class="header" itemscope="" itemtype="https://schema.org/WPHeader">

        <div class="header__frame">
            <div class="header__base flex bet str">
                <div class="header__left flex vcenter">
                    <a class="header__logo flex vcenter" href="<?php echo H_URL; ?>">
                        <h1 class="header__logo-text">MAKO-STYLE</h1>
                    </a>
                </div>
                <div class="header__right flex">
                    <div class="pc header__nav flex">
                        <div class="pulldown">
                            <span class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    Profile
                                    <span class="pulldown__head__mini">プロフィール</span>
                                </div>
                            </span>
                        </div>
                        <div class="pulldown">
                            <span class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    Contact
                                    <span class="pulldown__head__mini">お問い合わせ</span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div id="sp-menu-open" class="sp spMenuBtn">
                        <div class="spMenuBtn__box">
                            <span class="spMenuBtn__bar"></span>
                            <span class="spMenuBtn__bar"></span>
                            <span class="spMenuBtn__bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <nav id="sp-menu" class="spNav" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
        <ul class="spNav__list">
            <li class="spNav__box">
                <div class="md-acc">
                    <input id="sp-menu-1" class="acc-check" type="checkbox" value="" />
                    <label for="sp-menu-1" class="acc-btn spNav__item flex vcenter hcenter">
                        アコーディオン1
                    </label>
                    <div class="acc-body">
                        <div class="acc-in">
                            <a href="" class="acc-hide spNav__item spNav__item--sub flex vcenter hcenter">
                                テキスト1
                            </a>
                            <a href="" class="acc-hide spNav__item spNav__item--sub flex vcenter hcenter">
                                テキスト2
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="spNav__box">
                <div class="md-acc">
                    <input id="sp-menu-2" class="acc-check" type="checkbox" value="" />
                    <label for="sp-menu-2" class="acc-btn spNav__item flex vcenter hcenter">
                        アコーディオン2
                        <i class="icon spNav__icon icon-down"></i>
                    </label>
                    <div class="acc-body">
                        <div class="acc-in">
                            <a href="" class="acc-hide spNav__item spNav__item--sub flex vcenter hcenter">
                                テキスト3
                            </a>
                            <a href="" class="acc-hide spNav__item spNav__item--sub flex vcenter hcenter">
                                テキスト4
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>about/" class="spNav__item flex vcenter hcenter">
                    リンク1
                </a>
            </li>
        </ul>
    </nav>
    <!--
        codepen.io by Yusuke Nakaya
         https://codepen.io/YusukeNakaya/
        -->
    <?php
if (($_COOKIE['opFlag'] !== '1')) { ?>

        <div class="OpAnime" id="Op--Animetion">
            <div class="OpAnime-wrap">
                <div class="OpAnime--ttl">
                    MAKO-STYLE
                    <i class="OpAnime-icon icon-cloud icon"></i>
                    <i class="OpAnime-icon -no2 icon-cloud icon"></i>
                    <div class="truck">
                        <i class="icon-truck icon"></i>
                        <i class="icon-smoke icon"></i>
                    </div>
                </div>

            </div>
        </div>
        <?php } ?>