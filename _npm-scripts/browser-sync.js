/*
|--------------------------------------------------------------------------
| Browser-sync config file
|--------------------------------------------------------------------------
*/
const config = require('../config.js') // 設定ファイル
// const connectSSI = require('connect-ssi') // BrowserSyncでSSIを使う

// config.jsより、BrowserSyncのオプション分岐
let serverOption = false
let proxyOption = false
if (config.browserSync.proxy !== '') {
  proxyOption = {
    target: config.browserSync.proxy
  }
} else {
  serverOption = {
    baseDir: config.dest.root
    // middleware: [
    //   connectSSI({
    //     // SSIを有効化する
    //     baseDir: config.dest.root,
    //     ext: '.html'
    //   })
    // ]
  }
}

module.exports = {
  ui: {
    port: 3001 // 管理画面用のデフォルトポート番号
  },
  server: serverOption,
  proxy: proxyOption,
  files: [config.dest.root + '**/**'], // 監視対象
  watchEvents: ['change'], // 変更に反応
  watch: false,
  ignore: [],
  single: false,
  watchOptions: {
    ignoreInitial: true
  },
  port: 3000, // 表示用のデフォルトポート番号
  serveStatic: [],
  ghostMode: {
    // 同時に開いているブラウザ同士で操作や状態を同期
    clicks: true,
    scroll: true,
    location: true,
    forms: {
      submit: true,
      inputs: true,
      toggles: true
    }
  },
  logLevel: 'info',
  logPrefix: 'Browsersync',
  logConnections: false,
  logFileChanges: true,
  logSnippet: true,
  rewriteRules: [],
  open: 'external', // IPアドレスで開く
  browser: 'default', // デフォルトブラウザを開く
  cors: false,
  xip: false,
  hostnameSuffix: false,
  reloadOnRestart: false,
  notify: true,
  scrollProportionally: true,
  scrollThrottle: 0,
  scrollRestoreTechnique: 'window.name',
  scrollElements: [],
  scrollElementMapping: [],
  reloadDelay: 0, // 変更確認からリロード開始までの待機時間
  reloadDebounce: 50, // 指定ミリ秒の間に次の変更が来ないことを確認する
  reloadThrottle: 0, // 指定時間内にイベントが複数入った場合、最初のものだけ実行
  plugins: [],
  injectChanges: true,
  startPath: null,
  minify: true,
  host: null,
  localOnly: false,
  codeSync: true,
  timestamps: true,
  clientEvents: ['scroll', 'scroll:element', 'input:text', 'input:toggles', 'form:submit', 'form:reset', 'click'],
  socket: {
    socketIoOptions: {
      log: false
    },
    socketIoClientConfig: {
      reconnectionAttempts: 50
    },
    path: '/browser-sync/socket.io',
    clientPath: '/browser-sync',
    namespace: '/browser-sync',
    clients: {
      heartbeatTimeout: 5000
    }
  },
  tagNames: {
    less: 'link',
    scss: 'link',
    css: 'link',
    jpg: 'img',
    jpeg: 'img',
    png: 'img',
    svg: 'img',
    gif: 'img',
    js: 'script'
  },
  injectNotification: false
}
