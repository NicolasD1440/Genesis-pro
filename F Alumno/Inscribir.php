<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscribir Asignaturas</title>
    <link rel="stylesheet" href="../A assets General/Body.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="assets/Inscribir.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
  </head>
    <?php
      error_reporting(0);
      session_start();
      $Ruta = "Alumn_PG_Prin.php";
      $v1 = "<i class='fas fa-arrow-left'></i> Atras";
      require("../B Recursos compartidos/barra-nav.php");
      include("../B Recursos compartidos/conexion.php");
      $Cursando = ($_SESSION['miSesion'][5] + 1);
    ?>
  <body>
    <div class="cont_inscribir">
      <form class="inscribir" action="" method="">
        <h1 class="titulo">Inscribe tus asignaturas</h1>
        <p>Seleccione el NRC de la asignatura que desea inscribir</p>
        <select class="form-select" name="NRC" onchange="this.form.submit()">
          <option disabled selected value="0">Seleccione NRC:</option>

          <?php
            $consulta = "SELECT * FROM materias WHERE Semestre = '$Cursando'";
            $resultado = mysqli_query($app_db, $consulta);

            while ($Datos = mysqli_fetch_array($resultado)) {
              echo "<option value='$Datos[0]'> $Datos[0] </option>";
            }

          ?>
        </select>

      <aside class="tabla">
        <strong><p>Presione para inscribir si los datos son correctos</p></strong>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>NRC</th>
              <th>Nombre asignatura</th>
              <th>semestre</th>
              <th>Creditos</th>
            </tr>
          </thead>
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
        <button class="btn btn-info" type="submit" name="inscribir">Inscribir</button>
      </form>
        <?php
          if (isset($_GET['inscribir'])) {
            $NRCC = $_SESSION['NRC'];
            $ID = $_SESSION['miSesion'][0];
            $consulta = "UPDATE inscribe SET Estado = 2 WHERE NRCM = $NRCC AND Id = $ID";
            $resultado = mysqli_query($app_db, $consulta);
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../B Recursos compartidos/Alertas/Inscrita.js"></script>
        <?php
          }
        ?>

      </aside>
    </div>
  </body>
</html>
