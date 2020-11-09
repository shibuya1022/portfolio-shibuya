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
        <div class="wrap w1200 sp-wrap">
            <div class="header__frame">
                <div class="header__base flex bet str">
                    <div class="header__left flex vcenter">
                        <a class="header__logo flex vcenter" href="<?php echo H_URL; ?>">
                            <img class="header__logo-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALEAAABFCAMAAAAy9Pf4AAAAUVBMVEVHcEz///////////////+GhobAwMD///9MTEz////V1dXu7u7///8WFhZxcXH///////+jo6MsLCz///////88PDyxsbH///9bW1uVlZUAAADjQfRVAAAAGnRSTlMAJlyDTcyzmeZ0qp9q+dY7FL/zBi7suZDfxtgLxGUAAATqSURBVGje7ZrpsqMgEIUvihsuUVyyvP+DTgRUoBvszK2ZSqrCv7lzgh/NInafn5+/bEy1F/U9WT5G9SPjVmPjSWf9lFTF3qpkOuEYJ37or+d6xpt016cNh2FJCq8lscfzpgCt4eFRXpIr0CeXMYybAnmaXOLAMWSkP90pD/BWAf0Fn74ElxfNZAUNEwRC0FvxzVWz+sTmOvH0wtJj4zumo/b1R0jY2ltmtZUC31GT6XDpysfeym4xfYKw9SbAIjv0bdmZYVZ9YHxiuM27Xt7uwhsif/4je1gtcwZkR0APPmsfXmuzGkM2wIP09VLrfWQNnN98+WMeHGQyca/jC3gVs46zi6CAhcT0UsW5creIikeHyR+lsJDJxAoA7/DZOoCgQjaE9IO/wycFPAfkrTjWMpWYR4ENMvfW0BDWD946qmLAGzJ7gXhM4wAG4VgX67EiYnrhHBgqIGVE3tbbpBCJV1ndxghUFLgT4jmmn1fFZA/wHpM/bltEiMSpL8PXRWqv4iGuH6wHrWds0cb1udHTiNlpiJ+tPk7yfj26ZVxeWiPk5wPcI0Ijhj3OixDLHAraBFbxU18vJRhhf0yhexA/XzTCO/qNnkbc+D1K9RKopb/SmmNRdFDvruxhPy3Wq0INj54id/626IVPI776y0y/hty4t+tt8ojZjOgXnyrZp2QBJ4N/ehg9ibgHk2x6LMCBpacZ/BemL/eXDoC4Gfkd0ZOImT9DKpypv7uW7bwCernuGn+ijjmp/HAqCLAs1jEQiYFIDRd/znYaD+d6TUAnrtVF+J8QE/U7MVhEalOCv+qLMIkYbH2cYD8sfk2s2H5DDJ6FE+xbiaj/En+JK7UbSqvt5/G7Ek/IVzt/a+Ie5lrMBfldiff0AchCvCsxY2xKKqvx7RPkTYkjyazPId7ux59EnL41ce63ektKvisx+nXMvsRf4i/xl/jTiVWZRX4SMcjyfIm/xBWvPo345z8Sg/TxCTGu/5/ExKxUFywHvSvxSaYwTAzyuneT26yR/DSJmJhdvW8/BTl3lT8GYDvx7/PH/ucuQ38MSg0bwQhz+gUWtJ0Y5E5RYj1snBikFNACAlpqGPEPt83SMKDEHCsgFFipoSEQq7QNqMRkSI/yKNAFXyESJWahOotE1us5McemTVe2RYvXjmCvptsOv7vBWtYNkQstB33LEkk/wopi22WZZwVYjmo+1D9m7+LmEDcATz7lboFzncLriEUD2Z6kqq20iv8jQW8Tw3MBtsxMIY2YWhlvXqik28T9mVnBFCUvdGKi++DiuBUkmViNUJyGOB3pxGr3i/bEXlG5l6ecTjwVJ3aIsgi+UAPEEygrIxaWieK6GTDiM1fPXG8hJhNrp1IeiHKbAy9iyNnUFSixsvUEkcv6CAiZWJ1AhUC3h3Z3uW6wsULdZp21HRwzINPmAGztt5md0KcTawTEQmdcgr7jTjv0XEdfe7dvzq590TgAB39/G0PfPoOsOGt76EZj26yXrNShbssyW+qQEXNzQeZZqSjkbahB74jLUgyd/sHzbdZtJsjjPjmmZ8TcM72dqn78IUZaQtSn1qZmKTHEKgwBu20yveb+RTtfV0YaMAuPrgm6inTJzy3NKe/JDuuUs+NxFTIxU+L3f40YrKke94lXlfGYP6/8I0GeBh3mmKf1kugfFGmVgJ/8AWhqkbO/S2RdAAAAAElFTkSuQmCC"
                                alt="ロゴ画像" />
                            <span class="header__logo-text">サイト名</span>
                        </a>
                    </div>
                    <div class="header__right flex">
                        <div class="pc header__nav flex">
                            <div class="pulldown">
                                <span class="md-uline pulldown__head flex vcenter hcenter">
                                    プルダウン1
                                </span>
                                <div class="pulldown__body">
                                    <div class="wrap w1200">
                                        <div class="pulldown__list flex">
                                            <a href="" class="pulldown__link flex">
                                                テキスト1
                                            </a>
                                            <a href="" class="pulldown__link flex">
                                                テキスト2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pulldown">
                                <span class="md-uline pulldown__head flex vcenter hcenter">
                                    プルダウン2
                                </span>
                                <div class="pulldown__body">
                                    <div class="wrap w1200">
                                        <div class="pulldown__list flex">
                                            <a href="" class="pulldown__link flex">
                                                テキスト3
                                            </a>
                                            <a href="" class="pulldown__link flex">
                                                テキスト4
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo H_URL; ?>entry/" class="pc headerNav__btn md-btn black stay ">
                            エントリー
                        </a>
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
