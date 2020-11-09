const spMenuTrigger = document.querySelectorAll('#sp-menu-open,.sp-menu-close,#sp-menu a,#overlay')
const spMenuTarget = document.querySelectorAll('#sp-menu-open,#sp-menu,#overlay')
for (let index = 0; index < spMenuTrigger.length; index++) {
  const element = spMenuTrigger[index]
  element.addEventListener(
    'click',
    function() {
      for (let index = 0; index < spMenuTarget.length; index++) {
        const element = spMenuTarget[index]
        element.classList.toggle('active')
      }
    },
    false
  )
}
