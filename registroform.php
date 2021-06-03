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