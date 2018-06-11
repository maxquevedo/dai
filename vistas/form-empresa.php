<form class="form-control" method="get" action="registrarParticular.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Empresa</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Código  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="codigo" type="text" class="form-control" name="codigo">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Rut  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="rut" type="text" class="form-control" name="rut">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Contraseña  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="contraseña" type="text" class="form-control" name="contraseña">
		</div>
	</div>
	<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Contacto</h4>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Rut  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="rutPersona" type="text" class="form-control" name="rut">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Nombre  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="nombrePersona" type="text" class="form-control" name="nombre">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Email  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="emailPersona" type="email" class="form-control" name="email">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Teléfono  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="telefonoPersona" type="text" class="form-control" name="telefono">
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
