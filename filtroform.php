<?php
    $conexion=mysqli_connect('localhost','root','','php_login_database');
?>

<form action="tablarchivo.php" method="post" class="form-inline">

    <div class="row mb-4">
        <label for="selectDetalles" class="col-sm-1 col-form-label">Programa académico:</label>
        <div class="col-sm-5">
            <select id="nombrePrograma" name="nombrePrograma">
                <option value=""></option>
                <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                <option value="Administración de Empresas">Administración de Empresas</option>
                <option value="Administración de Servicios">Administración de Servicios</option>
                <option value="Derecho">Derecho</option>
                <option value="Psicología">Psicología</option>
                <option value="Medicina">Medicina</option>
                <option value="Economía">Economía</option>
                <option value="Historia y Gestión Cultural">Historia y Gestión Cultural</option>
            </select>
        </div>
    </div>
    
    <br>

    <div class="row mb-4">
        <label for="selectCiclo" class="col-sm-1 col-form-label">Ciclo:</label>
        <div class="col-sm-5">
            <select id="nombreCiclo" name="nombreCiclo">
                <option value=""></option>
                <option value="Ciclo I">Ciclo I</option>
                <option value="Ciclo II">Ciclo II</option>
                <option value="Ciclo III">Ciclo III</option>
                <option value="Ciclo IV">Ciclo IV</option>
                <option value="Ciclo V">Ciclo V</option>
                <option value="Ciclo VI">Ciclo VI</option>
                <option value="Ciclo VII">Ciclo VII</option>
                <option value="Ciclo VIII">Ciclo VIII</option>
                <option value="Ciclo IX">Ciclo IX</option>
                <option value="Ciclo X">Ciclo X</option>
            </select>
        </div>
    </div>
    
    <br>

    <div class="row mb-4">
        <label for="selectCurso" class="col-sm-1 col-form-label">Curso:</label>
        <div class="col-sm-5">
            <select id="nombreCurso" name="nombreCurso">
                <option value=""></option>
                <?php
                    $msql="SELECT * from archivos";
                    $curs=mysqli_query($conexion,$msql);

                    while ($mostrar=mysqli_fetch_array($curs)) {
                ?>

                <option value="<?php echo $mostrar['curso'] ?>"><?php echo $mostrar['curso'] ?></option>

                <?php
                }
                ?>
                    
            </select>
        </div>
    </div>

    <br>

    <div class="row mb-3">
        <div class="col-sm-3 offset-sm-2">
          <input  type="submit" id="consulta" name="consulta" value="Buscar" class="btn btn-warning" role="button">
        </div>
    </div>

</form>