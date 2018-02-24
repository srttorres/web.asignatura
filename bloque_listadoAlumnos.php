
 <h2><?php $TITULO_BLOQUE='bloque listado de alumnos'; echo "$TITULO_BLOQUE"; ?></h2>
 <div>
	

<?php
	$sql_alumnos = "SELECT numero_matricula, nombre, puntuacion, nivel FROM alumno";
	$resultado_sql_alumnos = $CONNECTION -> query($sql_alumnos);
?>

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
