<link rel="stylesheet" href="CSS/Estilo_tablas.css">
<?php
session_start();
$v1 = "Atras";
$Ruta = "Alumn_PG_Prin.php";
require("../B Recursos compartidos/barra-nav.php");
include("../B Recursos compartidos/conexion.php");
$ID = $_SESSION['miSesion'][0];
?>

<div class="contenedor">
  <aside class="tabla_materias">
    <table id="Tab_Prueba" border="1">
      <caption>Descripcion asignaturas</caption>
      <tr>
        <th>NRC</th>
        <th>Asignatura</th>
        <th>Semestre</th>
        <th>Creditos</th>
      </tr>

      <?php
      function color2($estado){
        switch ($estado) {
          case 1:
            $Color = "#1C9031";
            return $Color;
          break;
          case 2:
            $Color = "#9F9823";
            return $Color;
          break;
          case 3:
            $Color = "#652b2b";
            return $Color;
          break;
          case 4:
            $Color = "#555555";
            return $Color;
          break;
          default:
            $Color = "";
            return $Color;
            break;
        }
      }

        $consulta = "SELECT NRC, Nombre_m, semestre, creditos, Estado from materiasP JOIN inscribe on inscribe.Id = $ID and materiasP.NRC = inscribe.NRCM";
        $resultado = mysqli_query($app_db, $consulta);

        while($rows = mysqli_fetch_array($resultado)) {

            $col = color2($rows[4], $rows[2]);
             echo "<tr>";
             echo "<td bgcolor = $col >$rows[0]</td>";
             echo "<td bgcolor = $col >$rows[1]</td>";
             echo "<td bgcolor = $col >$rows[2]</td>";
             echo "<td bgcolor = $col >$rows[3]</td>";
             echo "</tr>";

        }
      ?>
    </table>
  </aside>
  <aside class="tabla_creditos">
    <table id="Tabla_creditos" border = "1">
      <caption>Informacion de creditos</caption>
      <tr>
        <th>Creditos aprobados</th>
        <th>Creditos en curso</th>
        <th>Creditos reprobados</th>
        <th>Creditos faltantes</th>
      </tr>

      <?php
        $consulta1 = "SELECT SUM(CREDITOS) from materiasP JOIN inscribe on inscribe.Id = $ID and materiasP.NRC = inscribe.NRCM AND inscribe.Estado = 1";
        $resultado = mysqli_query($app_db, $consulta1);

      echo "<tr>";
        while($rows = mysqli_fetch_array($resultado)) {
            $col = color2(1);

             echo "<td bgcolor = $col >$rows[0]</td>";

        }

          $consulta1 = "SELECT SUM(CREDITOS) from materiasP JOIN inscribe on inscribe.Id = $ID and materiasP.NRC = inscribe.NRCM AND inscribe.Estado = 2";
          $resultado = mysqli_query($app_db, $consulta1);

          while($rows = mysqli_fetch_array($resultado)) {
              $col = color2(2);
               echo "<td bgcolor = $col >$rows[0]</td>";
          }

          $consulta1 = "SELECT SUM(CREDITOS) from materiasP JOIN inscribe on inscribe.Id = $ID and materiasP.NRC = inscribe.NRCM AND inscribe.Estado = 3";
          $resultado = mysqli_query($app_db, $consulta1);

          while($rows = mysqli_fetch_array($resultado)) {
              $col = color2(3);
               echo "<td bgcolor = $col >$rows[0]</td>";
          }

          $consulta1 = "SELECT SUM(CREDITOS) from materiasP JOIN inscribe on inscribe.Id = $ID and materiasP.NRC = inscribe.NRCM AND inscribe.Estado = 4";
          $resultado = mysqli_query($app_db, $consulta1);

          while($rows = mysqli_fetch_array($resultado)) {
              $col = color2(4);
               echo "<td bgcolor = $col >$rows[0]</td>";
          }
        echo "</tr>";
      ?>
    </table>
  </aside>
</div>
