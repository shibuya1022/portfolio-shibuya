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
    <!-- 当サイトはFreepik-jp.freepik.comの画像を使用しています。
当サイトはpexels.comの画像を使用しています。 -->
    <div id="overlay" class="md-overlay <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>"></div>
    <header id="header" class="header" itemscope="" itemtype="https://schema.org/WPHeader">

        <div class="header__frame <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>">
            <div class="header__base flex bet str">
                <div class="header__left flex vcenter">
                    <a class="header__logo flex vcenter" href="<?php echo H_URL; ?><?php if(is_page('mako-anime') || is_singular('makoani')){ ?>mako-anime/<?php } ?>">
                        <h1 class="header__logo-text">
                            <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>MAKO-ANIME
                            <?php }else { ?>MAKO-BLOG
                            <?php   } ?>
                        </h1>
                    </a>
                </div>
                <div class="header__right flex">
                    <div class="pc header__nav flex">
                        <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>
                        <div class="pulldown">
                            <a href="<?php echo H_URL; ?>" class="md-uline pulldown__head flex vcenter hcenter animeVer">
                                <div class="pulldown__head-Txt">
                                    PROGRAMMING
                                    <span class="pulldown__head__mini">プログラミングサイト</span>
                                </div>
                            </a>
                        </div>
                        <?php }else { ?>
                        <div class="pulldown">
                            <a href="<?php echo H_URL; ?>hobby/" class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    HOBBY
                                    <span class="pulldown__head__mini">シュミ</span>
                                </div>
                            </a>
                        </div>
                        <div class="pulldown">
                            <a href="<?php echo H_URL; ?>skill/" class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    SKILL
                                    <span class="pulldown__head__mini">スキル</span>
                                </div>
                            </a>
                        </div>
                        <div class="pulldown">
                            <a href="<?php echo H_URL; ?>profile/" class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    Profile
                                    <span class="pulldown__head__mini">プロフィール</span>
                                </div>
                            </a>
                        </div>
                        <div class="pulldown">
                            <a href="<?php echo H_URL; ?>mako-anime/" class="md-uline pulldown__head flex vcenter hcenter">
                                <div class="pulldown__head-Txt">
                                    ANIME
                                    <span class="pulldown__head__mini">アニメサイト</span>
                                </div>
                            </a>
                        </div>
                        <?php   } ?>

                    </div>
                    <div id="sp-menu-open" class="sp spMenuBtn <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>">
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


    <nav id="sp-menu" class="spNav <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>animeVer<?php } ?>" itemscope=""
        itemtype="https://schema.org/SiteNavigationElement">
        <ul class="spNav__list">

            <?php if(is_page('mako-anime') || is_singular('makoani')){ ?>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>" class="spNav__item flex vcenter hcenter">
                    PROGRAMMING
                    <span class="pulldown__head__mini">プログラミングサイト</span>
                    <i class="icon-allow"></i>
                </a>
            </li>
            <?php }else { ?>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>hobby/" class="spNav__item flex vcenter hcenter">
                    HOBBY
                    <span class="pulldown__head__mini">シュミ</span>
                    <i class="icon-allow"></i>
                </a>
            </li>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>skill/" class="spNav__item flex vcenter hcenter">
                    SKILL
                    <span class="pulldown__head__mini">スキル</span>
                    <i class="icon-allow"></i>
                </a>
            </li>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>profile/" class="spNav__item flex vcenter hcenter">
                    Profile
                    <span class="pulldown__head__mini">プロフィール</span>
                    <i class="icon-allow"></i>
                </a>
            </li>
            <li class="spNav__box">
                <a href="<?php echo H_URL; ?>mako-anime/" class="spNav__item flex vcenter hcenter">
                    ANIME
                    <span class="pulldown__head__mini">アニメサイト</span>
                    <i class="icon-allow"></i>
                </a>
            </li>
            <?php } ?>

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
