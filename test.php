
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


<!DOCTYPE HTML>

<html>

<head>
        <title>Test de orientacion vocacional</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main2.css" />
    </head>

<body class="subpage">
<!-- Header -->
            <header id="header">
                <nav class="left">
                    <a href="#menu"><span>Menu</span></a>
                </nav>
                <a href="index.html" class="logo">Test de Orientacion vocacinal</a>
                <nav class="right">
                    <a href="#" class="button alt">Registrarme</a>
                </nav>
            </header>
<!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="estudiante.html">Estudiante</a></li>
                    <li><a href="filiacion.php">Filiación</a></li>
                    <li><a href="evaluacion.php">Evaluacion</a></li>
                    <li><a href="inscripcion.php">Inscripcion</a></li>
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button fit">Login</a></li>
                </ul>
            </nav>
<section id="main" class="wrapper">

    <div class="inner">
                    <header class="align-center">
                        <h2>MI INVENTARIO DE INTERESES OCUPACIONALES</h2>
                        <p>Califica del 1 al 6 los siguientes encunciados de intereses personales</p>
                    </header>

                       <form method="post" action="evseccd1.php"">

                         <div class="row uniform">
                                            
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" required />
                                            </div>
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="telefono" id="telefono" value="" placeholder="telefono" />
                                            </div>
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="correo" id="correo" value="" placeholder="correo" />
                                            </div>
                                      
                                          
                                                                        
                                           
                                      </div>
                    
                      <h3>ME GUSTARIA:</h3>
                    <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>1)&nbsp;Salir de Escursiones</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-1" value="1" name="A1" checked>
                                                <label for="A1-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-2" value="2" name="A1">
                                                <label for="A1-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-3" value="3" name="A1">
                                                <label for="A1-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-4" value="4" name="A1">
                                                <label for="A1-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-5" value="5" name="A1">
                                                <label for="A1-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A1-6" value="6" name="A1">
                                                <label for="A1-6">6</label>
                                            </div>                      
                       </div>
<div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>2)&nbsp;Pertenecer a un Club de Exploradores</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-1" value="1" name="A2" checked>
                                                <label for="A2-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-2" value="2" name="A2">
                                                <label for="A2-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-3" value="3" name="A2">
                                                <label for="A2-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-4" value="4" name="A2">
                                                <label for="A2-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-5" value="5" name="A2">
                                                <label for="A2-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A2-6" value="6" name="A2">
                                                <label for="A2-6">6</label>
                                            </div>                      
                       </div>
<div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>3)&nbsp;Vivir al aire libre, fuera de la ciudad</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-1" value="1" name="A3" checked>
                                                <label for="A3-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-2" value="2" name="A3">
                                                <label for="A3-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-3" value="3" name="A3">
                                                <label for="A3-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-4" value="4" name="A3">
                                                <label for="A3-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-5" value="5" name="A3">
                                                <label for="A3-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A3-6" value="6" name="A3">
                                                <label for="A3-6">6</label>
                                            </div>                      
                       </div>
                       <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>4)&nbsp;Sembrar y plantar en una granja durante las vacaciones</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-1" value="1" name="A4" checked>
                                                <label for="A4-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-2" value="2" name="A4">
                                                <label for="A4-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-3" value="3" name="A4">
                                                <label for="A4-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-4" value="4" name="A4">
                                                <label for="A4-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-5" value="5" name="A4">
                                                <label for="A4-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A4-6" value="6" name="A4">
                                                <label for="A4-6">6</label>
                                            </div>                      
                       </div>
                    <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>5)&nbsp;Criar animales en una granja durante las vacaciones</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-1" value="1" name="A5" checked>
                                                <label for="A5-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-2" value="2" name="A5">
                                                <label for="A5-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-3" value="3" name="A5">
                                                <label for="A5-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-4" value="4" name="A5">
                                                <label for="A5-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-5" value="5" name="A5">
                                                <label for="A5-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A5-6" value="6" name="A5">
                                                <label for="A5-6">6</label>
                                            </div>                      
                       </div>
                                   
                    <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>6)&nbsp;Ser ténico agricola en una región algodonera</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-1" value="1" name="A6" checked>
                                                <label for="A6-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-2" value="2" name="A6">
                                                <label for="A6-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-3" value="3" name="A6">
                                                <label for="A6-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-4" value="4" name="A6">
                                                <label for="A6-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-5" value="5" name="A6">
                                                <label for="A6-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="A6-6" value="6" name="A6">
                                                <label for="A6-6">6</label>
                                            </div>                      
                       </div>       

                        <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>7)&nbsp;Armar o desarmar objetos</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-1" value="1" name="B1" checked>
                                                <label for="B1-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-2" value="2" name="B1">
                                                <label for="B1-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-3" value="3" name="B1">
                                                <label for="B1-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-4" value="4" name="B1">
                                                <label for="B1-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-5" value="5" name="B1">
                                                <label for="B1-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B1-6" value="6" name="B1">
                                                <label for="B1-6">6</label>
                                            </div>                      
                       </div>
<div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>8)&nbsp;Manejar herramientas y maquinas</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-1" value="1" name="B2" checked>
                                                <label for="B2-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-2" value="2" name="B2">
                                                <label for="B2-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-3" value="3" name="B2">
                                                <label for="B2-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-4" value="4" name="B2">
                                                <label for="B2-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-5" value="5" name="B2">
                                                <label for="B2-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B2-6" value="6" name="B2">
                                                <label for="B2-6">6</label>
                                            </div>                      
                       </div>
<div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>9)&nbsp;Construir objetos o muebles de madera</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-1" value="1" name="B3" checked>
                                                <label for="B3-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-2" value="2" name="B3">
                                                <label for="B3-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-3" value="3" name="B3">
                                                <label for="B3-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-4" value="4" name="B3">
                                                <label for="B3-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-5" value="5" name="B3">
                                                <label for="B3-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B3-6" value="6" name="B3">
                                                <label for="B3-6">6</label>
                                            </div>                      
                       </div>
                       <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>10)&nbsp;Reparar las instalaciones electricas de tu casa</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-1" value="1" name="B4" checked>
                                                <label for="B4-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-2" value="2" name="B4">
                                                <label for="B4-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-3" value="3" name="B4">
                                                <label for="B4-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-4" value="4" name="B4">
                                                <label for="B4-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-5" value="5" name="B4">
                                                <label for="B4-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B4-6" value="6" name="B4">
                                                <label for="B4-6">6</label>
                                            </div>                      
                       </div>
                    <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>11)&nbsp;Diseñar y dirigir la construcción de un pozo o estanque</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-1" value="1" name="B5" checked>
                                                <label for="B5-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-2" value="2" name="B5">
                                                <label for="B5-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-3" value="3" name="B5">
                                                <label for="B5-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-4" value="4" name="B5">
                                                <label for="B5-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-5" value="5" name="B5">
                                                <label for="B5-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B5-6" value="6" name="B5">
                                                <label for="B5-6">6</label>
                                            </div>                      
                       </div>
                                   
                    <div class="formulario">
                          &nbsp;&nbsp;&nbsp <h3>12)&nbsp;Ser experto mecanico en un gran taller</h3> &nbsp;&nbsp
                                 
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-1" value="1" name="B6" checked>
                                                <label for="B6-1">1</label>
                                            </div>
                                  <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-2" value="2" name="B6">
                                                <label for="B6-2">2</label>
                                            </div> 

                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-3" value="3" name="B6">
                                                <label for="B6-3">3</label>
                                            </div>
                                   <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-4" value="4" name="B6">
                                                <label for="B6-4">4</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-5" value="5" name="B6">
                                                <label for="B6-5">5</label>
                                            </div>
                                     <div class="4u 12u$(small)">
                                                <input type="radio" id="B6-6" value="6" name="B6">
                                                <label for="B6-6">6</label>
                                            </div>                      
                       </div>       
<br/>               
                           <ul class="actions">
                                        <li><button type="submit" class="button special icon fa-save" >Siguiente</button></li>
                                       </ul>
                                         
                        </form>

                       
          
       </div>
      
    </div>

                
</section>
<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
</body>

</html>