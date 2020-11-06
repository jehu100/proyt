<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="vistas/recursos/images/LOGO.png" alt="logo">
              </div> 
              <h4>Recuperar Cuenta</h4>
              <h6 class="font-weight-light">Bienvenido aqui podras recuperar tu cuenta</h6>
              <form class="pt-3"  method="POST" >
                <div class="form-group">
                  <label for="OlUsuario">Nombre de Usuario</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="OlUsuario" class="form-control form-control-lg border-left-0" required="" id="OlUsuario" placeholder="Usuario"  tabindex="1" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label for="OlFecha">Fecha de Ingreso a la Empresa</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-calendar text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="OlFecha" class="form-control form-control-lg border-left-0" autocomplete="off"  required="" id="OlFecha" placeholder="2019-05-10"  tabindex="2">                        
                  </div>
                </div>

                 <div class="form-group">
                  <label for="OlTelefono">Telefono / Celular</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-phone text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="OlTelefono" class="form-control form-control-lg border-left-0" id="OlTelefono" placeholder="Telefono / Celular" required="" title="Solo se deben escribir numeros" tabindex="3" autocomplete="off" size="10" maxlength="10" style="text-transform: capitalize;" pattern="[0-9]{1,10}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="OlContra">Nueva Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="OlContra" class="form-control form-control-lg border-left-0" id="OlContra" placeholder="Contraseña" size="10" maxlength="10" tabindex="4" >                        
                  </div>
                </div>

                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="ingreso" class="auth-link text-black">Volver al Inicio de Sesion</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><i class="fa fa-sign-in-alt"></i> Recuperar</button>
                </div>
              </form>
              <?php
                                        $OlvidoContra = new UsuarioControladores();
                                        $OlvidoContra -> OlvidarUsuarioControlador();
                                    ?>
            </div>
          </div>
          <div class="col-lg-">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 20  Todos los derechos reservados .</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vistas/recursos/vendors/js/vendor.bundle.base.js"></script>
  <script src="vistas/recursos/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="vistas/recursos/js/off-canvas.js"></script>
  <script src="vistas/recursos/js/hoverable-collapse.js"></script>
  <script src="vistas/recursos/js/misc.js"></script>
  <script src="vistas/recursos/js/settings.js"></script>
  <script src="vistas/recursos/js/todolist.js"></script>
  <!-- endinject -->
</body>