<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Itala Migone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <script src="Recursos/js/jquery.min.js"></script>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Recursos/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/main.css" />
      <script src="Recursos/js/main.js"></script>

      <script>
           $(document).ready(function(){

              $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true,                    
              });
            
           });
        
      </script>

      <style>

         #pr1 {
        font-size: 2em;
        transition: all .3s ease-out;
        }

        #pr1:hover {
            width: 103%; 
            transform: translate(-5px, 0px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.7);           
            z-index: 100;
        }

        #pr2 {
        font-size: 2em;
        transition: all .3s ease-out;
        }

        #pr2:hover {
            width: 103%; 
            transform: translate(-5px, 0px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.7);
            z-index: 100;
        }

        #pr3 {
        font-size: 2em;
        transition: all .3s ease-out;
        }

        #pr3:hover {
            width: 103%; 
            transform: translate(-5px, 0px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.7);
            z-index: 100;
        }        

         
      </style>


</head>
<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<div class="navbar-fixed">
    <nav class="white">
        <div class="navbar-fixed">
        <a href="#" class="brand-logo center" style="padding-top: 20px;"><img src="Recursos/img/ItalaMigone-LogoV2.png" alt="" class="responsive-img" width="40%"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="badges.html">Historias</a></li>
            <li><a href="collapsible.html">Contacto</a></li>
        </ul>

        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="badges.html">Servicios</a></li>
            <li><a href="collapsible.html">Portafolio</a></li>
        </ul>

        </div>
    </nav>
</div>

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img src="Recursos/img/portadav3.jpg"></a>
    <a class="carousel-item" href="#"><img src="Recursos/img/portadav3.jpg"></a>
  </div>

  <div class="container">
        
        <div class="row valign-wrapper" style="padding-top: 5rem;">

            <div class="col s12 m3">
                <img src="Recursos/img/ItalaFoto.jpg" alt="" class="circle responsive-img">
            </div>

            <div class="col s12 m9">
                <h4>ITALA MIGONE</h4>
                <h6>Fotógrafa</h6>
                <h5>Awesome app! So glad I wondered across your site today. Great user onboarding experience. AARON MYHRE, DIGITAL NOMAD</h5>
                <button id="btn_sobremi" class="waves-light btn-small red ">Conóceme</button>
            </div>

        </div>          
  </div>

  <div class="container-wide" style="">

        <div class="row" style="padding-top: 15rem;">
           <div class="col s12 m4 red center-align" style="height:480px;padding: 0px;">                
                <img id="pr1" class="" style="position: relative;height: auto;" src="Recursos/img/PortadaEM.jpg" width="100%">
           </div>
           <div class="col s12 m4 blue center-align" style="height:480px;padding: 0px;">
            <img id="pr2" class="" style="position: relative;" src="Recursos/img/PortadaNW.jpg" width="100%">
           </div>
           <div class="col s12 m4 green center-align" style="height:480px;padding: 0px;">
                <!--<button id="btn_categorias" style="border:1px solid white; background-color:transparent;">Smash Cake</button> -->
                <img id="pr3" class="" style="position: relative;" src="Recursos/img/PortadaSC.jpg" width="100%">
           </div>
        </div>
    
  
  </div>

  
  <div class="container">

        <div class="row valign-wrapper" style="padding-top: 5rem;">
            
             <div class="video-container">
                <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col s12 m9">
                <h4>Historias</h4>                
                <h5>Awesome app! So glad I wondered across your site today. Great user onboarding experience. AARON MYHRE, DIGITAL NOMAD</h5>
                <button id="btn_sobremi" class="waves-light btn-small red ">Ver más historias</button>
            </div>


        </div>

  </div>

<footer style="background-color:grey;color:white; padding:100px 0px;">
  <div class="container-wide">

        <div class="row align-center">
           <div class="col s12 m6">
            <div class="row">
                <div class="col m12">
                    <div class="footer-drop-title">Deja tu mensaje</div>
                </div>
                <form id="drop-a-line" role="form">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="input-field col m12 s12">
                            <input id="nombre" type="name">
                            <label for="nombre">Razón social / Nombre completo</label>
                        </div>
                    </div>


                    <div class="row" style="margin-bottom:20px;">
                        <div class="input-field col m12 s12">
                            <input id="email" type="mail">
                            <label for="email">Correo electrónico</label>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom:20px;">
                        <div class="input-field col m12 s12">
                            <input id="telefono" type="celphone">
                            <label for="telefono">Número de celular</label>
                        </div>
                    </div>

                    <button id="btn_datos" class="waves-light btn-small red ">Enviar mensaje</button>

                    

            </div>
           </div>

           <div class="col s12 m6">
           
           </div>
           
        
        
        
        </div>
  
  
  </div>
</footer>


</body>
</html>