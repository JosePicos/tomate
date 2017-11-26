 <!-- VISTA PARA LA EDICION DE LOS CATALAGOS  -->
       <form action="{{ url('/cliente/guardar') }}" method="POST">
          {{ csrf_field() }} 
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editar" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title custom_align" id="Heading">NUEVO CLIENTE</h4>
              </div>
                <div class="modal-body">
                  <div class="form-group">
                 <!-- Tipo de Contribuyente  -->
                  <div class="form-group"> 
                    <div class="col-md-6 selectContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                          <select name="tipo_contribuyente" class="form-control selectpicker"
                           onchange="habilitarCamposCliente(this)" required="true">
                            <option value="" >Seleccione Tipo de Contribuyente</option>
                            <option value="PM">Persona Moral</option>
                            <option value="PF">Persona Fisica</option>
                          </select>
                      </div>
                    </div>
                  </div>

                  <!-- Codigo -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
                        <input value="{{ $codigo }}" name="codigo" placeholder="Código" class="form-control" type="text"
                         readonly="readonly" required>
                      </div>
                    </div>
                  </div>
          
                  <!-- Razon Social -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="razon_social" placeholder="Razón Social" class="form-control"  type="text" 
                         onkeypress="return validaRazonSocial(event)">
                      </div>
                    </div>
                  </div>

                  <!-- Nombre -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="nombre" placeholder="Nombre" class="form-control"  type="text" 
                         onkeypress="return validaNombre(event)">
                      </div>
                    </div>
                  </div>
                  
                  <!-- Apellidos  -->
                  <!--  Apellido Paterno  -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="apellido_paterno" placeholder="Apellido Paterno" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>
                  
                  <!-- Apellido Materno -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="apellido_materno" placeholder="Apellido Materno" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!--  RFC -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="rfc" onblur="validaRFC(this)" placeholder="RFC" class="form-control"  type="text" 
                        style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                      </div>
                    </div>
                  </div>

                  <!-- Calle -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="calle" placeholder="Calle" class="form-control"  type="text" required>
                      </div>
                    </div>
                  </div>

                  <!-- Numero Exterior -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="numero_exterior" placeholder="Numero Exterior" class="form-control"  type="number" required>
                      </div>
                    </div>
                  </div>

                  <!-- Numero Interior -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="numero_interior" placeholder="Numero Interior" class="form-control"  type="number">
                      </div>
                    </div>
                  </div>

                  <!-- Colonia -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="colonia" placeholder="Colonia" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Codigo Postal -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="codigo_postal" onblur="validaCodigoPostal(this)" placeholder="Código Postal" class="form-control"  type="number" required>
                      </div>
                    </div>
                  </div>

                  <!-- Localidad -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="localidad" placeholder="Localidad" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Estado -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="estado" placeholder="Estado" class="form-control"  type="text"
                        required>
                      </div>
                    </div>
                  </div>

                  <!-- Pais -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="pais" placeholder="Pais" class="form-control"  type="text"
                        required>
                      </div>
                    </div>
                  </div>

                  <!-- EMAIL -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="EMAIL" class="form-control"  type="email"
                        required>
                      </div>
                    </div>
                  </div>

                  <!-- NUMEROS TELEFONICOS -->
                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input name="celular" placeholder="Celular" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                        <input name="telefono" placeholder="Telefono" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-success btn-lg" style="width: 100%;">
                <span class="glyphicon glyphicon-ok-sign"></span> GUARDAR DATOS
              </button>
            </div>
          </div>
          <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
        </div>
      </form>