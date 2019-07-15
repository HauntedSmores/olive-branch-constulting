import Glide from '@glidejs/glide'

export default function() {
  const sliders = Array.from(document.querySelectorAll('.glide'))
  sliders.forEach(slider => new Glide(slider).mount())
}