
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
              Registro de Asignacion de Bus
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Asignar bus</b></h4><hr>
  </div>
  <form method="POST">
  <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="col-md-12">
                    <h4 class="card-title"><i class="fas fa-list mr-1"></i> Lista de Conductores No Asigandos</h4>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="col-md-12">
                    <button data-toggle="modal" data-target="#ModalInsertarCategoria" type="button" class="btn btn-info top-right">
                      <i class="fas fa-plus mr-1"></i>Nueva Categoria
                    </button><br><br>
                  </div>
                </div>
              </div>      
                  <div class="table-responsive">
                    <table class="table table-hover" id="tCategoria">
                      <thead>
                        <tr>
                          <th>Nro.</th>
                          <th>CI</th>
                          <th>NOMBRE APELLIDOS</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php
                              $Lista = new ConductorControladores();
                              $Lista -> ListaNoAsigandosControlador();
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nro.</th>
                          <th>CI</th>
                          <th>NOMBRE APELLIDOS</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>

                <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                 <b><label for="message-text" class="control-label">Conductor:</label></b>
                 <select class="js-example-basic-single w-100" name="idConductor" id="idConductor">
                  <option selected>Seleccionar Conductor</option>
                  <?php 
                    $Conductor = new AsignarBusControladores();
                    $Conductor -> SeleccioanarConductorControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>

              </div>
            </div>

         
                  
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="row">
                <div class="col-md-8">
                  <div class="col-md-12">
                    <h4 class="card-title"><i class="fas fa-list mr-1"></i> Lista de Ayudantes No Asignados</h4>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="col-md-12">
                    <button data-toggle="modal" data-target="#ModalInsertarCargo" type="button" class="btn btn-info top-right">
                     <i class="fas fa-plus mr-1"></i>Nuevo Cargo
                    </button><br><br>
                  </div>
                </div>
              </div> 
                  
                  <div class="table-responsive">
                    <table class="table table-hover" id="tCargo">
                      <thead>
                        <tr>
                          <th>Nro.</th>
                          <th>CI</th>
                          <th>NOMBRE APELLIDOS</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                              $ListaAyudante = new AyudanteControladores();
                              $ListaAyudante -> ListaAyudanteNoAsigandosControlador();
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nro.</th>
                          <th>CI</th>
                          <th>NOMBRE APELLIDOS</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
            </div>

            <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                <b><label for="message-text" class="control-label">Ayudante:</label></b> 
                 <select class="js-example-basic-single w-100" name="idAyudante" id="idAyudante">
                  <option selected>Seleccionar Propietraio</option>
                  <?php 
                    $Ayudante = new AsignarBusControladores();
                    $Ayudante -> SeleccioanarAyudanteControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
                </div>
                
              </div>
              
              <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="col-md-12">
                    <h4 class="card-title"><i class="fas fa-list mr-1"></i> Lista de Buses No Asigandos</h4>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="col-md-12">
                    <button data-toggle="modal" data-target="#ModalInsertarCategoria" type="button" class="btn btn-info top-right">
                      <i class="fas fa-plus mr-1"></i>Nueva Categoria
                    </button><br><br>
                  </div>
                </div>
              </div> 
                
                  <div class="table-responsive">
                    <table class="table table-hover" id="tCategoria">
                      <thead>
                        <tr>
                          <th>Nro.</th>
                          <th>PLACA</th>
                          <th>MARCA</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php
                              $Listabus = new BusControladores();
                              $Listabus -> ListaBusNoAsigandosControlador();
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nro.</th>
                          <th>PLACA</th>
                          <th>MARCA</th>
                          <th>ASIGNADO</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>

                <div class="col-md-9">
                 <div class="col-md-12">
                 <div class="form-group">
                <b><label for="message-text" class="control-label">Bus:</label></b> 
                 <select class="js-example-basic-single w-100" name="idBus" id="idBus">
                  <option selected>Seleccionar Propietraio</option>
                  <?php 
                    $Bus = new AsignarBusControladores();
                    $Bus -> SeleccioanarBusControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>

              </div>
            </div>
            
          </div>

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Fecha ingreso:</label>
                     <input name="fechaAsignacion" type="date" class="form-control">
                  </div>
                  </div>
                  </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" >Registrar</button>
          </div>
           
          </form>
          </div>
<?php
$InsertarAsignacion = new AsignarBusControladores();
$InsertarAsignacion -> InsertarAsignacionBusControlador();
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
