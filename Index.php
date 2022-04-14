<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu de navegacion</title>
      <link rel="stylesheet" type="text/css" href="C Pagina principal/assets/selection.css">
      <link rel="stylesheet" type="text/css" href="A CSS Generales/Nav.css">

  </head>

  <body>
<?php
error_reporting(0);
$v1 = "Inicio";
require("B Recursos compartidos/barra-nav.php"); ?>

   <div class="container">
     <!-- Modulo de estudiante -->
     <div class="card">
       <figure>
         <img src="C Pagina principal/sources/img1.jpg">
       </figure>
       <div class="content">
         <h3>Estudiante</h3>
         <p> Inicia sesion como estudiante </p>
         <a href="F Ingreso/Ingreso.php">Ingresar</a>
       </div>
     </div>
    <!-- Modulo de docente -->
     <div class="card">
       <figure>
         <img src="C Pagina principal/sources/img2.jpg">
       </figure>
       <div class="content">
         <h3>Docente</h3>
         <p> Inicia sesion como docente </p>
         <a href="F Ingreso/Ingreso.php">Ingresar</a>
       </div>
     </div>
     <!-- Modulo de administrador -->
     <div class="card">
       <figure>
         <img src="C Pagina principal/sources/img3.jpg">
       </figure>
       <div class="content">
         <h3>administrador</h3>
         <p> Inicia sesion como administrador </p>
         <a href="F Ingreso/Ingreso.php">Ingresar</a>
       </div>
     </div>
   </div>
      <h1><?php echo $error ?></h1>
  </body>
</html>
