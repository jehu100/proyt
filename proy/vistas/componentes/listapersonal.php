
<?php
    $Validar = new FuncionesControladores();
    $Validar -> ValidarSessionControlador();
?>
<body>
  <div class="container-scroller">
    <!-- partial:vistas/recursos/partials/_navbar.html -->
<?php
	$NavBar = new FuncionesControladores();
	$NavBar -> NavBarControlador();
?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:vistas/recursos/partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:vistas/recursos/partials/_sidebar.html -->
<?php
	$Sidebar = new FuncionesControladores();
	$Sidebar -> SidebarControlador();
?>
      <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Personal de la Empresa
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Registrar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Personal</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <button data-toggle="modal" data-target="#ModalInsertarUsuario" type="button" class="btn btn-info top-right">
                  <i class="fas fa-user-plus mr-1"></i>Nuevo Personal
              </button><br><hr><br>
              <h4 class="card-title"><i class="fas fa-list mr-1"></i> Lista de Personal</h4>
              
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing"  class="table">
                     <thead >
                        <tr>
                          <th>Nº</th>
                          <th>C.I.</th>
                          <th>Nombre</th>
                          <th>Direccion</th>
                          <th>Celular - Telefono</th>
                          <th>Sexo</th>
                          <th>Cargo</th>
                          <th>F. Ingreso</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                              $ListaPersonales = new PersonalControladores();
                              $ListaPersonales -> ListaPersonalesControlador();
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nº</th>
                          <th>C.I.</th>
                          <th>Nombre</th>
                          <th>Direccion</th>
                          <th>Celular - Telefono</th>
                          <th>Sexo</th>
                          <th>Cargo</th>
                          <th>F. Ingreso</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- END: Contenedor-->
<!-- Modal Insertar Usuario -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalInsertarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h4 class="modal-title white" style="color: white;"
          id="myModalLabel9"><i class="fas fa-user-plus mr-1"></i> Nuevo Personal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <h4 class="form-section">
                <i class="la la-arrow-right"></i> Datos personales
              </h4><br>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="alert alert-success" role="alert">
                     <strong>Nota muy Importante!!! </strong> Tomar en cuenta que el Usuario y la Contraseña para el inicio de sesion seran Usuario: <strong>Primer Apellido</strong>, Contraseña: <strong>Nro de Cedula de Identidad.</strong>
                  </div>
                </div>
              </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="PRApellidoPaterno">Apellido Paterno</label>
                  <div class="position-relative has-icon-left">
                    <input name="UIApellidoPaterno" type="text" id="PRApellidoPaterno" class="form-control" placeholder="Apellido Paterno" required="" title="Solo se debe escribir letras" tabindex="1" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ]{1,50}">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="PRApellidoMaterno">Apellido Materno</label>
                  <div class="position-relative has-icon-left">
                    <input name="UIApellidoMaterno" type="text" id="PRApellidoMaterno" class="form-control" placeholder="Apellido Materno" required="" title="Solo se debe escribir letras" tabindex="2" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ]{1,50}">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timesheetinput2">Nombres</label>
                  <div class="position-relative has-icon-left">
                    <input name="UINombres" type="text" id="timesheetinput2" class="form-control" placeholder="Nombres"  required="" title="Solo se debe escribir letras" tabindex="3" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{1,50}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="ValidarCI">Cedula Identidad</label>
                      <div class="position-relative has-icon-left">
                        <input name="UICI" type="text" id="ValidarCI" class="form-control" placeholder="Cedula Identidad"  required="" title="Solo se deben escribir numeros" tabindex="3" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                      </div>
                      <div id="MessageCI"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="col-md-12">
                    <div class="form-group">
                      <label for="timesheetinput2">Expedicion</label>
                      <div class="position-relative has-icon-left">
                        <select class="form-control" name="UIExpedicion" id="" tabindex="4" >
                          <option disabled selected value="" tabindex="4">Expedicion</option>
                          <option value="OR.">ORURO (OR.)</option>
                          <option value="CB.">COCHABAMBA (CB.)</option>
                          <option value="SC.">SANTA CRUZ (SC.)</option>
                          <option value="BN.">BENI (BN.)</option>
                          <option value="LP.">LA PAZ (LP.)</option>
                          <option value="TR.">TARIJA (TR.)</option>
                          <option value="PN.">PANDO (PN.)</option>
                          <option value="PT.">POTOSI (PT.)</option>
                          <option value="CH.">CHUQUISACA (CH.)</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timesheetinput2">Direccion</label>
                  <div class="position-relative has-icon-left">
                    <input name="UIDireccion" type="text" id="timesheetinput2" class="form-control" placeholder="Direccion"  required="" title="Solo escribir letras" tabindex="5" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{1,50}">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timesheetinput2">Celular</label>
                  <div class="position-relative has-icon-left">
                    <input name="UICelular" type="text" id="timesheetinput2" class="form-control" placeholder="Celular" required="" title="Solo se deben escribir numeros" tabindex="6" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}" >
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timesheetinput2">Telefono</label>
                  <div class="position-relative has-icon-left">
                    <input name="UITelefono" type="text" id="timesheetinput2" class="form-control" placeholder="Telefono" title="Solo se deben escribir numeros" tabindex="7" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}" >
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timesheetinput2">Sexo</label>
                  <div class="position-relative has-icon-left">
                    <select class="form-control" name="UISexo" id="">
                      <option disabled selected value="" tabindex="8">Sexo</option>
                      <option value="M">MASCULINO</option>
                      <option value="F">FEMENINO</option>
                    </select>
                  </div>
                </div>
              </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="timesheetinput2" >Cargo</label>
                      <div class="position-relative has-icon-left">
                        <select class="form-control" name="UICargo" id="">
                          <option disabled selected value="" tabindex="9">Cargo</option>
                          <?php 
                            $cargo = new CargoControladores();
                            $cargo -> ListaCargoControlador();
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          <button  class="btn btn-primary"><i class="fas fa-check-circle"></i> Insertar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php 
  $RegistrarPersonal = new PersonalControladores();
  $RegistrarPersonal -> InsertarPersonalControlador();
 ?>


<!-- Modal nuevo cargo -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalInsertarCargo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary white">
        <h4 class="modal-title white"
          id="myModalLabel9"><i class="fas fa-user mr-1"></i><i class="fas fa-pencil-alt"></i> Nuevo Cargo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
              Descripcion del nuevo cargo:
              <BR><BR>
               <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                      <input name="UICargoDescripcion" type="text" id="timesheetinput2" class="form-control" placeholder="Descripcion del nuevo Cargo" required="" title="Solo se debe escribir letras" tabindex="1" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{1,50}">
                  </div>
              </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-outline-success"><i class="fas fa-check"></i> Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php 
  $RegistrarCargo = new CargoControladores();
  $RegistrarCargo -> InsertarCargoControlador();
 ?>


<!-- Modal Editar Usuario -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h4 class="modal-title white" style="color: white;"
          id="myModalLabel9"><i class="fas fa-user mr-1"></i><i class="fas fa-pencil-alt"></i> Editar Personal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
              <h4 class="form-section">
                <i class="la la-arrow-right"></i> Datos personales
              </h4><BR>
              <input type="text" id="IdPersonal" name="IdPersonal" hidden="true" >
               <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                      <input name="perCi" type="text" id="perCi" class="form-control" placeholder="Cedula Identidad" disabled="true" required="" title="Solo escribir letras" tabindex="1" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="perPaterno" type="text" id="perPaterno" class="form-control" placeholder="Apellido Paterno" required="" title="Solo debe escribir letras" tabindex="2" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="perMaterno" type="text" id="perMaterno" class="form-control" placeholder="Apellido Materno" required="" title="Solo debe escribir letras" tabindex="3" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                     <input name="perNombre" type="text" id="perNombre" class="form-control" placeholder="Nombres" required="" title="Solo debe escribir letras" tabindex="4" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    </div>
                     <input name="perDireccion" type="text" id="perDireccion" class="form-control" placeholder="Direccion" required="" title="Solo debe escribir letras" tabindex="5" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                    </div>
                     <input name="perCelular" type="text" id="perCelular" class="form-control" placeholder="Celular" required="" title="Solo escribir numeros" tabindex="6" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                     <input name="perTele" type="text" id="perTele" class="form-control" placeholder="Telefono" title="Solo escribir numeros" tabindex="7" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                  </div>
              </div> 
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="perCargo" type="text" id="perCargo" class="form-control" placeholder="Cargo" required="" title="Solo debe escribir letras" tabindex="8" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                      <input type="text" id="IdCargo" name="IdCargo" hidden="true" >
                  </div>
              </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          <button  class="btn btn-primary"><i class="fas fa-check-circle"></i> Actualizar</button>
<?php 
  $ActualizarPersonal = new PersonalControladores();
  $ActualizarPersonal -> ActualizarPersonalControlador();
 ?>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal eliminar personal -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalEliminarPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header white">
        <h4 class="modal-title white" 
          id="myModalLabel9"><i class="fas fa-trash"></i> Eliminar!!!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
              <center><h4>Esta seguro que desea eliminar este registro?</h4>
                <img src="vistas/recursos/images/eliminar.jpg" width="100px" height="100px" alt="image"/>
              </center>
              <BR><BR>
               <div class="form-group">
                  <div class="input-group"> 
                      <input type="hidden" id="EIdPersonal"  class="form-control" name="EIdPersonal">
                  </div>
                  <div class="input-group" id="PEliminar"> 
                      
                  </div>
              </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-outline-success"><i class="fas fa-check"></i> Eliminar</button>
<?php 
  $EliminarPersonal = new PersonalControladores();
  $EliminarPersonal -> EliminarLogicaPersonalControlador();
 ?>

        </div>
      </form>
    </div>
  </div>
</div>

<?php
	$Footer = new FuncionesControladores();
	$Footer -> FooterControlador();
?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>