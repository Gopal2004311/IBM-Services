let previous = document.getElementById('previous-btn')
let next = document.getElementById('next-btn')
let container = document.getElementById('project-container')

previous.addEventListener('click', e => {
  e.preventDefault()
  container.scrollBy({
    left: -200,
    behavior: 'smooth'
  })
})

next.addEventListener('click', e => {
  e.preventDefault()
  container.scrollBy({
    left: 200,
    behavior: 'smooth'
  })
})
function scrolling () {
  let containerWidth = container.clientWidth
  let scrollWidth = container.scrollWidth
  let scrollLeft = container.scrollLeft

  if (scrollLeft + containerWidth >= scrollWidth) {
    container.scrollBy({
      left: -200,
      behavior: 'smooth'
    })
    container.scrollLeft = 0
  } else {
    container.scrollBy({
      left: 200,
      behavior: 'smooth'
    })
  }
}

scrolling.data = 0
setInterval(() => {
  scrolling()
}, 2000)
