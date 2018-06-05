<?php
	include('head.php');
?>

<!--Login-->
<div class="row form-group">
		<div class="row form-group">
			<h3 class="col-lg-12 font-weight-bold offset-md-4">Si ya has pedido muestras antes, ¡Inicia sesión!</h3>
		</div>
		<form class="form-control form-group" name="login" action="verificaLogin.php" method="get">
			<div class="row form-group">
				<div class="col-md-1 offset-md-3">
					<span class="font-weight-bold"> Nombre: </span>
				</div>
				<div class="col-md-3">
					<input type="text" name="user" id="user" class="form-control" >
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-1 offset-md-3">
					<span class="font-weight-bold">Contraseña:</span>
				</div>
				<div class="col-md-3">
				 	<input type="text" name="pass" id="pass" class="form-control">	
				 </div>
			</div>
			<div class="row form-group">
				<div class="col-md-2 offset-md-4">
					<button class="form-control btn btn-primary font-weight-bold" type="submit">Iniciar Sesion</button>
				</div>
			</div>
		</form>
</div>

<!--Fomulario-->
<div class="row form-group ">
	<h3 class="col-lg-12 font-weight-bold offset-md-2">Si no, completa el formulario para auto registrarte</h3>
</div>
	<div class="row form-group">
		<form class="form-control" method="get" action="registarar.php" name="registrar">
			<div class="row form-group">
				<span class="offset-md-4">¿Eres empresa o particular?</span>
			</div>
			<div class="row form-group">
				<div class="col-md-2 offset-md-3">
					<input id="btnEmpresa" type="checkbox" name="btnEmpresa">
					<label for="btnEmpresa">Empresa</label>
				</div>
				<div class="col offset-md-1">
					<input id="btnPersona" type="checkbox" name="btnPersona">
					<label for="btnPersona">Persona</label>
				</div>
			</div>
		</form>
	</div>


<?php
	include('footer.php');
?>