<?php
require_once '../src/models/Ventas.php';

class VentasController {
    // Obtiene todas las ventas
    public function ObtenerTodos() {
        $modeloVentas = new Ventas();
        echo json_encode(["Resultado" => $modeloVentas->getAll()]);
    }

    // Obtiene una venta específica por ID
    public function ObtenerPorId($id) {
        $modeloVentas = new Ventas();
        echo json_encode(["Resultado" => $modeloVentas->getById($id)]);
    }

    // Crea una nueva venta
    public function crear() {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloVentas = new Ventas();
        echo json_encode(["Resultado" => $modeloVentas->create($data)]);
    }

    // Actualiza una venta existente
    public function actualizar($id) {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloVentas = new Ventas();
        echo json_encode(["Resultado" => $modeloVentas->update($id, $data)]);
    }

    // Elimina una venta por su ID
    public function eliminar($id) {
        $modeloVentas = new Ventas();
        echo json_encode(["Resultado" => $modeloVentas->delete($id)]);
    }
}

?>
