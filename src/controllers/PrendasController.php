<?php
require_once '../src/models/Prendas.php';

class PrendasController {

    // Obtiene todas las prendas
    public function ObtenerTodos() {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->getAll()]);
    }

    // Obtiene una prenda específica por ID
    public function ObtenerPorId($id) {
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->getById($id)]);
    }

    // Crea una nueva prenda
    public function crear() {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->create($data)]);
    }

    // Actualiza una prenda existente
    public function actualizar($id) {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloPrendas = new Prendas();
        echo json_encode(["Resultado" => $modeloPrendas->update($id, $data)]);
    }

    // Elimina una prenda por su ID
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
