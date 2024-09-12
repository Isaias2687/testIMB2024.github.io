<?php
$bd= new SQLite3('cuaderno.db');

/*$codigo = $_GET['id'];*/
$codigo= $_REQUEST['id'];

$listins=$bd->query("SELECT rude,sieprocedencia,ueprocedencia,nivel,grado,paralelo,turno,gestion,estado FROM inscripcion WHERE codigo='$codigo';");
$fila=$listins->fetchArray();

$gestion=$fila['gestion'];
$grado=$fila['grado'];

$nivel=$fila['nivel'];
$paralelo=$fila['paralelo'];
$turno=$fila['turno'];



$gestion=$gestion+1;
$grado=$grado+1;



$rude=$fila['rude'];
$listestudent=$bd->query("SELECT rude,nombre,apellidop,apellidom FROM estudiante WHERE rude='$rude';");
$fila2=$listestudent->fetchArray();


$bd->exec("INSERT INTO inscripcion VALUES('$rude$gestion','$rude','','','$nivel','$grado','$paralelo','$turno','$gestion','EFECTIVO')");

echo "SE HA REGISTRADO  CORRECTAMENTE....".$codigo;

$bd->close();
?>

<a href="inscripcion.php"> VOLVER </a>
