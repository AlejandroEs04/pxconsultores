<?php 

namespace Model;

class Proyecto extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'proyecto';
    protected static $columnasDB = ['id', 'nom_proyecto'];


    public $id;
    public $nom_proyecto;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_proyecto = $args['nom_proyecto'] ?? '';
    }

    public function validar() {
        if(!$this->nom_proyecto) {
            self::$errores[] = "El nombre del proyecto es obligatorio";
        }
        return self::$errores;
    }
}