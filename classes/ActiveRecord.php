<?php

namespace App;

class ActiveRecord{
    //Base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';
    //Errores
    protected static $errores = [];


    // Definir la conexión a la base de datos
    public static function setDB($database){
        self::$db = $database;
    }

    // Identificar y unir los atributos de la BD
    public function atributos(){
        $atributos = [];
        foreach(static::$columnasDB as $columna){
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }


    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    // Validación
    public static function getErrores(){
        return static::$errores;
    }

    public function validar(){
        static::$errores = [];
        return static::$errores;
    }

    // Lista todos los blogs
    public static function all(){
      
        $query = " SELECT * FROM " .   static::$tabla . " ORDER BY creado DESC ";
        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    public static function off(){
        $query = "SELECT * FROM " . static::$tabla . " LIMIT 3, 18446744073709551615;";
        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    // Lista todos los blogs
    public static function hidd($number){

        $query = " SELECT * FROM " .   static::$tabla . " ORDER BY creado DESC LIMIT {$number} ";
        $resultado = self::consultarSQL($query);

        return $resultado;
    }


    // Buscar registro por su Id
    public static function find($id){
        
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = {$id}";
        $resultado = self::consultarSQL($query);

        return array_shift($resultado);
    }

    public static function consultarSQL($query){
        // Consultar la base de datos
        $resultado = self::$db->query($query);

        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjeto($registro);
        }

        // Liberar la memoria
        $resultado->free();

        // Retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro) {
        $objeto = new static;
        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    // Sincroniza el objeto en memoria con los cambios realizados por el usuario
    public function sincronizar( $args = []){
        foreach($args as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

}