<?php
$bd= new SQLite3('cuaderno.db');

$cod = $_REQUEST['codigo'];
$rud = $_REQUEST['rude'];
$sie = $_REQUEST['sie_procedencia'];
$uep = $_REQUEST['ue_procedencia'];
$niv = $_REQUEST['nivel'];
$gra = $_REQUEST['grado'];
$par = $_REQUEST['paralelo'];
$tur = $_REQUEST['turno'];
$ges = $_REQUEST['gestion'];
$est = $_REQUEST['estado'];

$bd->exec("UPDATE inscripcion SET codigo='$rud$ges',sieprocedencia='$sie',ueprocedencia='$uep',nivel='$niv',grado='$gra',paralelo='$par',turno='$tur',gestion='$ges',estado='$est' WHERE codigo='$cod'");

echo "SE HA REGISTRADO  CORRECTAMENTE....";

$bd->close();
?>

<a href="filiacion.php"> VOLVER </a>
