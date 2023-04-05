<?php 

namespace Model;

class Producto extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'productos';
    protected static $columnaDB = ['id', 'nom_producto'];


    public $id;
    public $nom_producto;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_producto = $args['nom_producto'] ?? '';
    }
}