function limitarCaracter(element, numero_de_Caracter) {
  var max_chars = numero_de_Caracter;
  if(element.value.length > max_chars) {
      element.value = element.value.substr(0, max_chars);
  }
}

function codigo_mayusculas(letra) {
  letra.value = letra.value.toUpperCase();
}