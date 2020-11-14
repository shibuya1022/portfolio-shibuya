import autoScroll from '../functions/_autoScroll'
// スムーズスクロールの補正要素
const scrollAdjust = '#header'
// const scrollAdjust = 0  //スムーズスクロールの補正要素

// アンカーをクリックしたらスクロール
const anchorLinks = document.querySelectorAll('a[href*="#"]:not(.no-move):not([target="_blank"])')
for (let index = 0; index < anchorLinks.length; index++) {
  const anchorLink = anchorLinks[index]
  anchorLink.addEventListener(
    'click',
    function () {
      const href = this.getAttribute('href')
      const url = href.replace(/#.*/gi, '') // URL
      const hash = href.replace(/.*#/gi, '#') // ハッシュ
      if (url !== '' && url !== location.href) {
        // 現在のページとは違うURLが入っている場合は普通のリンクにする
        return
      }
      event.preventDefault()
      autoScroll(hash, scrollAdjust)
    },
    false
  )
}

// アクセス時にハッシュがある場合はスクロール
if (location.hash) {
  window.setTimeout(() => {
    autoScroll(location.hash, scrollAdjust, false)
  }, 100)
}
