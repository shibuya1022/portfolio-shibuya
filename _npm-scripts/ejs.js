// EJSコンパイル
const config = require('../config.js') // 設定ファイル
const glob = require('glob') // glob
const chokidar = require('chokidar') // 監視モジュール
const fs = require('fs-extra') // ファイル操作

const ejs = require('ejs') // EJS
ejs.delimiter = '?' // デリミタ変更
const iconv = require('iconv-lite') // 文字コード
const ejsLint = require('ejs-lint') // Lint

const buildPath = config.src + '**/!(_*).ejs' // 生成用パス
const partPath = config.src + '**/_*.ejs' // パーシャルパス
const watchPath = config.src + '**/*.ejs' // 監視用パス

const logHead = '[\u001b[1;33mEJS\u001b[0m] ' // ログヘッダー

let timestamp // タイムスタンプ

let errorFlag = false

// パーシャル以外の全ファイルを処理する
function taskAll() {
  glob(buildPath, (er, files) => {
    for (let file of files) {
      task(file)
    }
  })
}

function task(srcPath) {
  // エラー処理中なら無視
  if (errorFlag) {
    return
  }
  const html =
    config.dest.root +
    srcPath
      .replace('src\\', '')
      .replace(config.src, '')
      .replace(/\.ejs$/, '.html')
      .replace(/\\/, '/') // 出力パスを生成

  ejs.renderFile(srcPath, (compileError, output) => {
    if ((srcPath, compileError)) {
      errorCheck(srcPath, compileError)
      return
    }

    output = output
      .replace(
        /(<script.+?src=".+?\.js|<link.+?href=".+?\.css|<img.+?src=".+?\.(jpe?g|png|gif|svg))"/g,
        '$1?v' + timestamp + '"'
      ) // ファイルパスにタイムスタンプを追記してキャッシュ除去
      .replace(/<!--[\s\S]*?-->/g, '') // コメント除去
    fs.outputFile(
      html, // 出力されるHTMLファイル
      iconv.encode(output, 'utf-8')
    )
      .then(() => {
        console.log(logHead + 'Add: ' + html)
      })
      .catch((error) => {
        console.log(logHead + 'Error: ' + error)
      })
  })
}

/**
 * @param {string} srcPath 該当ソース
 * @param {string} compileError コンパイル時のエラーテキスト
 * @description エラー処理
 */
async function errorCheck(srcPath, compileError) {
  errorFlag = true
  // エラーになったファイルとパーシャルファイルの検査
  const checkPath = '{' + srcPath + ',' + partPath + '}'

  await glob(checkPath, (er, files) => {
    for (let globPath of files) {
      fs.readFile(globPath, 'utf8')
        .then((data) => {
          lint(data)
        })
        .catch((readError) => {
          console.log(logHead + readError)
        })
    }
  })
  errorFlag = false

  function lint(data) {
    const lintError = ejsLint(data)
    if (lintError) {
      console.log(logHead + 'Error: ' + srcPath + lintError.toString())
    } else if (compileError) {
      // Lintで検出できない場合はコンパイルエラーを1回だけ出力
      console.log(logHead + compileError.toString())
      compileError = false
    }
  }
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
      timestamp = new Date().getTime()
      if (path.includes('_')) {
        //パーシャルが更新された場合は全ファイルを処理
        taskAll()
      } else {
        task(path)
      }
    })
} else {
  //単発実行
  timestamp = new Date().getTime()
  taskAll()
}
