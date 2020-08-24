<?php
	//conexion
	require 'conexionVideo.php';
	
	//numero de películas de cada tipo excepto las de ciencia ficción
	$sql = "SELECT tipo, SUM(copias) AS numcopias FROM pel WHERE tipo <> 'CI-FI' GROUP BY tipo";

	//numero de películas de cada tipo excepto las de ciencia ficción de forma ascendente
	$sql = "SELECT tipo, SUM(copias) AS numcopias FROM pel WHERE tipo <> 'CI-FI' GROUP BY tipo ASC";

	//para realizar un filtro de GROUP BY usamos la cláusula HAVING
	//el WHERE es el filtro del SELECT: es aquello que vamos a seleccionar
	//el HAVING es el filtro del GROUP BY: es lo que seleccionaremos y mostraremos en la siguiente tabla
	$sql = "SELECT tipo, SUM(copias) AS numcopias FROM pel WHERE tipo <> 'CI-FI' GROUP BY tipo DESC HAVING numcopias > 2";

	//en el order by si que podemos utilizar columnas ficticias (alias)
	$sql = "SELECT precio*copias AS inversion FROM pel ORDER BY inversion";


	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>