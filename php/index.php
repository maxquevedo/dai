<?php

	include bd.inc.php;
	
	$sql = "SELECT * FROM usuario";
	if ($rs = $GLOBALS['db']->Execute($sql))
	{
		while (!$rs->EOF)
		{
			echo $rs->fields["pnombre"];
			//echo $rs->fields[NOMBRE_CAMPO];
			//echo $rs->fields[NOMBRE_CAMPO];
			$rs->MoveNext();
		}
	}
	
	$sql_upd = "UPDATE tabla SET campo1='valor1', campo2='valor2' WHERE clave='1'";
	$GLOBALS['db']->Execute($sql);
?>