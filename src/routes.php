<?php

require_once "../src/controllers/PrendasController.php";

//http://localhost/ProyectoPlataformasAbiertas/public/index.php/saludo

$method = $_SERVER["REQUEST_METHOD"];


//$path = trim($_SERVER["PATH_INFO"], '/');
$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], '/') : '';


$segmentos = explode("/", $path);


$queryString = $_SERVER['QUERY_STRING'];


parse_str($queryString, $queryParams);




if($path == "prendas")
{
    $prendasController = new prendasController();
    switch($method) {
        
        case  'GET':
            //http://localhost/ProyectoPlataformasAbiertas/public/index.php/libros?id=1
            //http://localhost/ProyectoPlataformasAbiertas/public/index.php/libros
            // Extraemos los parámetros de la consulta
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
        

           if($id != null)
           {
              $prendasController->ObtenerPorId($id);
           }
           else
           {
            $prendasController->ObtenerTodos();
           }
            break;
        
        case 'POST':

            //http://localhost/ProyectoPlataformasAbiertas/public/index.php/libros
            $prendasController->crear();

            break;

        case 'DELETE':
            //http://localhost/ProyectoPlataformasAbiertas/public/index.php/libros?id=1
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $prendasController->eliminar($id);
            break;

        case 'PUT':
            //http://localhost/ProyectoPlataformasAbiertas/public/index.php/libros?id=1
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $prendasController->actualizar($id);
            break;
        default:
            echo json_encode(["Error" => "Metodo no implementado todavia para prendas." ]);

    }

}


if($path == "saludo")
{

    switch($method) {
        case  'GET':

            if($nombre != "")
            {
              // echo "Saludo ". $nombre;
                echo json_encode(['Alert' => 'LLamando get de prueba2']);
            }
            else
            {
                echo json_encode(['Alert' => 'LLamando get de prueba3']);
            }
          
            break;

        default:
            echo "Metodo no implementado todavia para saludo.";


    }

}



if($path == "reportes")
{

    switch($method) {
        case  'GET':

         
            echo json_encode(["Resultado" =>  "top 5 marcas"]);
          
            break;

        default:
            echo json_encode(["Error" => "llamando al get de libros" ]);

    }

}


?>
