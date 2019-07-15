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

  window.addEventListener('scroll', throttle(scroll_check, 100))
  scroll_check()

  //
  const menu_btn = header.querySelector('.nav-menu-btn')

  menu_btn.addEventListener('click', () => {
    header.classList.toggle('ob-header--open')
  })
}

export default nav