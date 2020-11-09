# 必要環境

Node12  
https://nodejs.org/ja/

Git（一部パッケージ導入に git コマンドが必要）  
https://git-scm.com/

OS は Windows を想定。

## その他環境

上記必要環境を満たしていても、パッケージインストール時にエラーログが出る。  
ただし代替パッケージが自動でインストールされるため、npm ci 自体が完了していれば挙動に違いはない。  
以下を追加導入するとエラーが減少する（該当パッケージの作者によると、Windows 環境はエラーを潰しきれないとのこと）。

Python  
https://www.python.jp/

Visual C++
どのパッケージを入れるか聞かれるので、「Visual C++ Build Tools」を選択する。
https://visualstudio.microsoft.com/ja/thank-you-downloading-visual-studio/?sku=BuildTools&rr=https%3A%2F%2Fgithub.com%2Fnodejs%2Fnode-gyp

# インストール・実行

## タスクランナーリポジトリから作業対象リポジトリに設置する時のみの作業

「ルート階層にあるファイル全部」「src」「\_npm-scripts」を作業リポジトリに丸ごとコピーする。  
※その他のディレクトリは各自でタスクランナーを試運転した場合に発生する生成物なので入れないこと。  
※README は導入先リポジトリにも存在すると思われるが、上書きするかは任意。

![1557284341-001](https://user-images.githubusercontent.com/12805640/57346298-eb60ee80-7188-11e9-96f1-3fc96c5ef779.png)

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

|   拡張機能   |                                      URL                                       | 説明                                        |
| :----------: | :----------------------------------------------------------------------------: | :------------------------------------------ |
| EditorConfig | https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig  | インデント等の体裁統一                      |
|  stylelint   | https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint | CSS,SCSS の構文チェック・一部記述の自動修正 |
|    ESLint    |   https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint   | JS の構文チェック                           |
|   Prettier   |   https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode   | JS,SCSS のコードフォーマット                |
| PHP cs fixer |   https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer    | PHP のコードフォーマット                    |

---

## 推奨設定

以下を VS Code の JSON 設定ファイルに追記

    "php-cs-fixer.formatHtml": true,
    "php-cs-fixer.onsave": true,
    "php-cs-fixer.rules": "@PSR2",
    "php.validate.executablePath": "C:/php/php.exe",
    "files.associations": {
      "*.html": "php"
    },

PHP cs Fixer を動かすために、PHP を実行可能にしておく必要がある。  
以下からダウンロードし、上記設定記述の「C:/php/php.exe」でアクセス可能にしておくこと。
https://windows.php.net/download

# 想定用途

## 「Local by Flywheel」と併用して WP テーマ開発

ローカル WP のテーマディレクトリをリポジトリにすることで、BrowserSync も使える

Flywheel はアドオンで各種ディレクトリのパスを変えられるので、テーマディレクトリが深すぎて扱いづらい問題はこちらで対応  
<https://b.0218.jp/20170111005914.html>  
※変更先は Flywheel と同一のドライブに限る。別ドライブの場合は何かを諦めるか、別のソフトでシンボリックリンクを作る

「MORE→Volumes」より以下を設定  
・Add Host Source  
　開発テーマのパス  
・Add Container Destination  
　/app/public/wp-content/themes/テーマ名

## EJS で静的サイト開発

PHP と同じ要領で静的サイト制作が実施可能。  
変数を使ったり、ヘッダー等のパーツを分けて管理したりできる。

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

## .jpg,.png,gif,.svg(src/img)

圧縮する。フォルダを分けた場合、出力先でもフォルダ分けが行われる。

画質が粗い場合は config.js の「quality」を上げる。  
圧縮を行いたくない画像に対しては、後述のコピータスクを利用すると良い。

config.js で設定を変えると、JPG と PNG は WebP を並行生成可能。  
WebP は Safari の対応が遅く、IE は確実にフォールバックが必要になるが、軽量。  
https://caniuse.com/#search=WebP
「test.jpg」というファイルを加工した場合、圧縮した「test.jpg」と WebP にした「test.jpg.webp」が生成される。

## .svg (src/img/icon)

SVG からアイコンフォントを生成する。以下でアイコンフォントが出てくるようになる。  
アイコンフォント化に向かない SVG を加工させると、アイコンが正常に出力されないことがあるので、適切な SVG のみ入れること。

    <i class="icon-ファイル名"></i>

アイコンフォントにならない場合は SVG のソースを見る。ラスタ画像が入っていたら無理。2 色以上使っている SVG も、仮にフォント化出来ても配色は再現できない。

適合しているのにフォントにならない場合は、SVG を IcoMoon にアップして、 SVG を落とし直すと直る場合がある。
<https://icomoon.io/app/#/select>

SVG をフリーの範囲で加工したい場合、Inkscape が有効。  
二種類の SVG をかけ合わせた、複合アイコンのフォントなども作れる。  
<https://inkscape.org/ja/>

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

clean のリスクを把握した上でなら、restart 一本でも特に問題ない。
