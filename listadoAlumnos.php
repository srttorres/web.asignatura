<?php 

include 'db.php';
$CONNECTION=connect_db();
$TITULO_PAGINA="CREACIÓN DE ALUMNO"; 

?>


<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  	<meta charset="utf-8">
  <title><?php echo "$TITULO_PAGINA"; ?></title>
</head>



<body>
  
  	<h1 style="font-size:medium; color:white;">LISTADO DE ALUMNOS</h1>
  	<div style="font-size:small; color:white;">
	
	<p>carga de base de datos ................................................................
	<?php
		include 'db.php';
		$CONNECTION=connect_db();
		$sql_alumnos = "SELECT numero_matricula, nombre, puntuacion, nivel FROM alumno";
		$resultado_sql_alumnos = $CONNECTION -> query($sql_alumnos);
	?>
	correcto</p>
	</div>
	<div style="font-size:small; color:white;">
	<table border="1">
	<thead>
		<tr>
			<th>numero de matricula</th>
			<th>nombre</th>
			<th>puntuacion</th>
		</tr>
	</thead>
	<?php
	
	while( $alumnos = $resultado_sql_alumnos -> fetch_array (MYSQLI_BOTH)){	
		echo "<tr>";
		echo "<td>".$alumnos['numero_matricula']."</td>";
		echo "<td>".$alumnos['nombre']."</td>";
		echo "<td>".$alumnos['puntuacion']."</td>";
		echo "</tr>";
	}
	
	?>
	</table>
 	</div>
 	<div>
 	<a href="./nuevoAlumno.php"><button type="button">NUEVO</button> </a> 
 	</div>
</body>
</html>



