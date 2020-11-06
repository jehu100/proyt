
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
              Usuario
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Registrar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuario</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="media">
                <?php 
                if ($_SESSION["nivel"]==1) {
                ?>
              <img class="mr-3 w-5 rounded" style="height:200px; width: 150px" src="vistas/recursos/images/faces/1.jpg" alt="profile"/>
                    <?php 
              }
               ?>
                <?php 
                if ($_SESSION["nivel"]==2) {
                ?>
              <img class="mr-3 w-5 rounded" style="height:200px; width: 150px" src="vistas/recursos/images/faces/2.jpg" alt="profile"/>
                    <?php 
              }
               ?>
                        <div class="media-body">
                          <h5 class="mt-0">Datos del Usuario</h5><br>
                          <form method="post" enctype="multipart/form-data">
                          <input type="text" id="codPersonal" name="codPersonal" value="<?php echo $_SESSION["codPersonal"]?>" hidden="true">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label for="UUsuario">Usuario ( Si desea cambiar su Nombre de Usuario introduzca <STRONG>AQUI</STRONG> )</label>
                                <div class="position-relative has-icon-left">
                                  <input name="UUsuario" type="text" id="UUsuario" class="form-control" placeholder="Nombre Completo" required="" title="Solo se debe escribir letras" tabindex="1" autocomplete="off" size="50" maxlength="20" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{3,20}" value="<?php echo $_SESSION["apellidoPaterno"]?>">
                                </div>
                              </div>
                            </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label for="UContra">Contraseña</label>
                                    <div class="position-relative has-icon-left">
                                      <input name="UContra" type="password" id="UContra" class="form-control" placeholder="Contraseña Anterior"  required="" title="Se puede escribir numeros o letras" tabindex="2" autocomplete="off" size="10" maxlength="10">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label for="UNuevaContra">Nueva Contraseña</label>
                                    <div class="position-relative has-icon-left">
                                      <input name="UNuevaContra" type="password" id="UNuevaContra" class="form-control" placeholder="Nueva Contraseña"  required="" title="Se puede escribir numeros o letras mas de 5 caracteres" tabindex="3" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ0-9 ]{5,10}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label for="UConfirmarContra">Confirmar Contraseña</label>
                                    <div class="position-relative has-icon-left">
                                      <input name="UConfirmarContra" type="password" id="UConfirmarContra" class="form-control" placeholder="Repita nueva contraseña"  required="" title="Se puede escribir numeros o letras mas de 5 caracteres" tabindex="4" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ0-9 ]{5,10}">
                                    </div>
                                  </div>
                                </div>

                            <div class="col-md-8">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><i class="fa fa-sign-in-alt"></i> Cambiar Datos</button>
                </div>
              </form>
              <?php
                   $CambiarContra = new UsuarioControladores();
                  $CambiarContra -> CambiarUsuarioControlador();
              ?>
                        </div>
                      </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- END: Contenedor-->


<!-- Modal Editar Cliente Personal -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalEditarClientePersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h4 class="modal-title white" style="color: white;"
          id="myModalLabel9"><i class="fas fa-user mr-1"></i><i class="fas fa-pencil-alt"></i> Editar Cliente </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
              <h4 class="form-section">
                <i class="la la-arrow-right"></i> Datos personales
              </h4><BR>
              <input type="text" id="IdCliente" name="IdCliente" hidden="">
               <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                      <input name="cliCi" type="text" id="cliCi" class="form-control" placeholder="Cedula Identidad" disabled="true" required="" title="Solo escribir letras" tabindex="1" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="cliNombres" type="text" id="cliNombres" class="form-control" placeholder="Nombres o Razon Social" required="" title="Solo debe escribir letras" tabindex="2" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="cliTipo" type="text" disabled="true" id="cliTipo" class="form-control" placeholder="Tipo de Cliente" required="" title="Solo debe escribir letras" tabindex="3" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    </div>
                     <input name="cliDireccion" type="text" id="cliDireccion" class="form-control" placeholder="Direccion" required="" title="Solo debe escribir letras" tabindex="5" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ ]{5,50}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                    </div>
                     <input name="cliCelular" type="text" id="cliCelular" class="form-control" placeholder="Celular" required="" title="Solo escribir numeros" tabindex="6" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
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