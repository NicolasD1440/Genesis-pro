<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar notas</title>
    <link rel="stylesheet" href="assets/Estilo_ADD_Notas.css">
    <link rel="stylesheet" type="text/css" href="../A assets General/Nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <?php
        session_start();
        $Ruta = "Prof_PG_Prin.php";
        $v1 = "<i class='fas fa-arrow-left'></i> Volver";
        require("../B Recursos compartidos/barra-nav.php");
        include("../B Recursos compartidos/conexion.php");
       ?>
      <main class="Opciones">
        <form class="Frm_Agregar" action="" method="">
          <select class="form-select NRCS" name="NRCS" onchange="this.form.submit()">
            <option disabled selected value="0">Seleccione un NRC</option>

            <?php
              $ID = $_SESSION['miSesion'][0];
              $consulta = "SELECT * FROM dicta WHERE id_Doc = $ID";
              $resultado = mysqli_query($app_db, $consulta);

              while ($Datos = mysqli_fetch_array($resultado)) {
                echo "<option value='$Datos[1]'> $Datos[1] </option>";
              }
            ?>
          </select>

        <?php
          if (isset($_GET['NRCS'])) {
            $_SESSION['Dato'] = $Dato = $_GET['NRCS'];
            $consulta = "SELECT alumnos.Id, nombre, apellido, semestre_in FROM inscribe JOIN alumnos on inscribe.Id = alumnos.Id AND inscribe.NRCM = $Dato AND inscribe.Estado = 2 ";
            $resultado = mysqli_query($app_db, $consulta);
        ?>
      <div class="Lista">
        <strong><p>Estudiantes inscritos en el NRC <?php echo $Dato; ?></p></strong>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Semestre cursando</th>
              <th>Calificacion</th>
            </tr>
          </thead>

            <?php
              while ($Rows = mysqli_fetch_array($resultado)) {
                $_SESSION['NRC'] = $Rows[0];
                $_SESSION['id_g'] = $Id_global = $Rows[0];
                $nombre_global = $Rows[1];
                $apellido_global = $Rows[2];

                echo "<tr>";
                echo "<td>$Rows[0]</td>";
                echo "<td>$Rows[1]</td>";
                echo "<td>$Rows[2]</td>";
                echo "<td>$Rows[3]</td>";
                echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'>Agregar nota</button></td>";
                echo "</tr>";
              }
            }
          ?>
        </table>
      </div>
      </form>
    </main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Agregar_Notas.php" method="">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" value="<?php echo $GLOBALS['nombre_global']; ?>" id="recipient-name" readonly>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control"  value="<?php echo $GLOBALS['apellido_global']; ?>" id="recipient-name" readonly>
          </div>

          <div class="mb-3">
            <select class="form-select notas" name="notas">
               <option disabled selected value="0">Seleccione un Estado</option>
               <option value='1'>Aprobado</option>"
               <option value='3'>Reprobado</option>"
            </select>
          </div>
          <?php


          if (isset($_GET['notas'])) {
           $id_p =$_SESSION['id_g'];
           $nrc_p = $_SESSION['Dato'];
           $nota = $_GET['notas'];
           $consulta2 = "UPDATE `inscribe` SET `Estado`= $nota WHERE Id =$id_p AND NRCM =$nrc_p ";
           $resultado2 = mysqli_query($app_db, $consulta2);
          }
           ?>
           <div class="modal-footer">
             <button type="submit"  name="boton" class="btn btn-primary">Actualizar nota</button>
           </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
