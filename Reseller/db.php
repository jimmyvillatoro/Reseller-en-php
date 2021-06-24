<?php 

$servidor  ="localhost"; 
$usuario   ="yaprendo_test";  
$clave     ="us1317mx$";
$basedatos ="yaprendo_ProyectoDan";
$db_connection = mysqli_connect($servidor, $usuario, $clave, $basedatos) or die(mysql_error());
if (!$db_connection) {
	die("No se ha podido conectar a la base de datos");
}else
	echo mysqli_connect_error($db_connection);
?>
