<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../bioquimica/css/style.css">
        <link rel="stylesheet" type="text/css" href="../bioquimica/complemento/complementos/bootstrap.css">
      <script type="text/javascript" src="complemento/complementos/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/validacion.js"></script>
        <script type="text/javascript" src="complemento/complementos/bootstrap.js"></script>
    <title>Bioquímica</title>
    <?php
include('menu.php');
?>
       <div class="example" data-toggle="tooltip" title="Configuración">
                <h2 align="left" class="Estilo8"><a href="login.php"><img src="images/Imagen-animada-Engranajes-13.gif" width="80" height="52" /></a></h2>
      </div>
          <div align="right" class="example">
                <h2 class="Estilo8"><a href="nota.php" data-toggle="tooltip" title="Notas"><img src="images/notas.png" width="40" height="50" /></a></h2>
          </div>
        <h2 align="center" class="Estilo8"><img src="images/bienvenidos5.gif" width="250" height="40" /></a></h2>
   
    </div>
  </div>
</div>

 <div class="wrapper">
       <div class="jcarousel-wrapper">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4 "></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5 "></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/bi.png" alt="First slide">
    </div>
    <!--<div class="carousel-item active">
      <img class="d-block img-fluid" src="images/ban-in.png" alt="First slide">
    </div>-->
    
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/comple.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block img-fluid" src="images/met.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block img-fluid" src="images/carb.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block img-fluid" src="images/ban-in.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/bioe.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span></a>
</div>
</div>
</div>
<?php
      include('piso.php');
    ?>
</body>
</html>