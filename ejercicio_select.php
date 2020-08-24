<?php

//EJERCICIO EVALUABLE 02

//conexion
require 'conexionvideo.php';

$sql =

//sentencia SQL 01
//  "SELECT DISTINCT nombre, apel FROM cli";


//sentencia SQL 02
//  "SELECT * FROM cli";


//sentencia SQL 03
//  "SELECT DISTINCT clasif FROM pel";


//sentencia SQL 04
//  "SELECT * FROM pel WHERE tipo='DRAMA'";


//sentencia SQL 05
//  "SELECT * FROM pel WHERE tipo='comedia' AND precio < 18";


//sentencia SQL 06
//  "SELECT titulo, copias, precio*copias AS inversion  FROM pel";


//sentencia SQL 07
//  "SELECT titulo, copias, precio*copias AS inversion  FROM pel WHERE precio*copias<60";


//sentencia SQL 08
//  "SELECT titulo, FORMAT(precio, 0)  FROM pel";


//sentencia SQL 09
//  "SELECT COUNT(*) AS 'f_num' FROM fac ";


//sentencia SQL 10
 //  "SELECT SUM(precio*copias) AS Inversion  FROM pel"; // da 642€ porque faltan las pelis de Tiburon y Star Wars


//sentencia SQL 11
//  "SELECT MAX(precio*copias), MIN(precio*copias), AVG(precio*copias) FROM pel";


//sentencia SQL 12
 //  "SELECT COUNT(*) FROM pel WHERE tipo='horror'";


//sentencia SQL 13
 //  "SELECT TITULO, MAX(precio*copias) AS inversion FROM pel WHERE tipo='comedia'";


//sentencia SQL 14
 //  "SELECT titulo, precio FROM pel WHERE precio BETWEEN 20 AND 30";


//sentencia SQL 15
//  "SELECT nombre, apel, prov FROM cli WHERE prov <> 'madrid' AND  prov <> 'barcelona'";


//sentencia SQL 16
 //  "SELECT titulo FROM pel WHERE titulo LIKE '%E_'";


//sentencia SQL 17
 //  "SELECT * FROM cli ORDER BY nombre ASC";


//sentencia SQL 18
 //  "SELECT * FROM cli ORDER BY prov ASC";


//sentencia SQL 19
//  "SELECT prov, COUNT(cliid) FROM cli GROUP BY prov";


//sentencia SQL 20
//  "SELECT cliid, SUM(total) FROM fac GROUP BY cliid";


// sentencia SQL 21
//  "SELECT f_num, COUNT(*) AS numpel FROM f_p GROUP BY f_num HAVING COUNT(*)>2 ORDER BY f_num DESC";


//sentencia SQL 22
/*
	"SELECT nombre, apel
    FROM cli
    GROUP BY f_num 
    HAVING COUNT(*)>10 
    ORDER BY f_num DESC";
*/

//sentencia SQL 23
//  "SELECT COUNT(*) AS 'f_num' FROM fac";


//sentencia SQL 24
//  "SELECT COUNT(*) AS 'f_num' FROM fac";


//sentencia SQL 25
//  "SELECT * FROM pel INNER JOIN f_p ON f_num IS NOT p_num";


//ejecutar SQL
$resultado = mysqli_query($conexionVideo, $sql) or die(mysqli_error($conexionVideo));

//transformar objeto bbdd a array asociativo
while ($filas = mysqli_fetch_assoc($resultado)) {

    print_r($filas);
    echo '<br>';

}



?>