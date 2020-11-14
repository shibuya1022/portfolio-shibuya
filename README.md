# 必要環境

Node12  
https://nodejs.org/ja/

Git（一部パッケージ導入に git コマンドが必要）  
https://git-scm.com/

OS は Windows を想定。

# インストール・実行

## インストール

npm ci コマンドでパッケージをインストールする。  
Windows 環境の場合は「\_Install.bat」 の実行でも可能。

## 実行

npm run watch もしくは npm run restart で監視を開始する。

watch は通常の監視。restart は前回実行時までの生成ファイルを一旦削除し、クリーンな状態から監視を開始する。

Windows 環境の場合は「\_Run-Watch.bat」もしくは「\_Run-Restart.bat」でも同様のコマンドが実行可能。

# 推奨エディタ

VS Code

以下の拡張機能のルールファイルを設置しているので、それらを利用できるエディタが望ましい。  
コードの体裁は基本的に以下の自動整形結果に準拠する。

|   拡張機能   |  説明                                        |
| :----------: |:------------------------------------------ |
| Banner Comments +  | コメントアウト用テキスト生成                      |
|  stylelint | CSS,SCSS の構文チェック・一部記述の自動修正 |
|  Bracket Pair Colorizer 2 | 対応する｛｝を表示 |
|  Highlight Matching Tag | 対応するタグ表示 |
|  indent-rainbow | インデントを装飾 |
| Japanese Language Pack for Visual Studio Code | 日本人なので |
|  indent-rainbow | インデントを装飾 |
|    ESLint  | JS の構文チェック                           |
|   Prettier | JS,SCSS のコードフォーマット                |
| PHP cs fixer |  PHP のコードフォーマット                    |

---

## 推奨設定

以下を VS Code の JSON 設定ファイルに追記

    
 {"editor.fontFamily": "HackGen",
  "editor.formatOnSaveTimeout": 5000,
  "php-cs-fixer.executablePath": "C:/Users/admin/.vscode/php-cs-fixer.phar",
  "php-cs-fixer.lastDownload": 1585537798187,
  "php.validate.executablePath": "C:/php/php.exe",
  "php-cs-fixer.formatHtml": true,
  "php-cs-fixer.onsave": true,
  "php-cs-fixer.rules": "@PSR2",
  "files.associations": {
    "*.html": "php"
  },
  "editor.formatOnSave": true,
  "[apacheconf]": {},
  "[ejs]": {
    "editor.autoClosingQuotes": "always",
    "editor.autoSurround": "quotes"
  },
  "[html]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[javascript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[json]": {
    "editor.defaultFormatter": "vscode.json-language-features"
  },
  "[jsonc]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[typescript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "editor.codeActionsOnSave": {
    "source.fixAll.stylelint": true,
    "source.fixAll.eslint": true
  },
  "window.zoomLevel": 0,
  "editor.fontSize": 12,
  "banner-comments-plus.customFonts": [],
  "banner-comments-plus.font": "Banner3",
  "banner-comments-plus.trimEmptyLines": true,
  "banner-comments-plus.trimTrailingWhitespace": true,
  "files.autoSave": "off",
  "css.lint.emptyRules": "ignore",
  "workbench.startupEditor": "newUntitledFile"
}


PHP cs Fixer を動かすために、PHP を実行可能にしておく必要がある。  
以下からダウンロードし、上記設定記述の「C:/php/php.exe」でアクセス可能にしておくこと。
https://windows.php.net/download

# WP テーマ開発

## 「Local by Flywheel」を使用する

ローカル WP のテーマディレクトリをリポジトリにすることで、BrowserSync も使える

シンボリックリンク
mklink /D "C:\Users\admin\Desktop\テーマ名" "C:\Users\admin\Desktop\リポジトリ\テーマフォルダ\テーマ名"右はフルパス

　開発テーマのパス  
・Add Container Destination  
　/app/public/wp-content/themes/テーマ名

# 処理内容

ファイル種別（階層）に応じて解説する。

## .ejs（src 以下全体）

以下のフローで HTML ファイルを生成する。

- コンパイル
- CSS,JS,img のパスにキャッシュ対策パラメータ付与
- 整形

src 内の階層関係は維持される。  
URL を綺麗にするため「ディレクトリ名/index.html」の形式で作る想定。
頭に「\_」があるファイルは HTML 化しない

「EJS-Template」の中に、制作におけるベースとなるファイル群を格納している。  
src から PHP ファイル等 WP 系ファイルを削除し、EJS-Template の中身を src に移して使用する。  
非 EJS 案件では不要なので削除すること。

## js（src/js）

Lint→ES6 トランスパイル →Minify→ マップ生成

### プリインストールライブラリ

lib.js 内にて宣言すると、lib.js 移行の全域で有効なグローバルオブジェクトとして使用できる。  
原則として全て最新版を使用する。

jQuery  
js-cookie（Cookie）  
<https://www.npmjs.com/package/js-cookie>  
React（仮想 DOM）  
Three（3DCG）  
<https://ics.media/tutorial-three/>  
Swiper（カルーセル）
<http://idangero.us/swiper/api/>  
Slick（カルーセル　 Swiper の方が高機能なので非推奨）  
<http://kenwheeler.github.io/slick/>  
magnificPopup（モーダル　自力で組めるなら自力推奨）  
<https://blanks.site/post/post31.html>  
baguetteBox（簡易画像モーダル　ブログ記事の画像ポップアップ程度の要件の場合）
<https://feimosi.github.io/baguetteBox.js/>  
lozad.js（画面に入ってきた要素をアクティブにする）  
<https://qiita.com/yukagil/items/369a9972fd45223677fd>  
jquery.mb.YTPlayer（埋め込み YouTube 制御）  
<https://github.com/pupunzi/jquery.mb.YTPlayer/wiki>  
trunk8（テキストの行数丸め込み　複数行対応）
<https://www.npmjs.com/package/trunk8>  
Infinite Scroll（Ajax による無限スクロール）
<https://infinite-scroll.com/>

## .scss(src/scss)

- Lint
- コンパイル
- ベンダープレフィックス
- Minify
- マップ生成
- スタイルガイド生成

メイン CSS 位置は「css/common.css」。「\_」から始まらない名称の SCSS ファイルを作ることで、common.css 以外のファイルも別途生成可能。  
スタイルガイドは速度的な都合から、監視タスクでも初回のみ実行する。

## コピー対象ファイル(src/\_copy 　例外あり)

加工を行わずにそのまま出力させる。  
階層は\_copy より一つ上の階層になる。例えば「src/\_copy/img/hoge.jpg」は「【dest】/img/hoge.jpg」と出力される。

例外として、以下がヒットするファイルはどの位置でもコピー処理の対象になる。

    css,html,php,pdf,mp4,webm,webp,mp3,ogg,ico,xml,.htaccess,css/**

# コマンド

コマンドによってはバッチファイルを添付しているので、そちらをクリックして実行しても可

## build:通常のビルド

    npm run build

## watch:通常のビルド → 監視+BrowserSync

    npm run watch

## clean:dest ディレクトリ全削除 → 通常のビルド

    npm run clean

本タスクランナーの基本動作には削除処理がないため、リネームをしたらリネーム前後のファイルが両方残るなど、出力先にゴミファイルが溜まっていく。  
不具合や混乱の回避のために定期的なクリーンアップが必要。  
ゴミ箱は経由しないので、Git 管理されていないファイルを dest ディレクトリに入れないように注意！

## restart:dest ディレクトリ全削除 → 通常のビルド → 監視+BrowserSync

    npm run restart

