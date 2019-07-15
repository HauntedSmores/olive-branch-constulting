// Styles
import '../styles/main.styl'

import Feather from 'feather-icons'
import landing from './landing'
import nav from './nav'
import sliders from './sliders'
import work from './work'

window.addEventListener('DOMContentLoaded', () => {
  console.log('Hello Word!')
  Feather.replace()
  landing()
  nav()
  sliders()
  work()
})