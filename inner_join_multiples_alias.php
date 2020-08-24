<?php
	//conexion
	require 'conexionVideo.php';
	
	//para cada cliente quiero saber los titulos de las películas que he alquilado

	/*necesito:
		- nombre y apellidos del cliente
		- total de cada factura
		- título de todas las películas que haya alquilado
	*/

	/*

	//FORMA DE REALIZARLO CON EL INNER JOIN

	$sql= "SELECT cli.nombre, cli.apel, fac.f_num, fac.total, pel.titulo 
	FROM cli
	INNER JOIN fac ON cli.cliid = fac.cliid 
	INNER JOIN f_p ON fac.f_num = f_p.f_num
	INNER JOIN pel ON f_p.p_num = pel.p_num
	ORDER BY nombre, apel, titulo ";
	*/

	//FORMA DE REALIZARLO CON EL WHERE

	$sql= "SELECT a.nombre, a.apel, b.f_num, b.total, d.titulo
	FROM cli,fac,f_p,pel
	WHERE cli.cliid = fac.cliid
	AND fac.f_num = f_p.f_num
	AND fac.f_num = pel.p_num
	ORDER BY nombre, apel, fac.f_num, titulo ";

	//ejecutar sql
	$resultado = mysqli_query($conexionVideo, $sql) or die (mysqli_error($conexionVideo));

	//transformar objeto bbdd a array asociativo
	while($filas = mysqli_fetch_assoc($resultado)) {
		print_r($filas);
		echo '<br>';
	}

?>