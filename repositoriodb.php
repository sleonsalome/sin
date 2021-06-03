<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'registro_udep';


    try {
        $connr = new PDO("mysql:host=$server;dbname=$database;",$username, $password); 
    } catch (PDOException $e) {
        die('Connected failed: ' .$e->getMessage());
    }
?>

<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        $records = $connr->prepare('SELECT id, nombre, apellido, email, password FROM usuarios WHERE id=:id');
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
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php_login_database';


    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password); 
    } catch (PDOException $e) {
        die('Connected failed: ' .$e->getMessage());
    }
?>

<?php

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