<?php 

namespace Model;

class Codigo extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'codigo';
    protected static $columnasDB = ['id', 'cliente', 'producto', 'proyecto', 'nombre', 'fecha'];


    public $id;
    public $cliente;
    public $producto;
    public $proyecto;
    public $nombre;
    public $fecha;
    public $calibre;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->cliente = $args['cliente'] ?? '';
        $this->producto = $args['producto'] ?? '';
        $this->proyecto = $args['proyecto'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->fecha = date('Y/m/d');
        $this->calibre = $args['calibre'] ?? '';
    }

    public function validar() {
        if (!$this->cliente) {
            self::$errores[] = "Debes anadir un cliente";
        }
        if (!$this->producto) {
            self::$errores[] = "Debes anadir un producto";
        }
        if (!$this->proyecto) {
            self::$errores[] = "Debes anadir un proyecto";
        }
        if (!$this->nombre) {
            self::$errores[] = "Debes anadir un nombre";
        }
        return self::$errores;  
    }
}