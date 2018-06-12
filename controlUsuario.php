<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width-device-width,initial-scale-1">
  <title>Usuario Pelotillehue</title>
  <link rel="icon" href="img/favicon.png">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <style>
    footer{
      background-color: #2A4F6E;
      text-align: center;
      color:white;
      padding: 2%;
    }
    nav ul li a{
      color:black;
    }
    a:hover{
      background-color: #293B57;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 2px;
      padding-right: 2px;
      text-decoration: none;
      color:white;
      border-radius: 10px;
    }

  </style>
  <?php
  //require('conexion_bd.php');
  ?>
</head>
<body>
  <header>
    <img class="img-fluid" width="100%" src="http://wakonyu.org/wp-content/uploads/2017/02/Jalaram-Hospital-Kisumu-Jalaram-Maternity-and-Nursing-Home.jpg" style="height: 280px;">
  </header>
  <nav class="nav navbar navbar-light" style="background-color: #7E0F0C;">
    <ul class="nav item font-weight-bold">
      <li class="nav-link active "><a id="navInicio" name="navInicio" href="index.php" style="color:white;">Inicio</a></li>
      <li class="nav-link active"><a id="navEnvio" name="navEnvio" href="login.php" style="color:white;">Envio de muestras </a></li>
    </ul>
     <h4 class="text-right"><a style="color:white;">Bienvenido "bdnombreusuario"</a></h4>
  </nav>
  <div class="container">
<body>

</body>
<?php
require('footer.php');
?>
</html>
