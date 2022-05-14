<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "profesores";
$perfil="PROFESORES";
$v1 = "Inicio";
$Ruta = "../Index.php";
$Rutas = array("x", "../B recursos compartidos/Perfil.php","Agregar_Notas.php","x3");
$array = array("Actualizar contraseña", "Actualizar datos personales", "Ingresar notas", "Perfil del docente");
require("../B Recursos compartidos/barra-nav.php");
require("../B Recursos compartidos/contenido.php");
 ?>
