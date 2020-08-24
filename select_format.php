<?php
	//conexion
	require 'conexionVideo.php';

	//*FORMAT: nos entrega el número con un solo decimal
	//sentencia SQL: número de filas de la tabla
	$sql = "SELECT titulo, FORMAT(precio,1) AS precio FROM pel";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>