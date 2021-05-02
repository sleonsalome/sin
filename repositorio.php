<?php
    session_start();

    require 'database.php';

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, nombre, apellido, email, password FROM usuarios WHERE id=:id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;
        $name = null;

        if (count($results) > 0) {
            $user = $results;
            $name = $results;
        }
    }
?>

<?php

    if (isset($_FILES['file']['name'])) {
        if ($_FILES['file']['size'] > 0) {
            $nombreArchivo = $_FILES['file']['name'];
            $rutaAlmacenamiento = $_FILES['file']['tmp_name'];
            $carpeta = 'upload/';
            $rutaFinal = $carpeta . $nombreArchivo;
    
            move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
        } else {
            echo 0;
        }
    }

?>

<?php
  require 'archivosdb.php';

  $message = '';

    if (!empty($_POST['narchivo']) && !empty($_POST['tipo']) && !empty($_POST['carrera']) && !empty($_POST['curso']) && !empty($_POST['docente']) && !empty($_POST['ciclo'])) {
    
        $sql = "INSERT INTO archivos (narchivo, tipo, carrera, curso, docente, ciclo, ruta) VALUES (:narchivo, :tipo, :carrera, :curso, :docente, :ciclo, :file)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':narchivo', $_POST['narchivo']);
        $stmt->bindParam(':tipo', $_POST['tipo']);
        $stmt->bindParam(':carrera', $_POST['carrera']);
        $stmt->bindParam(':curso', $_POST['curso']);
        $stmt->bindParam(':docente', $_POST['docente']);
        $stmt->bindParam(':ciclo', $_POST['ciclo']);

        if (isset($_FILES['file']['name'])) {
            if ($_FILES['file']['size'] > 0) {
                $nombreArchivo = $_FILES['file']['name'];
                $rutaAlmacenamiento = $_FILES['file']['tmp_name'];
                $carpeta = 'upload/';
                $rutaFinal = $carpeta . $nombreArchivo;
        
                move_uploaded_file($rutaAlmacenamiento, $rutaFinal);

                $stmt->bindParam(':file', $rutaFinal);
            } else {
                echo 0;
            }
        }
    
        
    
        if ($stmt->execute()) {
            $message = 'Datos guardados correctamente';
        }else {
            $message = 'Hubo un error';
        }
    
    }
    
?>

<?php
    $conexion=mysqli_connect('localhost','root','','php_login_database');
?>



<!DOCTYPE html>

<html lang="en">
 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" scr="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/57542662d8.js" crossorigin="anonymous"></script>
        <title>UDEP+</title>
        <link rel="shortcut icon"   href="img/udepco.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <style>
            .jumbotron { background-image: url("img/fondop.png"); background-repeat: no-repeat; background-size: cover; font-family: 'Montserrat', sans-serif;  width: 100%; margin: 0;}
            h1 { text-align: center; font-weight: bold; color: #C7C9C7; 
                position: relative; top: 30px; left: -520px
            }
            h2 { text-align: center; font-weight: bold; position: relative; top: 180px; left: -25px;}
            .titrep{ 
                position: absolute; top: 80px; left: 1150px;
            }

            form { text-align: center; position: relative; top: 150px; left: 200px;}
            table { max-width: 90%;}
            
            select {
                width: 100%;
                padding: 16px 20px;
                border: none;
                border-radius: 4px;
                background-color: #f1f1f1;
            }
            
        
        </style>
    </head>


    <body>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <div class="jumbotron jumbotrom-fluid">
            <div class="container-fluid">

                <img class="titrep" src="img/UDEPM.png" atl="UDEPM" width="200px">

                <?php if(!empty($user)): ?>
                    <h2>Bienvenido <?= $user['nombre']; ?> <?= $name['apellido']; ?></h2>
                    <h1>Repositorio</h1>
                <?php else: ?>
                    <h1>Por favor ingrese bien los datos</h1>
                <?php endif; ?>

                <?php if (!empty($message)): ?>
                    <div class="alert alert-success alert-dismissible fade show" style="text-align: center;  max-width: 30%;  position: relative; top: 100px; left: 900px;" role="alert">
                        <?= $message ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-sm-4">
                        <a href="logout.php" class="btn btn-danger" role="button" style="position: absolute; left: 1200px; top: 160px;">Salir</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div id="formulario"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <!-- Button trigger modal -->
                        <span type="button" id="btn-modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-align: center; position: absolute; top: 550px; left: 70px; ">
                            <span class="fas fa-plus-circle"></span> Agregar
                        </span>
                    </div>
                </div>

                <div  class="container-fluid" style="position:absolute; top: 600px; left: 60px;  max-width: 90%;">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div id="tablaArchivos"></div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    
        <!-- Modal -->
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

    </body>

    <script type="text/javascript">
        $(document).ready(function() { 
            $('#tablaArchivos').load("tablarchivo.php");
            $('#formulario').load("formulario.php");
        });    
    </script>
     
</html>