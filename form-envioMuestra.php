<?php
	session_start();
	include('headControlUsuario.php');
	print_r($_SESSION);
?>
<form class="form-control" method="post" action="registraEnvioMuestra.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-1 text-center form-group" style="color:black;"> Envio de muestras</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
			<strong>Tipo de análisis:</strong>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-7">
					<input type="radio" name="tipoMuestra" id="toxina" value="bacteria">
    				<label for="toxina">Micotoxina</label>
  				</div>
  			</div>
			<div class="row">
				<div class="col-md-7">
  					<input type="radio" name="tipoMuestra" id="bacteria" value="bacteria">
  					<label for="bacteria">Bacteria Nociva</label>
  				</div>
  			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
			<strong>Elija unidad de medida:</strong>
		</div>
		<div class="col-md-3">
      		<select name="opcionMedida">
  				<option value="cm3">Cm3</option>
  				<option value="gramos">Gramos</option>
			</select>
		</div>
	 </div>
   <div class="row form-group ">
    <div class="col-md-3 offset-md-3 form-group">
         <strong>Cantidad:  </strong>
     </div>
     <div class="col-md-2">
     	  <input id="medida" type="number" class="form-control" name="medida" value="cantidad">
     </div>
   </div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-secondary">Enviar</button>
		</div>
	</div>
</form>
</div>
<?php
	include('footer.php');
?>
