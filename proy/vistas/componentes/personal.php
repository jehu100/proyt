
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
              Registro de Personal
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Datos Personales</b></h4><hr>
  </div>



 <form method="post" enctype="multipart/form-data" id="ModalInsertarUsuario" >
        <div class="modal-body">
          
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
<?php 
  $RegistrarPersonal = new PersonalControladores();
  $RegistrarPersonal -> InsertarPersonalControlador();
 ?>

<?php
$InsertarAyudante = new AyudanteControladores();
$InsertarAyudante -> InsertarAyudanteControlador();
?>   

<?php
  $Footer = new FuncionesControladores();
  $Footer -> FooterControlador();
?>
    </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
