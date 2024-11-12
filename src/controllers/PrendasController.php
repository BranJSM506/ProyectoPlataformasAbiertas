<?php
require_once '../src/models/Prendas.php';

class PrendasController {

    // Obtener todas las prendas
    public function obtenerTodas() {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->getAll()]);
    }

    // Obtener una prenda específica por ID
    public function obtenerPorId($id) {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->getById($id)]);
    }

    // Crear una nueva prenda
    public function crear() {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->create($data)]);
    }

    // Actualizar una prenda existente
    public function actualizar($id) {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->update($id, $data)]);
    }

    // Eliminar una prenda por su ID
    public function eliminar($id) {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->delete($id)]);
    }

    // Métodos para generar reportes usando las vistas

    // Reporte de marcas con ventas
    public function reporteMarcasConVentas() {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->reporteMarcasConVentas()]);
    }

    // Reporte de prendas vendidas y stock
    public function reportePrendasVendidasYStock() {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->reportePrendasVendidasYStock()]);
    }

    // Reporte de las 5 marcas más vendidas
    public function reporteTop5MarcasVendidas() {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->reporteTop5MarcasVendidas()]);
    }
}
?>
