<?php
$bd= new SQLite3('cuaderno.db');
$codigo = $_GET['id'];
$listins=$bd->query("SELECT rude,sieprocedencia,ueprocedencia,nivel,grado,paralelo,turno,gestion,estado FROM inscripcion WHERE codigo='$codigo';");
$fila=$listins->fetchArray();
$rude=$fila['rude'];
$listestudent=$bd->query("SELECT rude,nombre,apellidop,apellidom FROM estudiante WHERE rude='$rude';");
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
                <a href="index.html" class="logo">Modificación de Inscripción</a>
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

                                    <form method="post" action="evemodificarinscripcion.php">
                                        <div class="row uniform">
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="rude" id="rude" value="<?php echo $rude; ?>" placeholder="Rude" required />
    
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
                                                <input type="text" name="codigo" id="codigo" value="<?php echo $codigo ; ?>" placeholder="Codigo" required />
    
                                            </div>
                                    
                                           
                                            

                                                    </select>
                                              </div>
                                            </div>  
                                        </div>
                                    
<div class="inner">
                    <header class="align-center">
                        <h1>MOFIFICACIÓN</h1>
                                 </header> 
                                
                                <h3>Unidad de procedencia </h3>

                                        <div class="row uniform">
                                             <div class="6u 12u$(xsmall)">
                                                <input type="text" name="sie_procedencia" id="sie_procedencia" value="<?php echo $fila['sieprocedencia']; ?>"placeholder="SIE Procedencia" />
                                            </div>
                                              <div class="6u 12u$(xsmall)">
                                                <input type="text" name="ue_procedencia" id="ue_procedencia" value="<?php echo $fila['ueprocedencia']; ?>" placeholder="Unidad Procedencia" />
                                            </div>
                                         </div>
                                             
                                           
                                     
                                 

                                    <h3>Inscripcion </h3>
                                 
                                                   <!-- Break -->
                                          <div class="row uniform">
                                            <div class="12u$">
                                                <div class="select-wrapper">
                                                    <select name="nivel" id="nivel"  required>
                                                        <option value="<?php echo $fila['nivel']; ?>"><?php echo $fila['nivel']; ?></option>
                                                        <option value="INICIAL">INICIAL</option>
                                                        <option value="PRIMARIA">SECUNDARIA</option>
                                                        <option value="SECUNDARIA">PRIMARIA</option>
                                                    </select>
                                                </div>
                                              </div>

                                              <div class="12u$">
                                                 <div class="select-wrapper">
                                                    <select name="grado" id="grado" required>
                                                        <option value="<?php echo $fila['grado']; ?>"><?php echo $fila['grado']; ?></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>

                                              <div class="12u$">
                                                 <div class="select-wrapper">
                                                    <select name="paralelo" id="paralelo" required>
                                                       <option value="<?php echo $fila['paralelo']; ?>"><?php echo $fila['paralelo']; ?></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="F">E</option>
                                                        <option value="G">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="12u$">
                                                 <div class="select-wrapper">
                                                    <select name="turno" id="turno" required>
                                                        <option value="<?php echo $fila['turno']; ?>"><?php echo $fila['turno']; ?></option>
                                                        <option value="M">M</option>
                                                        <option value="T">T</option>
                                                        <option value="N">N</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="12u$">
                                                 <div class="select-wrapper">
                                                    <select name="gestion" id="gestion" required>
                                                        <option value="<?php echo $fila['gestion']; ?>"><?php echo $fila['gestion']; ?></option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                            </div>

                                         <div class="12u$">
                                                 <div class="select-wrapper">
                                                    <select name="estado" id="estado" required>
                                                       <option value="<?php echo $fila['estado']; ?>"><?php echo $fila['estado']; ?></option>
                                                        <option value="EFECTIVO">EFECTIVO</option>
                                                        <option value="EXTEMPORANEO">EXTEMPORANEO</option>
                                                        <option value="RETIRADO">NUEVO</option>
                                                    </select>
                                                </div>
                                            </div>
                               

                                                         
                            </div>              
                                

                                    

                                            
                                       
                                        </div>
                                         <br>
                                       <ul class="actions">
                                        <li><button type="submit"  class="button special icon fa-save"value="guardar" >Modificar Inscripcion</button></li>
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