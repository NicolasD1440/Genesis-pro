<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "alumno";
$perfil="ESTUDIANTES";
$v1 = "Inicio";
$Ruta = "../Index.php";
$Rutas = array("../B recursos compartidos/404.php", "../B recursos compartidos/404.php","Perfil.php","Creditos.php","creditos_op2.php");
$array = array("Actualizar contraseña", "Actualizar datos personales", "Perfil del alumno","Verificar estado de los creditos", "creditos prueba");
require("../B Recursos compartidos/barra-nav.php");
require("../B Recursos compartidos/contenido.php");
 ?>
