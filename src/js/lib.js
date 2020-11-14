// ライブラリ読み込み用ファイル
// expose-loaderを通してインポートすることでグローバルオブジェクトにする

import 'expose-loader?jQuery!jquery' // jQuery

import 'expose-loader?Cookies!js-cookie' // Cookie

// import 'expose-loader?React!react' // React
// import 'expose-loader?ReactDOM!react-dom' // ReactDOM

// import 'expose-loader?slick!slick-carousel' // Slick
// import 'expose-loader?baguetteBox!baguettebox.js' // BaguetteBox

// import 'expose-loader?lozad!lozad' // Lozad.js Intersection Observer
// ↑要 Intersection Observerポリフィル
// <script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>

// import 'expose-loader?YTPlayer!jquery.mb.ytplayer' // YTPlayer

import 'trunk8' // Trunk8

// import 'expose-loader?Stickyfill!stickyfilljs' // position:styckyのポリフィル

// import 'expose-loader?InfiniteScroll!infinite-scroll' // InfiniteScroll

// import 'pickadate/lib/picker' // pickadate　コアファイル
// import 'pickadate/lib/picker.date' // pickadate　デートピッカー
// import 'pickadate/lib/picker.time' // pickadate　タイムピッカー

// import 'expose-loader?THREE!three' // Three.js

import './module/_hashScroll' // アンカーリンクスクロール
import './module/_spMenuToggle' // SPメニュー開閉
