<?php
require 'conexion.php';
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:index.php");
}
$nombre= $_POST['nombre'];
$apellido_p= $_POST['apellido_p'];
$apellido_m= $_POST['apellido_m'];
$tipo_u= $_POST['tipo_u'];
$usuario= $_POST['usuario'];
$telefono= $_POST['telefono'];
$password= $_POST['password'];
$conf_password= $_POST['conf_password'];
$correo= $_POST['correo'];

if (strpos($usuario, " ")) { ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("No se aceptan espacios en blanco en el usuario");
        window.location="registro.php";
      </script>
    </body>
  </html>
  <?php
    }

$consulta= "SELECT * FROM usuarios WHERE usuario= '$usuario'";
$resultado= mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas > 0){
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("El usuario ya existe");
        window.location="registro.php";
      </script>
    </body>
  </html>
<?php }

if($password != $conf_password){ ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("Las password no coinciden");
        window.location="registro.php";
      </script>
    </body>
  </html>
  <?php

    //header("Location:registro.php");
}
$password_cifrada= password_hash($password, PASSWORD_DEFAULT);
$query= "INSERT INTO usuarios(usuario, nombre, apellido_p, apellido_m, telefono, correo, tipo_usuario, password) VALUES ('$usuario', '$nombre', '$apellido_p', '$apellido_m', '$telefono', '$correo', '$tipo_u', '$password_cifrada')";
if($resultado=mysqli_query($conexion, $query)){
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <script type="text/javascript">
        alert("Se guarado el usuario");
        window.location="inicio.php";
      </script>
    </body>
  </html>
  <?php
  //echo "Registro almacenado en la BD";
  //header("Location:index.php");
}else{ ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <script type="text/javascript">
        alert("Error al guardar usuario");
        window.location="registro.php";
      </script>
    </body>
  </html>
  <?php
}
  ?>
