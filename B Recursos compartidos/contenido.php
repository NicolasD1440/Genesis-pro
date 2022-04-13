
    <?php  echo "<h1>$perfil</h1>"; ?>
    <div class="container">
      <div class="main">
        <img src="../B Recursos compartidos/Usuario.png" alt="Imagen del profe">
        <?php
        echo "<h3>Hola $nombre </h3>";
         ?>
      </div>

      <?php
      echo "<p>Esta es la página de entrada para el servicio de $Usuario de Génesis. Desde aquí, puede gestionar los servicios disponibles por la institucion:</p>";
       ?>

      <ul>

      <?php  echo "<li class='li'><a href='$Rutas[0]'>$array[0] </a></li>"; ?>
      <?php  echo "<li class='li'><a href='$Rutas[1]'>$array[1]</a></li>"; ?>
      <?php  echo "<li class='li'><a href='$Rutas[2]'>$array[2]</a></li>"; ?>
      <?php  echo "<li class='li'><a href='$Rutas[3]'>$array[3]</a></li>"; ?>
      <?php   if ($array[4] != NULL) {
          echo "<li class='li'><a href='$Rutas[4]'>$array[4]</a></li>";
        } else {
          echo "";
        } ?>
      </ul>
    </div>
  </body>
</html>
