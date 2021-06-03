<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar archivos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form action="repositorio.php"  method="post" enctype="multipart/form-data" class="form-inline">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" name="narchivo" class="form-control" placeholder="Nombre del archivo">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-9">
                            <select type="text" name="tipo" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione tipo de archivo</option>
                                <option value="Exámen">Exámen</option>
                                <option value="Práctica">Práctica</option>
                                <option value="Material de clase">Material de clase</option>
                                <option value="Trabajos">Trabajos</option>
                                <option value="Laboratorio">Laboratorio</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Carrera:</label>
                        <div class="col-sm-9">
                            <select type="text" name="carrera" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione una carrera</option>
                                <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                <option value="Administración de Empresas">Administración de Empresas</option>
                                <option value="Administración de Servicios">Administración de Servicios</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Psicología">Psicología</option>
                                <option value="Medicina">Medicina</option>
                                <option value="Economía">Economía</option>
                                <option value=">Historia y Gestión Cultural">Historia y Gestión Cultural</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Curso:</label>
                        <div class="col-sm-9">
                            <input type="text" name="curso" class="form-control" placeholder="Curso">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Docente:</label>
                            <div class="col-sm-9">
                                <input type="text" name="docente" class="form-control" placeholder="Nombre del docente">
                            </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Ciclo:</label>
                        <div class="col-sm-9">
                            <select type="text" name="ciclo" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione un ciclo</option>
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

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Archivo:</label>
                        <div class="col-sm-9">
                            <input type="file" id="file" name="file" class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input  type="submit" value="Guardar" class="btn btn-primary" role="button"> 
                    </div>

                </form>

            </div>
                
        </div>
    </div>
</div>
