<?php
	//conexion
	require 'conexionVideo.php';

	//*seleccionar copias >=1 and <=3: $sql = "SELECT titulo,copias FROM pel WHERE copias >= 1 AND copias <=3";
	//sentencia SQL: número de filas de la tabla

	//$sql = "SELECT titulo,copias FROM pel WHERE copias >= 1 AND copias <=3"; ES IGUAL A $sql = "SELECT titulo,copias FROM pel WHERE copias BETWEEN 1 AND copias 3";

	//Cuando el número de copias se encuentran entre 1 y 3
	$sql = "SELECT titulo,copias FROM pel WHERE copias BETWEEN 1 AND copias 3";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>