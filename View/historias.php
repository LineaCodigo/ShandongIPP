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


  <div class="container" style="min-height: 180px;margin-top: 80px;margin-bottom: 15px;">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-image">
          <img src="Recursos/img/Historia-Itala.jpg">
          <!--<span class="card-title" style="color: #e59691; font-size:42px; font-weight:bold; ">Una foto, una prueba de tu amor</span>-->
        </div>
        <div class="card-content">
        <h3 style="color: #e59691; ">Una foto, una prueba de tu amor</h3>
          <p>La fotografia siempre formó parte de mi vida. La etapa de mamá, 
          me vinculó aún más con ella. Este vínculo me dió la oportunidad de ver 
          crecer a mi hijo para guardar cada momento de amor, en una foto.</p>
        </div>
        <div class="card-action right-align">
                <a href="./una-foto-una-prueba-de-tu-amor" class="waves-effect waves-light btn" style="background-color: #b56289;">Ver historia</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="min-height: 180px;margin-top: 80px;margin-bottom: 15px;">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-image">
          <img src="recursos/img/Historia-Isabela.jpg">
          <!--<span class="card-title" style="color: #e59691; font-size:42px; font-weight:bold; ">Una foto, una prueba de tu amor</span>-->
        </div>
        <div class="card-content">
        <h3 style="color: #e59691; ">Isabela</h3>
          <p>La fotografia siempre formó parte de mi vida. La etapa de mamá, 
          me vinculó aún más con ella. Este vínculo me dió la oportunidad de ver 
          crecer a mi hijo para guardar cada momento de amor, en una foto.</p>
        </div>
        <div class="card-action right-align">
                <a href="./isabela" class="waves-effect waves-light btn" style="background-color: #b56289;">Ver historia</a>
        </div>
      </div>
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