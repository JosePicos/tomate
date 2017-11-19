 
function habilitarCamposCliente(obj) { 
  var hab; 
  var frm=obj.form; 
  var index=obj.selectedIndex; 
  if (index==1) hab=true; 
  else if (index==2) hab=false;
  frm.razon_social.readOnly=!(hab); 
  frm.nombre.readOnly=hab; 
  frm.apellido_paterno.readOnly=hab; 
  frm.apellido_materno.readOnly=hab;
  frm.razon_social.required=hab; 
  frm.nombre.required=!(hab); 
  frm.apellido_paterno.required=!(hab); 
  frm.apellido_materno.required=!(hab);
  if (hab){
  	frm.nombre.value = "";
  	frm.apellido_paterno.value = "";
  	frm.apellido_materno.value = "";
  }else{
  	frm.razon_social.value = "";
  } 
}

function validaRFC(obj) {
  var frm = obj.form;
  var rfcStr = frm.rfc.value;
  var index = frm.tipo_contribuyente.selectedIndex; 
  var valida = "";
  if (index == 0){
    alert('Seleccione tipo de contribuyente');
    return;
  }
  if (index == 1){
    valida = '^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
  }else{
    valida = '^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
  }
  var validRfc = new RegExp(valida);
  var matchArray = rfcStr.match(validRfc);
  if (matchArray == null){
    if (index == 1){
      alert('Error: el campo RFC debe contener 12 caracteres y cumplir con el formato especificado por el SAT');  
      frm.rfc.value = "";
    }
    else{
      alert('Error: el campo RFC debe contener 13 caracteres y cumplir con el formato especificado por el SAT');  
      frm.rfc.value = "";
    }
  }
}

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

function validaRazonSocial(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789";
  especiales = [8,39,45,46,13];

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
