<?php
require '../../conexion.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/estilos.css">
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
          <li><a href="../inicio.php">Inicio</a></li>
          <li class="actual"><a href="lista_usuarios.php">Usuarios</a></li>
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

    <br><br>
    <section class="contenedor_usuarios">
      <center> <h1>Lista de usuarios</h1> <center>
      <form class="form_search" action="buscar_usuario.php" method="post">
        <input type="text" name="busqueda" id="busqueda" required placeholder="Buscar">
        <input type="submit" name="btn_buscar" value="Buscar" class="btn_search">
      </form>
      <br><br>
      <table>
        <tr>
          <th>No. Empleado</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Correo</th>
          <th>Opciones</th>
        </tr>
        <?php
        $query= mysqli_query($conexion, "SELECT * FROM usuarios WHERE tipo_usuario='profesor'");
        $resultado= mysqli_num_rows($query);
        if($resultado > 0){
          while ($datos= mysqli_fetch_array($query)) {?>
            <tr>
              <td><?php $usuario= $datos['usuario']; echo "$usuario"; ?></td>
              <td><?php $nombre= $datos['nombre']; echo "$nombre"; ?></td>
              <td><?php $apellido_p= $datos['apellido_p']; echo "$apellido_p"; ?></td>
              <td><?php $apellido_m= $datos['apellido_m']; echo "$apellido_m"; ?></td>
              <td><?php $correo= $datos['correo']; echo "$correo"; ?></td>
              <td>
                <a href="#" class="link_edit">Editar</a>
                |
                <a href="#" class="link_delete">Eliminar</a>
              </td>
            </tr>


          <?php
          }
        }else{
          echo "ghvgvgv";
        }
        ?>
      </table>
    </section>
  </body>
</html>
