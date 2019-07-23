<?php
require 'conexion.php';
session_start();

$usuario= $_POST['usuario'];
$password= $_POST['password'];
/*
echo "$usuario";
echo "$password";
$consulta= $conexion->query("SELECT * FROM usuarios WHERE usuario= '$usuario' AND password= '$password'");
if($resultado= mysqli_fetch_array($consulta)){
    $_SESSION['username']= $usuario;
    echo "Bienvenido";
}else {
  echo "Datos Incorrectos";

}*/
$query= "SELECT * FROM usuarios WHERE usuario= '$usuario'";
if($result=mysqli_query($conexion, $query)){
  while($row= $result->fetch_assoc()){
    $password_dec= $row['password'];
    $nombre= $row['nombre'];
    $apellido_p= $row['apellido_p'];
    $tipo_usuario= $row['tipo_usuario'];
    $password_decifrada= password_verify($password, $password_dec);
  }

}else{ ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("El usuario y password no coinciden, comuniquese con el administrador del sistema");
        window.location="index.php";
      </script>
    </body>
  </html>
  <?php
  }

$consulta= "SELECT * FROM usuarios WHERE usuario= '$usuario'";
$resultado= mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas > 0  && $password_decifrada== $password){
  $_SESSION['username']= $usuario;
  $_SESSION['nombre']= $nombre;
  $_SESSION['apellido_p']= $apellido_p;
  $_SESSION['tipo_usuario']= $tipo_usuario;
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("<?php $nombre= $_SESSION['nombre'];
                     $apellido_p= $_SESSION['apellido_p'];
        echo "Bienvenido $nombre $apellido_p"?>");
        var tipo_usuario= "<?php echo "$tipo_usuario"; ?>";
        if (tipo_usuario == 'administrador') {
            window.location="administrador/inicio.php";

        }else if (tipo_usuario == 'coordinador') {
           window.location="coordinador/inicio.php";
        }else if (tipo_usuario == 'profesor'){
           window.location="profesores/inicio.php";

        }else{
           window.location="index.php";

        }
        //window.location="inicio.php";
      </script>
    </body>
  </html>
  <!--header("Location:inicio.php");-->
<?php }else {?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("El usuario y password no coinciden, comuniquese con el administrador del sistema");
        window.location="index.php";
      </script>
    </body>
  </html>
  <?php
  //sleep(15);
  //header("Location:index.php");

}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>
