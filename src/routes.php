<?php 

require_once "../src/controllers/PrendasController.php";
require_once "../src/controllers/MarcasController.php";
require_once "../src/controllers/VentasController.php";

$method = $_SERVER["REQUEST_METHOD"];
$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], '/') : '';
$segmentos = explode("/", $path);
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $queryParams);

// Rutas para "prendas"
if ($path == "prendas") {
    $prendasController = new PrendasController();

    switch ($method) {
        case 'GET':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;

            if ($id !== null) {
                $prendasController->ObtenerPorId($id);
            } else {
                $prendasController->ObtenerTodos();
            }
            break;

        case 'POST':
            $prendasController->crear();
            break;

        case 'PUT':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $prendasController->actualizar($id);
            break;

        case 'DELETE':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $prendasController->eliminar($id);
            break;

        default:
            echo json_encode(["Error" => "Método no implementado para prendas."]);
    }
}

// Rutas para "marcas"
if ($path == "marcas") {
    $marcasController = new MarcasController();

    switch ($method) {
        case 'GET':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;

            if ($id !== null) {
                $marcasController->ObtenerPorId($id);
            } else {
                $marcasController->ObtenerTodos();
            }
            break;

        case 'POST':
            $marcasController->crear();
            break;

        case 'PUT':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $marcasController->actualizar($id);
            break;

        case 'DELETE':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $marcasController->eliminar($id);
            break;

        default:
            echo json_encode(["Error" => "Método no implementado para marcas."]);
    }
}

// Rutas para "ventas"
if ($path == "ventas") {
    $ventasController = new VentasController();

    switch ($method) {
        case 'GET':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;

            if ($id !== null) {
                $ventasController->ObtenerPorId($id);
            } else {
                $ventasController->ObtenerTodos();
            }
            break;

        case 'POST':
            $ventasController->crear();
            break;

        case 'PUT':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $ventasController->actualizar($id);
            break;

        case 'DELETE':
            $id = isset($queryParams['id']) ? $queryParams['id'] : null;
            $ventasController->eliminar($id);
            break;

        default:
            echo json_encode(["Error" => "Método no implementado para ventas."]);
    }
}
if ($path == "vistas/marcasconventas") {
    if ($method == 'GET') {
        $prendasController = new PrendasController();
        $prendasController->reporteMarcasConVentas();
    } else {
        echo json_encode(["Error" => "Método no permitido para esta ruta."]);
    }
}

if ($path == "vistas/prendasvendidasystock") {
    if ($method == 'GET') {
        $prendasController = new PrendasController();
        $prendasController->reportePrendasVendidasYStock();
    } else {
        echo json_encode(["Error" => "Método no permitido para esta ruta."]);
    }
}

if ($path == "vistas/top5marcasvendidas") {
    if ($method == 'GET') {
        $prendasController = new PrendasController();
        $prendasController->reporteTop5MarcasVendidas();
    } else {
        echo json_encode(["Error" => "Método no permitido para esta ruta."]);
    }
}
?>
