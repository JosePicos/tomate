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

function agregarProducto(producto)
{
  var n = document.getElementById("detalle").rows.length;
  
  $('#detalle > tbody:last-child').append(
    '<tr id="fila'+n+'" class="activate">'+
    '<td><input name="id[]" value="'+producto.id+'" readonly></input></td>'+
    '<td><input name="descripcion[]" value="'+producto.descripcion+'" readonly></input></td>'+
    '<td><input name="cantidad[]" type="number" min="1" value="1"></input>'+
    '<td><button type="submit" class=" form-control btn btn-danger" onclick="eliminarPartida(this.parentNode.parentNode.id)"><span class="glyphicon glyphicon-remove"></span></button></td>'+
    '</tr>'
    );
}

function eliminarPartida(id) 
{
  $("#"+id).remove();
} 

function asignarDireccion(obj)
{
  var codigo_postal = $(obj).parents("tr").find("td").eq(0).html();
  var pais = $(obj).parents("tr").find("td").eq(1).html();
  var estado = $(obj).parents("tr").find("td").eq(2).html();
  var municipio = $(obj).parents("tr").find("td").eq(3).html();
  var colonia = $(obj).parents("tr").find("td").eq(4).html();
  var calle = $(obj).parents("tr").find("td").eq(5).html();
  var numero  = $(obj).parents("tr").find("td").eq(6).html();

  var formulario = document.requisicion;
  formulario.codigo_postal.value = codigo_postal;
  formulario.pais.value = pais;
  formulario.estado.value = estado;
  formulario.municipio.value = municipio;
  formulario.colonia.value = colonia;
  formulario.calle.value = calle;
  formulario.numero.value = numero;
}