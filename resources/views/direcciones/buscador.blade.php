  <!-- VISTA PARA LA BUSQUEDA DE DIRECCIONES DE LOS CLIENTES  -->
<div class="modal fade" id="buscardir" tabindex="-1" role="dialog" aria-labelledby="buscardir" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
      <h4 class="modal-title custom_align" id="Heading">Buscar Dirección</h4>
      </div>
        <div class="modal-body">
             <table class="table table-striped table-hover dark-grey">
                <thead>
                    <tr>
                        <th>Codigo Postal</th>
                        <th>País</th>
                        <th>Estado</th>
                        <th>Municipio/Provincia</th>
                        <th>Colonia.</th>
                        <th>Calle</th>
                        <th>Número</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($domicilios as $domicilio)
                    <tr class="activate" id="{{ $domicilio->id }}">
                        <td>{{ $domicilio->codigo_postal }} </td>
                        <td>{{ $domicilio->pais }} </td>
                        <td>{{ $domicilio->estado }} </td>
                        <td>{{ $domicilio->municipio }} </td>
                        <td>{{ $domicilio->colonia }} </td>
                        <td>{{ $domicilio->calle }} </td>
                        <td>{{ $domicilio->numero }} </td>
                        <td><button type="button" class="btn btn-primary" onclick="asignarDireccion(this)" data-dismiss="modal">Elegir</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 30%;" >Cerrar</button>
                </div>
              </div>
        <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
  
