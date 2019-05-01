<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shandong - Insumos para publicidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Recurso de la página actual-->

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/portada.css" />

      <!-- -------------------------- -->

      <style>
         
      </style>

     <script>

        $(document).ready(function(){

          $('.sidenav').sidenav();

        })      
      
      </script>



</head>
<body>
    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 


<?php 
 include_once './View/Plantillas/menu.php';
 ?>
<!--
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img src="Recursos/img/portadav3.jpg"></a>
    <a class="carousel-item" href="#"><img src="Recursos/img/portadav3.jpg"></a>
  </div>

-->

<!-- Botón flotante de mensajeria  -->

<?php 
 include_once './View/Plantillas/mensajeria.php';
?>


<section class="container" style="width:90%;min-height: 350px;margin-top: 70px;margin-bottom: 15px;">


<h4 style="color: #3f3f3f;" >Catálogo</h4>

<div class="row">

<div class="col s12 m10" style="">
<div class="card">
        <div class="card-content">
       
          <iframe src="https://issuu.com/carlox7/docs/catalogo_shandong_-_insumos_publici" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="col s12 m2" style="padding-left:80px;">
<h4></h4>
<h6></h6>
</div>


</div>




</section>

<br><br>

<!--   Pie de página -->

<?php 
include_once './View/Plantillas/pie.php';
?>



</body>
</html>