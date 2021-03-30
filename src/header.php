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
    <script data-ad-client="ca-pub-6413508424972973" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                    <svg id="makoblog_OP" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 363.28 48.74">

                        <path class="cls-1" d="M72.07,111.6c-.37-6.55-.8-14.52-.75-20.35h-.2c-1.62,5.47-3.58,11.42-5.93,17.89L56.85,132h-4.6l-7.69-22.47c-2.25-6.67-4.08-12.72-5.4-18.31H39c-.16,5.88-.47,13.73-.93,20.82l-1.25,20.26H31l3.28-47.2h7.79l8,22.85c1.94,5.77,3.52,11,4.75,15.9h.18c1.24-4.79,2.89-10,5-15.9l8.42-22.85h7.79l2.93,47.2h-6Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M96.2,117.49l-4.88,14.84H85l16-47.2h7.33l16.12,47.2H118l-5-14.84Zm15.49-4.76L107,99.15c-1-3.09-1.73-5.9-2.43-8.61h-.16c-.68,2.76-1.42,5.64-2.34,8.52l-4.65,13.67Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M131.39,85.13h6.09v22.75h.22c1.24-1.83,2.55-3.48,3.73-5l14.41-17.73h7.55l-17.07,20.06,18.42,27.14h-7.22L142,109.18l-4.53,5.17v18h-6.09Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M209.7,108.26c0,16.19-9.86,24.84-21.9,24.84-12.51,0-21.21-9.69-21.21-24,0-15,9.26-24.78,21.86-24.78C201.33,84.36,209.7,94.23,209.7,108.26ZM173,109c0,10.1,5.48,19.14,15.1,19.14s15.12-8.89,15.12-19.62c0-9.39-4.91-19.2-15-19.2S173,98.68,173,109Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M231.67,111.14v4.52H214.38v-4.52Z" transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M239.08,85.78a56.92,56.92,0,0,1,11.13-1c6.12,0,10,1,13,3.43a10,10,0,0,1,3.94,8.36c0,4.56-3,8.57-8,10.33v.19c4.5,1.08,9.75,4.78,9.75,11.84a12.38,12.38,0,0,1-4,9.4c-3.25,3.05-8.56,4.43-16.29,4.43a83.42,83.42,0,0,1-9.47-.52Zm6.09,19.33h5.59c6.38,0,10.16-3.39,10.16-8,0-5.47-4.15-7.68-10.32-7.68a24.9,24.9,0,0,0-5.43.43Zm0,22.58a28.28,28.28,0,0,0,5.14.31c6.33,0,12.14-2.32,12.14-9.19,0-6.41-5.55-9.1-12.21-9.11h-5.07Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M277,85.13h6.13v42.05h20.18v5.15H277Z" transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M350.44,108.26c0,16.19-9.86,24.84-21.9,24.84-12.51,0-21.21-9.69-21.21-24,0-15,9.26-24.78,21.86-24.78C342.07,84.36,350.44,94.23,350.44,108.26Zm-36.66.74c0,10.1,5.48,19.14,15.1,19.14S344,119.25,344,108.52c0-9.39-4.91-19.2-15.05-19.2S313.78,98.68,313.78,109Z"
                            transform="translate(-31.02 -84.36)" />
                        <path class="cls-1" d="M394.3,130.21a43,43,0,0,1-14.51,2.59c-7.16,0-13.06-1.81-17.65-6.24-4.07-3.91-6.57-10.18-6.56-17.52,0-14.08,9.7-24.38,25.51-24.38a29.9,29.9,0,0,1,11.81,2.16l-1.53,5a24.09,24.09,0,0,0-10.42-2c-11.45,0-19,7.13-19,19s7.18,19,18.22,19c4,0,6.69-.56,8.1-1.27V112.43h-9.55v-4.87H394.3Z"
                            transform="translate(-31.02 -84.36)" />
                    </svg>
                    <svg id="makoblog_OPJP" data-name="makoblog_OPTTL2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 324.69 60.23">
                        <path class="cls-1 JP" d="M54.68,85.39a5.08,5.08,0,0,0,2.46,2.37,12.25,12.25,0,0,0,4.54.64q3.1,0,15.84-.51l1.26-.07,14.07-.65a4.22,4.22,0,0,1,.55,0,8.35,8.35,0,0,0,4.18-1.52,3.43,3.43,0,0,1,1.84-.71c1,0,1.93.83,2.92,2.49a7.65,7.65,0,0,1,1.26,3.73c0,.67-.55,1.25-1.65,1.75a8.39,8.39,0,0,0-2.72,2.36,136.74,136.74,0,0,1-9.62,9.85,108.37,108.37,0,0,1-8.91,7.62A46.18,46.18,0,0,1,87,119.19a7.32,7.32,0,0,1,1.65,4.11,3.85,3.85,0,0,1-.65,2.33,2.48,2.48,0,0,1-2.1,1.1A2.22,2.22,0,0,1,84,126a12.68,12.68,0,0,1-1.46-2.53,41.28,41.28,0,0,0-5.8-8,58.4,58.4,0,0,0-13.25-11.21l1.78-2a73.61,73.61,0,0,1,13.35,8.62,94.43,94.43,0,0,0,14.68-16,32.38,32.38,0,0,0,3-5l-1.69.1Q78.42,91,70.62,91.87a70.37,70.37,0,0,0-8,1.2,14.86,14.86,0,0,1-3.46.52,5.81,5.81,0,0,1-4.41-2.4,9.19,9.19,0,0,1-2-4.21Z"
                            transform="translate(-52.7 -70.84)" fill="#231815" />
                        <path class="cls-1 JP" d="M127.48,84.32a4.86,4.86,0,0,0,2,2.21,8.93,8.93,0,0,0,3.76.61q1.62,0,10.5-.52,7.45-.42,11.79-.45a6.87,6.87,0,0,0,3.79-1.07,5.08,5.08,0,0,1,2.24-1,2.14,2.14,0,0,1,1.59.78c2,2.07,2.94,3.72,2.94,4.93A2.67,2.67,0,0,1,165,91.61a4.5,4.5,0,0,0-1.39,2.79q-1,7.32-1.85,22.48Q165,118,165,120a2,2,0,0,1-1.07,1.72,4.16,4.16,0,0,1-2,.45c-.43,0-1.34-.06-2.72-.19-.91-.09-1.93-.13-3-.13q-16,0-23.39,1.94a9.45,9.45,0,0,1-2.27.39q-4,0-6.12-6.64l2-1.81a6,6,0,0,0,3.08,3,11.48,11.48,0,0,0,4,.55q2.1,0,7-.2l6.42-.22c4.15-.15,7.64-.31,10.5-.46l1.91-29.25-1.33.09-8.94.62q-9.08.65-10.86.91a38.63,38.63,0,0,0-4.24.81,15,15,0,0,1-2.76.55,5.22,5.22,0,0,1-3.46-1.79,8.3,8.3,0,0,1-2-4.11Z"
                            transform="translate(-52.7 -70.84)" fill="#231815" />
                        <path class="cls-1 JP" d="M189.82,84c.71,2,2.64,3,5.77,3q2.46,0,14.12-.81l10-.74,3.24-.23a9.16,9.16,0,0,0,4.6-1.62,2.18,2.18,0,0,1,1.23-.39c.78,0,1.81.81,3.11,2.43a6.63,6.63,0,0,1,1.72,4.09,2.46,2.46,0,0,1-1.36,1.94,5.05,5.05,0,0,0-1.85,2.17l-.68,1.62q-6.42,15.78-17.37,24.82a59,59,0,0,1-17.49,9.91l-1.72-2.2a66.23,66.23,0,0,0,15.1-9.1,50.53,50.53,0,0,0,11.47-13.64,67.27,67.27,0,0,0,6.93-17.11l-2.14.19Q204.35,90.32,201,90.8a21.82,21.82,0,0,0-4.83,1.3,5.91,5.91,0,0,1-2.3.52,5,5,0,0,1-4.21-2.4,11.61,11.61,0,0,1-2-4.57Zm39-9.24A18.42,18.42,0,0,1,234.76,78c1.84,1.56,2.75,3.17,2.75,4.83a2.58,2.58,0,0,1-.87,2.11,2.2,2.2,0,0,1-1.33.45,2,2,0,0,1-1.91-1.13,11.19,11.19,0,0,1-.39-1.14,11.61,11.61,0,0,0-5.57-6.7Zm6.9-3.4a19.21,19.21,0,0,1,5.93,3.24q2.76,2.34,2.76,4.83a2.58,2.58,0,0,1-.88,2.11,2.2,2.2,0,0,1-1.33.45,2,2,0,0,1-1.91-1.13q-.09-.19-.39-1.14a11.47,11.47,0,0,0-5.57-6.67Z"
                            transform="translate(-52.7 -70.84)" fill="#231815" />
                        <path class="cls-1 JP" d="M254.1,83.51a4.85,4.85,0,0,1,1.92-.39,8.55,8.55,0,0,1,4.34,1.33,4.91,4.91,0,0,1,2.36,2.79q5.92-.3,14.06-.81Q283,86,286,85.91l3.86-.19c.15,0,.38,0,.68,0a6.06,6.06,0,0,0,3.79-1.29,2.56,2.56,0,0,1,1.68-.68c.8,0,1.83.88,3.08,2.65a6.71,6.71,0,0,1,1.49,3.5,2.25,2.25,0,0,1-1.26,1.82A3,3,0,0,0,298,94q-.45,2.85-2.46,20.51l-.2,1.91c2.08.95,3.11,1.95,3.11,3a1.64,1.64,0,0,1-.89,1.43,4.26,4.26,0,0,1-2.25.55c-.37,0-.86,0-1.49-.07-2.9-.15-5.56-.23-8-.23q-8.1,0-22.55.75c0,.65.06,1.09.06,1.33,0,2-.63,3-1.88,3a3.07,3.07,0,0,1-2.43-1.52,4.92,4.92,0,0,1-1-3,10.14,10.14,0,0,1,.19-1.88,9.65,9.65,0,0,0,.13-1.79q0-12.27-1-25.2-.33-4.19-1.33-5.54a3.73,3.73,0,0,0-3-1.36Zm39.34,5.19-3.5.19q-18.15,1-28.29,1.72.47,7.8,1,19.34l.36,7,.06,1.46,4.54-.2,9-.42,7.16-.32,6-.26,1.46,0Z"
                            transform="translate(-52.7 -70.84)" fill="#231815" />
                        <path class="cls-1 JP" d="M319.71,107.13A57.83,57.83,0,0,0,335.46,91q3.89-6.09,3.89-8.48t-3.18-3.15l1.59-2A15.32,15.32,0,0,1,344,79.14c1.26.75,1.88,1.6,1.88,2.53A4.61,4.61,0,0,1,345,84c-.52.82-1.21,2-2.08,3.4q8.69-.56,12.54-1A6,6,0,0,0,359,84.65a2.6,2.6,0,0,1,1.75-.88c1,0,2.14,1,3.5,3,.31.43.48.68.52.75a4,4,0,0,1,.94,2.2c0,.67-.56,1.32-1.68,1.94a4,4,0,0,0-1.66,1.62c-.1.18-.34.72-.71,1.62q-6.7,16.31-17.14,24.92a62.9,62.9,0,0,1-22,11.31L321,128.71a64.92,64.92,0,0,0,16.72-8.52q14.16-9.91,20.83-31l-17.66,1.46A58.67,58.67,0,0,1,321.56,109ZM362.45,75.7a19,19,0,0,1,5.93,3.21c1.84,1.54,2.75,3.14,2.75,4.83a2.58,2.58,0,0,1-.87,2.11,2.2,2.2,0,0,1-1.33.45A2,2,0,0,1,367,85.16c-.06-.12-.19-.5-.39-1.13a11.47,11.47,0,0,0-5.57-6.67Zm6.22-4.86a19.16,19.16,0,0,1,6,3.24q2.76,2.34,2.76,4.83a2.55,2.55,0,0,1-.88,2.11,2.2,2.2,0,0,1-1.33.45,2,2,0,0,1-1.91-1.13q-.09-.2-.39-1.14a11.59,11.59,0,0,0-5.6-6.7Z"
                            transform="translate(-52.7 -70.84)" fill="#231815" />
                    </svg>
                </div>

            </div>
        </div>
        <?php } ?>
