<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}
require '../conexion.php';
$password_actual= $_POST['password_actual'];
$nueva_password= $_POST['nueva_password'];
$conf_password= $_POST['conf_password'];
if($nueva_password != $conf_password){ ?>
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
$usuario= $_SESSION['username'];
$query= mysqli_query($conexion, "SELECT * FROM usuarios where usuario=$usuario");
$datos= mysqli_fetch_array($query);
$password_actuall= $datos['password'];
$password_decifrada= password_verify($password_actual, $password_actuall);
if($password_decifrada== $password_actual){
  $password_cifrada= password_hash($nueva_password, PASSWORD_DEFAULT);
  $usuario= $_SESSION['username'];
  $query= "UPDATE usuarios SET password='$password_cifrada'  WHERE usuario='$usuario'";
  if($resultado=mysqli_query($conexion, $query)){
    ?>
        <script type="text/javascript">
          alert("Se cambio tu password");
          window.location="inicio.php";
        </script>
    <?php
    //echo "Registro almacenado en la BD";
    //header("Location:index.php");
  }else{ ?>
        <script type="text/javascript">
          alert("Error al cambiar password");
          window.location="inicio.php";
        </script>

    <?php
  }
}
?>
