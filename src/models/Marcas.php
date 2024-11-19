<?php
require_once '../src/db/Database.php';

class Marcas {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Obtiene todas las marcas
    public function getAll() {
        $consulta = $this->db->connect()->query("SELECT * FROM marcas");
        return $consulta->fetchAll();
    }

    // Obtiene una marca por su ID
    public function getById($id) {
        $consulta = $this->db->connect()->prepare("SELECT * FROM marcas WHERE id_marca = ?");
        $consulta->execute([$id]);
        return $consulta->fetch();
    }

    // Crea una nueva marca
    public function create($data) {
        $consulta = $this->db->connect()->prepare("INSERT INTO marcas (nombre_marca) VALUES (?)");
        $consulta->execute([$data['nombre_marca']]);
        return $this->db->connect()->lastInsertId();
    }

    // Actualiza una marca por su ID
    public function update($id, $data) {
        $consulta = $this->db->connect()->prepare("UPDATE marcas SET nombre_marca = ? WHERE id_marca = ?");
        $consulta->execute([$data['nombre_marca'], $id]);
        return $consulta->rowCount();
    }

    // Elimina una marca por su ID
    public function delete($id) {
        $consulta = $this->db->connect()->prepare("DELETE FROM marcas WHERE id_marca = ?");
        $consulta->execute([$id]);
        return $consulta->rowCount();
    }
}
?>
