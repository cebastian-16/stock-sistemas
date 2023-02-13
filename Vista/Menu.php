<nav class="navbar navbar-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img style="height: 68px; width: 153px;" src="img/gane.png">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Inicio</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Movimientos
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Registro.php">Ingresar Movimiento Articulos</a></li>
          <li><a href="RegistroSimcard.php">Ingresar Movimiento Simcard</a></li>
          <li><a href="registroModificar.php">Modificar Movimiento Articulo</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articulos
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="articulo.php">Ingresar Articulo</a></li>
          <li><a href="modificarArticulo.php">Modificar Articulo</a></li>

        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Simcard
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="simcard.php">Ingresar Simcard</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="usuarios.php">Ingresar Usuario</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="articulosReport.php">Articulos</a></li>
          <li><a href="registroReport.php">Movimientos Articulos</a></li>
          <li><a href="simcardReport.php">Simcard</a></li>
          <li><a href="RegistroSimcardReport.php">Movimientos Simcard</a></li>
        </ul>
      </li>
    </ul>
    <div class="navbar-header navbar-right">
      <div class="navbar-brand session">
        <?php echo $_SESSION['user_id'] ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person-circle"
          viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
        <a href="cerrarsession.php">
          <span class="glyphicon glyphicon-off"></span>
        </a>
      </div>
    </div>
  </div>
</nav>