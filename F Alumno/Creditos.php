<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creditos</title>
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="assets/Estilo_tablas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
    <?php
    session_start();
    $v1 = "<i class='fas fa-arrow-left'></i> Atras";
    $Ruta = "Alumn_PG_Prin.php";
    include("../B Recursos compartidos/conexion.php");
    $ID = $_SESSION['miSesion'][0];
    ?>

  </head>
  <body>
    <?php require("../B Recursos compartidos/barra-nav.php"); ?>
    <div class="contenedor">
      <aside class="tabla_materias">
        <h3>Descripcion asignaturas</h3>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>NRC</th>
              <th>Asignatura</th>
              <th>Semestre</th>
              <th>Creditos</th>
            </tr>
          </thead>

          <?php
          function color2($estado){
            switch ($estado) {
              case 1:
                $Color = "#1C9031";
                $Letra = "white";

                return array ($Color,$Letra);
              break;
              case 2:
                $Color = "#9F9823";
                $Letra = "white";
                return array ($Color,$Letra);
              break;
              case 3:
                $Color = "#652b2b";
                $Letra = "white";
                return array ($Color,$Letra);
              break;
              case 4:
                $Color = "#555555";
                $Letra = "White";
                return array ($Color,$Letra);
              break;
              default:
                $Color = "";
                $Letra = "";
                return array ($Color,$Letra);
                break;
            }
          }

            $consulta = "SELECT NRC, Nombre_m, semestre, creditos, Estado from materias JOIN inscribe on inscribe.Id = $ID and materias.NRC = inscribe.NRCM";
            $resultado = mysqli_query($app_db, $consulta);

            while($rows = mysqli_fetch_array($resultado)) {

                 $col = color2($rows[4]);
                 echo "<tr>";
                 echo "<td bgcolor = $col[0] style = 'color: $col[1]'>$rows[0]</td>";
                 echo "<td bgcolor = $col[0] style = 'color: $col[1]'>$rows[1]</td>";
                 echo "<td bgcolor = $col[0] style = 'color: $col[1]'>$rows[2]</td>";
                 echo "<td bgcolor = $col[0] style = 'color: $col[1]'>$rows[3]</td>";
                 echo "</tr>";

            }
          ?>
        </table>
      </aside>
      <aside class="tabla_creditos">
        <h3>Informacion de creditos</h3>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Creditos aprobados</th>
              <th>Creditos en curso</th>
              <th>Creditos reprobados</th>
              <th>Creditos faltantes</th>
            </tr>
          </thead>

          <?php
            $consulta1 = "SELECT SUM(CREDITOS) from materias JOIN inscribe on inscribe.Id = $ID and materias.NRC = inscribe.NRCM AND inscribe.Estado = 1";
            $resultado = mysqli_query($app_db, $consulta1);

          echo "<tr>";
            while($rows = mysqli_fetch_array($resultado)) {
                $col = color2(1);

                 echo "<td bgcolor = $col[0] style = 'color: $col[1]' >$rows[0]</td>";

            }

              $consulta1 = "SELECT SUM(CREDITOS) from materias JOIN inscribe on inscribe.Id = $ID and materias.NRC = inscribe.NRCM AND inscribe.Estado = 2";
              $resultado = mysqli_query($app_db, $consulta1);

              while($rows = mysqli_fetch_array($resultado)) {
                  $col = color2(2);
                   echo "<td bgcolor = $col[0] style = 'color: $col[1]' >$rows[0]</td>";
              }

              $consulta1 = "SELECT SUM(CREDITOS) from materias JOIN inscribe on inscribe.Id = $ID and materias.NRC = inscribe.NRCM AND inscribe.Estado = 3";
              $resultado = mysqli_query($app_db, $consulta1);

              while($rows = mysqli_fetch_array($resultado)) {
                  $col = color2(3);
                   echo "<td bgcolor = $col[0] style = 'color: $col[1]' >$rows[0]</td>";
              }

              $consulta1 = "SELECT SUM(CREDITOS) from materias JOIN inscribe on inscribe.Id = $ID and materias.NRC = inscribe.NRCM AND inscribe.Estado = 4";
              $resultado = mysqli_query($app_db, $consulta1);

              while($rows = mysqli_fetch_array($resultado)) {
                  $col = color2(4);
                   echo "<td bgcolor = $col[0] style = 'color: $col[1]' >$rows[0]</td>";
              }
            echo "</tr>";
          ?>
        </table>
        <table class="tabla_porcentaje">
          <?php
          $consulta = "SELECT COUNT(Estado) FROM inscribe WHERE Estado = 1 AND Id = $ID";
          $resultado = mysqli_query($app_db, $consulta);
          while($rows = mysqli_fetch_array($resultado)) {
            $ecuacion = round(($rows[0]*100)/64, 2);
            echo "<tr>";
              echo "<td id='Numero'>$rows[0]</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>Materias aprobadas</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td id='Numero'>$ecuacion %</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>Porcentaje aprobadas</td>";
            echo "</tr>";
          }
           ?>
        </table>
      </aside>
    </div>
  </body>
</html>
