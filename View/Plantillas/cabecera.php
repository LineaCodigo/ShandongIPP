

<!--****************************************************-->

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Shandong Insumos Publicitarios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="<?php echo URL; ?>/Recursos/js/jquery.min.js"></script>

<!--Import Google Icon Font-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/Recursos/css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL; ?>/Recursos/css/main.css" />
<script src="<?php echo URL; ?>/Recursos/js/main.js"></script> 
      
<!--Recursos / plugins-->

<link rel="stylesheet" href="<?php echo URL; ?>/Recursos/css/jquery.bxslider.css">
<script src="<?php echo URL; ?>/Recursos/js/jquery.bxslider.min.js"></script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>




<script>

/* Script de botón flotante mensajeria en paginas */

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
    direction: 'top'
    });
});

/* ********************************************* */

          /* Script scroll click */ 
          
          $(document).ready(function(){

                    if($(window).width()>1100){
                        medida = 90;    
                    }else if($(window).width()<768){
                        medida = 50;    
                    }

                    //alert($(window).width());                   
              
                    $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $(this).attr('href') ).offset().top - medida
                        }, 1500);
                    return false;
                    });   
                                        

          });
           
          /* Evento al terminar de cargar la página*/   
          
          $(window).on("load", function (e) {
            $('#page-preloader').fadeOut(500);                
          })

          

</script>







