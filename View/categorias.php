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
      <script src="View/Scripts/main.js"></script>
      <script src="View/Scripts/categorias.js"></script>
      
      <!-- -------------------------- -->



      <style>

      .select-wrapper input.select-dropdown {

        border-bottom: 2px solid #b50307;
        font-size: 22px;
      }

      .dropdown-content li>span{

        color: black;

      }
         
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


<section class="container-wide" >

    <!-- <h4 class="left-align"style="color: #3a3a3a; border-bottom:3px solid #b50307; max-width:700px;font-weight:400;margin-top: 80px;margin-bottom: 50px;margin-left: 20px;">Elige una categoría</h4>	 -->

    <div class="row" style="width:90%; padding: 45px 0 60px 0; margin-bottom: 0px;">


        <!-- <div class="center-align" style="padding-left: 15px;margin: 20px 0 20px 0;">
            
                  <div id="cboCate" style="width: 500px; height:60px; border-radius: 15px; border: 2px solid #dfe1e5;padding-left: 15px;" >
                        <input class="search-txt" type="text" name="" placeholder=" CATEGORÍA DE PRODUCTO" style="float:left; color: white; box-shadow: none; border: none; line-height:20px; width: 85%;margin-top: 5px;">
                        <a class="search-btn" href="#" style="float:left; width:15%; height:56px; border-radius:0 15px 15px 0; background:#b50307; border-left: 2px solid white">
                          <i class="medium material-icons" >expand_more</i>
                        </a>
                  </div>   

          </div> -->

          <div class="col s12 l5 input-field">
              <select id="cbocate" style="">
              
              </select>
          </div>

          <div class="col s12 l12 ">

              <div id="contecat" class="row">

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