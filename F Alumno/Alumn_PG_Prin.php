<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "alumno";
$perfil="ESTUDIANTES";
$v1 = "Inicio";
$Ruta = "../Index.php";
$Rutas = array("x", "x1","Perfil.php","Creditos.php");
$array = array("Actualizar contraseña", "Actualizar datos personales", "Perfil del alumno","Verificar estado de los creditos");
require("../B Recursos compartidos/barra-nav.php");
require("../B Recursos compartidos/contenido.php");
 ?>
