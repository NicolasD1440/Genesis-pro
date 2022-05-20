<?php
if (isset($_GET['Id'])) {

$id = $_GET['Id'];
include("../B Recursos compartidos/conexion.php");
$consulta = "DELETE FROM `alumnos` WHERE id = $id";
$resultado = mysqli_query($app_db, $consulta);
if (!$resultado) {
  echo "no se actualizo";
}else {
  header("Location: Administrar_usuarios.php");
 }

}

if (isset($_GET['Id_Doc'])) {
include("../B Recursos compartidos/conexion.php");
$id_doc = $_GET['Id_Doc'];
$consulta2 = "DELETE FROM `docentes` WHERE id_Doc = $id_doc";
$resultado2 = mysqli_query($app_db, $consulta2);

if (!$resultado2) {
  echo "no se actualizo";

}else {
  header("Location: Administrar_usuarios.php");
}
}
 ?>
