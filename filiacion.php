<?php
//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$resultado = '';
$c_grado= '';
 $c_nivel  = '';
  $c_paralelo = '';
  $c_gestion  = '';

if(isset($_POST['submit']))
{
    
  $busqueda = trim($_POST['grado']);




  $entero = 0;
  
  if (empty($busqueda)){
      $texto = 'Búsqueda sin resultados';
  }
  else
  {
  
   $c_grado= trim($_POST['grado']);
  $c_nivel = trim($_POST['nivel']);
  $c_paralelo = trim($_POST['paralelo']);
  $c_gestion = trim($_POST['gestion']);

   $bd= new SQLite3('cuaderno.db');

    $resultado=$bd->query("SELECT codigo,rude, nivel, grado,gestion, estado FROM inscripcion WHERE grado='$busqueda';");

 
                                         
  }
}
?>

<!DOCTYPE HTML>

<html>

<head>
        <title>Filiacion</title>
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
                <a href="index.html" class="logo">Filiación Lista</a>
                <nav class="right">
                    <a href="#" class="button alt">Registrarme</a>
                </nav>
            </header>
<!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="estudiante.html">Estudiante</a></li>
                    <li><a href="filiacion.php">Filiacion</a></li>
                    <li><a href="evaluacion.php">Evaluacion</a></li>
                    <li><a href="inscripcion.php">Inscripcion</a></li>
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button fit">Login</a></li>
                </ul>
            </nav>
<section id="main" class="wrapper">
 <div class="inner">

    
<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                        <div class="formulario">

                                            <div class="ar">
                                                <div class="select-wrapper">
                                                    <select name="nivel" id="nivel" >
                                                        <option value="">- Nivel -</option>
                                                        <option value="INICIAL">Inicial</option>
                                                        <option value="PRIMARIA">Primaria</option>
                                                        <option value="SECUNDARIA">Secundaria</option>
                                                    </select>
                                                </div>
                                              </div>

                                              <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="grado" id="grado" required>
                                                      
                                                        <option value="">--Grado--</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>

                                              <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="paralelo" id="paralelo" >
                                                        <option value="">- Paralelo -</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="F">E</option>
                                                        <option value="G">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="turno" id="turno" >
                                                        <option value="">- Turno-</option>
                                                        <option value="M">Mañana</option>
                                                        <option value="T">Tarde</option>
                                                        <option value="N">Noche</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="gestion" id="gestion" >
                                                        <option value="">-Gestión-</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         

                                    
<br>
                                         <ul class="actions">
                                        <li><button type="submit"  id="buscar" name='submit' class="button special icon fa-search"value="buscar" >Mostrar</button></li>
                                       </ul>
                        </form>
    <h1 id="titulo"><?php echo $c_grado."-".$c_nivel.":".$c_paralelo; ?></h1>
    <h1 id="titulo2"> <?php echo $c_gestion; ?></h1>
    <h4>Filiacion de Estudiantes</h4>
                                    <div class="table-wrapper">
                                        <table class="alt">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Apellidos y Nombres</th>
                                                    <th>Codigo Rude</th>
                                                    <th>Lugar</th>
                                                    <th>Fecha</th>
                                                     <th>Oficialia</th>
                                                      <th>Libro</th>
                                                       <th>Partida</th>
                                                        <th>Folio</th>
                                                         <th>Ci</th>
                                                          <th>Edad</th>
                                                           <th>Sexo</th>
                                                           <th>Estado</th>
                                                           <th></th>
                                                           <th></th>
                                                           <th></th>
                                                         

                                                </tr>
                                            </thead>
                                        
                                            <?php
                                         if ($resultado=="") 
                                              {

                                              }
                                          else
                                         {
                                          $i=0;
                                           while($fila=$resultado->fetchArray())
                                          {$i=$i+1;
                                         ?>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>

                                                    <?php
                                                      $aux=$fila['rude'];
                                                       $listestudent=$bd->query("SELECT rude,nombre, apellidop,apellidom,ci,sexo,pais,departamento,provincia,localidad,fecha,oficialia,libro,partida,folio,ci_padre,nombre_padre,apellido_padre,ci_madre,nombre_madre,apellido_madre FROM estudiante WHERE rude='$aux';");
                                                       $fila2=$listestudent->fetchArray();
                                                      ?>
                                                    <td><?php echo  $fila2['nombre']." ".$fila2['apellidop']." ".$fila2['apellidom'];?></td>
                                                    <td><?php echo $fila2['rude']; ?></td>
                                                    <td><?php echo $fila2['localidad']; ?></td>
                                                    <td><?php echo $fila2['fecha']; ?></td>
                                                    <td><?php echo $fila2['oficialia']; ?></td>
                                                    <td><?php echo $fila2['libro']; ?></td>
                                                    <td><?php echo $fila2['partida']; ?></td>
                                                    <td><?php echo $fila2['folio']; ?></td>
                                                    <td><?php echo $fila2['ci']; ?></td>
                                                     <td>edad</td>
                                                      <td><?php echo $fila2['sexo']; ?></td>
                                                      <td><?php echo $fila['estado']; ?></td>
                                                      <td> 
                                                        <ul class="accion">
                                                          <li><a id="<?php echo $fila2['rude']; ?>" href="modificacion_inscripcion.php?id=<?php echo $fila2['rude']."".$fila['gestion']; ?>" class="button special icon fa-search">Inscripcion</a></li>
                                                          </ul>
                                                      </td>
                                                       <td> <ul class="accion" >
                                                          <li><a id="<?php echo $fila2['rude']; ?>" href="modificacion_estudiante.php?id=<?php echo $fila2['rude']; ?>" class="button special icon fa-search">Modificar</a></li>
                                                          </ul></td>

                                                    <td> <ul class="accion">
                                                          <li><a href="#" id="eliminar" class="button special icon fa-close">Eliminar</a></li>
                                                          </ul></td>
                                                      
                                                </tr>
                                           <?php 
                                             }
                                           }
                                           ?>    
                                            </tbody>
                                            
                                        </table>
                                    </div>
      </div>
             
</section>
<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
              <script src="assets/js/codiguito.js"></script>
</body>

</html>