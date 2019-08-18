<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos1.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
$tipo_usuario= $_SESSION['tipo_usuario'];
if($tipo_usuario != 'administrador'){
  header("Location:../../index.php");
}
if($usuario == null || $usuario= ''){
    header("Location:../../index.php");
}
require '../../conexion.php';
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
        <input type="text" name="busqueda" id="busqueda" required placeholder="Buscar" class="btn_text">
        <input type="submit" name="btn_buscar" value="Buscar" class="btn_search">
      </form>
      <br><br>
      <table>
        <tr>
          <th>No. Empleado</th>
          <th>Tipo de usuario</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Grado de estudios</th>
          <th>Correo</th>
          <th>Opciones</th>
        </tr>
        <?php
        $query= mysqli_query($conexion, "SELECT * FROM usuarios");
        $resultado= mysqli_num_rows($query);
        if($resultado > 0){
          while ($datos= mysqli_fetch_array($query)) {?>
            <tr>
              <td><?php $usuario= $datos['usuario']; echo "$usuario"; ?></td>
              <td><?php $tipo_usuario= $datos['tipo_usuario']; echo "$tipo_usuario"; ?></td>
              <td><?php $nombre= $datos['nombre']; echo "$nombre"; ?></td>
              <td><?php $apellido_p= $datos['apellido_p']; echo "$apellido_p"; ?></td>
              <td><?php $apellido_m= $datos['apellido_m']; echo "$apellido_m"; ?></td>
              <td><?php $grado_estudios= $datos['grado_estudios']; echo "$grado_estudios"; ?></td>
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
          echo "<h1>No hay usuarios</h1>";
        }
        ?>
      </table>
    </section>
    <br><br><br><br>
    <div class="footer-min-div">
      <div class="footer-social-icons">
        <center><h2 class="tituloo">Siguenos en:</h2></center>
        <ul>
          <li><a href="https://facebook.com" target="blank"><img src="../img/facebook.png" alt="" width="60" height="60"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com" target="blank"><img src="../img/twitter.jpg" alt="" width="60" height="60"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://instagram.com" target="blank"><img src="../img/instagram.jpg" alt="" width="60" height="60"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  <div class="footer-bottom">
    <p>©Todos los derechos recervados Tracking Activities 2019</p>
  </div>
  </body>
</html>
