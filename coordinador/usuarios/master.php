<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/estilos1.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:index.php");
}

?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li class="actual"><a href="inicio.php">Inicio</a></li>
          <li><a href="../registro_usuarios.php">Nuevo usuario</a></li>
          <li><a href="../../cerrar.php">Cerrar sesion</a></li>
          </ul></nav>

        </div>
      </div>
       <seccion id="main-col">
        <div class="contenedor">
          <div class="logo">
            <h1>Tracking Activities</h1>
          </div>
        </div>
    </seccion>
    </header>
  </body>
</html>
