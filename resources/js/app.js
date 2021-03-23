require('./bootstrap');

const $toogleButton = document.getElementById('toogle-button')
const $open = document.getElementById('open')
const $close = document.getElementById('close')
const $navigation = document.getElementById('navigation')     
const $overlay = document.getElementById('overlay')

$toogleButton.addEventListener('click', function () {
  if ($toogleButton.checked) {
    $open.classList.add('hidden')
    $close.classList.remove('hidden')
    $overlay.classList.remove('hidden')
    $navigation.classList.remove('hidden')
  } else {
    $open.classList.remove('hidden')
    $close.classList.add('hidden')
    $overlay.classList.add('hidden')
    $navigation.classList.add('hidden')
  }
  $navigation.classList.toggle('transform')
  $navigation.classList.toggle('translate-x-72')
})