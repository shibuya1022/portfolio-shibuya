const config = require('../config.js') // 設定ファイル

module.exports = {
  // JSDoc
  source: {
    excludePattern: 'lib.js' // 除外するJSファイル
  },
  tags: {
    allowUnknownTags: true // 認識できないタグの許可
  },
  opts: {
    destination: config.dest.jsdoc // 出力パス
  },
  plugins: [
    'plugins/markdown' // マークダウンを読み取る
  ],
  templates: {
    cleverLinks: false,
    monospaceLinks: false,
    default: {
      outputSourceFiles: true
    },
    path: 'ink-docstrap',
    theme: 'cosmo', // テーマ cerulean, cosmo, cyborg, darkly, flatly, journal, lumen, paper, readable, sandstone, simplex, slate, spacelab, superhero, united, yeti
    navType: 'vertical',
    linenums: true, // ソースコードに行番号を表示
    dateFormat: 'MMMM Do YYYY, h:mm:ss a'
  }
}
