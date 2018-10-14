<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Itala Migone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Estilos CSS de la página actual -->

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/portada.css" />

      <!-- ***************************************  -->

      <script>

         
          /* Script de botón flotante mensajeria en paginas */

                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.fixed-action-btn');
                    var instances = M.FloatingActionButton.init(elems, {
                    direction: 'top'
                    });
                });

            /*                                                */
 
         /* Script de carrusel slider página principal */

          $(document).ready(function(){
            
            

          });

          /* Evento al terminar de cargar la página*/   
          
          $(window).on("load", function (e) {
            $('#page-preloader').fadeOut(500);                
          })

        
      </script>


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



    <!-- Fin de contenido de página -->

    <?php 
    include_once './View/Plantillas/pie.php';
    ?>

</body>
</html>