<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" >
		<title>Pelotillehue</title>
		<link rel="icon" href="img/favicon.png">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<script>
			$("#navIniciarSesion").click(function(){
				window.load('verificaLogin.php');
			});
		</script>
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
	</head>
	<body>
		<header>
			<img class="img-fluid" width="100%" src="http://wakonyu.org/wp-content/uploads/2017/02/Jalaram-Hospital-Kisumu-Jalaram-Maternity-and-Nursing-Home.jpg" style="height: 280px;">
		</header>
		<nav class="nav navbar navbar-light" style="background-color: #7E0F0C;">
			<ul class="nav item font-weight-bold">
				<li class="nav-link active "><a id="navInicio" name="navInicio" href="index.php" style="color:white;">Inicio</a></li>
				<li class="nav-link "><a id="navEnvio" name="navEnvio" href="login.php" style="color:white;">Envio de muestras </a></li>
			</ul>
				<ul class="nav item font-weight-bold">
					<li class="nav-link justify-content-end"><a id="navIniciarSesion" name="navIniciarSesion" href="iniciarSesion.php" style="color:white;">Iniciar Sesion</a></li>
					</ul>
		</nav>
		<div class="container">
