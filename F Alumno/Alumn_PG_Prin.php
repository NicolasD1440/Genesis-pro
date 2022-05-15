<script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "alumno";
$perfil="ESTUDIANTES";
$v1 = "Cerrar sesión";
$Ruta = "../B Recursos compartidos/logout.php";
$Rutas = array("../B recursos compartidos/Actualizar_Perfil.php","Perfil.php","Inscribir.php","Creditos.php");
$array = array("Actualizar datos personales", "Perfil del alumno","Inscribir asignaturas","Verificar estado de los creditos");
require("../B Recursos compartidos/contenido.php");
 ?>
