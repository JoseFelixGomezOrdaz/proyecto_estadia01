<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/estilos1.css">
  </head>
  <body>
    <header>
       <seccion id="main-col">
        <div class="contenedor">
          <div class="logo">
            <h1>Tracking Activities</h1>
          </div>
        </div>
    </seccion>
    </header>
    <center>
      <br><br><br><br>
      <form action="loguear.php" method="post">
        <h1 class="h">Iniciar sesion</h1>
        <input type="text" name="usuario" required placeholder="Usuario">
        <input type="password" name="password" required placeholder="Password">
        <input type="submit" value="Iniciar">

      </form>
    </center>
  </body>
</html>
