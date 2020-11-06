
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
              Registro de Bus
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Datos del Nuevo Bus</b></h4><hr>
  </div>


          <form method="POST" enctype="multipart/form-data">
          <div>
          <div class="row">
						<div class="col-md-6">
							

                
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Numero de Placa:</label>
                      <input name="placa" type="text" class="form-control">
                  </div>
                  </div>
             
                  
               
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Marca del Bus:</label>
                      <input name="marca" type="text" class="form-control">
                  </div>
                  </div>
               

                 
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Modelo de Bus:</label>
                     <input name="modelo" type="text" class="form-control">
                  </div>
                  </div>
                 

                 
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Capacidad:</label>
                     <input name="capacidad" type="text" class="form-control">
                  </div>
                  </div>
                

                 
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Propietario:</label>
                 <select class="js-example-basic-single w-100" name="idConductor" id="idConductor">
                  <option selected>Seleccionar Propietraio</option>
                  <?php 
                    $PropietarioConductor = new BusControladores();
                    $PropietarioConductor -> SeleccionarPropietarioConductorControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                
               
                
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Fecha ingreso:</label>
                     <input name="fecha" type="date" class="form-control">
                  </div>
                  </div>
                  </div>

              <div class="col-md-6">
							<h4 class="form-section">
								<i class="la la-arrow-right"></i> Foto Bus
							</h4>
							<div class="col-md-12">
								<div class="heading-elements text-center mb-2">
									<img id="previsualizarUsuario" class="circle img-fluid" src="vistas/recursos/imagenes/sinfoto/avatar-s-2.png" alt="avatar">
								</div>
									<div class="">
										<input type="file" class="" id="InputImage" name="Foto">
									</div>
							</div>
              </div>

          </div> 
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" >Registrar</button>
          </div>
          </div> 
          </div> 
          </form>
          </div>
<?php
$InsertarBus = new BusControladores();
$InsertarBus -> InsertarBusControlador();
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
