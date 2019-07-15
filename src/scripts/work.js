import Glide from '@glidejs/glide'

const workInit = () => {
  const modal = document.querySelector('.portfolio-modal')
  const details = Array.from(modal.querySelectorAll('.portfolio-details'))
  const cards = document.querySelectorAll('.portfolio-card')

  cards.forEach(card => {
    
    card.addEventListener('click', event => {
      event.stopPropagation()
      
      const current = details.find(el => el.dataset.modal === card.dataset.modal)
      const images = current.querySelectorAll('img')
      const slider = new Glide(current.querySelector('.glide'))
      const close_button = current.querySelector('.feather-x')

      let image_load_count = 0

      images.forEach(img => {
        img.addEventListener('load', () => {
          image_load_count++
          if (image_load_count === images.length) {
            slider.mount()
          }
        })

        img.src = img.dataset.src
      })
      
      modal.classList.add('active')
      current.classList.add('active')

      const closeModal = () => {
        modal.classList.remove('active')
        current.classList.remove('active')
        document.removeEventListener('click', detectOutsideClick)
        slider.destroy()
      }

      const detectOutsideClick = event => {
        const isClickInside = current.contains(event.target)

        if (!isClickInside) {
          closeModal()
        }
      }

      close_button.addEventListener('click', closeModal)

      document.addEventListener('click', detectOutsideClick)

    })
  })


}

export default function() {
  const is_work_page = document.querySelector('body.page-template-work')

  if (is_work_page) {
    workInit()
  }
}