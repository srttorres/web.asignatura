<?php



function connect_db($charset = "utf8"){
	// Create connection
 	$db_connect = mysqli_connect ( "localhost", "davidjones", "releasethekraken", "bdasignatura" );
	//$db_connect = mysqli_connect ( "127.0.0.1", "root", "", "pdl" );
	
	// Check connection
	if (! $db_connect) {
		die ( "Connection failed: " . mysqli_connect_error () );
	} else {
		if($charset !== false)
			mysqli_set_charset($db_connect, $charset);
		return $db_connect;
	}
}

?>