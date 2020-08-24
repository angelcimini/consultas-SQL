<?php
	//conexion
	require 'conexionVideo.php';
	
	//ordenar por orden descendente
	$sql = "SELECT * FROM pel ORDER BY titulo DESC";

	//se ordena si no ponemos nada de forma ascendente
	//poner ASC es lo mismo que no poner nada
	//$sql = "SELECT * FROM pel ORDER BY tipo,titulo";
	$sql = "SELECT * FROM pel ORDER BY tipo,titulo ASC";

	//para ordenar cada una de forma descendente
	//$sql = "SELECT * FROM pel ORDER BY titulo DESC";

	//la clausula ORDER BY siempre va al final
	$sql = "SELECT * FROM pel WHERE tipo = 'COMEDIA' ORDER BY titulo";



	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>