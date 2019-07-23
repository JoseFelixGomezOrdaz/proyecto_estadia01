<?php
$materia= $_POST['materia'];
$pereodo= $_POST['pereodo'];
$numero_unidad= $_POST['numero_unidad'];
$nombre_unidad= $_POST['nombre_unidad'];
$horas_practicas= $_POST['horas_practicas'];
$horas_teoricas= $_POST['horas_teoricas'];
$fecha_inicio_planeacion= $_POST['fecha_inicio_planeacion'];
$fecha_termino_planeacion= $_POST['fecha_termino_planeacion'];
$fecha_inicio_ejecucion= $_POST['fecha_inicio_ejecucion'];
$fecha_termino_ejecucion= $_POST['fecha_termino_ejecucion'];
$actividades_docente= $_POST['actividades_docente'];
$actividades_estudiante= $_POST['actividades_estudiante'];
$instrumentos_evaluacion= $_POST['instrumentos_evaluacion'];
$instrumentos_evaluacion= $_POST['evidencia'];
$evidencia= $_POST['evidencia'];
$ponderacion= $_POST['ponderacion'];
$observaciones= $_POST['observaciones'];
$query= "INSERT INTO planeacion(usuario, materia, pereodo, numero_unidad, nombre_unidad, horas_practicas, horas_teoricas, fecha_inic_planec, fecha_ter_planec, fecha_inic_ejec, fecha_ter_ejec, actevidades_doc, actividades_estd, inst_evaluac, evidencia, ponderacion, observaciones) VALUES
                              ('$usuario', '$materia', '$pereodo', '$numero_unidad', '$nombre_unidad', '$horas_practicas', '$horas_teoricas', '$fecha_inicio_planeacion', '$fecha_termino_planeacion', '$fecha_inicio_ejecucion', '$fecha_termino_ejecucion', '$actividades_docente', '$actividades_estudiante', '$instrumentos_evaluacion', '$evidencia', '$ponderacion', '$observaciones' )";



"INSERT INTO planeacion(usuario, materia, pereodo, numero_unidad, nombre_unidad, horas_practicas, horas_teoricas, fecha_inic_planec, fecha_ter_planec, fecha_inic_ejec, fecha_ter_ejec, actevidades_doc, actividades_estd, inst_evaluac, evidencia, ponderacion, observaciones) VALUES ('$usuario', '$materia', '$pereodo', '$numero_unidad', '$nombre_unidad', '$horas_practicas', '$horas_teoricas', '$fecha_inicio_planeacion', '$fecha_termino_planeacion', '$fecha_inicio_ejecucion', '$fecha_termino_ejecucion', '$actividades_docente', '$actividades_estudiante', '$instrumentos_evaluacion', '$evidencia', '$ponderacion', '$observaciones' )";
?>









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
    $password_dec= $row['password'] ;
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
  $_SESSION['username']= $usuario; ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="assets/css/estilos1.css">
    </head>
    <body>
      <script type="text/javascript">
        alert("<?php $usuario= $_SESSION['username'];
        echo "Bienvenido $usuario"?>");

        <?php if($resulto=mysqli_query($conexion, $consulta)){
          while($row= $result->fetch_assoc()){
            $tipo_usuario= $row['tipo_usuario'] ;
          }

        } ?>
        var tipo_usuario= <?php echo "$tipo_usuario"; ?>;
        alert(tipo_usuario);
        if (tipo_usuario == 'administrador') {
            window.location="administrador/inicio.php";

        }else if (tipo_usuario == 'coordinador') {
           window.location="coordinador/inicio.php";
        }else {
           window.location="profesores/inicio.php";

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
     $password_dec= $row['password'] ;
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
   $_SESSION['username']= $usuario; ?>
   <html>
     <head>
       <meta charset="utf-8">
       <title></title>
       <link rel="stylesheet" href="assets/css/estilos1.css">
     </head>
     <body>
       <script type="text/javascript">
         alert("<?php $usuario= $_SESSION['username'];
         echo "Bienvenido $usuario"?>");
         window.location="inicio.php";
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
