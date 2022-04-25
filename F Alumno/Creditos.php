<?php
session_start();
$v1 = "Atras";
$Ruta = "Alumn_PG_Prin.php";
require("../B Recursos compartidos/barra-nav.php");
?>
<link rel="stylesheet" href="CSS/Estilo_tablas.css">

<?php
include("../B Recursos compartidos/conexion.php");

$Id = $_SESSION['miSesion'][0];

$consulta = "SELECT Nombre_m, NRC, Semestre, Creditos, Estado, Semestre_In FROM alumnos a INNER JOIN materias b WHERE b.Id_al = $Id and a.id = $Id";
$resultado = mysqli_query($app_db, $consulta);
?>

<div id="contenedor">
    <div id="tabla1">
      <!-- Tabla 1 meterias aprobadas -->
        <table border="1">
            <caption>MATERIAS APROBADAS</caption>
            <tr>
            <th>Nombre</th>
            <th>NRC</th>
            <th>Semestre</th>
            <th>Creditos</th>
            </tr>

            <?php
              while($rows = mysqli_fetch_array($resultado)) {
                 if ($rows[4] == "1") {
                   echo "<tr>";
                   echo "<td>$rows[0]</td>";
                   echo "<td>$rows[1]</td>";
                   echo "<td>$rows[2]</td>";
                   echo "<td>$rows[3]</td>";
                   echo "</tr>";
                }
              }
           ?>
        </table>
    </div>
<!-- Tabla 2 meteria por inscribir -->
    <div id="tabla2">
        <table border="1">
            <caption>MATERIAS POR INSCRIBIR</caption>
            <tr>
            <th>Nombre</th>
            <th>NRC</th>
            <th>Semestre</th>
            <th>Creditos</th>
            </tr>

            <?php
            $consulta = "SELECT Nombre_m, NRC, Semestre, Creditos, Estado, Semestre_In FROM alumnos a INNER JOIN materias b WHERE b.Id_al = $Id and a.id = $Id";
            $resultado = mysqli_query($app_db, $consulta);
              while($rows = mysqli_fetch_array($resultado)) {
                 if ($rows[2] > $rows[5]) {
                   echo "<tr>";
                   echo "<td>$rows[0]</td>";
                   echo "<td>$rows[1]</td>";
                   echo "<td>$rows[2]</td>";
                   echo "<td>$rows[3]</td>";
                   echo "</tr>";
                }
              }
            ?>
        </table>
    </div>
<!-- Tabla 3 meterias reprobadas -->
    <div id="tabla3">
        <table border="1">
            <caption>MATERIAS REPROBADAS</caption>
            <tr>
            <th>Nombre</th>
            <th>NRC</th>
            <th>Semestre</th>
            <th>Creditos</th>
            </tr>

            <?php
              $consulta = "SELECT Nombre_m, NRC, Semestre, Creditos, Estado, Semestre_In FROM alumnos a INNER JOIN materias b WHERE b.Id_al = $Id and a.id = $Id";
              $resultado = mysqli_query($app_db, $consulta);
              while($rows = mysqli_fetch_array($resultado)) {
                 if ($rows[4] == "3") {
                   echo "<tr>";
                   echo "<td>$rows[0]</td>";
                   echo "<td>$rows[1]</td>";
                   echo "<td>$rows[2]</td>";
                   echo "<td>$rows[3]</td>";
                   echo "</tr>";
                }
              }
            ?>
        </table>
  </div>
<!-- Tabla 4 -->
    <div id="tabla4">
        <table border="1">
            <caption>MATERIAS SIGUIENTE SEMESTRE</caption>
            <tr>
            <th>Nombre</th>
            <th>NRC</th>
            <th>Semestre</th>
            <th>Creditos</th>
            </tr>

            <?php
              $consulta = "SELECT Nombre_m, NRC, Semestre, Creditos, Estado, Semestre_In FROM alumnos a INNER JOIN materias b WHERE b.Id_al = $Id and a.id = $Id";
              $resultado = mysqli_query($app_db, $consulta);
              while($rows = mysqli_fetch_array($resultado)) {
                 if ($rows[2] == ($rows[5]+1) ) {
                   echo "<tr>";
                   echo "<td>$rows[0]</td>";
                   echo "<td>$rows[1]</td>";
                   echo "<td>$rows[2]</td>";
                   echo "<td>$rows[3]</td>";
                   echo "</tr>";
                }
              }
            ?>
        </table>
    </div>
</div>
