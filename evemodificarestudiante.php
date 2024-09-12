<?php
$bd= new SQLite3('cuaderno.db');

$rud = $_REQUEST['rude'];
$nom = $_REQUEST['nombre'];
$apep = $_REQUEST['apellidop'];
$apem = $_REQUEST['apellidom'];
$ci = $_REQUEST['ci'];
$sex = $_REQUEST['sexo'];
$pai = $_REQUEST['pais'];
$dep = $_REQUEST['departamento'];
$pro = $_REQUEST['provincia'];
$loc = $_REQUEST['localidad'];
$nac = $_REQUEST['fecha'];
$ofi = $_REQUEST['oficialia'];
$lib = $_REQUEST['libro'];
$par = $_REQUEST['partida'];
$fol = $_REQUEST['folio'];
$padre_ci = $_REQUEST['padre_ci'];
$padre_ape = $_REQUEST['padre_apellido'];
$padre_nom = $_REQUEST['padre_nombre'];
$madre_ci = $_REQUEST['madre_ci'];
$madre_ape = $_REQUEST['madre_apellido'];
$madre_nom = $_REQUEST['madre_nombre'];


$bd->exec("UPDATE estudiante SET rude='$rud',nombre='$nom',apellidop='$apep',apellidom='$apem',ci='$ci',sexo='$sex',pais='$pai',departamento='$dep',provincia='$pro',localidad='$loc',fecha='$nac',oficialia='$ofi',libro='$lib',partida='$par',folio='$fol',ci_padre='$padre_ci',apellido_padre='$padre_ape',nombre_padre='$padre_nom',ci_madre='$madre_ci',apellido_madre='$madre_ape',nombre_madre='$madre_nom' WHERE rude='$rud'");

$bd->close();




echo "SE HA MODIFICADO CORRECTAMENTE....";

?>

<a href="filiacion.php"> VOLVER </a>
