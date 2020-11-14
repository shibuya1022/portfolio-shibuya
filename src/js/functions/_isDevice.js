// SP タブレット PCを判別
const isDevice = (function() {
  const userAgent = navigator.userAgent
  if (
    userAgent.indexOf('iPhone') > 0 ||
    userAgent.indexOf('iPod') > 0 ||
    (userAgent.indexOf('Android') > 0 && userAgent.indexOf('Mobile') > 0)
  ) {
    return 'sp'
  } else if (userAgent.indexOf('iPad') > 0 || userAgent.indexOf('Android') > 0) {
    return 'tab'
  }
  return 'pc'
})()
export default isDevice
