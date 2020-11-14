<?php
// require_once 'lib/other/fix-aws.php'; // AWS向けの調整

require_once 'lib/add-const.php'; // 定数
require_once 'lib/add-global.php'; // グローバル変数
require_once 'lib/add-common-functions.php'; // 関数

require_once 'lib/add-cache.php'; // キャッシュ
require_once 'lib/add-custom-post.php'; // カスタム投稿宣言
require_once 'lib/add-img-size.php'; // 画像
require_once 'lib/add-shortcode.php'; // ショートコード
require_once 'lib/change-admin-page.php'; // 管理画面レイアウト
require_once 'lib/change-edit-page.php'; // エディタ改変
require_once 'lib/change-head.php'; // ヘッダー改変
require_once 'lib/change-login-page.php'; // ログイン画面カスタマイズ
require_once 'lib/change-post.php'; // 投稿改変

// WPプラグイン関連
require_once 'lib/plugin/all-in-one-seo-pack.php';
require_once 'lib/plugin/mw-wp-form.php';
require_once 'lib/plugin/smart-custom-fields.php';

// require_once 'lib/other/force-ssl.php'; // SSL強制対応
