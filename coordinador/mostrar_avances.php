<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!--<img src="assets/img/logo.jpeg" align="right" />-->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilos1.css">
    <link rel="stylesheet" href="css/estilos2.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:index.php");
}
require '../conexion.php';
?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="usuarios/lista_usuarios.php">Usuarios</a></li>
          <li class="actual"><a href="usuarios/mostrar_avances.php">Mostrar avances</a></li>
          <li><a href="../cerrar.php">Cerrar sesion</a></li>
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
    <center>
      <br><br><br>
      <?php
      //se obtiene todas las materias
      $query= mysqli_query($conexion, "SELECT * FROM materia");
      $resultado= mysqli_num_rows($query);
      //echo "materias=$resultado";
      if($resultado > 0){
        while ($datos= mysqli_fetch_array($query)) {
          $id_materia= (int)$datos['id_materia'];
          //echo "id_materia=$id_materia";
          $id_materiaa[]= $id_materia;
        }
      }

      //echo "materiasss=$total";
      for ($i = 0; $i < count($id_materiaa); $i++) {
        //echo "id_materiaI=$i";
        $id_materiia=$id_materiaa[$i];
        //echo "SELECT * FROM planeacion where id_materia=$id_materiia";
        //se obtiene el nombre de la materia
        $query= mysqli_query($conexion, "SELECT * FROM materia where id_materia=$id_materiia");
        $datos= mysqli_fetch_array($query);
        $nombre_materia=$datos['nombre_materia'];
        //se obtiene el total de unidades
        $query= mysqli_query($conexion, "SELECT * FROM planeacion where id_materia=$id_materiia");
        $resultado_t_u= mysqli_num_rows($query);
        if($resultado_t_u > 0){
          $datos= mysqli_fetch_array($query);
            $usuario= $datos['usuario'];
        }
        $query= mysqli_query($conexion, "SELECT * FROM usuarios where usuario=$usuario");
        $datos= mysqli_fetch_array($query);
        $nombre=$datos['nombre'];
        $apellido_p=$datos['apellido_p'];
        $apellido_m=$datos['apellido_m'];
        $nombre_completo= $nombre.' '.$apellido_p.' '.$apellido_m;
        //se obtienen las unidades terminanas
        $query= mysqli_query($conexion, "SELECT * FROM planeacion where id_materia=$id_materiia and estado='completada'");
        $resultado= mysqli_num_rows($query);
        $porcentaje= $resultado * 100 / $resultado_t_u.'%';
        //echo "'$porcentaje', $usuario, $nombre_materia, $nombre_completo";?>
        <table>
          <tr>
            <th>Nombre del profesor</th>
            <th>Nombre de la materia</th>
            <th>Porcenteje de avance</th>
          </tr>
          <tr>
            <td><?php echo "$nombre_completo"; ?></td>
            <td><?php echo "$nombre_materia"; ?></td>
            <td><?php echo "$porcentaje"; ?></td>
          </tr>
        </table>
      <?php
      }
      ?>
    </center>
  </body>
</html>
