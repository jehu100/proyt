    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" ><img src="vistas/recursos/images/LOGO.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" ><img src="vistas/recursos/images/LOGO.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <CENTER><BR>EMPRESA<BR>TRANS SALINAS S.R.L.</CENTER>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <?php 
                if ($_SESSION["nivel"]==1) {
                ?>
              <img src="vistas/recursos/images/faces/1.jpg" alt="profile"/>
                    <?php 
              }
               ?>
                <?php 
                if ($_SESSION["nivel"]==2) {
                ?>
              <img src="vistas/recursos/images/faces/2.JPG" alt="profile"/>
                    <?php 
              }
               ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="usuario">
                <i class="fas fa-cog text-primary"></i>
                Configurar
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="salir">
                <i class="fas fa-power-off text-primary" ></i>
                Salir
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>