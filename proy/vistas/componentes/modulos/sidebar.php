      <?php 
if ($_SESSION["nivel"]==1) {
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="vistas/recursos/images/faces/1.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  BIENVENIDO <?php echo $_SESSION["apellidoPaterno"] ?>
                </p>
                <p class="designation">
                  Super Administrador
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Casa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">opcion 2</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">opcion 3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">opcion 4</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">opcion 5</span>
            </a>
          </li>
        </ul>
      </nav>
      <?php 
      }
       ?>

      <?php 
if ($_SESSION["nivel"]==2) {
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="vistas/recursos/images/faces/2.JPG" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  BIENVENIDO <?php echo $_SESSION["apellidoPaterno"] ?>
                </p>
                <p class="designation">
                  ENCARGADO-OFICINA
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="panel">
              <i class="fa fa-spinner menu-icon"></i>
              <span class="menu-title">Menu Primcipal</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="far fa-id-card menu-icon"></i>
              <span class="menu-title">Registros</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
       
              
             
               <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="personal">Personal</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="conductor">Conductor</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="ayudante">Ayudante</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="bus">Bus</a></li>
                
              
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts2">
              <i class="fa fa-bus menu-icon"></i>
              <span class="menu-title">Asignaciones</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts2">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="asignarbus">Asignacion de Bus</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="asignarviaje">Asigancion de Viaje</a></li>
            </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts3">
              <i class="fa fa-envelope menu-icon"></i>
              <span class="menu-title">Envio de Encomienda</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts3">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="encomienda">Registro de Encomienda</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Envio de encomienda</a></li>
            </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts4">
              <i class="fa fa-list-alt menu-icon"></i>
              <span class="menu-title">Lista de Registros</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts4">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="listapersonal">Lista Personal</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="listabus">Listas de Buses</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="listaconductor">Lista de Conductores</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Lista de Ayudantes</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="listaasignacionbus">Lista Asigancion de Bus</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Lista Asigancion de Viaje</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Lista de Encomienda</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Lista Envio de Encomienda</a></li>
            </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts5">
              <i class="fa fa-list-alt menu-icon"></i>
              <span class="menu-title">Reporte de Registros</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts5">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../../../reportes/Reportebus.php">Reporte de Buses</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../../../reportes/conductor.php">Reporte de conductores</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../../../reportes/ayudante.php">Reporte de Ayudantes</a></li>
            </ul>
            </div>
          </li>
        


        </ul>
      </nav>
      <?php 
      }
       ?>

       
       
      