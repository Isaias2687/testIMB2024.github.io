<?php
$bd= new SQLite3('cuaderno.db');
$rud = $_GET['id'];
$listestudent=$bd->query("SELECT rude,nombre, apellidop,apellidom,ci,sexo,pais,departamento,provincia,localidad,fecha,oficialia,libro,partida,folio,ci_padre,nombre_padre,apellido_padre,ci_madre,nombre_madre,apellido_madre FROM estudiante WHERE rude='$rud';");
$fila2=$listestudent->fetchArray();

?>

<!DOCTYPE HTML>

<html>

<head>
        <title>Estudiante</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

<body class="subpage">
<!-- Header -->
            <header id="header">
                <nav class="left">
                    <a href="#menu"><span>Menu</span></a>
                </nav> 
                <a href="index.html" class="logo">Modificación de Datos</a>
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
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button fit">Login</a></li>
                </ul>
            </nav>
<section id="main" class="wrapper">
                <div class="inner">
                    <header class="align-center">
                        <h1>Modificación de Datos</h1>
                        <p>ingresa los datos que requiere </p>
                    </header>

                    <!-- Form -->
                                    <h3>Datos del Estudiante</h3>

                                    <form method="post" action="evemodificarestudiante.php">
                                        <div class="row uniform">
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="rude" id="rude" value="<?php echo $rud; ?>" placeholder="Rude" required />
    
                                            </div>
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="nombre" id="nombre" value="<?php echo $fila2['nombre']; ?>" placeholder="Nombre" required />
                                            </div>
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="apellidop" id="apellidop" value="<?php echo $fila2['apellidop']; ?>" placeholder="Apellido Paterno" />
                                            </div>
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="apellidom" id="apellidom" value="<?php echo $fila2['apellidom']; ?>" placeholder="Apellido Materno" />
                                            </div>
                                    
                                           
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="ci" id="ci" value="<?php echo $fila2['ci']; ?>" placeholder="CI" />
                                            </div>

                                             <div class="12u$">
                                                <div class="select-wrapper">
                                                    <select name="sexo" id="sexo" required >
                                                        <?php 

                                                        if($fila2['sexo']=="F")
                                                               {

                                                        ?>
                                                          <option value="<?php echo $fila2['sexo']; ?>"><?php echo $fila2['sexo']; ?></option>
                                                          <option value="M">M</option>

                                                            <?php

                                                               }
                                                               else
                                                               {
                                                            ?>
                                                                 <option value="<?php echo $fila2['sexo']; ?>"><?php echo $fila2['sexo']; ?></option>
                                                                 <option value="F">F</option>

                                                           <?php 

                                                               }
                                                           ?>
                                                    </select>
                                              </div>
                                            </div>  
                                        </div>
                                    

                                

                                    

                                    <h3>Lugar y Fecha de nacimiento</h3>

                          
                                        <div class="row uniform">
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="pais" id="pais" value="<?php echo $fila2['pais']; ?>" placeholder="Pais" />
                                            </div>
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="departamento" id="departamento" value="<?php echo $fila2['departamento']; ?>" placeholder="Departamento" />
                                            </div>
                                               <div class="6u 12u$(xsmall)">
                                                <input type="text" name="provincia" id="provincia" value="<?php echo $fila2['provincia']; ?>" placeholder="Provincia" />
                                            </div>
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="localidad" id="localidad" value="<?php echo $fila2['localidad']; ?>" placeholder="Localidad" />
                                            </div>
                                             <div class="12u$">
                                                <input type="date" name="fecha" value="<?php echo $fila2['fecha']; ?>">
                                                <label for="priority-low">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                  


                                    <h3>Certificado de nacimiento </h3>

                                
                                        <div class="row uniform">
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="oficialia" id="oficialia" value="<?php echo $fila2['oficialia']; ?>" placeholder="Oficialia" />
                                            </div>
                                              <div class="6u 12u$(xsmall)">
                                                <input type="text" name="libro" id="libro" value="<?php echo $fila2['libro']; ?>" placeholder="Libro" />
                                            </div>
                                              <div class="6u 12u$(xsmall)">
                                                <input type="text" name="partida" id="partida" value="<?php echo $fila2['partida']; ?>" placeholder="Partida" />
                                            </div>
                                              <div class="6u 12u$(xsmall)">
                                                <input type="text" name="folio" id="folio" value="<?php echo $fila2['folio']; ?>" placeholder="Folio" />
                                            </div>
                                           
                                        </div>
                                   

                                    <h3>Nombre de los Padres </h3>

                               
                                        <div class="row uniform">
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="padre_ci" id="ci_padre" value="<?php echo $fila2['ci_padre']; ?>" placeholder="CI del padre" />
                                            </div>
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="padre_apellido" id="padre_apellido" value="<?php echo $fila2['apellido_padre']; ?>" placeholder="Apellidos del Padre" />
                                            </div>
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="padre_nombre" id="padre_nombre" value="<?php echo $fila2['nombre_padre']; ?>" placeholder="Nombres del Padre" />
                                            </div>
                                              <div class="6u 12u$(xsmall)">
                                                <input type="text" name="madre_ci" id="madre_ci" value="<?php echo $fila2['ci_madre']; ?>" placeholder="CI de la madre" />
                                            </div>  
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="madre_apellido" id="madre_apellido" value="<?php echo $fila2['apellido_madre']; ?>" placeholder="Apellidos de la Madre" />
                                            </div>    
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="madre_nombre" id="madre_nombre" value="<?php echo $fila2['nombre_madre']; ?>" placeholder="Nombres de la Madre" />
                                            </div>                                         
                                       
                                        </div>
                                         <br>
                                       <ul class="actions">
                                        <li><button type="submit"  class="button special icon fa-save"value="guardar" >Guardar</button></li>
                                       </ul>
                                   </form>
                                    
                            </div>
    <hr />
                    
</section>
<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
</body>

</html>