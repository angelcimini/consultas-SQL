<?php
	//conexion
	require 'conexionVideo.php';

	//BÚSQUEDA DE CARACTERES CON LIKE

	//*'%OO%': buscar cualquier número de caracteres por delante y buscar cualquier numero de caracteres por detrás
	$sql = "SELECT titulo FROM pel WHERE titulo LIKE '%OO%'";

	//'_OO%'": un caracter OO, dando igual el número de caracteres
	$sql = "SELECT titulo FROM pel WHERE titulo LIKE '_OO%'";


	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>