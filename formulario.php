<form action="repositorio.php" method="post" class="form-inline">
    <div class="row g-2">
        <label for="selectMaterial" class="col-sm-1 col-form-label">Tipo de material:</label>
        <div class="col-sm-3">
            <select id="material" name="nombreMaterial">
                <option value="va"></option>
                <option value="ex">Exámenes</option>
                <option value="pc">Prácticas</option>
                <option value="mat">Material de clase</option>
                <option value="trj">Trabajos</option>
             </select>
        </div>

        <label for="selectCurso" class="col-sm-1 col-form-label">Curso:</label>
        <div class="col-sm-3">
            <select id="curso" name="nombreCurso">
                <option value="va"></option>
                <option value="c1">Curso 1</option>
                <option value="c2">Curso 2</option>
                <option value="c3">Curso 3</option>
                <option value="c4">Curso 4</option>
            </select>
        </div>
            
    </div>

    <br>

    <div class="row g-2">
        <label for="selectDetalles" class="col-sm-1 col-form-label">Detalles:</label>
            <div class="col-sm-3">
                <select id="detalles" name="detalles">
                    <option value="va"></option>
                    <option value="o1">Opción 1</option>
                    <option value="o2">Opción 2</option>
                    <option value="o3">Opción 3</option>
                    <option value="o4">Opción 4</option>
                </select>
            </div>

        <label for="selectDocente" class="col-sm-1 col-form-label">Docente:</label>
        <div class="col-sm-3">
            <select id="docente" name="nombreDocente">
                <option value="va"></option>
                <option value="d1">Docente 1</option>
                <option value="d2">Docente 2</option>
                <option value="d3">Docente 3</option>
                <option value="d4">Docente 4</option>
            </select>
        </div>
    </div>

    <br>

    <div class="row g-2">
        <label for="selectDetalles" class="col-sm-1 col-form-label">Programa académico:</label>
        <div class="col-sm-3">
            <select id="programa" name="programa">
                <option value="va"></option>
                <option value="o1">Ingeniería Industrial</option>
                <option value="o2">Administración de Empresas</option>
                <option value="o3">Administración de Servicios</option>
                <option value="o4">Derecho</option>
                <option value="o5">Psicología</option>
                <option value="o5">Medicina</option>
                <option value="o7">Economía</option>
                <option value="o8">Historia y Gestión Cultural</option>
            </select>
        </div>

        <label for="selectCiclo" class="col-sm-1 col-form-label">Ciclo:</label>
            <div class="col-sm-3">
                <select id="ciclo" name="nombreCiclo">
                    <option value="va"></option>
                    <option value="c1">Ciclo I</option>
                    <option value="c2">Ciclo II</option>
                    <option value="c3">Ciclo III</option>
                    <option value="c4">Ciclo IV</option>
                    <option value="c5">Ciclo V</option>
                    <option value="c6">Ciclo VI</option>
                    <option value="c7">Ciclo VII</option>
                    <option value="c8">Ciclo VIII</option>
                    <option value="c9">Ciclo IX</option>
                    <option value="c10">Ciclo X</option>
                </select>
            </div>
    </div>

</form>