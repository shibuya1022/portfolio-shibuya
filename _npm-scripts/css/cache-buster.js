// リソースのキャッシュを消す
// 以下パッケージの簡略化仕様
// https://www.npmjs.com/package/postcss-cachebuster

const postcss = require('postcss')
const timeStamp = new Date().getTime() // 実行時のタイムスタンプ

module.exports = postcss.plugin('postcss-cachebuster', function() {
  // URL取得パターン
  const pattern = /url\(('|")?([^'"\)]+)('|")?\)/g
  // 対象プロパティ
  const supportedProps = ['background', 'background-image', 'border-image', 'behavior', 'src']

  return function(css) {
    css.walkDecls(function walkThroughDeclarations(declaration) {
      // 関係ないプロパティは無視
      if (!supportedProps.includes(declaration.prop)) {
        return
      }

      declaration.value = declaration.value.replace(pattern, function(match, quote, orgUrl) {
        // 既にパラメータが付いているファイル、Base64は無視
        if (orgUrl.includes('?') || orgUrl.includes(';base64')) {
          return match
        }
        // タイムスタンプを追記する
        return 'url(' + orgUrl + '?v' + timeStamp + ')'
      })
    })
  }
})
