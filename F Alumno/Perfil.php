<?php
session_start();
$nombre = $_SESSION['miSesion'][1];
$apellido = $_SESSION['miSesion'][2];
$v1 = "Atras";
$Ruta = "Alumn_PG_Prin.php";
 require("../B Recursos compartidos/barra-nav.php");
 ?>

    <link rel="stylesheet" href="CSS/estilos.css">

<div class="Container">

    <div class="card">
      <div class="img">
        <img src="Perfil/usuario-de-perfil.png" alt="">
      </div>
      <div class="contenido">
      <?php echo "<h3>$nombre $apellido </h3>"; ?>
       <p>Estudiante</p>
       <div class="center">
         <div class="box">
           <h1>145</h1>
           <p>Materias</p>
         </div>
         <div class="box">
           <h1>145</h1>
           <p>Porcentaje</p>
         </div>
       </div>
      </div>
    </div>

</div>
