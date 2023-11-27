<?php

namespace App;

class Blog extends ActiveRecord{
    protected static $tabla = 'blog';
    protected static $columnasDB = ['id', 'titulo', 'imagen', 'url', 'descripcion', 'creado', 'autor'];

    public $id;
    public $titulo;
    public $imagen;
    public $url;
    public $descripcion;
    public $creado;
    public $autor;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->creado= date('Y/m/d');
        $this->autor = $args['autor'] ?? '';
    }
}