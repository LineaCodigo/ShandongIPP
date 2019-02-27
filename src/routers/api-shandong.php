<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;    
//require '../../Slim/vendor/autoload.php';
//$app =new Slim\App;  
//
 

$app->get('/api/encuesta/{id}', function (Request $request, Response $response) {
    $name = $request->getAttribute('id');    
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/api-shandong/producto/categoria/{nombre}', function (Request $request, Response $response) {
    
        $name = $request->getAttribute('nombre');    

        if($name=='*'){
            $name = '';
        }


        $sql="SELECT * FROM productos, categorias 
        where productos.idCategorias = categorias.idCategorias and categorias.NomCategoria like '%$name%'";
 
        try{
            
             // Get DB Object
             $db = new db();
             // Connect
             $db = $db->connect();
             $stmt = $db->query($sql);
             $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
             $db = null;
             
             if(count($clientes)>0){
                 echo json_encode($clientes); 
             }else{
                 echo json_encode("Objeto vacio"); 
             }
            
            
        } catch(PDOException $e){
             echo '{"error" : {"text": '.$e->getMessage().'}}';
        }
        
});


$app->get('/api-shandong/producto/categoria/id/{id}', function (Request $request, Response $response) {
    
    $id = $request->getAttribute('id');    

    $sql="SELECT * FROM productos where productos.idCategorias = '$id'";

    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($clientes)>0){
             echo json_encode($clientes); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
        
        
    } catch(PDOException $e){
         echo '{"error" : {"text": '.$e->getMessage().'}}';
    }
    
});


$app->get('/api-shandong/categoria/all', function (Request $request, Response $response) {
    

    $sql="SELECT * FROM categorias";

    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
        
        
    } catch(PDOException $e){
         echo '{"error" : {"text": '.$e->getMessage().'}}';
    }
    
});


$app->get('/api-shandong/producto/{url}', function (Request $request, Response $response) {
    
    $url = $request->getAttribute('url');    

    $sql="SELECT * FROM productos where productos.nomurl = '$url'";

    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
        
        
    } catch(PDOException $e){
         echo '{"error" : {"text": '.$e->getMessage().'}}';
    }

    
});