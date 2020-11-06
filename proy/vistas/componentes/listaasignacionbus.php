
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
                          <th>CONDUCTOR NOMBRE</th>
                          <th>BUS</th>
                          <th>AYUDANTE NOMBRE</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $ListaBusesAsignados = new AsignarBusControladores();
                          $ListaBusesAsignados -> ListaBusesAsigandosControlador();
                          ?>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Nº</th>
                          <th>CONDUCTOR NOMBRE</th>
                          <th>BUS</th>
                          <th>AYUDANTE NOMBRE</th>
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

  <!-- Modal Editar Usuario -->
<div style="z-index: 1500;" class="modal fade text-left" id="ModalEditarBus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h4 class="modal-title white" style="color: white;"
          id="myModalLabel9"><i class="fa fa-bus mr-1"></i><i class="fas fa-pencil-alt"></i> Editar Bus</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
              <h4 class="form-section">
                <i class="la la-arrow-right"></i> Datos Bus
              </h4><BR>
              <input type="text" id="idBuss" name="idBuss" hidden="true" >
               <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-bus"></i></span>
                    </div>
                      <input name="busplaca" type="text" id="busplaca" class="form-control" placeholder="Placa del Bus">
                  </div>
              </div>
            
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                      <input name="busmarca" type="text" id="busmarca" class="form-control" placeholder="Marca" required="" title="Solo debe escribir letras" tabindex="3" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                     <input name="busmodelo" type="text" id="busmodelo" class="form-control" placeholder="Modelo" required="" title="Solo debe escribir letras" tabindex="4" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    </div>
                     <input name="buscapacidad" type="text" id="buscapacidad" class="form-control" placeholder="Capacidad" required="" title="Solo debe escribir letras" tabindex="5" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;">
                  </div>
              </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          <button  class="btn btn-primary"><i class="fas fa-check-circle"></i> Actualizar</button>
<?php 
  //$ActualizarBus = new BusControladores();
  //$ActualizarBus -> ActualizarBusControlador();
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