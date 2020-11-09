// スタイルガイド
const config = require('../config.js') // 設定ファイル
const chokidar = require('chokidar') // 監視モジュール

const stylelint = require('stylelint') // Lint
const buildPath = config.src + 'scss/**/!(_iconfont|_old).scss' // 生成用パス
const watchPath = buildPath // 監視用パス

const logHead = '[\u001b[1;35mstylelint\u001b[0m] ' // ログヘッダー
/**
 * @param {string} path 処理対象
 * @param {bool} autoFix 自動修正
 */
function lint(path, autoFix) {
  stylelint
    .lint({
      files: path,
      formatter: 'string',
      fix: autoFix
    })
    .then((data) => {
      // do things with data.output, data.errored,
      // and data.results
      if (data.errored) {
        console.log(logHead + data.output)
      }
    })
    .catch((err) => {
      // do things with err e.g.
      console.error(logHead + err.stack)
    })
}

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
    .on('all', (name, hitPath) => {
      const taskPath = './' + hitPath.replace(/\\/g, '/')
      lint(taskPath, false) // 変更ファイルだけLintをかける
    })
} else {
  //無い場合は単発実行
  lint(buildPath, true) // 全SCSSにLintをかける
}
