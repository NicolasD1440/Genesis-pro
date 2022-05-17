<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/Adm_materias.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
    <title>Administrar asignaturas</title>
    <?php
      session_start();

      $v1 ="<i class='fas fa-arrow-left'></i> Atras";
      $Ruta = "../D Administrador/Admin_PG_Prin.php";
      require("../B Recursos compartidos/barra-nav.php");
      include("../B Recursos compartidos/conexion.php");

    ?>
  </head>
  <body>
    <br>
    <div class="container">
      <div class="row">
       <div class="caja col-md-10">

         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Administrar Asignaturas</button>
           </li>

         </ul>
         <br>
         <div class="tab-content" id="myTabContent">
           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
             <div class="row">



               <div class="col-8">
                 <form class="" action="Administrar_asignaturas.php" method="get">

                   <div class="form-group row">
                     <label for="codigo" class="col-5">NRC:</label>
                     <div class="col-7">
                       <input type="text" name="nrc" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="codigo" class="col-5">Nombre Materia:</label>
                     <div class="col-7">
                       <input type="text" name="nombre_m" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="Usuario" class="col-5">Semestre:</label>
                     <div class="col-7">
                       <input type="text" name="semestre" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="email" class="col-5">Creditos: </label>

                     <div class="col-7">
                       <input type="text" name="creditos" value="" class="form-control" required>
                     </div>

                   </div>


                   <div class="form-group text-center">
                     <button type="submit" name="button1" class="btn btn-info">Insertar</button>
                   </div>

                 </form>
               </div>
           <?php
           error_reporting(0);

           if (isset($_GET['button1'])) {
             $nrc = $_GET['nrc'];
             $nombre_m = $_GET['nombre_m'];
             $semestre = $_GET['semestre'];
             $creditos = $_GET['creditos'];
             $consulta = "INSERT INTO `materias`(`NRC`, `Nombre_m`, `Semestre`, `Creditos`) VALUES ('$nrc','$nombre_m','$semestre','$creditos')";
             $resultado = mysqli_query($app_db, $consulta);

             }
            ?>
            <div class="col">
                    <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NRC</th>
                    <th>Nombre Materia</th>
                    <th>Semestre</th>
                    <th>Creditos</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                  <?php
                  $consulta = "SELECT * FROM materias";
                  $resultado = mysqli_query($app_db, $consulta);

                  while ($Datos = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$Datos[0]</td>";
                    echo "<td>$Datos[1]</td>";
                    echo "<td>$Datos[2]</td>";
                    echo "<td>$Datos[3]</td>";
                    echo "<td><a href='Eliminar_materia.php?nrc=$Datos[0]'>Eliminar</a></td>";
                    echo "</tr>";
                  }
                   ?>

            </tbody>
        </table>
   </div>
             </div>
           </div>


          </div>



  </body>
</html>
