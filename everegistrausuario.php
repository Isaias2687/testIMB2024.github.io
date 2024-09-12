<?php
$bd= new SQLite3('test.db');


$nom = $_REQUEST['nombre'];
$sex = $_REQUEST['sexo'];
$telefono = $_REQUEST['telefono'];
$correo = $_REQUEST['correo'];

$bd->exec("INSERT INTO estudiante(nombre,sexo,telefono,correo) VALUES('$nom','$sex','$telefono','$correo')");

$bd->close();


echo "SE HA REGISTRADO  CORRECTAMENTE....";




?>

<a href="estudiante.html"> VOLVER </a>
