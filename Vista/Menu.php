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
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-person-check-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
        <a href="cerrarsession.php">
          <span class="glyphicon glyphicon-off"></span>
        </a>
      </div>
    </div>
  </div>
</nav>