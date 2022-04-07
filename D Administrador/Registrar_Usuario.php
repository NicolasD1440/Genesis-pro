<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro usuarios</title>
    <link rel="stylesheet" href="css/Estilo_Reg_Usuario.css">
    <link rel="stylesheet" type="text/css" href="../A CSS NAV/Nav.css">
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <ul class="Menu">
      <li><a href="Admin_PG_Prin.php"><i class="fas fa-arrow-left"></i> Volver</a></li>
      <li><a href="#">Por definir</a></li>
      <li><a href="#">Por definir</a></li>
      <li><a href="#">Por definir</a></li>
      <li><a href="#">Por definir</a></li>
    </ul>
    <main>
      <form class="Registro" action="index.html" method="post">
        <h3>Diligencie el formulario para inscribir un usuario</h3>
        <input class="In" type="text" name="Nombre" placeholder="Nombre">
        <input class="In" type="text" name="Apellido" placeholder="Apellido">
        <input class="In" type="number" name="ID" placeholder="ID">
        <input class="In" type="mail" name="Correo" placeholder="Correo">
        <input class="In" type="password" name="Contraseña" placeholder="Contraseña">
        <input class="In" type="number" name="Tipo" placeholder="Tipo">
        <input class="Send" type="submit" name="Enviar" value="Registrar">
      </form>
    </main>
  </body>
</html>
