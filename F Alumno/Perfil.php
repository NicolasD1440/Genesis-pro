
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil del alumno</title>
    <link rel="stylesheet" href="../A assets General/Body.css">
    <link rel="stylesheet" href="assets/perfil.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
    <?php
      session_start();
      $nombre = $_SESSION['miSesion'][1];
      $apellido = $_SESSION['miSesion'][2];
      $ID = $_SESSION['miSesion'][0];
      $correo_alumno = $_SESSION['miSesion'][3];
      $Semestre = $_SESSION['miSesion'][5];

      $v1 = "<i class='fas fa-arrow-left'></i> Atras";
      $Ruta = "Alumn_PG_Prin.php";
      include("../B Recursos compartidos/conexion.php");
      $consulta = "SELECT COUNT(Estado) FROM inscribe WHERE Estado = 1 AND Id = $ID";
      $resultado = mysqli_query($app_db, $consulta);
    ?>
  </head>
  <body>
    <?php require("../B Recursos compartidos/barra-nav.php"); ?>
    <div class="Container">
        <div class="card">
          <div class="img">
            <img src="../B Recursos compartidos/Resources/usuario-de-perfil.png" alt="">
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
                     $ecuacion = ($rows1[0]*100)/64;
                     echo "<h1>";
                     echo round($ecuacion, 2) . "%";
                     echo "</h1>";
                   }
                  ?>
                 <p>Porcentaje aprobadas</p>
               </div>
             </div>
          </div>
        </div>
    </div>

  </body>
</html>
