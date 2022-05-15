<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar notas</title>
    <link rel="stylesheet" href="assets/Estilo_ADD_Notas.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      $Ruta = "Prof_PG_Prin.php";
      $v1 = "<i class='fas fa-arrow-left'></i> Volver";
      require("../B Recursos compartidos/barra-nav.php");
     ?>
    <main class="Opciones">
      <select class="NRCS" name="">
        <option hidden selected value="1">Seleccione un NRC</option>
        <option value="valie1">5580</option>
      </select>
    </main>
    <div class="Lista">

    </div>
  </body>
</html>
