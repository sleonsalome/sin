<?php
  
  session_start();

  require 'logindb.php';

?>

<form action="login.php" method="post" class="form-inline">

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-5">
            <input type="email" name="email" class="form-control" placeholder="Ingrese su email">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña:</label>
        <div class="col-sm-5">
          <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-1 offset-sm-2">
          <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Recuerdame</label>
          </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-5 offset-sm-2">
            <input type="submit" value="Ingresar" class="btn btn-primary" role="button">
            <a href="registro.php" class="btn btn-primary" role="button">Registrarse</a>
        </div>
    </div>

</form>