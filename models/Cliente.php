<?php 

namespace Model;

class Cliente extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'clientes';
    protected static $columnaDB = ['id', 'nom_cliente'];


    public $id;
    public $nom_cliente;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_cliente = $args['nom_cliente'] ?? '';
    }
}