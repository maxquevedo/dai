<?php
	include('head.php');
//	require('conexion_bd.php');
?>
<div id="content" style="margin-top:2%;  margin-bottom:2%;">
	<!--Login-->
	<div class="row form-group">
			<form class="form-control form-group" name="login" action="verificaLogin.php" method="post">
				<div class="row form-group">
					<div class="col-md-1 offset-md-4">
						<span class="font-weight-bold"> Correo: </span>
					</div>
					<div class="col-md-3">
						<input type="text" name="user" id="user" class="form-control" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-1 offset-md-4">
						<span class="font-weight-bold">Contraseña:</span>
					</div>
					<div class="col-md-3">
					 	<input type="password" name="pass" id="pass" class="form-control">
					 </div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-5">
						<button class="form-control btn btn-primary font-weight-bold" type="submit">Iniciar Sesion</button>
					</div>
				</div>
			</form>
	</div>
