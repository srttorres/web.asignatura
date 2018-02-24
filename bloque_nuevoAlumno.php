  	<h2><?php $TITULO_BLOQUE='bloque creación de alumno'; echo "$TITULO_BLOQUE"; ?></h2>
  	<div>
		<h2>FORMULARIO DE CREACIÓN DE ALUMNO</h2>
		<!--<form action="<?php// $_SERVER[PHP_SELF]?>" method="POST" >-->
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				número de matricula:<input type="text" name="numero_matricula" placeholder="matricula" required>
				nombre:<input type="text" name="nombre" placeholder="nombre" required>
				password:<input type="text" name="contraseña" placeholder="password" required>
			<input type="submit" name="guardar" value="guardar">
		</form>
	</div>


<?php
	if(!empty($_POST)){
		$var_numero_matricula=mysqli_real_scape_string($CONNECTION, $_POST['numero_matricula']);
		$var_nombre=mysqli_real_scape_string($CONNECTION, $_POST['nombre']);
		$var_contraseña=mysqli_real_scape_string($CONNECTION, $_POST['contraseña']);
	}
	else{

	}
	$sql_nuevoalumno = "SELECT $numero_matricula, nombre, puntuacion, nivel FROM alumno WHERE nombre=legolas";
	$result_alumno=$CONNECTION -> query($alumno);
			$row = $result_alumno -> num_rows;
			if($row>0){
				echo "<script> alert('el alulmno ya existe'); window.location='index.php'</script>";
			}
			else{//si row<0, es decir, no existe en la db el nuevo alumno, se crea.
				if($CONNECTION==false){
					echo "<script> alert('error en la conexión a la base de datos); window.location='index.php'</script>";
				}
				$sql_nuevoalumno = "INSERT INTO alumno (numero_matricula, nombre, contraseña) 
								VALUES ('$var_numero_matricula', '$var_nombre', '$var_contraseña')";
				

				if(mysqli_query($CONNECTION,$sql_nuevo_alumno)){
				echo "<script> alert('inserción correcta'); window.location='index.php'</script>";
				}
				else{
				echo "<script> alert('error en la inserción'); window.location='index.php'</script>";
				}
			}
?>
