<?php
$server="localhost";
$user="davidjones";
$pass="releasethekraken";
$bd="bdasignatura";

$conexion=mysqli_connect($server, $user, $pass, $bd);

if (mysql_connect_errno()){
	echo "+conexionbd: La conexión es incorrecta"
	//mysql_connect_error();
	exit();
}
else{
	echo "+conexionbd: correcta";
}
?>