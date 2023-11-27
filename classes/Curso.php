<?php

namespace App;

class Curso extends ActiveRecord{
    protected static $tabla = 'curso';
    protected static $columnasDB = ['id', 'titulo', 'video', 'descripcion', 'creado', 'autor', 'pclave'];

    public $id;
    public $titulo;
    public $video;
    public $descripcion;
    public $creado;
    public $autor;
    public $pclave;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->video = $args['video'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->creado= date('Y/m/d');
        $this->autor = $args['autor'] ?? '';
        $this->pclave = $args['pclave'] ?? '';
    }
}