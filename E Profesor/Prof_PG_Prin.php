<?php
error_reporting(0);
session_start();
$nombre= $_SESSION['miSesion'][1];
$apellido= $_SESSION['miSesion'][2];
$Usuario= "profesores";
$perfil="PROFESORES";
$v1 = "Cerrar sesión";
$Ruta = "../B Recursos compartidos/logout.php";
$Rutas = array("../B recursos compartidos/Actualizar_Perfil.php","Agregar_Notas.php","x3");
$array = array("Actualizar datos personales", "Ingresar notas", "Perfil del docente");
require("../B Recursos compartidos/contenido.php");
 ?>
