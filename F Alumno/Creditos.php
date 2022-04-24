<?php
$v1 = "Atras";
$Ruta = "Alumn_PG_Prin.php";
require("../B Recursos compartidos/barra-nav.php");
?>
<link rel="stylesheet" href="CSS/Estilo_tablas.css">

<?php
include("../B Recursos compartidos/conexion.php");
$consulta = "SELECT Nombre_m, NRC, Semestre, Estado FROM alumnos a INNER JOIN materias b WHERE b.Id_al = 1 and a.id =1" ;
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
<th>Estado</th>
</tr>

  <?php
  while($rows=mysqli_fetch_array($resultado)) {
     if ($rows[3] == "1") {
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
<th>Estado</th>
</tr>
<?php
$consulta = "SELECT Nombre_m, NRC, Semestre, Estado FROM alumnos a INNER JOIN materias b WHERE b.Id_al = 1 and a.id =1" ;
$resultado = mysqli_query($app_db, $consulta);

while($rows1=mysqli_fetch_array($resultado)) {
   if ($rows1[3] == "2") {
     echo "<tr>";
     echo "<td>$rows1[0]</td>";
     echo "<td>$rows1[1]</td>";
     echo "<td>$rows1[2]</td>";
     echo "<td>$rows1[3]</td>";
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
<th>Estado</th>
</tr>
<?php
$consulta = "SELECT Nombre_m, NRC, Semestre, Estado FROM alumnos a INNER JOIN materias b WHERE b.Id_al = 1 and a.id =1" ;
$resultado = mysqli_query($app_db, $consulta);

while($rows=mysqli_fetch_array($resultado)) {
   if ($rows[3] == "3") {
     echo "<tr>";
     echo "<td>$rows[0]</td>";
     echo "<td>$rows[1]</td>";
     echo "<td>$rows[2]</td>";
     echo "<td>$rows[3]</td>";
     echo "</tr>";
  }
}
?>
</div>
</table>
<!-- Tabla 4 -->
<div id="tabla4">
<table border="1">
  <caption>MATERIAS SIGUIENTES</caption>
<tr>
<th>Nombre</th>
<th>NRC</th>
<th>Semestre</th>
<th>Estado</th>
</tr>
     <tr>
    <td>1</td>
     <td>1</td>
     <td>1</td>
     <td>1</td>
     </tr>
</table>
</div>
</div>
