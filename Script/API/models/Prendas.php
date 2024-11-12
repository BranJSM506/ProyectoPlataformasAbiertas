<?php
require_once '../src/db/Database.php';

class Prendas {

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Método para obtener todas las prendas
    public function getAll() {
        $consulta = $this->db->connect()->query("SELECT * FROM prendas"); ///////

        /////////////////// sql con el join y el concat
        ///////////////////
        ///////////////////
        ///////////////////
        ///////////////////
        ///////////////////
        ///////////////////
///////////////////
        ///////////////////
        return $consulta->fetchAll();
    }

    // Método para obtener una prenda por su ID
    public function getById($id) {
        $consulta = $this->db->connect()->prepare("SELECT * FROM prendas WHERE id_prenda = ?");
        $consulta->execute([$id]);
        return $consulta->fetch();
    }

    // Método para crear una nueva prenda
    public function create($data) {
        $consulta = $this->db->connect()->prepare(
            "INSERT INTO prendas (nombre_prenda, id_marca, precio, stock) VALUES (?, ?, ?, ?)"
        );
        $consulta->execute([$data['nombre_prenda'], $data['id_marca'], $data['precio'], $data['stock']]);
        return $this->db->connect()->lastInsertId();
    }

    // Método para actualizar una prenda por su ID
    public function update($id, $data) {
        $consulta = $this->db->connect()->prepare(
            "UPDATE prendas SET nombre_prenda = ?, id_marca = ?, precio = ?, stock = ? WHERE id_prenda = ?"
        );
        $consulta->execute([$data['nombre_prenda'], $data['id_marca'], $data['precio'], $data['stock'], $id]);
        return $consulta->rowCount();
    }

// método para actualizar solo el nombre de una prenda por su ID
public function UpdateNombre($id, $data){
    // Prepara una consulta SQL para actualizar solo el título del libro.
    $consulta = $this->db->connect()->prepare(
        "UPDATE prendas SET nombre_prenda = ? WHERE id_prenda = ?"
    );
    
    // Ejecuta la consulta con el nuevo título y el ID proporcionado.
    $consulta->execute([$data['nombre_prenda'], $id]);
    
    // Devuelve el número de filas afectadas.
    return $consulta->rowCount();
}

    // Método para eliminar una prenda por su ID
    public function delete($id) {
        $consulta = $this->db->connect()->prepare("DELETE FROM prendas WHERE id_prenda = ?");
        $consulta->execute([$id]);
        return $consulta->rowCount();
    }

    // Métodos para los reportes usando vistas

    // Obtener reporte de marcas con ventas
    public function reporteMarcasConVentas() {
        $consulta = $this->db->connect()->query("SELECT * FROM marcasconventas");
        return $consulta->fetchAll();
    }

    // Obtener reporte de prendas vendidas y stock
    public function reportePrendasVendidasYStock() {
        $consulta = $this->db->connect()->query("SELECT * FROM prendasvendidasystock");
        return $consulta->fetchAll();
    }

    // Obtener reporte de las 5 marcas más vendidas
    public function reporteTop5MarcasVendidas() {
        $consulta = $this->db->connect()->query("SELECT * FROM top5marcasvendidas");
        return $consulta->fetchAll();
    }
}
?>
