<?php 

namespace Model;

class Cliente extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'clientes';
    protected static $columnasDB = ['id', 'nom_cliente'];


    public $id;
    public $nom_cliente;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nom_cliente = $args['nom_cliente'] ?? '';
    }
    public function validar() {
        if(!$this->nom_cliente) {
            self::$errores[] = "El nombre del cliente es obligatorio";
        }
        return self::$errores;
    }
}