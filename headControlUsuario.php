<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" >
  <title>Pelotillehue</title>
  <link rel="icon" href="img/favicon.png">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
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
    require('conexion_bd.php');
    //print_r($_POST);
  ?>
</head>
<body>
  <header>
    <img class="img-fluid" width="100%" src="http://wakonyu.org/wp-content/uploads/2017/02/Jalaram-Hospital-Kisumu-Jalaram-Maternity-and-Nursing-Home.jpg" style="height: 280px;">
  </header>
  <nav class="nav navbar navbar-light" style="background-color: #7E0F0C;">
    <ul class="nav item font-weight-bold">
      <li class="nav-link active "><a id="navInicio" name="navInicio" href="index.php" style="color:white;">Inicio</a></li>
      <li class="nav-link active"><a id="navEnvioMuestra" name="navEnvioMuestra" href="form-envioMuestra.php" style="color:white;">Envio de muestras </a></li>
      <li class="nav-link active"><a id="navEnvioMuestra" name="navEnvioMuestra" href="muestrasEnviadas.php" style="color:white;">Muestras enviadas </a></li>
    </ul>
    <ul class="nav item font-weight-bold">
       <li class="nav-link active"><a class="text-right" style="color:white;" href="cerrarSesion.php" id="cerrar">Cerrar Sesión</a></li>
    </ul>
  </nav>
  	<div class="container">
