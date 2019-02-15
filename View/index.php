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

      <script>





 
         /* Script de carrusel slider página principal */

           $(document).ready(function(){
            

              $('.sidenav').sidenav();

              $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true,                    
              });

              $('.slider').slider({
                height: 540
              });

         /* Script de carrusel video historias página principal */                  
              
              $('.sliderx').bxSlider({
                    mode: 'horizontal',
                    auto: true,
                    pause: 4000,
                    slideWidth: 1000

              }); 
              
              
          /* Script scroll click */     

            $('a').click(function(){
                $('html, body').animate({
                    scrollTop: $( $(this).attr('href') ).offset().top - 50
                }, 1500);
                return false;
            });    
            

          });

          /* Evento al terminar de cargar la página*/   
          
          $(window).on("load", function (e) {
            $('#page-preloader').fadeOut(500);                
          })


        
      </script>

      <style>
      
         .embed-container{
         position:relative;
         padding-bottom:75%;
         height:0;
         overflow: hidden;
        }

        .embed-container iframe{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;

        }
      </style>


</head>
<body style="">
    <!-- Plant. código para cuerpo  background-color:#d1d1d1; -->
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

<!-- ---------------- -->

  <!--  Hacer slider principal con mZ   -->

            <div class="slider">
                <ul class="slides">
                <li>
                    <img id="img1" src="Recursos/img/slider3.jpg"> <!-- random image -->
                    <!-- <div class="caption center-align"> -->
                    <div class="caption left-align">
                    <!--
                    <h3 style="text-shadow: 2px 2px 3px #424242;">Una foto se convertirá</h3>
                    <h5 class="light white-text text-lighten-3" style="text-shadow: 2px 2px 2px #424242;">en la gran prueba de nuestro amor<br>para toda la vida</h5>
        -->
                </div>
                </li>
                <li>
                    <img id="img2" src="Recursos/img/slider_2.jpg"> <!-- random image -->
                    <div id="txtport2" class="caption right-align" style="margin-left: 50px;">
                    <!--
                    <h3 style="text-shadow: 2px 2px 3px #757575;">Y será la excusa perfecta</h3>
                    <h5 class="light white-text text-lighten-3" style="text-shadow: 2px 2px 3px #757575;">para tener al lado a nuestros hijos,<br>tengan la edad que tengan.</h5>
        -->    
                    </div>
                </li>
                
                </ul>                

            </div>

  <!-- ----------------------------- -->

  <section class="container-wide" style="background: white; min-height:550px;">
        <h4 class="center-align"style="color: #3a3a3a; border-bottom:4px solid #b50307; width:700px;font-weight:400;margin-top: 80px;">Productos destacados o promociones</h4>

  <div class="row" style="width:90%; padding: 50px 0 0 0;">
    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
        <div class="card-image">
          <img src="Recursos/img/Producto1.jpg" style="border: 0px solid white;">
        </div>
        <div class="card-content" style="height: 110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          <a class="waves-effect waves-light btn" href="#" style="margin-top:4px; background: #b50307; color: white;">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/Producto2.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Parante negro nacional</p>
          <a class="waves-effect waves-light btn-small " href="#" style="margin-top:20px; background: #b50307; color: white;">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/Producto3.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Módulos LED</p>
          <a class="waves-effect waves-light btn-small " href="#" style="margin-top:20px; background: #b50307; color: white;">Más info</a>
        </div>
      
      </div>
    </div>

  
  <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/Producto1.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          
          <a class="waves-effect waves-light btn-small" href="#" style="margin-top:5px; background: #b50307; color: white;">Más info</a>    
        </div>
        
      </div>
    </div>

    </div>             

  </section>
  <br><br>



 
<section class="container-wide" style="background-color:#b50307; min-height:600px; padding-top: 50px;">

<h4 class="center-align"style="color: white; border-bottom:3px solid white; width:400px;font-weight:400;">Todas las categorías</h4>

<div class="row valign-wrapper">

  <div class="col s12 m6 l6" style="padding-left: 20px;margin: 20px 0 20px 0;">
    
          <div id="cboCate" style="width: 500px; height:60px; border-radius: 15px; border: 2px solid #dfe1e5;padding-left: 15px;" >
                <input class="search-txt" type="text" name="" placeholder=" CATEGORÍA DE PRODUCTO" style="float:left; color: white; box-shadow: none; border: none; line-height:20px; width: 85%;margin-top: 5px;">
                <a class="search-btn" href="#" style="float:left; width:15%; height:56px; border-radius:0 15px 15px 0; background:#b50307; border-left: 2px solid white">
                  <i class="medium material-icons" >expand_more</i>
                </a>
          </div>   

  </div>

  <div class="col s12 m1 l1" style="">

  </div>

  <div class="col s12 m4 l4" style="">
      <div class="card" style="background-color:white; width:370px; min-height:250px;">
          <div class="card-image" >
              <img src="Recursos/img/Categoríaled.jpg"  style="border: 7px solid white;">
          </div>
        
          <div class="card-content center-align" style="background-color:white; ">
            <p style="color:#151515; font-size:12pt; font-weight:600;padding-bottom: 20px;">Leds y Tranformadores</p>
            <a class="waves-effect waves-light btn" href="categorias" style="background-color:#b50307;color:white;">Ver categoría</a>
          </div>
      </div>
  </div>

  <div class="col s12 m1 l1" style="">

  </div>


</div>

</section>


<!-- 
<section class="container-wide" style="background-color:#b50307; min-height:600px;">

<h4 class="center-align"style="color: white; padding-top:80px; border-bottom:3px solid white; width:400px;font-weight:400;">Todas las categorías</h4>

<div class="row ">

  <div class="col s12 m5 l5" style="padding-top: 10%;">
    
          <div style="position:absolute;transform:translate(10%, 0%);border-radius: 15px; border: 2px solid #dfe1e5;padding-left: 15px;" >
                <input class="search-txt" type="text" name="" placeholder=" CATEGORÍA DE PRODUCTO" style="color: black;box-shadow: none;border: none;float:left;transition:0.4s;line-height:20px; width:480px;margin-top: 5px;">
                <a class="search-btn" href="#" style="float:left; transform:translate(-50%, 1%) ;width:42px; height:57px; border-radius:0 15px 15px 0; background:#b50307; align-items:center;border-left: 2px solid white">
                <i class="medium material-icons">expand_more</i>
                </a>
          </div>   

  </div>


  <div class="col s12 m2 l2">

  </div>


  <div class="col s12 m5 l5" style="padding-left:20px;">
      <div class="card" style="background-color:white; width:370px; height:250px;">
          <div class="card-image" >
              <img src="Recursos/img/Categoríaled.jpg"  style="border: 7px solid white;height: auto;">
          </div>
        
          <div class="card-content center-align" style="background-color:white; ">
            <p style="color:#151515; font-size:12pt; font-weight:600;padding-bottom: 20px;">Leds y Tranformadores</p>
            <a class="waves-effect waves-light btn" href="categorias" style="background-color:#b50307;color:white;">Ver categoría</a>
          </div>
      </div>
  </div>

</div>

</section> 
-->



<br>



<section class="container-wide" style="min-height:600px;">
<!-- <h4 class="center-align"style="color: #3a3a3a; border-bottom:4px solid #b50307; width:200px;font-weight:400;">Tiendas</h4> -->

    <div class="row">

        <div class="col s12 m8 l8 center-align">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4552692188931!2d-77.03556617083987!3d-12.055828599466327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c71306b409%3A0x463252b738dd1e01!2sJir%C3%B3n+Lampa+1203%2C+Cercado+de+Lima+15001!5e0!3m2!1ses-419!2spe!4v1539297655561" height="550" frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe>
        </div>



          <div class="col s12 m4 l4 center-align">
            <div class="card" style="background-color:white; height:400px; width: 400px; margin-top: 80px;">
                <div class="card-content center-align" style="background-color:white; ">
                  <h4>Tienda Lampa</h4>
                  <br>
                  <h6>Jiron Lampa 1203, Cercado de Lima</h6>
                  <h6>Llámanos al:</h6>
                  <h6>Ó escríbenos y el asesor de esta tienda te atenderá de inmediato.</h6>
                  <br><br>
                  <a class="btn waves-effect waves-light" href="" style="background-color:#b50307;color:white; ">Enviar mensaje</a>
                </div>
            </div>
          </div>





    </div>
</section>



 <!--   Pie de página -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>



</body>
</html>