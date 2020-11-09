// 画像の圧縮と加工不要ファイルの配置処理
const config = require('../config.js') // 設定ファイル
const fs = require('fs-extra') // ファイルコピー用
const glob = require('glob') // glob
const path = require('path') // パス
const chokidar = require('chokidar') // 監視モジュール
const rimraf = require('rimraf') // ファイルやディレクトリを削除

const imagemin = require('imagemin') // imagemin本体
const imageminJpg = require('imagemin-mozjpeg') // JPG圧縮
const imageminPng = require('imagemin-pngquant') // PNG圧縮
const imageminGif = require('imagemin-gifsicle') // GIF圧縮
const imageminSvg = require('imagemin-svgo') // SVG圧縮
const imageminWebp = require('imagemin-webp') // WebP生成

// 処理タイプ
let taskTypes = ['img', 'copy']
// WebP追加
if (config.imageminWebp.use) {
  taskTypes = ['img', 'webp', 'copy']
}

// 生成用パス
const buildPath = {
  img: config.src + 'img/**/*.+(jpg|jpeg|png|gif|svg)',
  copy: config.copySrc,
  webp: config.src + 'img/**/*.+(jpg|jpeg|png)'
}
// ログヘッダー
const logHead = {
  img: '[\u001b[1;32mIMG-Opt\u001b[0m] ',
  copy: '[Copy] ',
  webp: '[\u001b[1;32mWebP\u001b[0m] '
}

// 複数ファイルをglobでタスクに流す
function taskAll(path, type) {
  glob(path, (err, srcPaths) => {
    if (err) {
      console.log(err)
    }
    for (let srcPath of srcPaths) {
      task(srcPath, type)
    }
  })
}

function task(srcPath, type) {
  // 出力パスを生成
  const destPath = getDest(srcPath, type)

  // 同じタイムスタンプのファイルが既にあったら無視する処理
  // 出力ファイル情報を取得
  fs.stat(srcPath, (err, srcState) => {
    if (err) {
      console.log(err)
    }
    // ディレクトリは無視
    if (srcState.isDirectory()) {
      return
    }
    fs.stat(destPath, (err, destState) => {
      if (err) {
        // エラーはファイルなしと判断して打ち切り
        makeFile(srcPath, destPath, type)
        return
      }
      // mtimeMsは小数で誤差が出ているためmtimeで比較
      if (new Date(srcState.mtime).getTime() !== new Date(destState.mtime).getTime()) {
        // タイムスタンプが違ったら生成
        makeFile(srcPath, destPath, type)
        return
      }
      console.log(logHead[type] + 'Skip: ' + destPath)
    })
  })
}

// 出力パスを取得する
function getDest(srcPath, type) {
  if (type === 'copy') {
    return srcPath.replace(config.src, config.dest.root).replace('_copy/', '')
  }
  if (type === 'img') {
    return srcPath.replace(config.src + 'img/', config.dest.img)
  }
  if (type === 'webp') {
    return srcPath.replace(config.src + 'img/', config.dest.img) + '.webp'
  }
}

// 生成処理を決定する
function makeFile(srcPath, destPath, type) {
  if (type === 'img') {
    imgOptimize(srcPath, destPath, type)
  } else if (type === 'webp') {
    makeWebP(srcPath, destPath, type)
  } else {
    fileCopy(srcPath, destPath, type)
  }
}

// コピー
function fileCopy(srcPath, destPath, type) {
  fs.copy(srcPath, destPath, (err) => {
    if (err) {
      console.error(err)
    }
    console.log(logHead[type] + 'Add: ' + srcPath + ' → ' + destPath)
  })
}

// 画像圧縮
function imgOptimize(srcPath, destPath, type) {
  ;(async () => {
    await imagemin([srcPath], {
      destination: path.dirname(destPath),
      plugins: [
        imageminPng(config.imageminPng),
        imageminJpg(config.imageminJpg),
        imageminGif(config.imageminGif),
        imageminSvg()
      ]
    })
    console.log(logHead[type] + 'Add: ' + destPath)
    stampCopy(srcPath, destPath)
  })()
}

// WebP生成
function makeWebP(srcPath, destPath, type) {
  ;(async () => {
    const files = await imagemin([srcPath], {
      destination: path.dirname(destPath),
      plugins: [imageminWebp(config.imageminWebp)]
    })

    // 生成されたwebpに元の拡張子を付ける
    fs.rename(files[0].destinationPath, destPath, (err) => {
      if (err) {
        console.log(err)
      }
      console.log(logHead[type] + 'Add: ' + destPath)
      stampCopy(srcPath, destPath)
    })
  })()
}

// 出力画像のタイムスタンプを入力画像に転写する
function stampCopy(originPath, targetPath) {
  fs.stat(originPath, (err, originState) => {
    if (err) {
      console.log(err)
    }
    fs.utimes(targetPath, originState.atime, originState.mtime)
  })
}

// ファイル削除を反映する
function remove(srcPath, type) {
  const destPath = getDest(srcPath, type)

  rimraf(destPath, function() {
    console.log(logHead[type] + 'Delete: ' + destPath)
  })
}

if (process.argv[2] === 'watch') {
  //引数watchがある場合は監視
  for (const taskType of taskTypes) {
    chokidar
      .watch(buildPath[taskType], {
        ignoreInitial: true, // 監視開始時はAdd系のトリガー無効
        awaitWriteFinish: {
          // 追加・変更の確認に時間をとる
          stabilityThreshold: 100, // 完了とみなすまでの時間
          pollInterval: 10 // 完了を確認する間隔
        }
      })
      .on('all', (name, hitPath) => {
        const taskPath = './' + hitPath.replace(/\\/g, '/')
        if (name === 'add' || name === 'change') {
          task(taskPath, taskType)
        }
        if (name === 'unlink' || name === 'unlinkDir') {
          remove(taskPath, taskType)
        }
      })
      .on('error', (error) => {
        console.log(logHead[taskType] + 'Error: ' + error)
      })
  }
} else {
  //無い場合は単発実行
  for (const taskType of taskTypes) {
    taskAll(buildPath[taskType], taskType)
  }
}
