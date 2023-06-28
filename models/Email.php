<?php

namespace Model;

class Email extends ActiveRecord {
    public $nombre;
    public $company;
    public $email;
    public $fecha; 

    public function __construct($args = []) {
        $this->nombre = $args['nombre'] ?? '';
        $this->company = $args['company'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha = date('Y/m/d');
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "Name is required";
        }
        if(!$this->company) {
            self::$errores[] = "The Company is required";
        }
        if(!$this->email) {
            self::$errores[] = "The email is required";
        }

        return self::$errores;
    }
}