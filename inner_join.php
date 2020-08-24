<?php
	//conexion
	require 'conexionVideo.php';
	
	//clientes que tengan facturas
	//**cli.cliid (es el atributo id de la tabla clientes)
	$sql = "SELECT * FROM cli INNER JOIN fac ON cli.cliid = fac.cliid ORDER BY cli.cliid";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>