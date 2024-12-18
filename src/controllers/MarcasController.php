<?php
require_once '../src/models/Marcas.php';

class MarcasController {
    // Obtiene todas las marcas
    public function ObtenerTodos() {
        $modeloMarcas = new Marcas();
        echo json_encode(["Resultado" => $modeloMarcas->getAll()]);
    }

    // Obtiene una marca específica por ID
    public function ObtenerPorId($id) {
        $modeloMarcas = new Marcas();
        echo json_encode(["Resultado" => $modeloMarcas->getById($id)]);
    }

    // Crea una nueva marca
    public function crear() {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloMarcas = new Marcas();
        echo json_encode(["Resultado" => $modeloMarcas->create($data)]);
    }

    // Actualiza una marca existente
    public function actualizar($id) {
        $data = json_decode(file_get_contents("php://input"), true);
        $modeloMarcas = new Marcas();
        echo json_encode(["Resultado" => $modeloMarcas->update($id, $data)]);
    }

    // Elimina una marca por su ID
    public function eliminar($id) {
        $modeloMarcas = new Marcas();
        echo json_encode(["Resultado" => $modeloMarcas->delete($id)]);
    }
}

?>

