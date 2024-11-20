<?php
require_once '../src/db/Database.php';

class Ventas {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Obtiene todas las ventas
    public function getAll() {
        $consulta = $this->db->connect()->query("SELECT * FROM ventas");
        return $consulta->fetchAll();
    }

    // Obtiene una venta por su ID
    public function getById($id) {
        $consulta = $this->db->connect()->prepare("SELECT * FROM ventas WHERE id_prenda = ?");
        $consulta->execute([$id]);
        return $consulta->fetch();
    }

    // Crea una nueva venta
    public function create($data) {
        $consulta = $this->db->connect()->prepare(
            "INSERT INTO ventas (id_prenda, cantidad, fecha_venta) VALUES (?, ?, ?)"
        );
        $consulta->execute([$data['id_prenda'], $data['cantidad'], $data['fecha_venta']]);
        return $this->db->connect()->lastInsertId();
    }

    // Actualiza una venta por su ID
    public function update($id, $data) {
        $consulta = $this->db->connect()->prepare(
            "UPDATE ventas SET cantidad = ?, fecha_venta = ? WHERE id_prenda = ?"
        );
        $consulta->execute([$data['cantidad'], $data['fecha_venta'], $id]);
        return $consulta->rowCount();
    }

    // Elimina una venta por su ID
    public function delete($id) {
        $consulta = $this->db->connect()->prepare("DELETE FROM ventas WHERE id_prenda = ?");
        $consulta->execute([$id]);
        return $consulta->rowCount();
    }
}
?>
