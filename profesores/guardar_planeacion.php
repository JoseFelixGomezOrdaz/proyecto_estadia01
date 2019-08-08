<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}
require '../conexion.php';
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
$evidencia= $_POST['evidencia'];
$ponderacion= $_POST['ponderacion'];
$observaciones= $_POST['observaciones'];

$usuario= $_SESSION['username'];
$consulta= "SELECT * FROM materia";
$resultado= mysqli_query($conexion, $consulta);
$id_materia=mysqli_num_rows($resultado);
//INSERT INTO planeacion (id_materia, usuario, numero_unidad, nombre_unidad, horas_practicas, horas_teoricas, fecha_inic_planec, fecha_ter_planec, fecha_inic_ejec, fecha_ter_ejec, actividades_doc, actividades_estd, inst_evaluac, evidencia, ponderacion, observaciones)VALUES
//(1, 1, '1', '$nombre_unidad', '23', '15', '2019-07-11', '2019-07-19', '2019-07-30', '2019-08-01', '$actividades_docente', '$actividades_estudiante', '$instrumentos', '$evidencia', '25', '$observaciones');
$query= "INSERT INTO planeacion (id_materia, usuario, numero_unidad, nombre_unidad, horas_practicas, horas_teoricas, fecha_inic_planec, fecha_ter_planec, fecha_inic_ejec, fecha_ter_ejec, actividades_doc, actividades_estd, inst_evaluac, evidencia, ponderacion, observaciones)VALUES
('$id_materia', '$usuario', '$numero_unidad', '$nombre_unidad', '$horas_practicas', '$horas_teoricas', '$fecha_inicio_planeacion', '$fecha_termino_planeacion',
  '$fecha_inicio_ejecucion', '$fecha_termino_ejecucion', '$actividades_docente', '$actividades_estudiante', '$instrumentos_evaluacion', '$evidencia', '$ponderacion', '$observaciones')";
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
        alert("Se guarado la planeacion");
        window.location="registro_planeacion.php";
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
        alert("Error al guardar la planeacion");
        window.location="registro_planeacion.php";
      </script>
    </body>
  </html>
  <?php
}
  ?>
