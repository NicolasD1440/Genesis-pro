<?php
$usuario = $_POST["correo"];
$contraseña = $_POST["contraseña"];
session_start();
include("conexion.php");

$consulta = "SELECT * FROM alumnos WHERE Correo = '$usuario' and Contraseña = '$contraseña'";

$resultado = mysqli_query($app_db, $consulta);

$Nom_usuario = mysqli_fetch_array($resultado);

$filas = mysqli_num_rows($resultado);

$_SESSION['miSesion']= array();
$_SESSION['miSesion'][0] = $Nom_usuario[0];
$_SESSION['miSesion'][1] = $Nom_usuario[1];
$_SESSION['miSesion'][2] = $Nom_usuario[2];

if ($filas) {
  header("location:../F Alumno/Alumn_PG_Prin.php");
}
else{
  ?>
  <script type="text/javascript">
    alert("ERROR DE AUTENTIFICACION");
    location.href="../Index.php";
  </script>

   <?php
}
mysqli_free_result($resultado);
mysqli_close($app_db);
?>
