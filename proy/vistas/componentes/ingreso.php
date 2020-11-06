<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="vistas/recursos/images/LOGO1.png" alt="logo">
              </div> 
              <h4>Bienvenido!</h4>
              <h6 class="font-weight-light">Feliz de verte de nuevo!</h6>
              <form class="pt-3"  method="POST" >
                <div class="form-group">
                  <label for="exampleInputEmail">Nombre de Usuario</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="IUsuario" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Usuario" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="IPassword" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Contraseña">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="olvido" class="auth-link text-black">¿Se te olvidó tu contraseña?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><i class="fa fa-sign-in-alt"></i> Ingreso</button>
                </div>
              </form>
              <?php
                   $Ingreso = new IngresoControladores();
                  $Ingreso -> ValidarIngresoControlador();
              ?>
            </div>
          </div>
          <!--aqui se cambia la imagen "login-half-bg"-->
          <div >
          <img src="vistas/recursos/images/auth/buss.jpg" height="100%" width="129%">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  Todos los derechos reservados .</p>
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