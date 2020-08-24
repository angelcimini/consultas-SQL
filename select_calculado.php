<?php
	//conexion
	require 'conexionVideo.php';

	//*AS inversion: sustituye el contenido precio*copias por inversion en el array
	//*No podemos utilizar columnas que no existan en un filtro 
	//*Los filtros DEBEN EXISTIR
	//sentencia SQL: número de filas de la tabla

	//$sql = "SELECT titulo,copias,precio*copias AS inversion FROM pel";
	$sql = "SELECT titulo,copias,precio*copias AS inversion FROM pel WHERE precio*copias >= 100";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>