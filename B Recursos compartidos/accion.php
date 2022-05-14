<?php
session_start();
include("../B Recursos compartidos/conexion.php");
//Actualizar datos personales
if (isset($_GET['button'])) {
  $tabla = $_SESSION['Usuario'];
  switch ($tabla) {

    case 'docentes':

      $nombre = $_GET['nombre_al'];
      $apellido = $_GET['apellido_al'];
      $ID = $_SESSION['miSesion'][0];
      $consulta = "UPDATE `docentes` SET `NombreDoc`='$nombre',`ApellidoDoc`='$apellido' WHERE id_Doc=$ID";
      $resultado = mysqli_query($app_db, $consulta);
      $_SESSION['miSesion'][1]= $_GET['nombre_al'];
      header("location: ../E Profesor/Prof_PG_Prin.php");
      mysqli_free_result($resultado);
      break;

      case 'administradores':

        $nombre = $_GET['nombre_al'];
        $apellido = $_GET['apellido_al'];
        $ID = $_SESSION['miSesion'][0];
        $consulta = "UPDATE `administradores` SET `NombreAdmin`='$nombre',`ApellidoAdmin`='$apellido' WHERE idAdmin=$ID";
        $resultado = mysqli_query($app_db, $consulta);
        $_SESSION['miSesion'][1]= $_GET['nombre_al'];
        header("location: ../D Administrador/Admin_PG_Prin.php");
        mysqli_free_result($resultado);
        break;

        case 'alumnos':

        $nombre = $_GET['nombre_al'];
        $apellido = $_GET['apellido_al'];
        $ID = $_SESSION['miSesion'][0];
        $consulta = "UPDATE `alumnos` SET `nombre`='$nombre',`apellido`='$apellido' WHERE id=$ID";
        $resultado = mysqli_query($app_db, $consulta);
        $_SESSION['miSesion'][1]= $_GET['nombre_al'];
        header("location: ../F Alumno/Alumn_PG_Prin.php");
        mysqli_free_result($resultado);
    default:
     echo "Ha ocurrido un error inesperado";
      break;
  }

}

//Actualizar contraseña
if (isset($_GET['button2'])) {
    $tabla = $_SESSION['Usuario'];
  switch ($tabla) {

    case 'docentes':

      $passN = $_GET['pass_new'];
      $ID = $_SESSION['miSesion'][0];
      $consulta = "UPDATE `docentes` SET `ContraseñaDoc`='$passN' WHERE id_Doc=$ID";
      $resultado = mysqli_query($app_db, $consulta);
      header("location: ../E Profesor/Prof_PG_Prin.php");
      mysqli_free_result($resultado);
      break;

      case 'administradores':

        $passN = $_GET['pass_new'];
        $ID = $_SESSION['miSesion'][0];
        $consulta = "UPDATE `administradores` SET `ContraseñaAdmin`='$passN' WHERE idAdmin=$ID";
        $resultado = mysqli_query($app_db, $consulta);
        header("location: ../D Administrador/Admin_PG_Prin.php");
        mysqli_free_result($resultado);
        break;

        case 'alumnos':
        $passN = $_GET['pass_new'];
        $ID = $_SESSION['miSesion'][0];
        $consulta = "UPDATE `alumnos` SET `contraseña`='$passN' WHERE id=$ID";
        $resultado = mysqli_query($app_db, $consulta);
        header("location: ../F Alumno/Alumn_PG_Prin.php");
        mysqli_free_result($resultado);
    default:
     echo "Ha ocurrido un error inesperado";
      break;
  }
}
 ?>
