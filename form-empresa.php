<form class="form-control" method="post" action="registraEmpresa.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Empresa</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Rut
		</div>
		<div class="col-lg-3 ">
			<input id="rut" type="text" class="form-control" name="rutEmpresa">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Contraseña
		</div>
		<div class="col-lg-3 ">
			<input id="contraseña" type="text" class="form-control" name="contrasena">
		</div>
	</div>
	<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Contacto</h4>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Rut
		</div>
		<div class="col-lg-3 ">
			<input id="rutPersona" type="text" class="form-control" name="rutContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Nombre
		</div>
		<div class="col-lg-3 ">
			<input id="nombrePersona" type="text" class="form-control" name="nombreContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Email
		</div>
		<div class="col-lg-3 ">
			<input id="emailPersona" type="email" class="form-control" name="emailContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				Teléfono
		</div>
		<div class="col-lg-3 ">
			<input id="telefonoPersona" type="text" class="form-control" name="telefonoContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-secondary">Enviar</button>
		</div>
		<div class="col-md1">
			<button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
		</div>
	</div>
</form>
<script>
	$("#btnLimpiar").click(function(e){
		e.preventDefault();
		$("#codigo").val('');
		$("#rut").val('');
		$("#contraseña").val('');
		$("#rutPersona").val('');
		$("#nombrePersona").val('');
		$("#emailPersona").val('');
		$("#telefonoPersona").val('');
	})
</script>
</div>
