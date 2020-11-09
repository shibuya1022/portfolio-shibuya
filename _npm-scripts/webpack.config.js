const config = require('../config.js') // 設定ファイル
const glob = require('glob') // ファイルサーチ
const path = require('path') // パス

const entries = {}

const jsFile = '*.+(j|t)s?(x)' // JSファイルのパターン
glob
  .sync(config.src + '**/' + jsFile, {
    ignore: [config.src + '**/_' + jsFile, config.src + '_copy/**/' + jsFile] // パーシャルと_copy以下のJSを除外
  })
  .map(function(file) {
    // {key:value}の連想配列を生成
    // {
    //   **/*.js : './src/**/*.js',
    //   ...
    // }という形式のobjectになる
    const regEx = new RegExp(config.src + 'js')
    const key = file.replace(regEx, '').replace(/\.jsx?$/, '.min.js')
    entries[key] = file
  })

module.exports = {
  // webpack設定
  mode: 'production',
  devtool: '#source-map',
  entry: entries,
  output: {
    path: path.join(__dirname, '/../' + config.dest.js),
    filename: '[name]' // 書き出すファイル名 entryのkeyが[name]になる
  },
  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.jsx?$/,
        exclude: /node_modules/, // node_modulesを除外
        loader: 'eslint-loader', // ESLint
        options: {
          configFile: './.eslintrc', // コンフィグファイル
          cache: '.cache/eslint-loader', // キャッシュディレクトリ
          failOnWarning: false, // 警告で処理を止める
          failOnError: true // エラーで処理を止める
        }
      },
      {
        test: /\.jsx?$/,
        exclude: /node_modules/, // node_modulesを除外
        use: [
          {
            loader: 'cache-loader', // 生成結果をキャッシュ
            options: {
              cacheDirectory: '.cache/cache-loader' // キャッシュディレクトリ
            }
          },
          {
            loader: 'babel-loader?cacheDirectory', // Babelでトランスパイル
            options: {
              presets: [
                'react',
                [
                  '@babel/preset-env',
                  {
                    useBuiltIns: 'usage', // 必要になったpolyfillのみ導入
                    corejs: 3 // core-jsのバージョン
                  }
                ]
              ]
            }
          }
        ]
      },
      {
        test: /\.json$/,
        loader: 'json-loader', // const json = require('data.json')　でJSONを読めるようにする
        type: 'javascript/auto'
      }
    ]
  },
  resolve: {
    extensions: ['.ts', '.tsx', '.js', '.jsx'], // 省略可能な拡張子
    mainFields: ['browser', 'main'] // node_modulesは（ES6形式が多い）module以外のフィールドを優先する
  }
}
