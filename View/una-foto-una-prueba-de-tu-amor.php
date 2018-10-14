<!DOCTYPE html>
<html>
<head>
    
    <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Estilos CSS / Recursos de la página actual -->

    <script src="View/Scripts/embarazo.js"></script> 
    <script src="Recursos/js/jquery.bxslider.min.js"></script> 
          
    <script></script>

    <style>

        /* ul:not(.nomclase)>li  */
        #precios ul>li {
         list-style-type: disc !important;
         color: #424242;
         margin-left: 25px;
        }       
    </style>

</head>
<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

    <!-- preloader  -->
    <?php 
    include_once './View/Plantillas/preload.php';
    ?>
    <!-- --> 

    <?php 
    include_once './View/Plantillas/menu.php';
    ?>

    <!-- Botón flotante de mensajeria  -->
    <?php 
    include_once './View/Plantillas/mensajeria.php';
    ?>

    <!-- Inicio de contenido de página -->
       
    <section class="container" style="min-height: 350px;margin-top: 70px;margin-bottom: 15px;">

          <div class="row">
                <div class="col m12 s12" style="">
                    <h3 style="color: #e59691;">Una foto, una prueba de tu amor</h3>
                    <p>
                    ¿Cuánto quisieras que dure ese momento mágico de ver el rostro de ese hermoso ser a 
                    quien le has dado VIDA? ¡Para SIEMPRE! Nuestras sesiones Newborn se realizan dentro 
                    de sus 15 primeros días de nacimiento y tienen como objetivo mantener en el tiempo 
                    ese pequeño segundo tan preciado para tus recuerdos. Es muy importante que puedas 
                    comunicarte conmigo antes de dar a luz para poder planificar esta sesión tan especial. 
                    </p>
                    
                </div>          
          </div>

          <div class="row">
                <div class="col m12 s12" style="">                    
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3BeGmFVlikM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>                    
                </div>

          </div>

          
    </section>          

    <section class="container" style="min-height: 180px;margin-top: 70px;margin-bottom: 15px;">
          <div class="row">
                <div class="col m12 s12" style="">
                    <p>
                    ¿Cuánto quisieras que dure ese momento mágico de ver el rostro de ese hermoso ser a 
                    quien le has dado VIDA? ¡Para SIEMPRE! Nuestras sesiones Newborn se realizan dentro 
                    de sus 15 primeros días de nacimiento y tienen como objetivo mantener en el tiempo 
                    ese pequeño segundo tan preciado para tus recuerdos. Es muy importante que puedas 
                    comunicarte conmigo antes de dar a luz para poder planificar esta sesión tan especial. 
                    </p>
                    
                </div>          
          </div>

    
    </section>

    </section> 


    <section class="container" style="">
        <div class="row right-align">
        <p><a href="./historias" class="waves-effect waves-light btn" style="background-color: #b56289;">Volver a historias</a></p>    
        </div>
        
    
    </section> 
    

    


    <!-- Fin de contenido de página -->

    <?php 
    include_once './View/Plantillas/pie.php';
    ?>

</body>
</html>