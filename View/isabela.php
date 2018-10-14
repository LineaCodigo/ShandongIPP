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
                    <h2 style="color: #e59691;">Isabela</h2>
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
                        <iframe width="853" height="480" src="//www.youtube.com/embed/w2uxkm7fw_8" frameborder="0" allowfullscreen></iframe>
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




    <section class="container" style="">
        <div class="row">
            <div class="sliderx">

    <?php
    
            //-----------------------------------------------
                    $conta = 0;
                    $ruta = "./Recursos/img/galeria/newborn";                   
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
                            echo "<div><a href='$ruta/$archivo' data-lightbox='example-image-link'><img class='example-1' src='". $ruta . "/" . "$archivo' width='1000' alt='image-1'></a></div>";                                         
                            
                        }
                    }
            //---------------------------------------------
    
    ?>    

        </div>
        </div>
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