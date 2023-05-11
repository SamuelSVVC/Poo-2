
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Iniciar Sesión</h1>
    </div>
    <div class="form-content">
    <form action="validarlog.php" method="post">
        <div class="form-group">
        <label for="user">Usuario</label>
          <input type="text" name="usuario"  class="form-control">
        </div>
        <div class="form-group">
        <label for="password">Contraseña</label>
          <input type="password" name="pass"  class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="entrar">Log In</button>
        </div>
      </form>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src=''></script><script  src="./script.js"></script>

</body>
</html>
