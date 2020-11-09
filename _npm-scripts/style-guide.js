// スタイルガイド
const config = require('../config.js') // 設定ファイル
const chokidar = require('chokidar') // 監視モジュール

const FrontNote = require('frontnote') // スタイルガイド
const note = new FrontNote({
  out: config.dest.styleGuide, // 生成ディレクトリ
  css: [
    // ガイド上で読み込むCSS
    '../.' + config.dest.css + 'common.css',
    '../.' + config.dest.js + 'lib.min.js',
    '../.' + config.dest.js + 'main.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css',
    'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700'
  ],
  clean: false // 生成時に古いガイドを消す
})
const buildPath = config.src + 'scss/**/!(_iconfont_template).scss' // 生成用パス
const watchPath = buildPath // 監視用パス　最終的なCSSだけを監視

const logHead = '[\u001b[1;32mStyleGuide\u001b[0m] ' // ログヘッダー

if (process.argv[2] === 'watch') {
  //引数watchがある場合は監視
  chokidar
    .watch(watchPath, {
      ignoreInitial: true, // 監視開始時はAdd系のトリガー無効
      awaitWriteFinish: {
        // 追加・変更の確認に時間をとる
        stabilityThreshold: 100, // 完了とみなすまでの時間
        pollInterval: 10 // 完了を確認する間隔
      }
    })
    .on('all', (name, p) => {
      note.render(buildPath).subscribe(function() {
        console.log(logHead + 'Build')
      })
    })
} else {
  //無い場合は単発実行
  note.render(buildPath).subscribe(() => {
    console.log(logHead + 'Build')
  })
}
