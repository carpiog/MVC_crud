<?php

namespace Model;

class Producto extends ActiveRecord
{
    protected static $tabla = 'productos';
    protected static $idTabla = 'producto_id';
    protected static $columnasDB = ['producto_id', 'producto_nombre', 'producto_precio', 'producto_situacion'];

    public $producto_id;
    public $producto_nombre;
    public $producto_precio;
    public $producto_situacion;


    public function __construct($args = [])
    {
        $this->producto_id = $args['producto_id'] ?? null;
        $this->producto_nombre = $args['producto_nombre'] ?? '';
        $this->producto_precio = $args['producto_precio'] ?? 0;
        $this->producto_situacion = $args['producto_situacion'] ?? 1;
    }

    public static function obtenerProductosconQuery()
    {
        $sql = "SELECT * FROM productos where producto_situacion = 1";
        return self::fetchArray($sql);
    }
}
