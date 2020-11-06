
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
holaaa
<button data-toggle="modal" data-target="#ModalInsertarCargo" type="button" class="btn btn-info top-right">
                      <i class="fas fa-plus mr-1"></i></button>
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
                      <input name="UICargoDescripcion" type="text" id="timesheetinput2" class="form-control" placeholder="Descripcion del nuevo Cargo" required="" title="Solo se debe escribir letras" tabindex="1" autocomplete="off" size="50" maxlength="50" style="text-transform: capitalize;" pattern="[A-Za-zÁ-Úá-úÑñ]{1,50}">
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
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:vistas/recursos/partials/_footer.html -->
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