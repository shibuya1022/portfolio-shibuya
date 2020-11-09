// SVGからアイコンフォントを生成
const config = require('../config.js') // 設定ファイル
const glob = require('glob') // glob
const chokidar = require('chokidar') // 監視モジュール
const exec = require('child_process').exec // コマンド実行

// const webfontsGenerator = require('webfonts-generator') // アイコンフォント生成
const webfontsGenerator = require('@vusion/webfonts-generator') // アイコンフォント生成
const buildPath = config.src + 'img/icon/*.svg' // 生成用パス
const watchPath = buildPath // 監視用パス

const logHead = '[\u001b[1;35mIconFont\u001b[0m] ' // ログヘッダー

function task(taskPath) {
  glob(taskPath, (err, srcPaths) => {
    if (err) {
      console.log(err)
    }
    if (srcPaths.length === 0) {
      // ファイルがなければ処理スキップ
      console.log(logHead + 'No Icons')
      return
    }
    webfontsGenerator(
      {
        files: srcPaths, // 対象SVGファイル
        dest: config.dest.css + 'font/icon/', // 出力先
        fontName: 'iconfont', // フォント名
        css: true, // CSSを生成する
        cssDest: config.src + 'scss/module/_iconfont.scss', // CSS生成パス
        cssTemplate: config.src + '../_npm-scripts/iconfont-template.scss', // CSSテンプレート
        cssFontsUrl: 'font/icon/', // CSSから見たフォントディレクトリ
        normalize: true,
        fontHeight: 1001
      },
      (error) => {
        if (error) {
          console.log(logHead + 'error', error)
          return
        }
        // 成功したらスタイルガイドも生成させる
        exec('node ./_npm-scripts/style-guide.js', (err, stdout, stderr) => {
          if (err) {
            console.log(err)
          }
          console.log(stdout)
        })
        console.log(logHead + 'Build')

        // 監視モードでなければSASSもコンパイルさせる
        if (process.argv[2] === 'watch') {
          return
        }
        exec('node ./_npm-scripts/css.js', (err, stdout, stderr) => {
          if (err) {
            console.log(err)
          }
          console.log(stdout)
        })
      }
    )
  })
}

if (process.argv[2] === 'watch') {
  // 引数watchがある場合は監視
  chokidar
    .watch(watchPath, {
      ignoreInitial: true, // 監視開始時はAdd系のトリガー無効
      awaitWriteFinish: {
        // 追加・変更の確認に時間をとる
        stabilityThreshold: 100, // 完了とみなすまでの時間
        pollInterval: 10 // 完了を確認する間隔
      }
    })
    .on('all', (name, path) => {
      task(buildPath) // アイコンフォントは常に全SVGをglobで取得する
    })
} else {
  //単発実行
  task(buildPath)
}
