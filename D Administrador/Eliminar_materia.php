<?php
if (isset($_GET['nrc'])) {

$nrc = $_GET['nrc'];
include("../B Recursos compartidos/conexion.php");
$consulta = "DELETE FROM `materias` WHERE NRC = $nrc";
$resultado = mysqli_query($app_db, $consulta);
if (!$resultado) {
  echo "no se actualizo";
}else {
  header("Location: Administrar_asignaturas.php");
 }
}

 ?>
