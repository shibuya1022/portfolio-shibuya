// 生成物の削除
const config = require('../config.js') // 設定ファイル
const rimraf = require('rimraf') // ファイルやディレクトリを削除

function remove(removePath) {
  rimraf(removePath, () => {
    console.log('[\u001b[1;31mDelete\u001b[0m] ' + removePath)
  })
}

remove(config.dest.root)
remove(config.dest.styleGuide)
remove(config.dest.jsdoc)
