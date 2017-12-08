function validarNombre(e)
{
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8,46,13];

  tecla_especial = false;
  for (var i in especiales) {
    if (key == especiales[i]) {
       tecla_especial = true;
       break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial) {
     return false;
  }
}

function validarFecha(obj)
{
  var fecha = new Date(obj.value);
  var fechaActual = new Date();
  
  if (fecha > fechaActual) {
      obj.value = "";
      alert('La fecha de corte no puede ser mayor a la fecha actual');
  } 
}