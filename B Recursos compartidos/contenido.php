
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="../A assets General/Contenido.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
  </head>
  <body>
    <?php
    include 'barra-nav.php';
    echo "<h1 class = 'T1'>$perfil</h1>";?>
    <div class="container">
      <div class="main">
        <img src="../B Recursos compartidos/Resources/Usuario.png" alt="Imagen del usuario" class="img1">
        <?php
        echo "<h3>Hola $nombre $apellido </h3>";
         ?>
      </div>

      <?php
      echo "<p>Esta es la página de entrada para el servicio de $Usuario de Génesis. Desde aquí, puede gestionar los servicios disponibles por la institucion:</p>";
       ?>

      <ul>
        <?php
          echo "<li class='li'><a href='$Rutas[0]'>$array[0] </a></li>";
          echo "<li class='li'><a href='$Rutas[1]'>$array[1]</a></li>";
          echo "<li class='li'><a href='$Rutas[2]'>$array[2]</a></li>";

          if ($array[3] != NULL) {
            echo "<li class='li'><a href='$Rutas[3]'>$array[3]</a></li>";
          } else {
            echo "";
          }
          if ($array[4] != NULL) {
            echo "<li class='li'><a href='$Rutas[4]'>$array[4]</a></li>";
          } else {
            echo "";
          }
          if ($array[5] != NULL) {
            echo "<li class='li'><a href='$Rutas[5]'>$array[5]</a></li>";
          } else {
            echo "";
          }
        ?>
      </ul>
    </div>
  </body>
</html>
