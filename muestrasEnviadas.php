<?php
	session_start();
	require('conexion_bd.php');
	require('headControlUsuario.php');
	$rut = $_SESSION['rut'];
	$sql = "SELECT * FROM ANALISISMUESTRAS WHERE rutUsuario = '$rut' ";
?>
<table class="table table-bordered table-hover" style="margin-bottom: 5%; margin-top:5%;">
	<thead>
		<tr>
			<th>Tipo Analisis</th>
			<th>Medida</th>
			<th>Fecha</th>
			<th>Cantidad</th>
			<th>Codigo</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($rs = $GLOBALS['db']->Execute($sql)){
				while( !$rs->EOF ){
					echo "<tr>";
					echo "<td>".$rs->fields['tipoAnalisis']."</td>";
					echo "<td>".$rs->fields['medida']."</td>";
					echo "<td>".$rs->fields['fechaRecepcion']."</td>";
					echo "<td>".$rs->fields['cantidadMuestra']."</td>";
					echo "<td>".$rs->fields['codigoRandom']."</td>";
					echo "</tr>";
					$rs->MoveNext();
				}
			}
		?>
	</tbody>
</table>
<?php
	require('footer.php');
?>
