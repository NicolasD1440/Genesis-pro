<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/Adm_usuarios.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
    <title>Administrar usuarios</title>
    <?php
      session_start();
      function saberURL(){
        $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        return $url;
      }
      $miUrl = saberURL();
      $url2 = "http://localhost/Genesis-pro/D%20Administrador/Administrar_usuarios.php";
       if ($miUrl != $url2) {
         header("Location: ".$url2);
       }
      $v1 ="<i class='fas fa-arrow-left'></i> Atras";
      $Ruta = "../D Administrador/Admin_PG_Prin.php";
      require("../B Recursos compartidos/barra-nav.php");
      include("../B Recursos compartidos/conexion.php");

    ?>
  </head>
  <body>
    <br>
    <div class="container caja">
       <div class=" col-md-11 " >
         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Administrar Alumnos</button>
           </li>
           <li class="nav-item" role="presentation">
             <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Administrar Docentes</button>
           </li>
         </ul>
         <br>
         <div class="tab-content" id="myTabContent">
           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
             <div class="row">



               <div class="col-8">
                 <form class="" action="Administrar_usuarios.php" method="get">

                   <div class="form-group row">
                     <label for="codigo" class="col-3">ID:</label>
                     <div class="col-8">
                       <input type="text" name="id_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="codigo" class="col-3">Nombre:</label>
                     <div class="col-8">
                       <input type="text" name="nombre_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="Usuario" class="col-3">Apellido:</label>
                     <div class="col-8">
                       <input type="text" name="apellido_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="email" class="col-3">Correo: </label>

                     <div class="col-8">
                       <input type="text" name="Correo" value="" class="form-control" required>
                     </div>

                   </div>

                      <div class="form-group row">
                        <label for="email" class="col-3">semestre: </label>
                        <div class="col-8">
                          <input type="text" name="semestre" value="" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-3">Contraseña: </label>
                        <div class="col-8">
                          <input type="text" name="contra" value="" class="form-control" required>
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
             $nombre = $_GET['nombre_al'];
             $apellido = $_GET['apellido_al'];
             $correo = $_GET['Correo'];
             $semestre = $_GET['semestre'];
             $contra = $_GET['contra'];
             $ID = $_GET['id_al'];
             $consulta = "INSERT INTO `alumnos`(`Id`, `nombre`, `apellido`, `correo`, `contraseña`, `semestre_in`) VALUES ('$ID','$nombre','$apellido','$correo','$contra','$semestre')";
             $resultado = mysqli_query($app_db, $consulta);

             }
            ?>

               <div class="col">
                    <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Semestre</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                  <?php
                  $consulta = "SELECT * FROM alumnos";
                  $resultado = mysqli_query($app_db, $consulta);

                  while ($Datos = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$Datos[0]</td>";
                    echo "<td>$Datos[1]</td>";
                    echo "<td>$Datos[2]</td>";
                    echo "<td>$Datos[3]</td>";
                    echo "<td>$Datos[4]</td>";
                    echo "<td>$Datos[5]</td>";
                    echo "<td><a href='accion.php?Id=$Datos[0]'>Eliminar</a></td>";
                    echo "</tr>";
                  }
                   ?>

            </tbody>
        </table>
                </div>

             </div>
           </div>

         <!-- Administrar Docentes -->

           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
             <div class="row">



               <div class="col-8">
                 <form class="" action="Administrar_usuarios.php" method="get">

                   <div class="form-group row">
                     <label for="codigo" class="col-3">ID:</label>
                     <div class="col-8">
                       <input type="text" name="id_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="codigo" class="col-3">Nombre:</label>
                     <div class="col-8">
                       <input type="text" name="nombre_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="Usuario" class="col-3">Apellido:</label>
                     <div class="col-8">
                       <input type="text" name="apellido_al" value="" class="form-control" required>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="email" class="col-3">Correo: </label>

                     <div class="col-8">
                       <input type="text" name="Correo" value="" class="form-control" required>
                     </div>

                   </div>

                      <div class="form-group row">
                        <label for="email" class="col-3">Contraseña: </label>
                        <div class="col-8">
                          <input type="text" name="contra" value="" class="form-control" required>
                        </div>
                      </div>




                   <div class="form-group text-center">
                     <button type="submit" name="button2" class="btn btn-info">Insertar</button>
                   </div>

                 </form>
               </div>
           <?php
           error_reporting(0);

           if (isset($_GET['button2'])) {
             $nombre = $_GET['nombre_al'];
             $apellido = $_GET['apellido_al'];
             $correo = $_GET['Correo'];
             $contra = $_GET['contra'];
             $ID = $_GET['id_al'];
             $consulta = "INSERT INTO `docentes`(`id_Doc`, `NombreDoc`, `ApellidoDoc`, `CorreoDoc`, `ContraseñaDoc`) VALUES ('$ID','$nombre','$apellido','$correo','$contra')";
             $resultado = mysqli_query($app_db, $consulta);

             }
            ?>

            <div class="col">
            <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Asignatura</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                  <?php
                  $consulta = "SELECT * FROM docentes";
                  $resultado = mysqli_query($app_db, $consulta);
                  while ($Datos = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$Datos[0]</td>";
                    echo "<td>$Datos[1]</td>";
                    echo "<td>$Datos[2]</td>";
                    echo "<td>$Datos[3]</td>";
                    echo "<td>$Datos[4]</td>";
                    echo "<td>-----------</td>";
                    echo "<td><a href='accion.php?Id_Doc=$Datos[0]'>Eliminar</a></td>";
                    echo "</tr>";
                  }
                   ?>

                 </tbody>
               </table>
               <button class='btn btn-info Asignar' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'>Asignar NRC</button>

               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Asignar NRC</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                       <form action="" method="">

                         <div class="mb-3">
                           <label for="recipient-name" class="col-form-label">ID:</label>
                           <input type="text" class="form-control" id="recipient-name" name="id_prof">
                         </div>


                         <div class="mb-3">
                           <select class="form-select notas" name="nrc">
                              <option disabled selected value="0">Seleccione un NRC</option>
                              <?php
                                $consulta = "SELECT NRC FROM materias";
                                $resultado = mysqli_query($app_db, $consulta);

                                while ($Datos = mysqli_fetch_array($resultado)) {
                                  echo "<option value='$Datos[0]'> $Datos[0] </option>";
                                }
                              ?>
                           </select>
                         </div>

                          <div class="modal-footer">
                            <button type="submit"  name="boton" class="btn btn-info">Asignar</button>
                          </div>
                          <?php

                          if (isset($_GET['nrc'])) {
                           $id_prof = $_GET['id_prof'];
                           $nrc = $_GET['nrc'];
                           $consulta2 = "INSERT INTO `dicta`(`id_Doc`, `NRCD`) VALUES ('$id_prof','$nrc')";
                           $resultado2 = mysqli_query($app_db, $consulta2);
                          }
                           ?>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="Cerrar" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                       </form>

                     </div>

                   </div>
                 </div>
               </div>

             </div>
           </div>
         </div>
       </body>
       </html>
