<?php include 'db.php';
	$connection=connect_db();
?>
<!DOCTYPE html>
<html lang="es">
<?php $TITULO_PAGINA="CREACIÓN DE ALUMNO"; ?>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  	<meta charset="utf-8">
  <title><?php echo "$TITULO_PAGINA"; ?></title>
</head>



<body>
  
  	<h1 style="font-size:medium; color:white;"><?php echo "$TITULO_PAGINA"; ?></h1>
  	<div style="font-size:small; color:white;">


		<p>comprobación de alumno introducido e inserción..........
		
		<?php

		if(!empty($_POST)){
			$var_numero_matricula=mysqli_real_scape_string($connection, $_POST['numero_matricula']);
			$var_nombre=mysqli_real_scape_string($connection, $_POST['nombre']);
			$var_contraseña=mysqli_real_scape_string($connection, $_POST['contraseña']);
		}
			$sql_nuevoalumno = "SELECT ".$numero_matricula.", nombre, puntuacion, nivel FROM alumno WHERE numero_matricula=".$var_numero_matricula." OR nombre=".$var_nombre;
			$result_alumno=$connection -> query($alumno);
			$row = $result_alumno -> num_rows;
			if($row>0){
				echo "<script> alert('el alulmno ya existe'); window.location='listadoAlumnos.php'</script>";
			}
			else{//si row<0, es decir, no existe en la db el nuevo alumno, se crea.
				
				$sql_nuevoalumno = "INSERT INTO alumno (numero_matricula, nombre, contraseña) 
								VALUES ('$var_numero_matricula', '$var_nombre', '$var_puntuacion', '$var_nivel', '$var_contraseña')";
				$resultado_sql_alumnos = $connection -> query($sql_nuevo_alumno);

				if($resultado_sql_alumnos > 0){
				echo "<script> alert('inserción correcta'); window.location='listadoAlumnos.php'</script>";
				}
				else{
				//echo "<script> alert('error en la inserción'); window.location='nuevoAlumno.php'</script>";
				}
			}
		

		
	
		?>
		correcto</p>
		<h1 style="font-size:medium; color:white;">FORMULARIO DE CREACIÓN DE ALUMNO</h1>
		<form action="<?php $_SERVER[PHP_SELF]?>" method="POST" >
			número de matricula:<input type="text" name="numero_matricula" placeholder="n180100" required>
			nombre:<input type="text" name="nombre" placeholder="zipi zape" required>
			contraseña:<input type="text" name="contraseña" placeholder="contraseña" required>
			<input type="submit" name="guardar" value="guardar">
		</form>
	</div>
	<div style="font-size:small; color:white;">
	<?php
	include 'bloque_listadoAlumnos.php';
	?>
	</div>

</body>
</html>