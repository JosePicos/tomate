function validaCodigoPostal(obj){
  var codigoPostal = obj.value;
  var validaCodigo = new RegExp('([0-9]{5})');
  var matchArray = codigoPostal.match(validaCodigo);
  if (matchArray == null){
    alert('Error: el campo Codigo Postal debe estar formado por 5 dígitos numéricos');
    obj.value = "";
  }
}

function validaNombre(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8,46,13];

  tecla_especial = false;
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}