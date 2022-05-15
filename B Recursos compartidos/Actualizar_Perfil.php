<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../A assets General/Body.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
    <title>Actualizar perfil</title>
    <?php
      session_start();
      $tabla = $_SESSION['Usuario'];
      $nombre = $_SESSION['miSesion'][1];
      $apellido = $_SESSION['miSesion'][2];
      $ID = $_SESSION['miSesion'][0];
      $correo_alumno = $_SESSION['miSesion'][3];
      $Semestre = $_SESSION['miSesion'][5];
      $v1 ="<i class='fas fa-arrow-left'></i> Atras";

      switch ($tabla) {
      case 'docentes':
      $Ruta = "../E Profesor/Prof_PG_Prin.php";
          break;
      case 'administradores':
      $Ruta = "../D Administrador/Admin_PG_Prin.php";
          break;
      case 'alumnos':
      $Ruta = "../F Alumno/Alumn_PG_Prin.php";
          break;
        default:
       echo "Ha ocurrido un error inesperado";
          break;
      }
    ?>

  </head>
  <body>
    <?php require("../B Recursos compartidos/barra-nav.php"); ?>
    <br>
    <div class="container">
      <div class="row">
       <div class="caja col-md-8 offset-md-2">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos personales</button>
           </li>
           <li class="nav-item" role="presentation">
             <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Actualizar contraseña</button>
           </li>
         </ul>
         <br>
         <div class="tab-content" id="myTabContent" >
           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
             <div class="row">

               <div class="col-4">
                 <img class="img-thumbnail" src="../B Recursos compartidos/Resources/usuario-de-perfil.png" width="200px" >
               </div>

               <div class="col-8">
                 <form class="" action="accion.php" method="get">

                   <div class="form-group row">
                     <label for="codigo" class="col-3">Nombre:</label>
                     <div class="col-8">
                       <input type="text" name="nombre_al" value="<?php echo $nombre; ?>" class="form-control">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="Usuario" class="col-3">Apellido:</label>
                     <div class="col-8">
                       <input type="text" name="apellido_al" value="<?php echo $apellido; ?>" class="form-control">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="email" class="col-3">Correo: </label>

                     <div class="col-8">
                       <input type="text" name="Correo" value="<?php echo $correo_alumno; ?>" class="form-control" readonly>
                     </div>

                   </div>
                     <?php

                      if ($tabla == "docentes" || $tabla == "administradores") {
                       // si es docente o administrador no debera mostrar el semestre
                     } else {
                      ?>
                      <div class="form-group row">
                        <label for="email" class="col-3">semestre: </label>
                        <div class="col-8">
                          <input type="text" name="semestre" value="<?php echo $Semestre; ?>" class="form-control" readonly>
                        </div>
                      </div>
                      <?php
                     }?>


                   <div class="form-group text-center">
                     <button type="submit" name="button" class="btn btn-info">Actualizar</button>
                   </div>

                 </form>
               </div>
             </div>
           </div>

           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
             <div class="col-md-8 offset-md-3">
               <h3 class="text-center">Cambio de clave</h3>
         <!-- Formualrio cambio de clave -->

               <form class="" action="accion.php" method="get">
               <div class="form-group row">
                 <label for="Usuario" class="col-4">Correo:</label>
                 <div class="col-8">
                  <input type="text" name="email" value="<?php echo $correo_alumno; ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="nContraseña" class="col-4">Nueva contraseña:</label>
                <div class="col-8">
                  <input type="password" name="pass_new" value="" class="form-control">
                </div>
              </div>
              <div class="form-group text-center">
                <button type="submit" name="button2" class="btn btn-info">Actualizar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        </from>


  </body>
</html>
