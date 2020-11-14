import smoothscroll from 'smoothscroll-polyfill'
smoothscroll.polyfill()
/**
 * 指定されたセレクタに向かってスクロールを行う
 *
 * @function autoScroll
 * @param  {String} point  移動先のセレクタ
 * @param  {String|Number} adjust 追従ヘッダーの高さを加算し、移動先にヘッダーがかぶらないようにする。ヘッダーのセレクタもしくは数値を入れる
 * @param  {Boolean} [anime=true]  アニメーションの有無
 * @param  {Object} callback  コールバック関数
 * @return {Void}
 */

const autoScroll = (point, adjust = 0, anime = true, callback = function() {}) => {
  const nowPosition = window.pageYOffset
  if (isNaN(adjust)) {
    // 数値以外なら要素として高さ取得
    adjust = document.querySelector(adjust).offsetHeight
  }
  const target = document.querySelector(point === '#' || point === '' ? 'html' : point)

  // スクロール後のコールバック処理
  const onScroll = function() {
    if (window.pageYOffset === goto) {
      window.removeEventListener('scroll', onScroll)
      callback()
    }
  }
  window.addEventListener('scroll', onScroll)
  onScroll()

  const goto = nowPosition + target.getBoundingClientRect().top - adjust
  let behavior = 'instant'
  if (anime) {
    behavior = 'smooth'
  }
  window.scrollTo({
    top: goto,
    behavior: behavior
  })
}

export default autoScroll
