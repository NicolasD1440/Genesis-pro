<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "administracion";
$perfil="ADMINISTRACION";
$v1 = "Inicio";
$Ruta = "../Index.php";
$Rutas = array("x", "x2","x3", "x4", "x5","x6");
$array = array("Actualizar contraseña", "Actualizar datos personales", "Perfil del administrador", "Registrar usuarios","Administrar usuarios", "Administrar asignaturas");
require("../B Recursos compartidos/barra-nav.php");
require("../B Recursos compartidos/contenido.php");


 ?>
