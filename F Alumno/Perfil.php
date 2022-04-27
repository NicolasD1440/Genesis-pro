<?php
session_start();
$nombre = $_SESSION['miSesion'][1];
$apellido = $_SESSION['miSesion'][2];
$ID = $_SESSION['miSesion'][0];
$correo_alumno = $_SESSION['miSesion'][3];
$Semestre = $_SESSION['miSesion'][5];

$v1 = "Atras";
$Ruta = "Alumn_PG_Prin.php";
 require("../B Recursos compartidos/barra-nav.php");
 include("../B Recursos compartidos/conexion.php");
 $consulta = "SELECT COUNT(Estado) FROM inscribe WHERE Estado = 1 AND Id = $ID";
 $resultado = mysqli_query($app_db, $consulta);
 ?>

    <link rel="stylesheet" href="CSS/estilos.css">

<div class="Container">

    <div class="card">
      <div class="img">
        <img src="Perfil/usuario-de-perfil.png" alt="">
      </div>
      <div class="contenido">
      <?php echo "<h3>$nombre $apellido </h3>"; ?>
       <p id="parrafo"><?php echo $correo_alumno; ?></p>
       <p id="parrafo"><?php echo "Semestre: " . $Semestre; ?></p>
       <div class="center">
         <div class="box">
           <?php   while($rows = mysqli_fetch_array($resultado)) {
             echo "<h1>";
             echo $rows[0];
             echo "</h1>";

           } ?>
           <p>Materias aprobadas</p>
         </div>
         <div class="box">
           <?php
           $consulta = "SELECT COUNT(Estado) FROM inscribe WHERE Estado = 1 AND Id = $ID";
           $resultado = mysqli_query($app_db, $consulta);
           while($rows1 = mysqli_fetch_array($resultado)) {
             $ecuacion = ($rows1[0]*100)/26;
             echo "<h1>";
             echo round($ecuacion, 2) . "%";
             echo "</h1>";

           } ?>
           <p>Porcentaje aprobadas</p>
         </div>
       </div>
      </div>
    </div>

</div>
