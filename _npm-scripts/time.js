const fs = require('fs-extra')

const logHead = '[Time] ' // ログヘッダー

let timeCount

//ファイルの書き込み関数
function writeFile(path, data) {
  fs.outputFile(path, data, () => true)
  console.log('write:' + path)
}

//ファイル読み込み関数
function readFile(path) {
  fs.readFile(path, 'utf8', (err, data) => {
    if (err) {
      console.log(err)

      throw err
    }
    console.log('read:' + path)

    const timeEnd = (new Date().getTime() - data) / 1000

    console.log(logHead + '処理時間：' + timeEnd + 'sec')
  })
}

if (process.argv[2] === 'end') {
  //引数endで終了
  readFile('.cache/taskTime.txt')
} else {
  //無い場合は開始
  timeCount = new Date().getTime()
  writeFile('.cache/taskTime.txt', timeCount)

  console.log(logHead + '処理時間計測開始')
}
