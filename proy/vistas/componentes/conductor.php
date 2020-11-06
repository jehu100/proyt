
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
              Registro de Conductor
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Datos del Conductor</b></h4><hr>
  </div>


          <form method="POST" enctype="multipart/form-data">
          <div>
          <div class="row">
						<div class="col-md-6">

                 
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="ci">cedula de Identidad</label>
                 <div class="position-relative has-icon-left">
                 <input name="ci" type="text" id="ci" class="form-control" placeholder="Cedula Identidad"  required="" title="Solo se deben escribir numeros" tabindex="1" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{5,10}">

                 </div>
                 </div>
                 </div>
                 </div>
                 

              
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Lugar de Expendio:</label>
                 <select class="js-example-basic-single w-100" name="idlugar" id="idlugar">
                  <option selected>Seleccion Lugar Expido CI</option>
                  <?php 
                    $Localidad = new ConductorControladores();
                    $Localidad -> SeleccionarLugarCiControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
               

                
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Nombre:</label>
                      <input name="nom" type="text" class="form-control">
                  </div>
                  </div>
                  </div>
                 
                  
               
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Apellido Paterno:</label>
                      <input name="ape_pater" type="text" class="form-control">
                  </div>
                  </div>
                  </div>
                

                
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Apellido Materno:</label>
                     <input name="ape_mater" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

               
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Direccion:</label>
                     <input name="dir" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

            
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Telefono:</label>
                     <input name="tel" type="text" class="form-control">
                  </div>
                  </div>
                  </div>
                 <div class="row">
                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Tipo de Sangre:</label>
                 <select class="js-example-basic-single w-100" name="idSangre" id="idSangre">
                  <option selected>Seleccionar Sangre</option>
                  <?php 
                    $Sangre = new ConductorControladores();
                    $Sangre -> SeleccioanarSangreControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
                    <div class="col-md-2">
                    <div class="col-md-12">
                     <br><button data-toggle="modal" data-target="#ModalInsertarLocalidad" type="button" class="btn btn-info top-right">
                     <i class="fas fa-plus mr-1"></i>
                     </button>
                     </div>
                     </div>
                  </div>

                

                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Nivel de Propiedad:</label>
                 <select class="js-example-basic-single w-100" name="idpropiedad" id="idpropiedad">
                  <option selected>Seleccionar Nivel de Propiedad</option>
                  <?php 
                    $Localidad = new NivelControladores();
                    $Localidad -> SeleccionarNivelControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
               

                 <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Fecha ingreso:</label>
                     <input name="fingreso" type="date" class="form-control">
                  </div>
                  </div>
                  </div>
                  </div>

              <div class="col-md-6">
							<h4 class="form-section">
								<i class="la la-arrow-right"></i> Foto Conductor
							</h4>
							<div class="col-md-12">
								<div class="heading-elements text-center mb-2">
									<img id="previsualizarConductor" class="circle img-fluid" src="vistas/recursos/imagenes/sinfoto/avatar-s-2.png" alt="avatar">
								</div>
									<div class="">
										<input type="file" class="" id="InputImages" name="CFoto">
									</div>
							</div>
              </div>
   

          </div> 
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" >Registrar</button>
          </div>
          </form>


  <div style="z-index: 1500;" class="modal fade text-left" id="ModalInsertarLocalidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary white">
        <h4 class="modal-title white"
          id="myModalLabel9"><i class="fas fa-plus mr-1"></i></i>Nuevo Tipo de Sangre</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" enctype="multipart/form-data">
        <div class="modal-body">
              Tipo de Sangre:
              <BR><BR>
               <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-briefcase-medical"></i></span>
                    </div>
                    <input name="Tipo" type="text" class="form-control" required="completa">
                  </div><br>
                  <div id="mensajeLocalidad"> </div>
              </div>   
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn grey btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Guardar</button>
        </div>
      </form>
    </div>
    <?php
        $insertarTipoSangre = new TipoSangreControaldores();
        $insertarTipoSangre -> InsertarTipoSangreControlador();
    ?> 
  </div>
</div>
  </div>
  </div>


<?php
$insertarconductor = new ConductorControladores();
$insertarconductor -> InsertarConductorControlador();
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
