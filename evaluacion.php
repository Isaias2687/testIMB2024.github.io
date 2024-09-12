<?php
//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$resultado = '';
  $c_ser = '0';
  $c_saber = '0';
  $c_hacer = '0';
  $c_decidir = '0';
if($_POST)
{
    
  $busqueda = trim($_POST['grado']);


  $entero = 0;
  
  if (empty($busqueda)){
      $texto = 'Búsqueda sin resultados';
  }
  else
  {
  $c_ser = trim($_POST['ser']);
  $c_saber = trim($_POST['saber']);
  $c_hacer = trim($_POST['hacer']);
  $c_decidir = trim($_POST['decidir']);

   $bd= new SQLite3('cuaderno.db');
    $resultado=$bd->query("SELECT codigo,rude, nivel, grado,gestion FROM inscripcion WHERE grado='$busqueda';");
  }
}
?>
          
<!DOCTYPE HTML>

<html>

<head>
        <title>Evaluacion</title>
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
                <a href="index.html" class="logo">Registro de Evaluaciones</a>
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
                        <h2>REGISTRO DE EVALUACIONES CURRICULARES</h2>
                        <h3>Selecciona las opciones</h3>
                    </header>

                       <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                        <div class="formulario">

                                            <div class="ar">
                                                <div class="select-wrapper">
                                                    <select name="area" id="area" >
                                                        <option value="">- Area -</option>
                                                        <option value="MATEMATICA">Matematica</option>
                                                        <option value="PSICOLOGIA">Psicologia</option>
                                                        <option value="TECNICA">Tecnica</option>
                                                    </select>
                                                </div>
                                              </div>

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
                                                        <option value="">- Grado -</option>
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

                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="bimestre" id="bimestre" >
                                                        <option value="">-Bimestre-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <h3>Seleccione la cantidad de indicadores en cada dimension </h3>
                                      <div class="formulario"">   
                                
                                         <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="ser" id="ser" >
                                                        <option value="">-Ser-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                                <p>SER</p>
                                            </div>
                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="saber" id="saber" >
                                                        <option value="">-Saber-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                               <p>SABER</p>
                                            </div>
                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="hacer" id="hacer" >
                                                        <option value="">-Hacer-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                                <p>HACER</p>
                                            </div>

                                            <div class="ar">
                                                 <div class="select-wrapper">
                                                    <select name="decidir" id="decidir" >
                                                        <option value="">-Decidir-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                                 <p>DECIDIR</p>
                                            </div>

                                        </div>
<br>
                                         <ul class="actions">
                                        <li><button type="submit"  class="button special icon fa-search"value="buscar" >Mostrar</button></li>
                                       </ul>
                        </form>

                        <div class="table-wrapper">
                 <table id="tabla" class="alt">
               <thead>
                                                <tr>
                                                    <th rowspan="2">N°</th>
                                                    <th rowspan="2">Rude</th>
                                                    <th rowspan="2">Nombre y Apellido</th>
                                                      
                                                       
                                                         <th colspan="<?php echo $c_ser; ?>" >DIM SER</th>
                                                       

                                                         <th colspan="<?php echo $c_saber; ?>" >DIM SABER</th>

                                                        <th colspan="<?php echo $c_hacer; ?>" >DIM HACER</th>

                                                         <th colspan="<?php echo $c_decidir; ?>" >DIM DECIDIR</th>
                                                      
                                                </tr>

                                                <tr>
                                                                                                      
                                                        <?php for ($i=0;$i<$c_ser;$i++)
                                                         {?>
                                                         <th><input type="text" name="indicador_ser" id="ser<?php echo($i+1)?>" value="" placeholder="ser<?php echo($i+1)?>" ></th>
                                                        <?php 
                                                         }?>

                                                         <?php for ($i=0;$i<$c_saber;$i++)
                                                         {?>
                                                         <th> Sa<?php echo($i+1)?> </th>
                                                        <?php 
                                                         }?>

                                                         <?php for ($i=0;$i<$c_hacer;$i++)
                                                         {?>
                                                         <th> Ha<?php echo($i+1)?> </th>
                                                        <?php 
                                                         }?>

                                                         <?php for ($i=0;$i<$c_decidir;$i++)
                                                         {?>
                                                         <th> De<?php echo($i+1)?> </th>
                                                        <?php 
                                                         }?>
                                                      
                                                </tr>
                                            </thead>
                                            <tbody>
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
                    <tr>
                    <td><?php echo ($i);?> </td>
                    <td><?php echo $fila['codigo']; ?> </td>
                    <?php
                    $aux=$fila['rude'];
                    $listestudent=$bd->query("SELECT rude,nombre,apellidop,apellidom FROM estudiante WHERE rude='$aux';");
                    $fila2=$listestudent->fetchArray();
                    ?>
                    <td id="nombtext"><?php echo $fila2['nombre']." ".$fila2['apellidop']." ".$fila2['apellidom']; ?> </td>
                    
                        <?php for ($i=0;$i<$c_ser;$i++)
                        {?>
                            <td><input type="text" name="ser" id="ser<?php echo $fila['codigo']."".$i; ?>" value="" placeholder="ser<?php echo $fila['codigo']."".$i; ?>" > </td>
                        <?php 
                        }?>

                        <?php for ($i=0;$i<$c_saber;$i++)
                        {?>
                            <td><input type="text" name="saber" id="saber" value="" placeholder="saber" > </td>
                        <?php 
                        }?>

                         <?php for ($i=0;$i<$c_hacer;$i++)
                        {?>
                            <td><input type="text" name="hacer" id="hacer" value="" placeholder="hacer" > </td>
                        <?php 
                        }?>

                        <?php for ($i=0;$i<$c_decidir;$i++)
                        {?>
                            <td><input type="text" name="decidir" id="decidir" value="" placeholder="decidir" > </td>
                        <?php 
                        }?>

                   
                    </tr>

                <?php
                    }
                }
                 ?>
              
           </table>
           <ul class="accion" >
              <li><a id="guardar" method="get" href="everegistrarevaluacion.php?estilo=hola amor" class="button special icon fa-save">Guardar</a></li>
           </ul>
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