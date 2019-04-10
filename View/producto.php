<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shandong - Insumos para publicidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Recurso de la página actual-->
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL; ?>/Recursos/css/portada.css" />
      <script src="<?php echo URL; ?>/View/Scripts/main.js"></script>
      <script src="<?php echo URL; ?>/View/Scripts/producto.js"></script>
      

      <!-- -------------------------- -->

      <style>
         
      </style>

      
      <script>

        $(document).ready(function(){

          $('.sidenav').sidenav();

        })      
      
      </script>


</head>
<body>
    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 


<?php 
 include_once  './View/Plantillas/menu.php';
 ?>

<!-- Botón flotante de mensajeria  -->

<?php 
 include_once './View/Plantillas/mensajeria.php';
?>


<section class="container" style="width:90%;min-height: 350px;margin-top: 70px;margin-bottom: 15px;">

    <input type="hidden" name="url" id ="url" value="<?php echo $url; ?>">

    <div class="row">

        <div class="col s12 l1">
                

        </div>

        <div class="col s12 l5">            

            <div class="col s12 l12">            
                <img id="imgp" src="" alt="" class="responsive-img" style="border: 1px solid #afafad;"/>
                <br><br>
            </div>
            <div id="imagenes" class="col s12 l12 imgsec">            
  
            </div>
            
        </div>
        <div class="col s12 l5 detallep">

                <div class="col s12 l12"><h4>Nombre de producto</h4></div>
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
        
        

    </div>




</section>



<section class="container-wide"> 
       
  <h4 class="left-align"style="color: #3a3a3a; border-bottom:3px solid #b50307; max-width:700px;font-weight:400;margin-top: 80px;margin-bottom: 50px;margin-left: 20px;">Productos relacionados</h4>	

  
  <div class="row" style="width:90%; padding: 30px 0 60px 0; margin-bottom: 0px;">

   <div class="col s12 m12 l12">	
	  
   </div>
	
    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
        <div class="card-image">
          <img src="<?php echo URL; ?>/Recursos/img/1_1.jpg" style="border: 0px solid white;">
        </div>
        <div class="card-content" style="height: 60px;">
          <p style="color: #151515; font-size:10pt; font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>                    
        </div>
        <div class="card-action valign-wrapper">
            <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequeña" style="background: #b50307; color: white;">Más info</a>
            <span class="" style="float: right; font-size: 20px; font-weight:600; margin-top: 5px; margin-left: 15px;">S/ 125.00</span>
        </div>
      
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="<?php echo URL; ?>/Recursos/img/2_1.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height: 60px;">
          <p style="color: #151515; font-size:10pt; font-weight:600;">Parante negro nacional</p>          
        </div>
        <div class="card-action valign-wrapper">
            <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequeña" style="background: #b50307; color: white;">Más info</a>
            <span class="" style="float: right; font-size: 20px; font-weight:600; margin-top: 5px; margin-left: 15px;">S/ 110.00</span>
        </div>      
      </div>
    </div>

    <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="<?php echo URL; ?>/Recursos/img/ruletapeque2.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height:60px;">
          <p style="color: #151515; font-size:10pt; font-weight:600;">Módulos LED</p>          
        </div>
        <div class="card-action valign-wrapper">
            <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequeña" style="background: #b50307; color: white;">Más info</a>
            <span class="" style="float: right; font-size: 20px; font-weight:600; margin-top: 5px; margin-left: 15px;">S/ 80.00</span>
        </div>
      
      </div>
    </div>

  
  <div class="col s12 m3 l3">
      <div class="card hoverable" style="padding: 10px;">
      <div class="card-image">
          <img src="<?php echo URL; ?>/Recursos/img/Ruletagrande_1.jpg" style="border: 3px solid white;">
        </div>
        <div class="card-content" style="height: 60px;">
          <p style="color: #151515; font-size:10pt; font-weight:600;">Planchas de PVC - Celtex - Sintra - Polifán</p>                    
        </div>
        <div class="card-action valign-wrapper">
            <a class="waves-effect waves-light btn-small " href="./producto/ruleta-pequeña" style="background: #b50307; color: white;">Más info</a>
            <span class="" style="float: right; font-size: 20px; font-weight:600; margin-top: 5px; margin-left: 15px;">S/ 80.00</span>
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