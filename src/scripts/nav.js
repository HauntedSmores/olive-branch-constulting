import { throttle } from 'lodash'

function nav() {
  const header = document.querySelector('.ob-header')

  function scroll_check() {
    if (window.scrollY > 0) {
      if (!header.classList.contains('ob-header--active')) {
        header.classList.add('ob-header--active')
      }
    } else {
      if (header.classList.contains('ob-header--active')) {
        header.classList.remove('ob-header--active')
      }
    }
  }

  window.addEventListener('scroll', throttle(scroll_check, 200))
}

export default nav