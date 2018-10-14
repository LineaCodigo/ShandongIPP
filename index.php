<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './Slim/vendor/autoload.php';
require './src/config/db.php';
require './Libs/PHPMailer/PHPMailerAutoload.php';

$app = new \Slim\App();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'Access-Control-Allow-Headers', 'Origin, Accept, Accept-  Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version, X-Response-Time, X-PINGOTHER, X-CSRF-Token,Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});


$app->get('/',  function(Request $request, Response $response) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];    
    include_once 'View/index.php';    
});

//-------------- Vista de paginas ------------------//

$app->get('/sesiones',  function(){  
   include_once 'View/sesiones.php';
});

$app->get('/embarazo',  function(){  
    include_once 'View/embarazo.php';  
 });

 $app->get('/newborn',  function(){  
    include_once 'View/newborn.php';  
 });

 $app->get('/bebes',  function(){  
    include_once 'View/bebes.php';  
 });

 $app->get('/smashcake',  function(){  
    include_once 'View/smashcake.php';  
 });

 $app->get('/mi-portafolio',  function(){  
    include_once 'View/mi-portafolio.php';  
 });


 $app->get('/historias',  function(){  
    include_once 'View/historias.php';  
 });


 $app->get('/isabela',  function(){  
    include_once 'View/isabela.php';  
 });


 $app->get('/una-foto-una-prueba-de-tu-amor',  function(){  
    include_once 'View/una-foto-una-prueba-de-tu-amor.php';  
 });

 $app->get('/categorias',  function(){  
    include_once 'View/categorias.php';  
 });

 $app->get('/tiendas',  function(){  
    include_once 'View/tiendas.php';  
 });

//-------------------------------------------------//

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// -------------------Clases o Archivos de ruteo-------------------

require './src/config/ini.php';
require './src/routers/api-sigop.php';

$app->run();
 
