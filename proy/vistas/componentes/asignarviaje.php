
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
          <div>
                 
            

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Conductor y Bus:</label>
                 <select class="js-example-basic-single w-100" name="idAsignacion" id="idAsignacion">
                  <option selected>Seleccionar Condcutor y bus</option>
                 
                  <?php

                  $Busasignado = new AsignarViajeControladores();
                  $Busasignado -> SeleccioanarBusesAsignadosControlador();

                  ?>
                  
             
                  </select>  
                  </div>
                  </div>
                  </div>

                  
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Lugar de Partida:</label>
                 <select class="js-example-basic-single w-100" name="IdDestinoPartida" id="IdDestinoPartida">
                  <option selected>Seleccionar un lugar</option>

                  <?php

                     $LuagarPartida = new AsignarViajeControladores();
                     $LuagarPartida -> SeleccionarLugarPartida();

                  ?>
              
                  </select>  
                  </div>
                  </div>
                  </div>

                  
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Lugar de Destino:</label>
                 <select class="js-example-basic-single w-100" name="idDestinoLlegada" id="idDestinoLlegada">
                  <option selected>Seleccionar Destino</option>

                  <?php

                  $LugarDestino = new AsignarViajeControladores();
                  $LugarDestino -> SeleccionarLugarDestino();
       

                  ?>
              
                  </select>  
                  </div>
                  </div>
                  </div>
               
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Lugar de Destino:</label>
                 <select class="js-example-basic-single w-100" name="idHora" id="idHora">
                  <option selected>Seleccionar Destino</option>

                     <?php
                     $hora = new AsignarViajeControladores();
                     $hora -> SeleccionarHoraControlador();
                     ?>
                
                    
                  </select>
                  </div>
                  </div>
                  </div>

                <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Fecha de Asignacion:</label>
                     <input name="fechaasign" type="date" class="form-control">
                  </div>
                  </div>
                  </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" >Registrar</button>
          </div>
          </div> 
          </form>
          </div>
<?php
$InsertarAsignacionViaje = new AsignarViajeControladores();
$InsertarAsignacionViaje -> InsertarAsignacionViajeControlador();
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
