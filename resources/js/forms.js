import validationForm from './lib/validate'

function onInput(event, otherValue) {
  const input = event.target
  const error = validationForm(input, otherValue)
  if (error) {
    input.setCustomValidity(error)
    input.reportValidity()
    input.nextElementSibling.style = 'display: block;'
    input.nextElementSibling.textContent = error
  } else {
    input.nextElementSibling.style = 'display: none;'
    input.nextElementSibling.textContent = ''
    input.setCustomValidity('')
    input.reportValidity()
  }
}

document.getElementsByName('name')[0].addEventListener('input', onInput)
document.getElementsByName('lastName')[0].addEventListener('input', onInput)
document.getElementsByName('secondLastName')[0].addEventListener('input', onInput)
document.getElementsByName('phone')[0].addEventListener('input', onInput)
document.getElementsByName('keyOne')[0].addEventListener('input', onInput)
document.getElementsByName('keyTwo')[0].addEventListener('input', onInput)
document.getElementsByName('email')[0].addEventListener('input', onInput) 
document.getElementsByName('street')[0].addEventListener('input', onInput) 
document.getElementsByName('outdoor')[0].addEventListener('input', onInput) 
document.getElementsByName('interior')[0].addEventListener('input', onInput) 
document.getElementsByName('suburb')[0].addEventListener('input', onInput) 
document.getElementsByName('password')[0].addEventListener('input', onInput) 
document.getElementsByName('password_confirmation')[0].addEventListener('input', function (event) {
  onInput(event, document.getElementsByName('password')[0].value)
}) 
