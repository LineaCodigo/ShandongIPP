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
      <script src="View/Scripts/categorias.js"></script>

      <!-- -------------------------- -->



      <style>
         
      </style>


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


<div class="row">
  <div class="input-field col s12 m4 l4">
      <select id="cbocate">
      
      </select>
      
  </div>

  <div class="input-field col s12 m4 l4">
      <select id="cbocate">
      
      </select>
      
  </div>


</div>

<div id="" class="row">
    <div class="col s12 m2 l2">
        <div class="card horizontal" style="width:700px;">
            <div class="card-image">
                <img src="Recursos/img/Producto1.jpg">
            </div>
            
            <div class="card-stacked">
                <div class="card-content">
                    <h2 class="header">Counter tipo 1</h2>
                    <ul class="">
                        <li class=""><h5>Catacterísticas</h5></li>
                        <li class=""><div>- Alvin</div></li>
                        <li class=""><div>- Alvin</div></li>
                        <li class=""><div>- Alvin</div></li>
                        <li class=""><div>- Alvin</div></li>
                        
                    </ul>
                    <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a>
                </div>
            </div>
        </div>    
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