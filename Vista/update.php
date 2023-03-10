<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar datos</title>
    <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/scripRegArt.js"></script>
</head>

<body>
    <div class="container">
        <?php
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: login.php');
            exit;
        } else {

            include "Menu.php";
            include '../Controlador/insert_user.php';
            $datos = new datos;


            if (!empty($_GET['id_datos'])) {
                $id_datos = $_GET['id_datos']; //id de caracteristica a modificar
                //$idM = $_POST['idM'];
                $resultadoDatos = $datos->consultarDatos($id_datos);
                $consultaM = mysqli_fetch_array($resultadoDatos);

                if (empty($consultaM)) {
                    echo "<div class='alert alert-danger alert-dismissible'>";
                    echo "  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "  <strong>Error!</strong> No se encontraron Registros";
                    echo "</div>";
                }
            }

            if (!empty($_POST['boton'])) {
                $accion = $_POST['boton'];
                if ($accion == "Modificar") {
                    $id = $_POST['id'];
                    $SISTEMAOPERATIVO = $_POST['SISTEMAOPERATIVO'];
                    $CPU = $_POST['CPU'];
                    $cache = $_POST['cache'];
                    $memoria = $_POST['memoria'];
                    $almacenamiento = $_POST['almacenamiento'];
                    $direccion = $_POST['direccion'];
                    $mac = $_POST['mac'];
                    $ultimo_mantenimiento = $_POST['ultimo_mantenimiento'];
                    $proximo_mantenimiento = $_POST['proximo_mantenimiento'];
                    $a??o_lanzamiento = $_POST['a??o_lanzamiento'];
                    $fecha_compra = $_POST['fecha_compra'];
                    $V_CPU = $_POST['V_CPU'];
                    $V_MEM = $_POST['V_MEM'];
                    $V_DISCO = $_POST['V_DISCO'];
                    $promedio = 0; //$V_CPU + $V_MEM + $V_DISCO;
                    $V_FINAL = 0; //$promedio / 3;
                    $modificarDatos = $datos->modificarDatos($id, $SISTEMAOPERATIVO, $CPU, $cache, $memoria, $almacenamiento, $direccion, $mac, $ultimo_mantenimiento, $proximo_mantenimiento, $a??o_lanzamiento, $fecha_compra, $V_CPU, $V_MEM, $V_DISCO, $V_FINAL, $_SESSION['user_id']);
                }

            }
            ?>

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Modificar Caracteristicas del PC</h2>
                        </div>
                    </div>
                </div>
                <?php if (empty($consultaM)) { ?>
                    <div class="form-group row">
                        <a href='modificarArticulo.php'><button class="btn btn-primary">Modificar articulo</button></a>
                        <a href='articulosReport.php'><button class='btn btn-primary'>Reporte Articulos</button></a>
                        <a href='articulo.php'><button class='btn btn-primary'>Ingresar Articulos</button></a>
                    </div>
                <?php } ?>
                <?php if (!empty($consultaM)) { ?>
                    <div class="row">
                        <form action="update.php" method="post" name="formDatos">
                            <div class="form-group col-md-2">
                                <label>ID *</label>
                                <?php echo "<input class='form-control' style='display:none;' value='" . $consultaM["id"] . "' name='id' type='text'>" ?>
                                <?php echo "<input class='form-control' disabled value='" . $consultaM["id"] . "' type='text'>" ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label>SISTEMA OPERATIVO *</label>
                                <input class='form-control' value="<?php echo $consultaM["SISTEMAOPERATIVO"] ?>"
                                    name='SISTEMAOPERATIVO' type='text' pattern='[a-zA-Z??-??\u00f1\u00d1\0-9]{1,40}'>
                            </div>

                            <div class="form-group col-md-2">
                                <label>PROCESADOR *</label>
                                <input class='form-control' value="<?php echo $consultaM["CPU"] ?>" name='CPU' type='text' >
                            </div>

                            <div class="form-group col-md-2">
                                <label>CACHE *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["cache"] . "' name='cache' type='text'  >"; ?>
                            </div>

                            <div class="form-group col-md-3">
                                <label>MEMORIA RAM *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["memoria"] . "' name='memoria' type='text' >"; ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Seleccione Almacenamiento *</label>
                                <select class="form-control" name="almacenamiento" for="almacenamiento">
                                    <option value="<?php echo $consultaM["almacenamiento"] ?>" selected><?php echo $consultaM["almacenamiento"] ?></option>
                                    <option value="SSD">SSD</option>
                                    <option value="MECANICO">MECANICO</option>
                                    <option value="M.2">M.2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>IP *</label>
                                <input class='form-control' value="<?php echo $consultaM["direccion"] ?>" name='direccion'
                                    type='text' pattern='[a-zA-Z??-??\u00f1\u00d1\0-9 ]{0,50}'>
                            </div>
                            <div class="form-group col-md-3">
                                <label>MAC *</label>
                                <input class='form-control' value="<?php echo $consultaM["mac"] ?>" name='mac' type='text'>
                            </div>
                            <div class="form-group col-md-4">
                                <label>ULTIMO MANTENIMIENTO *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["ultimo_mantenimiento"] . "' name='ultimo_mantenimiento' type='date' >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>PROXIMO MANTENIMIENTO *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["proximo_mantenimiento"] . "' name='proximo_mantenimiento' type='date' >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>A??O LANZAMIENTO *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["a??o_lanzamiento"] . "' name='a??o_lanzamiento' type='date' >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>FECHA COMPRA *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["fecha_compra"] . "' name='fecha_compra' type='date' >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>VALORACION CPU *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["V_CPU"] . "' name='V_CPU' type='text'  >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>VALORACION RAM *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["V_MEM"] . "' name='V_MEM' type='text'  >"; ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label>VALORACION DISCO *</label>
                                <?php echo "<input class='form-control' value='" . $consultaM["V_DISCO"] . "' name='V_DISCO' type='text'  >"; ?>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="boton" value="Modificar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <?php
                }
        }
        ?>
        </div>
    </div>

    <script type="text/javascript" src='js/jquery.min.js'></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <script type="text/javascript">
        function hola() {
            $("#id").val("hola");
        }
    </script>
</body>

</html>