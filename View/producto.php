<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shandong - Insumos para publicidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include_once 'View/Plantillas/cabecera.php'; ?>

      <!-- Script / Recurso de la página actual-->

      <script src="<?php echo URL; ?>/View/Scripts/producto.js"></script>

      <!-- -------------------------- -->



      <style>
         
      </style>


</head>
<body>
    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 


<?php 
 include_once './View/Plantillas/menu.php';
 ?>

<!-- Botón flotante de mensajeria  -->

<?php 
 include_once './View/Plantillas/mensajeria.php';
?>


<section class="container" style="width:90%;min-height: 350px;margin-top: 70px;margin-bottom: 15px;">

    <input type="hidden" name="url" id ="url" value="<?php echo $url; ?>">

    <div class="row">
        <div class="col s12 l5">            

            <div class="col s12 l12">            
                <img id="imgp" src="" alt="" class="responsive-img"/>
                <br><br>
            </div>
            <div class="col s12 l12 imgsec">            
  
            </div>
            
        </div>
        <div class="col s12 l5 detallep">

                <div class="col s12 l12"><h4>nombre pro</h4></div>
                <div class="col s12 l12"><h6><b>Descripción :</b></h6></div>
                <div class="col s12 l12">
                    <p> - 250 watts de potencia

                    - Deshidrata: Frutas/ Verduras/ Carnes/ Flores/ Plantas medicinales

                    - Funciona a base de aire caliente

                    </p>
                </div>
                <div class="col s12 l12">

                    <div class="col s12 l3"><span><b>Precio :</b></span></div>    
                    <div class="col s12 l3 left-align"><span>S/ 150.00</span></div>    
                    <div class="col s12 l2"><span><b>Desc :</b></span></div>    
                    <div class="col s12 l3"><span>0</span></div>    
                                                                        
                </div>
                <div class="col s12 l12" style="padding-top: 15px;">
                    <a href="#" class="waves-effect waves-light btn" style="background-color: #b50307;width: 80%;">Hacer pedido</a>
                </div>
        
                
        </div>
        <div class="col s12 l2">
                4

        </div>

    </div>




</section>


<!--   Pie de página -->

<?php 
include_once './View/Plantillas/pie.php';
?>



</body>
</html>