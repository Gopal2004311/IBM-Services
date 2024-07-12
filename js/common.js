let url = window.location.href
let nav = document.querySelectorAll('#nav-links ul li a')
if (url.includes('index.php')) {
  nav[0].style.color = '#236bf1'
} else if (url.includes('about.php')) {
  nav[3].style.color = '#236bf1'
} else if (url.includes('products.php')) {
  nav[1].style.color = '#236bf1'
} else if (url.includes('evaluation.php')) {
  nav[2].style.color = '#236bf1'
} else {
  nav[0].style.color = '#236bf1'
}
