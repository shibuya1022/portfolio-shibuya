/**
 * Safariを含めた全ブラウザでスクロールをロックする
 * オーバーレイの状態を基準にONOFFを切り替え
 * scrollLock('html,body', '#overlay')
 *
 * @function scrollLock
 * @param  {String} [selector='body']  固定対象セレクタ
 * @param  {String} [trigger='#overlay']  判定用セレクタ
 * @param  {String} [flag='active']  判定用クラス
 * @return {Void}
 *
 * 呼び出し
import scrollLock from './functions/_scrollLock.js' // スクロールロック
scrollLock('body', '#overlay')
 *
 */
const scrollLock = (selector = 'body', trigger = '#overlay', flag = 'active') => {
  const lockClass = 'js-scrollLock--active'
  const lockDOM = document.querySelector(selector)
  const lockFlag = lockDOM.classList.contains(lockClass)
  const targetFlag = document.querySelector(trigger).classList.contains(flag)
  if (lockFlag && targetFlag) {
    // ロック状態で、判定要素もアクティブなら何もしない
    return
  }
  if (!lockFlag && targetFlag) {
    // 非ロック状態で、判定要素がアクティブならロック
    // fixedにしてスクロール停止
    // スクロール分だけtopをずらして見た目を維持する
    const scrollLockTop = window.pageYOffset // ロックする前にスクロール量を記憶
    lockDOM.style.cssText = 'position:fixed;top:' + -scrollLockTop + 'px;overflow-y:scroll;'
    lockDOM.dataset.scrollLockTop = scrollLockTop
    lockDOM.classList.add(lockClass)
    return
  }
  // それ以外ならロックを解除
  lockDOM.style.cssText = ''
  window.scrollTo({
    top: lockDOM.dataset.scrollLockTop
  })
  lockDOM.classList.remove(lockClass)
}
export default scrollLock
