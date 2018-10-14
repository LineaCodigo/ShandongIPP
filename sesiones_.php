<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Itala Migone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!--Recursos de la página actual-->

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/sesiones.css" />

      <!-- -------------------------- -->


      <script>
 
         /* Script de carrusel slider página principal */

                 $(document).ready(function(){

                    window.sr = ScrollReveal();
                    sr.reveal('.letra'); 
                    
                    /* ------------------------*/

                       $('.sidenav').sidenav();    

                    /* Script scroll click */     

                    $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $(this).attr('href') ).offset().top - 100
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
         
      </style>


</head>
<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menu.php';
 ?>
 
 <!-- Botón flotante de mensajeria  -->

<?php 
 include_once './View/Plantillas/mensajeria.php';
?>

<!-- ---------------- -->

<!-- preloader  -->
    <?php 
    include_once './View/Plantillas/preload.php';
    ?>
<!-- --> 

<!-- Contenido de página -->

<div class="container-wide">
    
    <div class="row white-text" style="margin-bottom: 2px;">
        <a href="./embarazo.php" style="color: white;">
        <div id="pr1" class="col s12 m12 grey">
            <h1 class="letra" style="margin: 50px auto 0;max-width: 1000px;text-shadow: 1px 3px 4px #424242;">Embarazo</h1>
        </div>
        </a>
          
        <a href="./newborn.php" style="color: white;">  
        <div id="pr2" class="col s12 m12 grey" style="border-top: 1px #b56289 solid;">
            <h1 class="letra" style="margin: 50px auto 0;max-width: 1000px;text-shadow: 1px 3px 4px #424242;">Newborn</h1>    
        </div>
        </a>

        <a href="./smashcake.php" style="color: white;">    
        <div id="pr3" class="col s12 m12 grey" style="border-top: 1px #b56289 solid;">
            <h1 class="letra" style="margin: 50px auto 0;max-width: 1000px;text-shadow: 1px 3px 4px #424242;">Smash cake</h1>
        </div>
        </a>

    </div>
</div>



<!-- ------------------ -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>

 <script>
 

 
 </script>

</body>
</html>