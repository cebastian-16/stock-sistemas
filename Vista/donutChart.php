<?php
include '../Controlador/insert_user.php';
$datos = new datos;
$resultadoDato = $datos->consultarCountSistemaOperativo();
$contador = 0;
while ($value = mysqli_fetch_assoc($resultadoDato)) {
  echo "<input type='hidden' value='" . $value['SISTEMAOPERATIVO'] . "' id='sistema" . $contador . "'>";
  echo "<input type='hidden' value='" . $value['CANTIDAD'] . "' id='cantidadSistema" . $contador . "'>";
  $contador += 1;
}
$contador -= 1;
echo "<input type='hidden' value='" . $contador . "' id='totalSistemas'>";
?>

<div class="panel panel-info">
  <div class="panel-heading">Sistemas operativos 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
      fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
      <path
        d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
    </svg></div>
  <div class="panel-body">
    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
  </div>
</div>