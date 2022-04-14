<?php
$usuario = $_POST["correo"];
$contraseña = $_POST["contraseña"];
session_start();
$_SESION["correo"] = $usuario;

include("conexion.php");

$consulta = "SELECT * FROM alumnos WHERE Correo = '$usuario' and Contraseña = '$contraseña'";
$resultado = mysqli_query($app_db, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
  header("location:../F Alumno/Alumn_PG_Prin.php");
}
else{
  ?>
  <script type="text/javascript">
    alert("ERROR DE AUTENTIFICACION");
    location.href="pagina.html";
  </script>

   <?php
}
mysqli_free_result($resultado);
mysqli_close($app_db);
?>
