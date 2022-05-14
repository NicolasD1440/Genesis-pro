<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "administracion";
$perfil="ADMINISTRACION";
$v1 = "Inicio";
$Ruta = "../Index.php";
$Rutas = array("../B recursos compartidos/Perfil.php", "Administrar_usuarios.php","Administrar_asignaturas.php");
$array = array("Actualizar datos personales","Administrar usuarios", "Administrar asignaturas");
require("../B Recursos compartidos/barra-nav.php");
require("../B Recursos compartidos/contenido.php");



 ?>
