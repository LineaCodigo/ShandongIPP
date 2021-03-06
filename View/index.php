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

            <!-- <div class="slider" style="margin-top: 35px;">
                <ul class="slides">
                <li>
                    <img class="responsive-img" id="img1" src="Recursos/img/slider_2.jpg"> 
                   
                    <div class="caption left-align">

                </div>
                </li>
                <li>
                    <img class="responsive-img" id="img2" src="Recursos/img/slider_1.jpg">
                    <div id="txtport2" class="caption right-align" style="margin-left: 50px;">

                    </div>
                </li>
                
                </ul>                

            </div> -->



            <div class="slider" style="margin-top: 35px;">
                <ul class="slides">
                
                    <?php
    
          //-----------------------------------------------
    
            $conta = 0;
            $ruta = "./upload/img/banner";                   
            $directorio = opendir($ruta); //ruta actual 
            
            while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
            {                        

                if (is_dir($archivo))//verificamos si es o no un directorio
                {
                    //$resultado = "[". $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
                }
                else
                {   
                    $conta = $conta + 1;  
                    //echo $archivo; 
                    // echo "<div><a href='$ruta/$archivo' data-lightbox='example-image-link'><img class='example-1' src='". $ruta . "/" . "$archivo' width='1000' alt='image-1'></a></div>";                                         
                    echo "<li><img class='responsive-img' id='img1' src='$ruta/$archivo'></li>";
                }
            }
              //---------------------------------------------

              ?>   




                </ul>                
            </div>




 

    

  <!-- ----------------------------- -->

  <section class="container-wide">        
  <h4 class="left-align"style="color: #3a3a3a; border-bottom:3px solid #b50307; max-width:700px;font-weight:400;margin-top: 80px;margin-bottom: 50px;margin-left: 20px;">Productos destacados y promociones</h4>	

  
  <div class="row" style="width:90%; padding: 30px 0 60px 0; margin-bottom: 0px;">

   <div class="col s12 m12 l12">	
	  
   </div>
	
    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
        <div class="card-image">
          <img src="Recursos/img/1_1.jpg" style="border: 0px solid white;">
        </div>
        <div class="card-content" style="height: 110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          <a class="waves-effect waves-light btn-small" href="./producto/counter-premium" style="margin-top:4px; background: #b50307; color: white;">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/2_1.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Parante negro nacional</p>
          <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequena" style="margin-top:20px; background: #b50307; color: white;">Más info</a>
        </div>
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/ruletapeque2.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Módulos LED</p>
          <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequeña" style="margin-top:20px; background: #b50307; color: white;">Más info</a>
        </div>
      
      </div>
    </div>

  
  <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="Recursos/img/Ruletagrande_1.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:110px;">
          <p style="color: #151515; font-size:10pt; margin-top:-14px;font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>
          
          <a class="waves-effect waves-light btn-small" href="./producto/Ruleta-grande" style="margin-top:5px; background: #b50307; color: white;">Más info</a>    
        </div>
        
      </div>
    </div>

    </div>             

  </section>


<section class="container-wide" style="min-height:560px;background-image: url('Recursos/img/sec3.jpg'); background-size:cover;">

	  
    <h4 class="left-align"style="color: white; border-bottom:3px solid white; max-width:700px;font-weight:400; padding-top: 50px;margin-bottom: 90px; margin-left: 20px;">Aprende con nosotros</h4>

  <div class="row" style="width:90%;">

      <div class="col s12 m4 l4" style="margin-bottom: 10px;">
          <div class="video-container">
          <iframe width="650" height="365" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>

      <div class="col s12 m4 l4" style="margin-bottom: 10px;">
          <div class="video-container">
          <iframe width="650" height="365" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>

      </div>
  
      <div class="col s12 m4 l4" style="margin-bottom: 10px;">
          <div class="video-container">
          <iframe width="650" height="365" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>

  </div>

</section>

<br>

<section class="container-wide" style="min-height:600px;">
<!-- <h4 class="center-align"style="color: #3a3a3a; border-bottom:4px solid #b50307; width:200px;font-weight:400;">Tiendas</h4> -->

    <div class="row">

        <div class="col s12 m8 l8 center-align">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4552692188931!2d-77.03556617083987!3d-12.055828599466327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c71306b409%3A0x463252b738dd1e01!2sJir%C3%B3n+Lampa+1203%2C+Cercado+de+Lima+15001!5e0!3m2!1ses-419!2spe!4v1539297655561" height="550" frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe>
        </div>



          <div class="col s12 m4 l4 center-align">
            <div class="card" style="background-color:white; margin-top: 80px; margin-left: 20px; margin-right: 20px;">
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