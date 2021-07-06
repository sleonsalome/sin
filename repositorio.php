<?php
   require 'repositoriodb.php';
?>



<!DOCTYPE html>

<html lang="en">
 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://kit.fontawesome.com/57542662d8.js" crossorigin="anonymous"></script>
        <title>UDEP+</title>
        <link rel="shortcut icon" href="img/udepco.png">
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

            form { text-align: center; position: relative; top: 175px; left: 300px;}
            
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
        
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

        <div class="jumbotron jumbotrom-fluid">
            <div class="container-fluid">

                <img class="titrep" src="img/UDEPM.png" atl="UDEPM" width="200px">

                <?php if(!empty($user)): ?>
                    <h2>Bienvenido <?= utf8_encode($user['nombre']); ?> <?= utf8_encode($name['apellido']); ?></h2>
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
                        <a href="logout.php" type="button" class="btn btn-danger" role="button" style="position: absolute; left: 1200px; top: 160px;">
                            <span class="fas fa-power-off"></span> Salir
                        </a>
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
                        <span type="button" id="btn-modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-align: center; position: absolute; top: 650px; left: 70px; ">
                            <span class="fas fa-plus-circle"></span> Agregar
                        </span>
                    </div>
                </div>

                <div  class="container-fluid" style="position:absolute; top: 750px; left: 60px;  max-width: 90%;">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div id="tablaArchivos"></div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    
        <!-- Modal -->
        
        <div id="modalformulario"></div>
        
    </body>

    <script type="text/javascript">
        $(document).ready(function() { 
            $('#tablaArchivos').load("tablarchivo.php");
            $('#formulario').load("filtroform.php");
            $('#modalformulario').load("modalform.php");
        });    
    </script>
     
</html>