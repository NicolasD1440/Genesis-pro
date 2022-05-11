<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscribir Asignaturas</title>
    <link rel="stylesheet" href="CSS/Inscribir.css">
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
  </head>
    <?php
      error_reporting(0);
      session_start();
      $Ruta = "Alumn_PG_Prin.php";
      $v1 = "<i class='fas fa-arrow-left'></i> Volver";
      require("../B Recursos compartidos/barra-nav.php");
      include("../B Recursos compartidos/conexion.php");
      $Cursando = ($_SESSION['miSesion'][5] + 1);
    ?>
  <body>
    <div class="container">
      <form class="inscribir" action="" method="">
        <h1 class="titulo">Inscribe tus asignaturas</h1>
        <p>Seleccione el NRC de la asignatura que desea inscribir</p>
        <select class="NRC" name="NRC" onchange="this.form.submit()">
          <option value="0">Seleccione:</option>

          <?php
            $consulta = "SELECT * FROM materias WHERE Semestre = '$Cursando'";
            $resultado = mysqli_query($app_db, $consulta);

            while ($Datos = mysqli_fetch_array($resultado)) {
              echo "<option value='$Datos[0]'> $Datos[0] </option>";
            }

          ?>
        </select>

      <aside class="tabla">
        <p>Presione para inscribir si los datos son correctos</p>
        <table border="black" class="inscritas">
          <tr>
            <th>NRC</th>
            <th>Nombre asignatura</th>
            <th>semestre</th>
            <th>Creditos</th>
          </tr>
          <?php
            if (isset($_GET['NRC'])) {
              $Dato = $_GET['NRC'];
              $consulta = "SELECT * FROM materias WHERE NRC = $Dato";
              $resultado = mysqli_query($app_db, $consulta);

              while ($Rows = mysqli_fetch_array($resultado)) {
                $_SESSION['NRC'] = $Rows[0];
                echo "<tr>";
                echo "<td>$Rows[0]</td>";
                echo "<td>$Rows[1]</td>";
                echo "<td>$Rows[2]</td>";
                echo "<td>$Rows[3]</td>";
                echo "</tr>";
              }
            }
          ?>
        </table>
        <button class="agregar" type="submit" name="inscribir">Inscribir</button>

        <?php
          if (isset($_GET['inscribir'])) {
            $NRCC = $_SESSION['NRC'];
            $ID = $_SESSION['miSesion'][0];
            $consulta = "UPDATE inscribe SET Estado = 2 WHERE NRCM = $NRCC AND Id = $ID";
            $resultado = mysqli_query($app_db, $consulta);
          }
       ?>
      </aside>
      </form>
    </div>
  </body>
</html>
