<?php 
//PAGINA PRINCIPAL INCLUYE DOS BLOQUES:
//bloque_nuevoAlumno
//bloque_listadoAlumnos
include 'db.php';
$CONNECTION=connect_db();
$TITULO_PAGINA="ASIGNATURA";
$TITULO_BLOQUE='TITULO_BLOQUE=null';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
 	<meta charset="utf-8">
  	<title><?php echo "$TITULO_PAGINA"; ?></title>
</head>
<body>



<h1>PAGINA PRINCIPAL <?php echo "$TITULO_PAGINA"; ?></h1>

<div>
<?php include 'bloque_nuevoAlumno.php';?>
</div>

<div>
<?php include 'bloque_listadoAlumnos.php';?>
</div>



</body>
</html> 