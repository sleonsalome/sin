<?php

  $message = '';
  $message2 = '';

  require 'registrodb.php';

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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (!empty($message2)): ?>
      <div class="alert alert-danger" style="text-align: center;  max-width: 40%;  position: relative; top: 200px; left: 430px;" role="alert">
        <?= $message2 ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>


    <div class="row">
      <div id="formregistro"></div>
    </div>

    <div class="footer">
      <div id="lfooter"></div>
    </div>

  </body>

  <script type="text/javascript">
    $(document).ready(function() { 
      $('#formregistro').load("registroform.php");
      $('#lfooter').load("footer.php");
    });    
  </script>
</html>