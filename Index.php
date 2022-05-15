<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu de navegacion</title>
    <link rel="stylesheet" type="text/css" href="A assets General/Nav.css">
    <link rel="stylesheet" type="text/css" href="C Index/assets/selection.css">
  </head>

  <body>
    <?php
    error_reporting(0);
    session_start();
    $v1 = "Por definir";
    require("B Recursos compartidos/barra-nav.php");
    ?>

   <div class="container">
     <!-- Modulo de estudiante -->
     <div class="card">
       <figure>
         <img src="C Index/sources/img1.jpg">
       </figure>
       <div class="content">
         <h3>Estudiante</h3>
         <p> Inicia sesion como estudiante </p>
         <a href="B Recursos compartidos/Ingreso.php?Usuario=alumnos&Correo=correo&Contraseña=contraseña">Ingresar</a>
       </div>
     </div>
    <!-- Modulo de docente -->
     <div class="card">
       <figure>
         <img src="C Index/sources/img2.jpg">
       </figure>
       <div class="content">
         <h3>Docente</h3>
         <p> Inicia sesion como docente </p>
         <a href="B Recursos compartidos/Ingreso.php?Usuario=docentes&Correo=CorreoDoc&Contraseña=ContraseñaDoc">Ingresar</a>
       </div>
     </div>
     <!-- Modulo de administrador -->
     <div class="card">
       <figure>
         <img src="C Index/sources/img3.jpg">
       </figure>
       <div class="content">
         <h3>Administrador</h3>
         <p> Inicia sesion como administrador </p>
         <a href="B Recursos compartidos/Ingreso.php?Usuario=administradores&Correo=CorreoAdmin&Contraseña=ContraseñaAdmin">Ingresar</a>
       </div>
     </div>
   </div>
      <h1><?php echo $error ?></h1>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="B Recursos compartidos/Alertas/Bienvenido.js"></script>
  </body>
</html>
