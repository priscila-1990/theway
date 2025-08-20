<?php
$idcontenido=$_GET['idcontenido'];
$connect = mysqli_connect("localhost", "root", "", "bioquimica"); 

   $query = "SELECT * FROM contenido  WHERE idcontenido= $idcontenido";  
   $result = mysqli_query($connect, $query);
  // $img = "<img src=\"ver.php?id=".$registro['id']."\">";
?>
<!doctype html>
<html lang="es">
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bioquimica/css/jquery-ui-1.8.17.custom.css">
    <link rel="stylesheet" type="text/css" href="../bioquimica/css/main.css">
    <link rel="stylesheet" type="text/css" href="../bioquimica/css/style.css">
    <link rel="stylesheet" type="text/css" href="complemento/complementos/bootstrap.css">
      <script type="text/javascript" src="complemento/complementos/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/validacion.js"></script>
        <script type="text/javascript" src="complemento/complementos/bootstrap.js"></script>
     
      <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="js/jspdf.debug.js"></script>
    <script type="text/javascript" src="js/basic.js"></script>
    <style type="text/css">
    .zoom{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 1s, height 1s, transform 1s;
        -moz-transition: width 1s, height 1s, -moz-transform 1s;
        -webkit-transition: width 1s, height 1s, -webkit-transform 1s;
        -o-transition: width 1s, height 1s,-o-transform 1s;
    }
    .zoom:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(2);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
    }
</style>

    <script>
        $(function() {
            $("#accordion-basic, #accordion-text, #accordion-graphic").accordion({
                autoHeight: false,
                navigation: true
            });
            $( "#tabs" ).tabs();
            $(".button").button();
        });
    </script>
    <title>Bioquímica</title>
<?php
include('menu.php');
?>
<?php session_start();

    if(isset($_SESSION['usuario'])) {
      ?>  <div class="example" data-toggle="tooltip" title="Volver al área de Configuración">
                <h2 align="right" class="Estilo8"><a href="administrador.php"><img src="images/confi.jpg" width="50" height="55"/></a><span class="Estilo1"> .... </span></h2>
        </div>
        <p>&nbsp;</p>
    <?php
      }else{

    }
?>
<script>
        $(function() {
            $("#accordion-basic, #accordion-text, #accordion-graphic").accordion({
                autoHeight: false,
                navigation: true
            });
            $( "#tabs" ).tabs();
            $(".button").button();
        });
    </script>

</div>
<body>
  <div align="center">   
<div id="tabs">
  <div id="Est2">
  <p><a href="#tabs-text"><strong>BIOQUÍMICA</strong></a></p></div>
    <ul>
      
<!--<h2 align="center"><strong>Objetivo de la Asignatura</strong></h2> -->   
    <div class="example">        
      <?php  
           while($row = mysqli_fetch_array($result))  
          {  
        ?>                
        <li><a href="#tabs-basic"><p align="justify" class="Estilo2"><strong><?php echo ($row["titulocontenido"]); ?></strong></p>
        <li><a href="#tabs-basic"></a></li></a></li>
    </ul><div class="caja_ventana2">
<div align="justify">
    <div id="tabs-basic">
      <div id="accordion-basic">
        <div id="caja_ventana2"><div class="enzi1">
      <div id="caja3"> 
           <p align="justify" class="Estilo2"><?php echo ($row["descripcion"]); ?></p>
           <p align="justify" class="Estilo2"><?php echo ($row["descp2"]); ?></p>
           <p align="justify" class="Estilo2"><?php echo ($row["descp3"]); ?></p>
           <p align="justify" class="Estilo2"><?php echo ($row["descp4"]); ?></p>
      </div>
   <?php
   mysql_connect("localhost","root","","bioquimica") or die ("no se ha podido conectar a la BD");

    mysql_select_db("bioquimica") or die ("no se ha podido seleccionar la BD");  
        $sql = "SELECT id,archivo_nombre,archivo_tipo,archivo_peso FROM archivo WHERE idcontenido=$idcontenido";
    $consulta = mysql_query($sql) or die ("No se pudo ejecutar la consulta");

    While ($registro=mysql_fetch_assoc($consulta)){
        $img ="<img src=\"ver.php?id=".$registro['id']."\">";
      /*  
        echo "<br> Nombre archivo: ".$registro['archivo_nombre'];
        echo "<br> Tipo archivo (MIME formato): ".$registro['archivo_tipo'];
        echo "<br> Peso: ".$registro['archivo_peso']." bytes.<br><br>";*/
    } 
        ?> 
     
<div align="center" class='img- zoom'>

      <?php echo $img;?>

</div>
          <!-- <p align="justify" class="Estilo2"><strong><?php //echo $row["imagen"]; ?></strong></p>-->
     
        </div>
         
    </div>  
  </div><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
     
  </div>
  </div>
</div>
</div>
</div>
</div>
 <?php  
           } 
        ?> 
    </div>
      
       </div></div></div></div><p></p>
  <div><p></p></div>

 <div align="right"><a href="Guia_FA/reportes/reporte.php" target="_blank"><img src="images/PDF1.png" width="35" height="45" /></a><span class="Estilo1"> ....</span><a target="_blank" href="video-enzimas.php" ><img src="images/video.png" width="35" height="35" /></a><span class="Estilo1"> ....</span><a data-toggle="tooltip" href="ejerc-enzimas.php" title="Ejercicios"><img src="images/examen1.jpg" width="40" height="45" /></a><span class="Estilo1"> ....</span><a data-toggle="tooltip" href="bioquimica.php?idcontenido=<?php echo $idcontenido-1; ?>" title="Atrás"><img src="images/atras.jpg" width="40" height="33" /></a><span class="Estilo1"> ....</span><a data-toggle="tooltip" href="bioquimica.php?idcontenido=<?php echo $idcontenido+1; ?>" title="Siguiente"><img src="images/adelante.jpg" width="40" height="33" /></a><span class="Estilo1"> ........ ..... ..... .................. ....... ............. ......... ....... </span></div><p></p>
<?php
include('piso.php');
?>
<div id="pie"></div>
</body>
</html>