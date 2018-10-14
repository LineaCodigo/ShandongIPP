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
<body style="background-color:#eeeeee;">
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

  <section class="container-wide" style="padding-top: 3rem;">
        <h4 class="center-align"style="color: #7a7a7a;">Productos destacados o promociones</h4>
        <br><br>
        

  <div class="row" style="width:90%;">
    <div class="col s12 m3 l3">
      <div class="card" style="background-color:white;">
        <div class="card-image">
          <img src="Recursos/img/Producto1.jpg">
        </div>
        <div class="card-content" style="background-color:white; height:110px;">
          <p style="color:#151515; font-size:10pt; margin-top:-14px;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card" style="background-color:white;">
      <div class="card-image">
          <img src="Recursos/img/Producto2.jpg">
        </div>
        <div class="card-content" style="background-color:white; height:110px;">
          <p style="color:#151515; font-size:10pt; margin-top:-14px;">Parante negro nacional</p>
          <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:20px; background-color:#b50307;color:white; ">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card" style="background-color:white;">
      <div class="card-image">
          <img src="Recursos/img/Producto3.jpg">
        </div>
        <div class="card-content" style="background-color:white; height:110px;">
          <p style="color:#151515; font-size:10pt; margin-top:-14px;">Módulos LED</p>
          <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:20px; background-color:#b50307;color:white; ">Más info</a>
        </div>
      
      </div>
    </div>

  
  <div class="col s12 m3 l3">
      <div class="card" style="background-color:white;">
      <div class="card-image">
          <img src="Recursos/img/Producto1.jpg">
        </div>
        <div class="card-content" style="background-color:white; height:110px;">
          <p style="color:#151515; font-size:10pt; margin-top:-14px;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          
          <a class="waves-effect waves-light btn-small" href="#" style="margin-left:150px; margin-top:5px; background-color:#b50307;color:white; ">Más info</a>    
        </div>
        
      </div>
    </div>

    </div>             

  </section>
  <br><br>

 <!--   Carrusel con bxslider para categorias -->

<section class="container" >
<h4 class="center-align"style="color: #7a7a7a;">Todas las categorías</h4>

    <div class="sliderx " >
        


            <div class="row " style="padding: 25px;box-shadow: 0 2px 4px rgba(0,0,0,0.3)">

                <div class="col s12 m4 l4">
                    <div class="card blue-grey darken-1">
                        <div class="card-image">
                            <img src="Recursos/img/Producto4.jpg">
                        </div>
                        <div class="card-content">
                            <p>Texto referencial.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card blue-grey darken-1">
                        <div class="card-image">
                            <img src="Recursos/img/Producto4.jpg">
                        </div>
                        <div class="card-content">
                            <p>Texto referencial.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card blue-grey darken-1">
                        <div class="card-image">
                            <img src="Recursos/img/Producto4.jpg">
                        </div>
                        <div class="card-content">
                            <p>Texto referencial.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
          
            </div>
        
        <div>
    </div>
</div>


    
</div>
</section>

<br>


<section class="container-wide" style="padding-top:5px;">
<h4 class="center-align"style="color: #7a7a7a;">Tiendas</h4>
<br>
    <div class="row" style="width:90%;">

        <div class="col s12 m6 l6">
            <div class="card">
                <div class="card-content">
                    <div class="embed-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4552692188931!2d-77.03556617083987!3d-12.055828599466327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c71306b409%3A0x463252b738dd1e01!2sJir%C3%B3n+Lampa+1203%2C+Cercado+de+Lima+15001!5e0!3m2!1ses-419!2spe!4v1539297655561" width="530" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6 center-align" >
        <br>
            <h4>Tienda Lampa</h4>
            <br>
            <h6>Jiron Lampa 1203, Cercado de Lima</h6>
            <h6>Llámanos al:</h6>
            <h6>Ó escríbenos y el asesor de esta tienda te atenderá de inmediato.</h6>
            <br><br>
            <a class="btn waves-effect waves-light" href="" style="background-color:#b50307;color:white; ">Enviar mensaje</a>
        </div>


    </div>
</section>



 <!--   Pie de página -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>



</body>
</html>