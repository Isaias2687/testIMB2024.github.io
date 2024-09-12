<?php
$bd= new SQLite3('test.db');

$nom = $_REQUEST['nombre'];
$tipo = 'INTERESES';
$seccionA='A';
$seccionB='B';
$var='A';

$valorA1 = $_REQUEST['A1'];
$valorA2 = $_REQUEST['A2'];
$valorA3 = $_REQUEST['A3'];
$valorA4 = $_REQUEST['A4'];
$valorA5 = $_REQUEST['A5'];
$valorA6 = $_REQUEST['A6'];
$valorB1 = $_REQUEST['B1'];
$valorB2 = $_REQUEST['B2'];
$valorB3 = $_REQUEST['B3'];
$valorB4 = $_REQUEST['B4'];
$valorB5 = $_REQUEST['B5'];
$valorB6 = $_REQUEST['B6'];


$bd->exec("INSERT INTO encuesta(seccion,tipo,respuesta,puntage,idestudiante) VALUES('$seccionA','$tipo','$var','$valorA1','2')");
$bd->exec("INSERT INTO encuesta(seccion,tipo,respuesta,puntage,idestudiante) VALUES('$seccionA','$tipo','$var','$valorA2','2')");
$bd->exec("INSERT INTO encuesta(seccion,tipo,respuesta,puntage,idestudiante) VALUES('$seccionA','$tipo','$var','$valorA3','2')");
$bd->exec("INSERT INTO encuesta(seccion,tipo,respuesta,puntage,idestudiante) VALUES('$seccionA','$tipo','$var','$valorA4','2')");






echo "SE HA REGISTRADO  CORRECTAMENTE....";

$bd->close();


?>

<a href="estudiante.html"> VOLVER </a>
