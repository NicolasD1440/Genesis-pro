<?php
session_start();
include("../B Recursos compartidos/conexion.php");
if (isset($_GET['button'])) {
  $nombre =$_GET['nombre_al'];
  $apellido =$_GET['apellido_al'];
  $ID = $_SESSION['miSesion'][0];
  $consulta = "UPDATE `alumnos` SET `nombre`='$nombre',`apellido`='$apellido' WHERE id=$ID";
  $resultado = mysqli_query($app_db, $consulta);
  header("location: ../F Alumno/Alumn_PG_Prin.php");
}
 ?>
