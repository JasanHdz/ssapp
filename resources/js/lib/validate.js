function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  if (!re.test(String(email).toLowerCase())) return 'Email no valido'
  return ''
}

function validatePassword(password) {
  if (!password.match(/^([a-zA-Z0-9]{6,})$/)) return 'Al menos 7 caracteres'
  return ''
}

function validateName(name) {
  if (/[^A-Za-z\s\ñ\é\í\ó\ú\á\Á\É\Í\Ó\Ú]+/g.test(name)) return 'Solo letras sin caracteres especiales'
  if(name.length > 44) return 'Máximo 44 caracteres'
  return ''
}

function validateIsNumber(string = '') {
  if (isNaN(string)) return 'Solo números'
  if(string.length < 10 || string.length > 10) return 'El número debe ser de 10 digitos'
  return ''
}

function validateAlphanumeric(string) {
  if(!/^[A-Za-z\s\ñ\é\í\ó\ú\á\Á\É\Í\Ó\Ú0-9\.]*$/g.test(string)) return 'Solo datos alphanumericos'
  if(string.length > 44) return 'Máximo 44 caracteres'
  return ''
}

const validateConfirmEmail = (oldPassword, password) => {
  if(oldPassword !== password) return 'La contraseña no es igual a la anterior'
  return ''
}


function validationForm(input, otherValue) {
  const { name, value } = input
  switch (name) {
    case 'name': 
      return validateName(value)
    case 'lastName': 
      return validateName(value)
    case 'secondLastName': 
      return validateName(value)
    case 'phone': 
      return validateIsNumber(value)
    case 'email':
      return validateEmail(value)
    case 'keyOne':
      return validateIsNumber(value)
    case 'keyTwo':
      return validateAlphanumeric(value)
    case 'email':
      return validateIsNumber(value)
    case 'street':
      return validateAlphanumeric(value)
    case 'outdoor':
      return validateIsNumber(value)
    case 'interior':
      return validateIsNumber(value)
    case 'suburb':
      return validateAlphanumeric(value)
    case 'password':
      return validatePassword(value)
    case 'password_confirmation':
      return validateConfirmEmail(otherValue, value)
    default:
      return ''
  }
}

export default validationForm