
<div class="navbar-fixed">    

    <nav class="white">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i id="imenu" class="material-icons">menu</i></a>
        <a href="<?php echo URL; ?>" class="brand-logo left" style="padding-top: 12px; padding-left:50px;width:15%;height: auto;"><img src="<?php echo URL; ?>/Recursos/img/LogoShandong.png" alt="" class="" width="120"/></a>
        
        <ul class="left hide-on-med-and-down" style="padding-left: 250px;">
        
        <li><a href="<?php echo URL; ?>/categorias">Categorías</a></li>
            
        </ul>
        
        <!-- <ul class="search-box" style="position:absolute;top:50%;left:55%;transform:translate(-50%,-50%);height:50px;border-radius:10px; padding-left:20px; border:2px; border-style: solid; color:#bfbfbf;">
        <li><input class="search-txt" type="text" name="" placeholder="Busca el producto que necesitas" style="border-bottom: none; float:left; padding:0px; transition:0.4s;line-height:20px; width:480px;">
        <a class="search-btn" href="#" style="float:right; width:49px; height:46px; border-radius:0 8px 8px 0; background:#b50307; display:flex; justify-content:center; align-items:center;">
        <i class="large material-icons">search</i>
        </a>
        </li>
        </ul> -->

        <ul class="search-box" >
            
            <li>
                <div style="position:absolute;transform:translate(20%, 30%);border-radius: 15px; border: 2px solid #dfe1e5;padding-left: 15px;" >
                <input class="search-txt" type="text" name="" placeholder=" Busca el producto que necesitas" style="color: black;box-shadow: none;border: none;float:left;transition:0.4s;line-height:20px; width:480px;margin-top: 5px;">
                <a class="search-btn" href="#" style="float:left; transform:translate(0%, 1%) ;width:52px; height:56px; border-radius:0 13px 13px 0; background:#b50307; align-items:center;">
                <i class="large material-icons">search</i>
                </a>
                </div>            
            </li>
        </ul>
      

        <ul class="right hide-on-med-and-down" style="padding-right: 50px;">
            <li><a href="tiendas">Tiendas</a></li>
            <li><a href="#contacto">Contacto</a></li>	   
        </ul>                
        
    </nav>
</div>


<!--
-->

<ul id="slide-out" class="sidenav">
  <li><a href="<?php echo URL; ?>" class="brand-logo center" style="padding-top: 10px;"><img src="<?php echo URL; ?>/Recursos/img/LogoShandong.png" alt="" class="responsive-img" width="50"/></a></li>
  <li><div class="divider"></div></li>
  <li><a class="waves-effect" href="">Categorías</a></li>
  <li><div class="divider"></div></li>
  <li class="search">
    <div class="search-wrapper">
        <input id="search" placeholder="Search">
            <i class="material-icons">search</i>
        <div class="search-results"></div>
        </div>
  </li>
  <li><a class="waves-effect"  href="./#tiendas">Tiendas</a></li>
  <li><div class="divider"></div></li>
  <li><a class="waves-effect"  href="#contacto">Contacto</a></li>
  <li><div class="divider"></div></li>
</ul>

      
