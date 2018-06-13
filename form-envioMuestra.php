<?php
	include('headControlUsuario.php');
	//require('conexion_bd.php');
?>
<form class="form-control" method="post" action="registraEnvioMuestra.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Envio de muestras</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-2 offset-md-4 form-group">
				<span><strong>Tipo de análisis: </strong> </span>
		</div>
		<div class="col-lg-3 offset-md-4 ">
      <span> Micotoxina<span>
    <input type="radio" name="toxina" id="tipoMuestra" value="toxina" class="form-control">
    <span> Bacteria nociva<span>
  <input type="radio" name="bacteria" id="tipoMuestra" value="bacteria" class="form-control">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-3 offset-md-4 form-group">
				<span><strong>Elija unidad de medida:</strong>  </span>
		</div>
		<div class="col-lg-3 ">
      <select name="opcionMedida">
  <option value="cm3">Cm3</option>
  <option value="gramos">Gramos</option>
</select>
		</div>
	 </div>
   <div class="row form-group ">
    <div class="col-md-3 offset-md-4 form-group">
         <span><strong>Cantidad:  </strong></span>  <input id="medida" type="number" class="form-control" name="medida"value="cantidad">
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
