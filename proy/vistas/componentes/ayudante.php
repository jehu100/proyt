
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
              Registro de Ayudante
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Datos del Ayudante</b></h4><hr>
  </div>


          <form method="POST">
          <div>
                 

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Numero de CI:</label>
                      <input name="Aci" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Lugar:</label>
                 <select class="js-example-basic-single w-100" name="idlugar" id="idlugar">
                  <option selected>Seleccionar Propietraio</option>
                  <?php 
                    $SeleccionarLugar = new AyudanteControladores();
                    $SeleccionarLugar -> SeleccionarLugarCiControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
                  
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="recipient-name" class="control-label">Nombre Completo:</label>
                      <input name="Anombre" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Apellido Paterno:</label>
                     <input name="Aape_pater" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Apellido Materno:</label>
                     <input name="Aape_mater" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Edad:</label>
                     <input name="Aedad" type="number" min="18" max="25" step="1"  required="required">
                  </div>
                  </div>
                  </div>

                   
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Direccion:</label>
                     <input name="Adireccion" type="text" class="form-control">
                  </div>
                  </div>
                  </div>
                   
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Celular:</label>
                     <input name="Acelular" type="text" class="form-control">
                  </div>
                  </div>
                  </div>

                  <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="message-text" class="control-label">Tipo Sangre:</label>
                 <select class="js-example-basic-single w-100" name="idSangre" id="idSangre">
                  <option selected>Seleccionar Propietraio</option>
                  <?php 
                    $SeleccionarSangre = new AyudanteControladores();
                    $SeleccionarSangre -> SeleccioanarSangreControlador();
                  ?>
                  </select>  
                  </div>
                  </div>
                  </div>
                   
                 <div class="col-md-5">
                 <div class="col-md-12">
                 <div class="form-group">
                      <label for="message-text" class="control-label">Fecha ingreso:</label>
                     <input name="fecha" type="date" class="form-control">
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
