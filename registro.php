<?php
  require 'database.php';

  $message = '';
  $message2 = '';

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['c_password'])) {
    if ($_POST['password'] == $_POST['c_password']) {
      $sql = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':nombre', $_POST['nombre']);
      $stmt->bindParam(':apellido', $_POST['apellido']);
      $stmt->bindParam(':email', $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);

      if ($stmt->execute()) {
        $message = 'Usuario creado exitosamente';
      }else {
        $message2 = 'Hubo un error';
      }
    } else{
      $message2 = 'Las contraseñas no coinciden';
    }
  
  }
?>



<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/57542662d8.js" crossorigin="anonymous"></script>
    <title>UDEP+</title>
    <link rel="shortcut icon"   href="img/udepco.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
      body { 
        background-image: url("img/fondop.png"); background-repeat: no-repeat; background-size: cover; 
        font-family: 'Montserrat', sans-serif;  text-align: center; margin: 0; padding: 0; margin-bottom: 400px;
      }
      h1 { text-align: center; }
      form { text-align: center; position: relative; top: 200px; left: 200px;}
      p { text-align: center; position: relative; top: 200px; left: 20px;  color: 	#FF0000;}
      footer { background-color: #333333; font-size: 10px; width: 100%;  position: fixed; bottom: 0;}
        
    </style>

  </head>

  <body>

    <script src="js/bootstrap.bundle.min.js"></script>

    <br>
    <br>
    <img class="titulo" src="img/UDEPM.png" atl="UDEPM" width="300px">
    <br>
    <br>

    <?php if (!empty($message)): ?>
      <div class="alert alert-success" style="text-align: center;  max-width: 40%;  position: relative; top: 200px; left: 430px;" role="alert">
        <?= $message ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($message2)): ?>
      <div class="alert alert-danger" style="text-align: center;  max-width: 40%;  position: relative; top: 200px; left: 430px;" role="alert">
        <?= $message2 ?>
      </div>
    <?php endif; ?>


    <form action="registro.php" method="post" class="form-inline">

      <div class="row g-2">
        <label for="inputUser" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-2">
          <input  type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
        </div>

        <label for="inputApellido" class="col-sm-1 col-form-label">Apellido:</label>
        <div class="col-sm-2">
          <input  type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
        </div>
      </div>

      <br>

      <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-5">
          <input  type="text" name="email" class="form-control" placeholder="Ingrese su email">
        </div>
      </div>

      <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña:</label>
        <div class="col-sm-5">
          <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
        </div>
      </div>

      <div class="row mb-3">
          <label for="inputPassword4" class="col-sm-2 col-form-label"> Repita su contraseña:</label>
        <div class="col-sm-5">
          <input type="password" name="c_password" class="form-control" placeholder="Repita su contraseña">
        </div>
      </div>


      <div class="row mb-3">
        <div class="col-sm-5 offset-sm-2">
            <input  type="submit" value="Registrar" class="btn btn-primary" role="button">
            <a href="login.php" class="btn btn-primary" role="button">Regresar</a>
        </div>
      </div>

    </form>

  </body>

  <footer class="page-footer">
    <div class="container-fluid">
      <br>
      <div class="row align-items-center">
        <div class="col" style="text-align: center";>
          <img src="img/logo_UDEP.png" alt="udep" width="180px">
        </div>

        <div class="col-sm-5" style="color:#FFFFFF";>
          Universidad de Piura. Todos los derechos reservados.
          Piura: Av. Ramon Mugica 131, Urb. San Eduardo. T (073) 284500. info@udep.pe
          Lima: Calle Martir Jose Olaya 162, Miraflores. T (01) 2139600. campuslima@udep.pe
        </div>

        <div class="col" style="text-align: center";>
          <a href="https://www.facebook.com/udepiura" target="_blank">
            <button class="fab fa-facebook-f btn btn-dark" role="button"></button>
          </a>
  
          <a href="https://twitter.com/udepiura" target="_blank">
            <button class="fab fa-twitter btn btn-dark"></button>
          </a>
  
          <a href="https://www.youtube.com/user/udepiura" target="_blank">
            <button class="fab fab fa-youtube btn btn-dark"></button>
          </a>
        </div>

      </div>
      <br>
    </div>
  </footer>
</html>