<?php 

namespace Model;

class Proyecto extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'proyecto';
    protected static $columnaDB = ['id', 'nom_proyecto'];


    public $id;
    public $nom_proyecto;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_proyecto = $args['nom_proyecto'] ?? '';
    }
}