<?php
$Validar = new FuncionesControladores();
$Validar->ValidarSessionControlador();
?>

<body>
  <div class="container-scroller">
    <!-- partial:vistas/recursos/partials/_navbar.html -->
    <?php
    $NavBar = new FuncionesControladores();
    $NavBar->NavBarControlador();
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:vistas/recursos/partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:vistas/recursos/partials/_sidebar.html -->
      <?php
      $Sidebar = new FuncionesControladores();
      $Sidebar->SidebarControlador();
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Registro de Encomienda
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">

              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><b>Datos de Encomienda</b></h4>
              <hr>
            </div>

            <?php
              $insertarencomienda = new encomiendacontroladores();
              $insertarencomienda->encomiendacontrolador();
            ?>
            <form name="encomienda" method="POST">
              <div>
                <div class="col-md-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">C.I. REMITENTE:</label>
                      <select class="js-example-basic-single w-100" name="Rci" id="Rci">
                        <option selected>Seleccione el ci</option>
                        <?php
                        $Remitente = new encomiendacontroladores();
                        $Remitente->SeleccioanarRemitenteControlador();
                        ?>
                      </select>
                    </div>
                  </div>
                </div>



                <div class="col-md-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">C.I. RECEPTOR:</label>
                      <select class="js-example-basic-single w-100" name="Eci" id="Rci">
                        <option selected>Seleccione el ci</option>
                        <?php
                        $Remitente = new encomiendacontroladores();
                        $Remitente->SeleccioanarRemitenteControlador();
                        ?>
                      </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">Destino Encomienda:</label>
                      <select class="js-example-basic-single w-100" name="idDestinoLlegada" id="idDestinoLlegada">
                        <option selected>Seleccionar Destino</option>
                        <?php
                        $Destino = new encomiendacontroladores();
                        $Destino->SeleccioanarDestinoControlador();
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">Descripcion:</label>
                      <input name="Edescripcion" type="text" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">Monto Cancelado:</label>
                      <input name="EmontoCancelado" type="text" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </div>
            </form>
          </div>


          <?php
          $Footer = new FuncionesControladores();
          $Footer->FooterControlador();
          ?>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>