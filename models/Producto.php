<?php 

namespace Model;

class Producto extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'nom_producto'];


    public $id;
    public $nom_producto;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_producto = $args['nom_producto'] ?? '';
    }

    public function validar() {
        if(!$this->nom_producto) {
            self::$errores[] = "El nombre del producto es obligatorio";
        }
        return self::$errores;
    }
}